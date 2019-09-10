<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeStoreRequest extends FormRequest
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
            'code'  => 'required',
            'firstname'  => 'required',
            'gender_id' => 'required',
            'email' => 'required',
            'join_date' => 'required',
            'status' => 'required'
        ];
    }

    public function messages()
    {
        return[
            'code.required' => 'Code is required !',
            'firstname.required' => 'Employee Name is required !',
            'gender_id.required' => 'Employee Gender is required !',
            'email.required' => 'Email is required !',
            'join_date.required' => 'Join Date is required !',
            'status.required' => 'Employee Status is required !'
        ];
    }
}
