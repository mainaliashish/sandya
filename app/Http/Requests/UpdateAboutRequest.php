<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAboutRequest extends FormRequest
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
        'site_name' => 'required',
        'site_logo' => 'image',
        'address' => 'required',
        'address_one' => 'required',
        'site_description' => 'required',
        'email_one' => 'required',
        'contact_number_one' => 'required',
        'contact_number_two' => 'required',
        'facebook' => 'required',
        'site_mission' => 'required',
        'site_why_us' => 'required'
        ];
    }
}
