<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AdminCategoryRequest extends FormRequest
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
     * ignore id, ko kiểm tra trùng nếu trường hợp update
     * @return array
     */
    public function rules()
    {
        return [
            'cat_name' => [
                'required','min:4','max:50',
                Rule::unique('categories')->ignore($this->cat_id, 'cat_id')
            ],
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute không được bỏ trống',
            'min'      => ':attribute phải từ 4-50 ký tự',
            'max'      => ':attribute phải từ 4-50 ký tự',
            'unique'   => ':attribute đã tồn tại'
        ];
    }

    public function attributes()
    {
        return [
            'cat_name' => 'Tên danh mục',
        ];
    }
}
