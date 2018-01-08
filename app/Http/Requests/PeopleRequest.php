<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PeopelRequest extends FormRequest
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
            'cedula' => 'required',
            'credencial' => 'required',
            'name_1' => 'required',
            'lastname_1' => 'required',
            'sexo_id' => 'required',
            'status_id' => 'required',
        ];
    }
}
