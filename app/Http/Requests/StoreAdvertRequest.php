<?php

namespace App\Http\Requests;

use Gate;
use Illuminate\Foundation\Http\FormRequest;

class StoreAdvertRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('advert_create');
    }

    public function rules()
    {
        return [
            'company_id' => [
                'required',
                'integer',
            ],
            'title' => [
                'string',
                'required',
                'unique:adverts',
            ],
            'body' => [
                'required',
            ],
            'deadline' => [
                'required',
                'date_format:'.config('panel.date_format'),
            ],
            'location' => [
                'string',
                'required',
            ],
            'sector' => [
                'string',
                'required',
            ],
            'education_level' => [
                'string',
                'nullable',
            ],
            'desired_experience' => [
                'string',
                'nullable',
            ],
            'contract_type' => [
                'string',
                'nullable',
            ],
            'number_of_positions' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'category_id' => [
                'required',
                'integer',
            ],
        ];
    }
}
