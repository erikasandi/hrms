<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HolidayStoreRequest extends FormRequest
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
            'title'  => 'required'
        ];
    }

    public function messages()
    {
        return [            
            'started_at' => 'required',
            'ended_at' => 'required',
            'title' => 'required',
            'is_off' => 'required'
        ];
    }
}
