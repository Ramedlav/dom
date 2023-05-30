<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            'name'=> 'required|min:5|max:50',
            'email'=> ['required', 'string', 'email', 'max:255'],
            'phone' => 'required',
            'password' => ['required', 'string', 'min:8', 'confirmed'],

        ];
    }
}
