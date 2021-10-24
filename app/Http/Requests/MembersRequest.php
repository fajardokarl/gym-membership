<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MembersRequest extends FormRequest
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
            'fullname' => 'required|max:40',
            'email' => 'required|unique:members,email',
            'contact_number' => 'required',
            'date_started' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'email.unique' => 'Email already exists.'
        ];
    }
}
