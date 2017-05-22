<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class Ruang_KelasRequest extends Request
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
        $validasi= [ 'nama_ruangan'=>'required'];
        if ($this->is('ruangan/tambah')) {
            $validasi['title']='required';
        }
        return $validasi;
}
}