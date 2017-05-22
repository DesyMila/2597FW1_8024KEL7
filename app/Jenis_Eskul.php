<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenis_Eskul extends Model
{
    protected $table='jenis_ekskul';
    protected $fillable=['nama_eskul','keterangan'];
    protected $guarded = ['id'];
    public function eskul_siswa()
    {
    	return $this->hasMany(Eskul_siswa::class,'eskul_siswa_id');
    }
}
