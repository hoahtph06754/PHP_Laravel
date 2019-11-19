<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
            'email' =>'required|email|unique:users,email',      
            'password' => 'required|min:6',
            'birthday' => 'required|date',
            'phone_number' => 'required|between:10,12'
        ];
    }
    public function messages()
    {
        return [
            //'key' => 'value'
            'required' => ':attribute không được để trống',
            'name.min' => 'Tên người dùng phải có ít nhất 5 kí tự',
            'email.email' => 'Bắt buộc nhập đúng định dạng Email',
            'email.unique' =>'Email đã tồn tại',
            'password.min' => 'Password phải có ít nhất 6 kí tự',
            'birthday.date' => 'Nhập đúng định dạng ngày',
            'phone_number.between' => 'Số điện thoại chỉ từ 10 đến 12 số'
        ];
    }
}
