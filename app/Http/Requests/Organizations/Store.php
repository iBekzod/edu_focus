<?php

namespace App\Http\Requests\Organizations;

use Illuminate\Foundation\Http\FormRequest;

class Store extends FormRequest 
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
			'location' => 'required|max:255',
			'category' => 'required|max:255',
			'phone_number' => 'required|max:255',
			'address' => 'required|max:255',
			'city' => 'required|max:255',
			'state' => 'required|max:255',
			'country' => 'required|max:255',
			'postal_code' => 'required|max:255',
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
