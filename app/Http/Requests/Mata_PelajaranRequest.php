<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class Mata_PelajaranRequest extends Request
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
        $validasi= [ 'nama_matapelajaran'=>'required'];
        if ($this->is('matakuliah/tambah')) {
            $validasi['nama_matapelajaran']='required';
        }
        return $validasi;
    }
}
