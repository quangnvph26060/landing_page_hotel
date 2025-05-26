<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SupportRequest extends FormRequest
{
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
        $id = optional($this->route('post'))->id;
        return [
            'title'                  => 'required|unique:posts,title,' . $id,
            'slug'                  => 'nullable|unique:posts,slug,' . $id,
            'description'           => 'required',
            'title_seo'             => 'nullable|max:100',
            'description_seo'       => 'nullable|max:150',
            'keywords_seo'          => 'nullable',
            'status'                => 'required',
        ];
    }

    public function messages()
    {
        return __('request.messages');
    }

    public function attributes()
    {
        return [
            'title'            => 'Tiêu đề',
            'slug'             => 'Slug',
            'description'      => 'Mô tả',
            'title_seo'        => 'Tiêu đề SEO',
            'description_seo'  => 'Mô tả SEO',
            'keywords_seo'     => 'Từ khóa SEO',
            'status'           => 'Trạng thái',

        ];
    }
}
