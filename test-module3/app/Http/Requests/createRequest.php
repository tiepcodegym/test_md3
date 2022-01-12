<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createRequest extends FormRequest
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

            'id' => 'required|unique:customers,id',
            'name' => 'required',
            'birthday' => 'required',
            'email' => 'required|email',
            'idCard' => 'required',
            'phone' => 'required|numeric',
            'address' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'id.required' => 'Mã nhân viên không được trống',
            'id.unique' => 'Mã nhân viên đã tôn tại',
            'name.required' => 'Tên nhân viên không được để trống',
            'birthday.required' => 'Ngày sinh không được để trống',
            'email.required' => 'Email không được để trống',
            'email.email' => 'Email không đúng định dạng',
            'idCard.required' => 'Số CMND không được để trống',
            'phone.required' => 'Số điện thoại không được để trống',
            'phone.numeric' => 'Phải là số',
            'address.required' => 'Địa chỉ không được để trống',
        ];
    }
}
