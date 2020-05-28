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
            'qk' => 'numeric',
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

            'nqb.required' => 'Оценок граждан не введен!',
            'nob.required' => 'Количество выполненных вызовов не введен!',
            'ncb.required' => 'Нарушений соблюдения стандартов и порядка не введен!',
            'nmsh.required' => 'Обращений ЛПУ или граждан не введен!',
            'ntch.required' => 'Повторные вызова в течение 24 часов не введен!',
            'nnt.required' => 'Количество летальных случаев не введен!',
            'nut.required' => 'Количество случаев не введен!'
        ];
    }
}
