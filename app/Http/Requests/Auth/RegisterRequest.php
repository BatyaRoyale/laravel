<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|min:2|max:255',
            'surname' => 'required|string|min:2|max:255',
            'patronymic' => 'nullable|string|min:2|max:255',
            'email' => 'required|string|min:5|max:255|email|unique:users,email',
            'password' => 'required|string|min:8|max:255|same:password_r',
        ];
    }

    public function messages()
    {
        return [
            'requared'=> 'Обязательное поле',
            'email.email'=> 'Неправильный формат почты',
            'email.unique'=> 'Данный пользователь зареган',
            'same'=>'Пароли не совпадают'
        ] ;
    }
}
