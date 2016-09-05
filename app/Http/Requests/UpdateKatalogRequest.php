<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UpdateKatalogRequest extends Request
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
            'judul' => 'required|min:3',
            'deskripsi' => 'required|min:10',
            'kategori_id' => 'required',
            'harga' => 'required',
            'email' => 'required|email',
        ];
    }
}
