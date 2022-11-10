<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        //validations
        return [
            'title'=>['required','string','between:2,512'],
            'body'=>['required','string'],
            'image'=>['required','mimes:png,jpg,jpeg','max:1024']
        ];
    }
}
