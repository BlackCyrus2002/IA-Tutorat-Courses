<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRegisterRequest extends FormRequest
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
            "nom" => "required|string",
            "prenoms" => "required|string",
            "born" => "required|date",
            "sexe" => "required|string",
            "tel" => "required|string",
            "adresse" => "required|string",
            "etablissement" => "required|string",
            "domaine" => "required|string",
            "bio" => "required|string",
            "image" => "required|image",
            "email" => "required|email",
            "password" => "required|min:4|max:8",
            // "lu" => "required|boolean",
        ];
    }
}
