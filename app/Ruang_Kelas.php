<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruang_Kelas extends Model
{
    protected $table='ruang_kelas';
    protected $fillable=['nama_ruangan'];
    protected $guarded = ['id'];
    public function jadwal_matapelajaran()
    {
    	return $this->hasMany(Jadwal_Matapelajaran::class,'jadwal_matapelajaran_id');
    }
}
