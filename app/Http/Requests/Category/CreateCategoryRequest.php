<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class CreateCategoryRequest extends FormRequest
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
            'name' => 'required|min:5',
        ];
    }
    public function messages()
    {
        return [
            //'key' => 'value'
            'name.required' => 'Tên danh mục không được để trống',
            'name.min' => 'Tên danh mục phải có ít nhất 5 kí tự',
        ];
    }
}
