<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
   	protected $table = 'guru';
   	protected $guarded = ['id'];
    protected $fillable= ['nama','nip','alamat','pengguna_id'];
	public function pengguna()
	{
		return $this->belongsTo(Pengguna::class,'pengguna_id');
	}
	public function guru_matapelajaran()
	{
	return $this->hasMany(Guru_Matapelajaran::class,'guru_matapelajaran_id');
	}
	public function listGuruDanNip(){
        $out=[];
        foreach ($this->all() as $guru) {
            $out[$guru->id]="{$guru->nama} ({$guru->nip})";

    }
        return $out;
 }
}
