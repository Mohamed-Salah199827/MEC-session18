<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterFormRequest extends FormRequest
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
            "first_name"=>"required|max:255|string",
            "last_name"=>"required|max:255|string",
            "Phone"=>"required|max:255|string",
            "Address"=>"required|max:255|string",
            "email"=>"required|max:255|string|email|unique:users",
            "password"=> "required|string|min:8",
        ];
    }
}
