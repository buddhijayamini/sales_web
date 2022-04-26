<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SalesRefRequest extends FormRequest
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
            'name' => 'required|string',
            'email'  => 'required|email',
            'address'  => 'required|string',
            'telephone_no' => 'required',
            'joined_date' => 'required|date',
            'current_route'  => 'required',
            'comments'  => 'string|nullable'
        ];
    }
}
