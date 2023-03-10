<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class SignUpRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => [ 'bail', 'required', 'string', 'max:128' ],
            'email' => [ 'bail', 'required', 'email:rfc', 'string', 'max:255', 'unique:App\Models\User' ],
            'password' => [ 'bail', 'required', 'string', 'max:255', Password::min(6) ],
        ];
    }
}
