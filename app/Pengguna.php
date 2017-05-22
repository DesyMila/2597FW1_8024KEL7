<?php

namespace App;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
class Pengguna extends  Model implements AuthenticatableContract
{
   use Authenticatable;
    protected $table='pengguna';
    protected $fillable=['username','password','level'];
    protected $guarded = ['id'];

public function siswa()
{
	return $this->hasOne(Siswa::class);
}
public function staff()
{
	return $this->hasOne(Staff::class);
}
public function guru()
{
	return $this->hasOne(Guru::class);
}
public function kepala_sekolah()
{
	return $this->hasOne(Kepala_Sekolah::class);
}
}
