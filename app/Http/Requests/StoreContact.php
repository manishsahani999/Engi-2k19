<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContact extends FormRequest
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
            'name'       => 'required',
            'college'    => 'required',
            'phone'      => 'required',
            'cc_head'    => 'required',
            'email'      => 'required',
            'year'       => 'required',
            'work_hrs'   => 'required',
            'join'       => 'required',
        ];
    }
}
