<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmailRequest extends FormRequest
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
            'emails' => 'required|string'
        ];
    }

    /**
     * Get the validation messages.
     *
     * @return array<string, mixed>
     */
    public function messages()
    {
        return [
            'emails' => [
                'required' => 'Please give some emails.'
            ]
        ];
    }
}
