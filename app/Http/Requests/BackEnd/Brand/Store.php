<?php

namespace App\Http\Requests\BackEnd\Brand;

use Illuminate\Foundation\Http\FormRequest;

class Store extends FormRequest
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

    
    public function rules()
    {
        return [
            'name' => ['required','min:3','max:25'],
            'website' => ['required','url']
        ];
    }
}
