<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class Guru_MatapelajaranRequest extends Request
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
       $validasi= [ 'guru_id'=>'required'];
        if ($this->is('guru_matakuliah/tambah')) {
            $validasi['mata_pelajaran_id']='required';
        }
        return $validasi;
    }
}
