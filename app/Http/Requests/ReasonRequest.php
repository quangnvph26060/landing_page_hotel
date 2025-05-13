<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReasonRequest extends FormRequest
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
            'reason' => 'required|string|max:255',
            'video_1_url' => 'nullable|mimes:mp4,webm,ogg|max:50000', // tối đa 50MB
            'video_2_url' => 'nullable|mimes:mp4,webm,ogg|max:50000',
        ];
    }

    public function messages(): array
    {
        return [
            'reason.required' => 'Vui lòng nhập lý do.',
            'reason.string' => 'Lý do phải là chuỗi.',
            'reason.max' => 'Lý do không được vượt quá 255 ký tự.',
            'video_1_url.mimes' => 'Video 1 phải có định dạng mp4, webm hoặc ogg.',
            'video_1_url.max' => 'Video 1 không được vượt quá 50MB.',
            'video_2_url.mimes' => 'Video 2 phải có định dạng mp4, webm hoặc ogg.',
            'video_2_url.max' => 'Video 2 không được vượt quá 50MB.',
        ];
    }
}
