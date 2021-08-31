<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyUpdateRequest extends FormRequest
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
            'company_type' => 'nullable|string|max:255',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,jfif|max:2048',
            'phone_no' => 'nullable|string|max:15|unique:companies,phone_no,'.$this->id,
            'address' => 'nullable',
            'no_of_employee' => 'nullable',
            'history' => 'nullable',
            'description' => 'nullable',
            'contact_information' => 'nullable',
           
        ];
    }
}
