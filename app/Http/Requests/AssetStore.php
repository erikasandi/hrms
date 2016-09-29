<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AssetStore extends FormRequest
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
            'name'  => 'required',
            'code'  => 'required|unique:assets,code',
            'site_id' => 'not_in:0'
        ];
    }

    public function messages()
    {
        return [
            'site_id.not_in' => 'You are in <strong>"All Sites"</strong> mode. Please choose the site first.'
        ];
    }
}
