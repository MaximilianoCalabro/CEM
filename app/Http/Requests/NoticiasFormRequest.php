<?php

namespace CEM\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NoticiasFormRequest extends FormRequest
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
            'n'=>'required',
            'titulo'=>'required|max:250',
            'fecha'=>'required|max:250',
            'imagen'=>'mimes:jpeg,bmp,png',
            'subtitulo'=>'required|max:100',
            'noticia'=>'required|max:1000'
        ];
    }
}
