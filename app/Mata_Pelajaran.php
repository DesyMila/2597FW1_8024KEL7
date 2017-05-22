<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mata_Pelajaran extends Model
{
    protected $table='mata_pelajaran';
    protected $fillable=['nama_matapelajaran'];
    protected $guarded = ['id'];
    public function guru_matapelajaran()
    {
    	return $this->hasMany(Guru_Matapelajaran::class,'guru_matapelajaran_id');
    }
}
