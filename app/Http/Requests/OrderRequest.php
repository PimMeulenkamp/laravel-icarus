<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'street' => ['required', 'string', 'max:255'],
            'street_number' => ['required', 'string', 'regex:/[0-9]{1,3}/'],
            'zipcode' => ['required', 'string', 'regex:/[0-9]{4}[a-z,A-Z]{2}/'],
            'city' => ['required', 'string', 'regex:/(Oldenzaal)/'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
