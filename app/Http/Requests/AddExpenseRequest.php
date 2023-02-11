<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddExpenseRequest extends FormRequest
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
            'money' => [ 'required', 'bail', 'numeric', 'max:' . PHP_INT_MAX,  ],
            'subject' => [ 'required', 'bail', 'string', 'max:255',  ],
        ];
    }
}
