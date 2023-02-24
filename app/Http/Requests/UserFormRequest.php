<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->user()->can('create-users');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
       return [
            'firstname'     => [
                'required',
                'string',
            ],
            'lastname'     => [
                'required',
                'string',
            ],
            'phone'     => [
                'required',
            ],
            // 'occupation'  => [
            //     'required',
            // ],
            'email'    => [
                'required',
                'email'
            ],
            //  'password'     => [
            //     'sometimes|min:8'
            // ],
            'roles.*'  => [
                'integer',
            ],
            'roles'    => [
                'required',
                'array',
            ],
        ];
    }
}
