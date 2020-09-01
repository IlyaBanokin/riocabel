<?php

namespace App\Http\Requests;

use App\Rules\PhoneNumber;
use Illuminate\Foundation\Http\FormRequest;

class SendContactsRequest extends FormRequest
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
            'name' => 'required|string|min:2|max:35',
            'email' => 'required|max:40|email',
            'phone' => ['required', new PhoneNumber],
            'text' => 'max:100',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => "Поле 'Ваше Имя' обязательно к заполнению",
            'name.min' => "Минимальная длина поля 'Ваше Имя' 2 символа",
            'email.required' => "Поле 'Email' обязательно к заполнению",
            'email.email' => "Не валидный e-mail адрес",
            'phone.required' => "Поле 'Телефон' обязательно к заполнению",
            'text.max' => "Максимальная длина поля 'Текст' 100 символов",
        ];
    }
}
