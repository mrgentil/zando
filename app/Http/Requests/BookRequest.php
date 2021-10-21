<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class BookRequest extends FormRequest
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
        $book = $this->route('book');
        $method = $this->method();

        return [
            'title' => 'required|string|min:3',
            'status' => Rule::in(['GRATUIT', 'PAYANT']),
            'cost' => $this->request->get('cost') || $this->request->get('status') === 'PAYANT' ? 'required|numeric': '',
            'category_id' => 'required|exists:categories,id',
            'description' => 'required|min:3',
            'file' => 'image|max:1024',
            'pdf' => $method !== 'PUT' ?  'required|max:1024|mimes:pdf' : 'image|max:1024',
        ];
    }
}
