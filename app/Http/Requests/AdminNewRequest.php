<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AdminNewRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'new_title' => [
                'required',
                Rule::unique('news')->ignore($this->new_id, 'new_id')
            ],
            'new_description' => 'max:255',
            'new_content'     => 'required',
            'new_image' => [
                'required',
                Rule::unique('news')->ignore($this->new_id, 'new_id')
            ],
            'cat_id'          => 'required'
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute không được bỏ trống',
            'min'      => ':attribute phải từ 4-255 ký tự',
            'max'      => ':attribute phải từ 4-255 ký tự',
            'unique'   => ':attribute đã tồn tại'
        ];
    }

    public function attributes()
    {
        return [
            'new_title'       => 'Tiêu đề bài viết',
            'new_description' => 'Mô tả bài viết',
            'new_content'     => 'Nội dung bài viết',
            'new_image'       => 'Hình bài viết',
            'cat_id'          => 'Danh mục bài viết'
        ];
    }
}
