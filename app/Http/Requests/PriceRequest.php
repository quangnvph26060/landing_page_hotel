<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PriceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'price' => 'required',
            'branch_price' => 'nullable',
            'description' => 'nullable|string',
            'features' => 'nullable',
            'recommended' => 'nullable',
        ];
    }

    public function messages()
    {
        return __('request.messages');
    }

    public function attributes()
    {
        return [
            'name' => 'Tên gói',
            'price' => 'Giá gói',
            'branch_price' => 'Giá chi nhánh',
            'description' => 'Mô tả',
            'features' => 'Tính năng',
            'recommended' => 'Trạng thái',
        ];
    }
}
