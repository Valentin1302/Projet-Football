<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ];
    }

    public function messages(): array
    {
        return [
            'email.required' => "L'adresse e-mail est requise.",
            'email.email' => "L'adresse e-mail doit être valide.",
            'email.unique' => 'Cette adresse e-mail est déjà utilisée.',
            'password.required' => 'Le mot de passe est requis.',
            'password.min' => 'Le mot de passe doit contenir au moins 6 caractères.',
            'password.confirmed' => 'La confirmation du mot de passe ne correspond pas.',
        ];
    }

    public function attributes(): array
    {
        return [
            'email' => 'adresse e-mail',
            'password' => 'mot de passe',
            'password_confirmation' => 'confirmation du mot de passe',
        ];
    }
}
