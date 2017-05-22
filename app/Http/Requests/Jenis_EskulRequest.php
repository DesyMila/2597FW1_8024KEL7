<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class Jenis_EskulRequest extends Request
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
    {   $validasi=['nama_eskul'=>'required'];
        if ($this->is('jenis_eskul/tambah')){
            $validasi['keterangan']='required';
        }
        return $validasi;
            
    }
}
