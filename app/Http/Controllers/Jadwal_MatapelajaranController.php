<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\Jadwal_MatapelajaranRequest;
use App\Jadwal_Matapelajaran;
use App\Guru_Matapelajaran;
use App\Ruang_Kelas;
use Illuminate\Support\Facades\Input;
class Jadwal_MatapelajaranController extends Controller
{
  protected $guarded = ['id'];
  protected $informasi="Gagal Melakukan Aksi";
    public function awal()
    {
      $semuaJadwalMatapelajaran=Jadwal_Matapelajaran::all();
    return view('jadwal_matapelajaran.awal',compact('semuaJadwalMatapelajaran'));
    }
public function tambah()
    {
      $ruang_kelas= new Ruang_Kelas;
      $guru_matapelajaran= new Guru_Matapelajaran;
      return view('jadwal_matapelajaran.tambah',compact('ruang_kelas','guru_matapelajaran'));
    }


public function simpan(Jadwal_MatapelajaranRequest $input){
   $jadwal_matapelajaran = new Jadwal_Matapelajaran($input->only('ruang_kelas_id','guru_matapelajaran_id'));
   if ($jadwal_matapelajaran->save()) $this->informasi="Jadwal telah Berhasil Disimpan";
   return redirect('jadwal_matapelajaran')->with(['informasi'=>$this->informasi]);
 }
  
public function edit($id){
$jadwal_matapelajaran=Jadwal_Matapelajaran::find($id);
$ruang_kelas= new Ruang_Kelas;
$guru_matapelajaran= new Guru_Matapelajaran;
return view('jadwal_matapelajaran.edit',compact('ruang_kelas','guru_matapelajaran','jadwal_matapelajaran'));
}
public function lihat($id){
  $jadwal_matapelajaran=Jadwal_Matapelajaran::find($id);
  return view('jadwal_matapelajaran.lihat')->with(array('jadwal_matapelajaran'=>$jadwal_matapelajaran));
}
public function update($id, Jadwal_MatapelajaranRequest $input){
  $jadwal_matapelajaran=Jadwal_Matapelajaran::find($id);
  $jadwal_matapelajaran->ruang_kelas_id =$input->ruang_kelas_id;
   $jadwal_matapelajaran->guru_matapelajaran_id =$input->guru_matapelajaran_id;
   $informasi=$jadwal_matapelajaran->save()?'berhasil update data':'gagal update data';
  return redirect('jadwal_matapelajaran')->with(['informasi'=>$informasi]);
}
public function hapus($id){
        $jadwal_matapelajaran=Jadwal_Matapelajaran::find($id);
        $informasi=$jadwal_matapelajaran->delete()?'Berhasil hapus data':'Gagal hapus data';
        return redirect('jadwal_matapelajaran')->with(['informasi'=>$informasi]);
    }
}
