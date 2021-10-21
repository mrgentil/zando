<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PhoneRequest extends FormRequest
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
        $book = $this->route('phone');
        $method = $this->method();

        return [
            'name' => 'required|string|min:3',
            /*'status' => Rule::in(['GRATUIT', 'PAYANT']),*/
            'price' => $this->request->get('cost') || $this->request->get('status') === 'published' ? 'required|numeric': '',
            'category_id' => 'required|exists:categories,id',
            'description' => 'required|min:3',
            'quantity' => 'required|numeric'

        ];
    }
}
