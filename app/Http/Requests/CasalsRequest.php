<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CasalsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nom' => 'required|unique|max:255',
            'id_ciutat' => 'required',
            'data_inici' => 'required',
            'data_final' => 'required',
            'n_places' => 'required',
        ];
    }
}
