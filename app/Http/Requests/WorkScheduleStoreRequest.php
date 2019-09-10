<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WorkScheduleStoreRequest extends FormRequest
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
            'title'  => 'required',
            'started_at' => 'required',
            'ended_at' => 'required'
        ];
    }

    public function messages()
    {
        return [            
            'name.required' => 'Name is required!',
            'started_at.required' => 'started_at is required',
            'ended_at.required' => 'ended_at is required'
        ];
    }
}
