<?php

namespace App\Services;

use App\Models\Automation;
use App\Models\Template;
use App\Models\ZaloOa;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class TemplateService
{
    public function template()
    {
        $zaloOa = ZaloOa::first() ?? [];
        if ($zaloOa) {
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'access_token' => $zaloOa->access_token
            ])->get('https://business.openapi.zalo.me/template/all', [
                'offset' => 0,
                'limit' => 100,
            ]);
            if ($response->json()['error'] != 0) {
                Template::query()->delete();
                return response()->json(['success' => false, 'message' => 'Request failed'], 500);
            }
            // dd($response->json());
            if ($response->json()) {
                if (isset($response->json()['metadata'])) {
                    if ($response->json()['metadata']['total'] > 0) {
                        $data = $response->json()['data'];
                        $templateIdsInData = collect($data)->pluck('templateId')->toArray();

                        Template::whereNotIn('templateId', $templateIdsInData)->delete();

                        foreach ($data as $item) {
                            $timestampMilliseconds = $item['createdTime'];
                            $timestampSeconds = intval($timestampMilliseconds / 1000);
                            $dateTime = Carbon::createFromTimestamp($timestampSeconds);
                            $template = Template::where('templateId', $item['templateId'])->first();

                            if (!$template) {
                                $detail = $this->detailTemplate($item['templateId']);
                                Template::create([
                                    'templateId' => $item['templateId'],
                                    'templateName' => $item['templateName'],
                                    'status' => $item['status'],
                                    'createdTime' => $dateTime->toDateTimeString(),
                                    'price' => $detail['price'],
                                    'previewUrl' => $detail['previewUrl']
                                ]);
                            }
                            // if ($template) {
                            //     $detail = $this->detailTemplate($item['templateId']);
                            //     $template->update([
                            //         'templateName' => $item['templateName'],
                            //         'status' => $item['status'],
                            //         'createdTime' => $dateTime->toDateTimeString(),
                            //         'price' => $detail['price'],
                            //         'previewUrl' => $detail['previewUrl']
                            //     ]);
                            // } else {
                            //     $detail = $this->detailTemplate($item['templateId']);
                            //     Template::create([
                            //         'templateId' => $item['templateId'],
                            //         'templateName' => $item['templateName'],
                            //         'status' => $item['status'],
                            //         'createdTime' => $dateTime->toDateTimeString(),
                            //         'price' => $detail['price'],
                            //         'previewUrl' => $detail['previewUrl']
                            //     ]);
                            // }
                        }
                    }
                }
            }
        }
    }

    public function zns($data)
    {
        $zaloOa = ZaloOa::first() ?? [];
        $automation = Automation::with('template')->first() ?? [];
        if ($zaloOa && $automation) {
            $template = $automation->template->templateId;
            $template_data = $this->templateData($data['name'], $data['phone'], $data['province'], $data['hotel_homestay'],  $data['username']);
            Log::info($template_data);
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'access_token' => $zaloOa->access_token
            ])->post('https://business.openapi.zalo.me/message/template', [
                'phone' => preg_replace('/^0/', '84', $data['phone']),
                'template_id' => $template,
                'template_data' => $template_data
            ]);

            if ($response->json()['error'] != 0) {

                return response()->json(['success' => false, 'message' => 'Request failed'], 500);
            }

            return $response->json();
        }
    }

    public function templateData($customer_name, $phone_number, $address, $hotel, $username)
    {
        $template_data = [
            'name' => $customer_name,
            'date' => Carbon::now()->format('d/m/Y') ?? "",
            'phone_number' => $phone_number,
            'status' => 'Đăng ký thành công',
            'price' => number_format(10000),
            'address' => $address,
            'product_name' => $hotel,
            'payment' => 'Chuyển khoản ngân hàng',
            'phone' => $phone_number,
            'payment_status' => 'Chuyển khoản thành công',
            'customer_name' => $customer_name ?? '',
            'time' => Carbon::now()->format('h:i:s d/m/Y') ?? "",
            'order_date' => Carbon::now()->format('d/m/Y') ?? "",
            'order_code' => $username
        ];

        Log::info($template_data);
        return $template_data;
    }

    public function detailTemplate($templateId)
    {

        $zaloOa = ZaloOa::first() ?? [];
        if ($zaloOa) {
            $response = Http::withHeaders([
                'access_token' => $zaloOa->access_token,
                'Content-Type' => 'application/json',
            ])->get('https://business.openapi.zalo.me/template/info/v2', [
                'template_id' => $templateId,
            ]);


            if ($response->json()['error'] != 0) {
                return response()->json(['success' => false, 'message' => 'Request failed'], 500);
            }
            return  $response->json()['data'];
        }
    }
}
