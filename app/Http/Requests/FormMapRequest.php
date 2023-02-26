<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class FormMapRequest  extends FormRequest
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
            'title' => 'string|required|min:3',
            'description'=> 'string|required|min:5',
            'lng' => 'required|string|max:10',
            'lat' => 'required|string|max:10',
            'post_id' => 'required|integer|exists:posts,id'
        ];
    }
}
