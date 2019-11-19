<?php

namespace App\Http\Requests\Comment;

use Illuminate\Foundation\Http\FormRequest;

class CreateCommentRequest extends FormRequest
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
            'content' => 'required|min:15',
        ];
    }
    public function messages()
    {
        return [
            //'key' => 'value'
            'content.required' => 'Bình luận không được để trống',
            'content.min' => 'Phải có ít nhất 5 kí tự',
        ];
    }
}
