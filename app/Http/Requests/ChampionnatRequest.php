<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChampionnatRequest extends FormRequest
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
            'nom' => 'required|string|max:255',
            'pays' => 'required|string|max:255',
        ];
    }

    public function messages(): array
    {
        return [
            'nom.required' => 'Le nom du championnat est requis.',
            'nom.string' => 'Le nom du championnat doit être une chaîne de caractères.',
            'nom.max' => 'Le nom du championnat ne doit pas dépasser 255 caractères.',
            'pays.required' => 'Le pays du championnat est requis.',
            'pays.string' => 'Le pays du championnat doit être une chaîne de caractères.',
            'pays.max' => 'Le pays du championnat ne doit pas dépasser 255 caractères.',
        ];
    }
}
