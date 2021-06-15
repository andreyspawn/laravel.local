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
            'last_name' => 'required|string|min:3|max:15',
            'name' => 'required|string|max:15',
            'fathers_name' => 'required|string|max:15',
            'email' => 'nullable|email|unique:employees,email',
            'birthday' => 'required|date',
            'date_in' => 'required|date'
        ];
    }

    public function messages()
    {
        return [
            'last_name.required' => 'Необходимо указать фамилию',
            'name.required'  => 'Необходимо указать имя',
            'fathers_name.required' => 'Необходимо указать отчество',
            'birthday.required' => 'Не указана дата рождения или формат отличен от дд-мм-гггг',
            'date_in.required' => 'Не указана дата приема на работу или формат отличен от дд-мм-гггг',
        ];
    }

}
