<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterUserRequest extends FormRequest
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
            'name'=>'required',
            'login'=>'required|unique:App\Models\User|max:100|min:5',
            'password'=>'required|max:20|min:3'
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'Это поле обязательное',
            'login.exists' => 'Пользователя с таким login не существует',
            'login.required' => 'Это поле обязательное',
            'login.max' => 'Слишком длинный логин,макс(100 символов)',
            'login.min' => 'Слишком короткий логин,мин(5 символов)',
            'password.max' => 'Слишкоми длинный пароль макс(20 символов)',
            'password.min' => 'Слишком короткий пароль мин(3 символов)',
        ];
    }
}
