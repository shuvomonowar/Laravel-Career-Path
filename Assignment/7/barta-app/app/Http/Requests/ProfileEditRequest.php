<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class ProfileEditRequest extends FormRequest
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
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'first-name' => ['required', 'max:255'],
            'last-name' => ['required', 'max:255'],
            'email' => ['required', 'email'],
            'password' => ['nullable', 'min:8', 'max:16'],
            'bio' => ['nullable', 'max:255']
        ];
    }
}
