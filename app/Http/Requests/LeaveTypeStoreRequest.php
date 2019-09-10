<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LeaveTypeStoreRequest extends FormRequest
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
            'type'  => 'required',
            'quota'  => 'required',
            'period'  => 'required'
        ];
    }

    public function messages()
    {
        return [            
            'type.required' => 'Type is required!',
            'quota.required' => 'Quota is required!',
            'period.required' => 'Period is required!'
        ];
    }
}
