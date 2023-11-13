<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderStoreRequest extends FormRequest
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
            'last_name' => 'string',
            'first_name' => 'string',
            'father_name' => 'string',
            'username' => 'string',
            'password' => 'string',
            'birth_date' => 'date',
            'passport' => 'string',
            'phone' => 'string'
        ];
    }
}
