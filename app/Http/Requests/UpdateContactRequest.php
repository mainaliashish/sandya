<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateContactRequest extends FormRequest
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
        'country' => 'required',
        'address' => 'required',
        'address_one' => 'required',
        'phone_number_one' => 'required',
        'phone_number_two' => 'required',
        'phone_number_three' => 'required',
        'phone_number_four' => 'required',
        'email_one' => 'required',
        'email_two' => 'required'
        ];
    }
}
