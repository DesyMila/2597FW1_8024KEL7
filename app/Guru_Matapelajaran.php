<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru_Matapelajaran extends Model
{
    protected $table='guru_matapelajaran';
    protected $guarded = ['id'];
    protected $fillable=['guru_id','mata_pelajaran_id'];
    public function jadwal_matapelajaran()
	{
		return $this->hasMany(Jadwal_Matapelajaran::class,'jadwal_matapelajaran_id');
	}
	public function guru()
	{
		return $this->belongsTo(Guru::class,'guru_id');
	}
	public function mata_pelajaran()
	{
	return $this->belongsTo(Mata_Pelajaran::class,'mata_pelajaran_id');
	}
	public function ListGuruDanMatapelajaran()
	{
	$out=[];
	foreach ($this->all() as $guruMtk) {
		$out[$guruMtk->id]="{$guruMtk->guru->nama} (Mata_Pelajarana {$guruMtk->mata_pelajaran->nama_matapelajaran})";
	}
	return $out;
	}
}
