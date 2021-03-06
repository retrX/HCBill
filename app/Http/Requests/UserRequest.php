<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
     * 这是后台个人修改信息的验证
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'required',
            'email'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'角色名不能为空',
            'email.required'=>'邮箱不能为空',
        ];
    }
}
