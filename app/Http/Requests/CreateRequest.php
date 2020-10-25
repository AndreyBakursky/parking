<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
        return ['name' => 'min:3|max:40',
            'gender' => 'required',
            'phonenumber' => 'max:13',
            'address' => 'max:80',
            'car' => 'min:1|max:50',
            'carbrand' => 'max:20',
            'carmodel' => 'max:20',
            'carcolor' => 'max:20',
            'carnumber' => 'max:12'];

    }
}
