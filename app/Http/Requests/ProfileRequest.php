<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            'name'=>'required',
            // 'email'=>'required|email|unique:admins,email'.$this->id,
            'email' => 'required|email|unique:admins,email,'.$this -> id,
            'password'  => 'nullable|confirmed|min:8'
            
        ];
    }


    public function messages(): array
    {
        return [
            'name.required'=>'يجب ادخال اسم المستخدم',
            'email.required'=>'يجب ادخال البريد الالكترونى',
            'email.email'=>'صيغة البريد الالكترونى غير صحيحة',
            'password.confirmed'=>'كلمة المرور غير متطابقة',
            'password.min'=>'يجب الا تقل كلمة المرور عن ثمانية احرف',
            
        ];
    }
}
