<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployeeRequest extends FormRequest
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
            //
            'last_name' => 'required|max:15',
            'name' => 'required|string',
            'fathers_name' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'last_name' => 'Необходимо указать фамилию',
            'name'  => 'Необходимо указать имя',
            'fathers_name' => 'Необходимо указать отчество'
        ];
    }
}
