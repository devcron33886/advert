<?php

namespace App\Http\Requests;

use Gate;
use Illuminate\Foundation\Http\FormRequest;

class UpdateFaqRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('faq_edit');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'required',
            ],
            'description' => [
                'required',
            ],
            'status' => [
                'required',
            ],
        ];
    }
}
