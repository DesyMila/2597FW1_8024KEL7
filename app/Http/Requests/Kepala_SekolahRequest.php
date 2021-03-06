<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class Kepala_SekolahRequest extends Request
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
        'nip'=>'required|size:12',
        'alamat'=>'required',
        'username'=>'required',];
        if ($this->is('kepala_sekolah/tambah')) {
            $validasi['password']='required';
        }
        return $validasi;
    }
}
