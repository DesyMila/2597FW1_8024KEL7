<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal_Matapelajaran extends Model
{
    protected $table='jadwal_matapelajaran';
    protected $fillable=['ruang_kelas_id','guru_matapelajaran_id'];
    protected $guarded = ['id'];
	public function guru_matapelajaran()
 	{
 		return $this->belongsTo(Guru_Matapelajaran::class,'guru_matapelajaran_id');
 	}
 	public function ruang_kelas()
 	{
 		return $this->belongsTo(Ruang_Kelas::class,'ruang_kelas_id');
 	}
 	
}
