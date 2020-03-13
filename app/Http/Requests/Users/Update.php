<?php

namespace App\Http\Requests\Users;

use Illuminate\Foundation\Http\FormRequest;

class Update extends FormRequest 
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
			'name' => 'required|max:255',
			'photo' => 'required|max:255',
			'role' => 'required|max:255',
			'age' => 'required|numeric',
			'phone_number' => 'required|max:255',
			'address' => 'required|max:255',
			'city' => 'required|max:255',
			'state' => 'required|max:255',
			'country' => 'required|max:255',
			'postal_code' => 'required|max:255',
			'email' => 'required|unique:users,email|max:255',
			'email_verified_at' => 'nullable|date',
        ];
    }

    /**
    * Get the error messages for the defined validation rules.
    *
    * @return array
    */
    public function messages()
    {
        return [
     
        ];
    }

}
