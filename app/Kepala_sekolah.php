<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kepala_sekolah extends Model
{
    protected $table = 'kepala_sekolah';
    protected $fillable= ['nama','nip','alamat','pengguna_id'];
    protected $guarded = ['id'];
    public function pengguna()
	{
	return $this->belongsTo(Pengguna::class,'pengguna_id');
	}
	public function listKepaladanNip(){
        $out=[];
        foreach ($this->all() as $kepala) {
            $out[$kepala->id]="{$kepala->nama} ({$kepala->nim})";

        }
        return $out;
 	}
}
