<?php

namespace App\Http\Requests;

use App\Rules\PhoneNumber;
use Illuminate\Foundation\Http\FormRequest;

class SendCallBackRequest extends FormRequest
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
            'phone' => ['required', new PhoneNumber],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => "Поле 'Ваше Имя' обязательно к заполнению",
            'name.min' => "Минимальная длина поля 'Ваше Имя' 2 символа",
            'phone.required' => "Поле 'Телефон' обязательно к заполнению",
        ];
    }
}
