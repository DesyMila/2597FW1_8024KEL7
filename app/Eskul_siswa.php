<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eskul_siswa extends Model
{
    protected $table='eskul_siswa';
    protected $guarded = ['id'];
    protected $fillable=['siswa_id','jenis_id'];
    public function siswa()
    {
    	return $this->belongsTo(Siswa::class,'siswa_id');
    }
    public function jenis_eskul()
    {
    	return $this->belongsTo(Jenis_Eskul::class,'jenis_id');
    }
    public function listSiswaDanNis(){
        $out=[];
        foreach ($this->all() as $siswa) {
            $out[$siswa->id]="{$siswa->nama} ({$siswa->nis})";

        }
        return $out;
 }
}
