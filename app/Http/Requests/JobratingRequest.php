<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobratingRequest extends FormRequest
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
            'npipl' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'npipl.required' => 'Баҳоланаётган ТТЁ хизмати таркибий бўлинмасига бириктирилган ҳудуддаги аҳоли сони киритилмаган'
        ];
    }
}
