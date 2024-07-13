<?php

namespace App\Http\Requests;

use Gate;
use Illuminate\Foundation\Http\FormRequest;

class UpdateCompanyRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('company_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
                'unique:companies,name,'.request()->route('company')->id,
            ],
            'company_logo' => [
                'required',
            ],
            'about' => [
                'required',
            ],
            'phone_number' => [
                'string',
                'nullable',
            ],
            'website' => [
                'string',
                'nullable',
            ],
            'address' => [
                'string',
                'required',
            ],
        ];
    }
}
