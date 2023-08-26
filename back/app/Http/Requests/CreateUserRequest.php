<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required'],
            'category' => ['required'],
            'address' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O nome é obrigatorio',
            'email.required' => 'O email é obrigatorio',
            'email.email' => 'Email deve ser um endereço valido',
            'password.required' => 'A senha é obrigatoria',
            'category.required' => 'A categoria é obrigatoria',
            'address.required' => 'O endereço é obrigatorio',
        ];

    }
}
