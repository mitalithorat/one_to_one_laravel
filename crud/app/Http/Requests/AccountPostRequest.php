<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AccountPostRequest extends FormRequest
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
            'firstname' => 'required|max:50',
            'lastname' => 'required|max:50',
            'username' => 'required|max:50',
            'contact' => 'required|max:10',
            'email' => 'required|email|unique:users',
            'country' => 'required',
            'state' => 'required',
            'street' => 'required',
            'pincode' => 'required'
            //
        ];
    }
}
