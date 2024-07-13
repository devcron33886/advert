<?php

namespace App\Http\Requests;

use Gate;
use Illuminate\Foundation\Http\FormRequest;

class StoreCompanyRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('company_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
                'unique:companies',
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
