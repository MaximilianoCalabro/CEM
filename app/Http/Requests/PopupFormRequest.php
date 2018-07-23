<?php

namespace CEM\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PopupFormRequest extends FormRequest
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
            'titulo'=>'required|max:100',
            'subtitulo'=>'required|max:100',
            'noticia'=>'required|max:500',
            'imagen_slider'=>'mimes:jpeg,bmp,png'
        ];
    }
}
