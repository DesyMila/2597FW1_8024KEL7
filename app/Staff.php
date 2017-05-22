<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\user as Authenticable;
class Staff extends Authenticable
{
    protected $table = 'staff';
    protected $fillable= ['nama','nip','alamat','pengguna_id'];
    protected $guarded = ['id'];
	public function pengguna()
	{
	return $this->belongsTo(Pengguna::class,'pengguna_id');
	}
	public function jadwal_matapelajaran()
	{
		return $this->hasMany(jadwla_Matapelajaran::class,'jadwal_matapelajaran_id');
	}
	 public function listStaffDanNip(){
        $out=[];
        foreach ($this->all() as $staff) {
            $out[$staff->id]="{$staff->nama} ({$staff->nip})";

        }
        return $out;
 }
}
