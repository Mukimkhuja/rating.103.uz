<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DocratingRequest extends FormRequest
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
            'lst' => 'required|numeric',
            'qk' => 'required|numeric',
            'nqb' => 'required|numeric',
            'nob' => 'required|numeric',
            'ncb' => 'required|numeric',
            'nmsh' => 'required|numeric',
            'ntch' => 'required|numeric',
            'nnt' => 'required|numeric',
            'nut' => 'required|numeric'
        ];
    }

    public function messages()
    {
        return [
            'lst.required' => 'Стаж работника не введен!',
            'qk.required' => 'Rвалификационная категория работника не введен!',
            'nqb.required' => ' не введен!',
            'nob.required' => ' не введен!',
            'ncb.required' => ' не введен!',
            'nmsh.required' => ' не введен!',
            'ntch.required' => ' не введен!',
            'nnt.required' => ' не введен!',
            'nut.required' => ' не введен!'
        ];
    }
}
