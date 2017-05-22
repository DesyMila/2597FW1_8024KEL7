<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';
    protected $fillable= ['nama','nis','alamat','pengguna_id'];
    protected $guarded = ['id'];
    public function pengguna()
	{
		return $this->belongsTo(Pengguna::class,'pengguna_id');
	}
	public function eskul_siswa()
	{
		return $this->hasMany(Eskul_siswa::class,'eskul_siswa_id');
	}
	 public function listSiswaDanNis(){
        $out=[];
        foreach ($this->all() as $siswa) {
            $out[$siswa->id]="{$siswa->nama} ({$siswa->nis})";

        }
        return $out;
 }
}
