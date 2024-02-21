<?php

namespace App\Http\Requests\Person;

use Illuminate\Foundation\Http\FormRequest;

class StorePersonRequest extends FormRequest
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
            'document_number' => ['required', 'string'],
            'phone_number' => ['required', 'numeric'],
            'first_name' => ['required', 'string'],
            'other_name' => ['nullable', 'string'],
            'first_surname' => ['required', 'string'],
            'second_surname' => ['nullable', 'string'],
        ];
    }
}
