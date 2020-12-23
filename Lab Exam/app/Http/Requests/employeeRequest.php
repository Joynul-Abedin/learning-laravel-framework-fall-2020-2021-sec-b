<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class employeeRequest extends FormRequest
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
            'employeename' => 'required|min:3',
            'companyname' => 'required',
            'contactno' => 'required',
            'username' => 'required',
            'password' => 'required',
            'type' => 'required'
        ];
    }
}
