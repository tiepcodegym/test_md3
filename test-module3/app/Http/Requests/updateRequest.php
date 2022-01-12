<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updateRequest extends FormRequest
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

            'name' => 'required',
            'birthday' => 'required',
            'email' => 'required|email',
            'idCard' => 'required',
            'phone' => 'required',
            'address' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Tên nhân viên không được để trống',
            'birthday.required' => 'Ngày sinh không được để trống',
            'email.required' => 'Email không được để trống',
            'email.email' => 'Email không đúng định dạng',
            'idCard.required' => 'Số CMND không được để trống',
            'phone.required' => 'Số điện thoại không được để trống',
            'address.required' => 'Địa chỉ không được để trống',
        ];
    }
}
