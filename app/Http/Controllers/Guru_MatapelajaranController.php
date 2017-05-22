<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Guru_Matapelajaran;
use App\Guru;
use App\Mata_Pelajaran;
use App\Http\Requests\Guru_MatapelajaranRequest;
use Illuminate\Support\Facades\Input;
class Guru_MatapelajaranController extends Controller
{
    
  protected $informasi="Gagal Melakukan Aksi";
    public function awal()
    {
        $semuaGuru_Matapelajaran=guru_matapelajaran::all();
   	return view('guru_matapelajaran.awal',compact('semuaGuru_Matapelajaran'));
    }
public function tambah()
    {
        $mata_pelajaran= new Mata_Pelajaran;
        $guru= new Guru;
    	return view('guru_matapelajaran.tambah',compact('mata_pelajaran','guru'));
    }
  public function simpan(Guru_MatapelajaranRequest $input){
    $guru_matapelajaran = new Guru_Matapelajaran($input->only('guru_id','mata_pelajaran_id'));
    if($guru_matapelajaran->save())$this->informasi="Jadwal Matakuliah Telah Berhasil Disimpan";
	$informasi=$guru_matapelajaran->save()?'berhasil simpan data':'gagal simpan data';
	return redirect('guru_matapelajaran')->with(['informasi'=>$this->informasi]);
}
public function edit($id){
$guru_matapelajaran=Guru_Matapelajaran::find($id);
return view('guru_matapelajaran.edit')->with(array('guru_matapelajaran'=>$guru_matapelajaran));
}
public function lihat($id){
	$guru_matapelajaran=guru_matapelajaran::find($id);
	return view('guru_matapelajaran.lihat')->with(array('guru_matapelajaran'=>$guru_matapelajaran));
}
public function update($id, Guru_MatapelajaranRequest $input){
	$guru_matapelajaran=Guru_Matapelajaran::find($id);
    $guru_matapelajaran->guru_id=$input->guru_id;
    $guru_matapelajaran->mata_pelajaran_id=$input->matakuliah_id;
    $informasi=$guru_matapelajaran->save()?'berhasil update data':'gagal simpan data';
    return redirect('guru_matapelajaran')->with(['informasi'=>$informasi]);
}
public function hapus($id){
        $guru_matapelajaran=Guru_Matapelajaran::find($id);
        $informasi=$guru_matapelajaran->delete()?'Berhasil hapus data':'Gagal hapus data';
        return redirect('guru_matapelajaran')->with(['informasi'=>$informasi]);
    }
}
