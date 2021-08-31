<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobUpdateRequest extends FormRequest
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
            'approved_user_id' => 'nullable',
            'category_id' => 'required|integer',
            'title' => 'required|string|max:255',
            'employment_status' => 'nullable',
            'address' => 'nullable',
            'salary' => 'nullable',
            'working_hour' => 'nullable',
            'requirement' => 'nullable',
            'contact_information' => 'nullable',
        ];
    }
}
