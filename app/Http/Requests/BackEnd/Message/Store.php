<?php

namespace App\Http\Requests\BackEnd\Message;

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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username' => ['required','min:3','max:25','string','alpha'],
            'email' => ['required','email'],
            'mobile' => ['required','alpha_num','min:11'],
            'message' => ['required','stirng','min:10','max:100']
        ];
    }
}
