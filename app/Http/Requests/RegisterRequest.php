<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
           'first_name' => ['required','string','max:50'],
           'last_name'  => ['required','string','max:50'],
           'email'      => ['required','email'],
           'phone'      => ['nullable','digits:11'],
           'password'   => ['required','min:8','max:16','confirmed'],
        ];
    }
}
