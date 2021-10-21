<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckOutRequest extends FormRequest
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
            'first_name' => 'required|string|min:3',
            'last_name' => 'required|string|min:3',
            'company_name' => $this->request->get('company_name') ? 'required|string|min:3' : '',
            'email' => 'required|email|min:3',
            'phone' => 'required|string|min:9',
            'address' => 'required|string|min:3',
            'city' => 'required|string|min:3',
            'comment' => $this->request->get('comment') ? 'required|string|min:3' : '',
        ];
    }
}
