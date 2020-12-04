<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class contactRequest extends FormRequest
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
        //for form validation
        return [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ];
    }

    public function messages()
    {
        //formating error messages
        return [
            'name.required' => 'Name field can not be empty',
            'email.required' => 'Provide an email address',
            'subject.required' => 'Subject can not be empty',
            'message.required' => 'Message field can not be empty',
        ];
    }
}
