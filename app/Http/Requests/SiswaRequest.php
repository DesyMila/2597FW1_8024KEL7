<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class SiswaRequest extends Request
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
        $validasi= [ 'nama'=>'required',
        'nis'=>'required|size:11',
        'alamat'=>'required',
        'username'=>'required',];
        if ($this->is('siswa/tambah')) {
            $validasi['password']='required|min:6|max:10';
        }
        return $validasi;
    }
}
