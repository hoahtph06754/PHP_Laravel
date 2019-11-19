<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequest extends FormRequest
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
            'title' => 'required|min:15',
            'content' => 'required|min:50',
            'category_id' => 'required',
        ];
    }
    public function messages()
    {
        return [
            //'key' => 'value'
            'required' => ':attribute không được để trống',
            'title.min' => 'Phải có ít nhất 15 kí tự',
            'content.min' => 'Phải có ít nhất 50 kí tự',
        ];
    }
}
