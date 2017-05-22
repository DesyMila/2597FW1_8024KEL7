<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class Jadwal_MatapelajaranRequest extends Request
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
        $validasi= [ 'guru_matapelajaran_id'=>'required','ruang_kelas_id'=>'required'];
        if ($this->is('jadwal_matapelajaran/tambah')) {
            $validasi['staff_id']='required';
        }
        return $validasi;
    }
}
