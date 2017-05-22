<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class Eskul_SiswaRequest extends Request
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
        $validasi=['siswa_id'=>'required'];
        if($this->is('eskul_siswa/tambah')){
            $validasi['jenis_eskul_id']='required';
        }
        return $validasi;
    }
}
