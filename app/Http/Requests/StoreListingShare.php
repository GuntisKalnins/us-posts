<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreListingShare extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'emails.*' => 'email|distinct|nullable',
            'emails.0' => 'required|email',
            'message' => 'max:2000',
        ];
    }

    public function messages()
    {
        return [
            'emails.*.email' => 'That is not a valid email address',
            'emails.*.required' => 'Please enter a valid email address',
            'emails.*.distinct' => 'Duplicate email address found',
        ];
    }
}
