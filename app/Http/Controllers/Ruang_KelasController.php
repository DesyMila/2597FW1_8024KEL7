<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ruang_Kelas;
use App\Http\Requests;
use App\Http\Requests\Ruang_KelasRequest;
use Illuminate\Support\Facades\Input;
class Ruang_KelasController extends Controller
{
    public function awal()
    {
   	return view('ruang_kelas.awal',['data'=>Ruang_Kelas::all()]);
    }
public function tambah()
    {
    	return view('ruang_kelas.tambah');
    }
  public function simpan(Ruang_KelasRequest $input){
      $ruang_kelas = new Ruang_Kelas();
      $ruang_kelas->nama_ruangan = $input->nama_ruangan;
      $informasi=$ruang_kelas->save()?'data dengan telah disimpan':'gagal simpan data';
        return redirect('ruang_kelas')->with(['informasi'=>$informasi]);
    }
    public function edit($id){
        $ruang_kelas= Ruang_Kelas::find($id);
        return view('ruang_kelas.edit')->with(array('ruang_kelas'=>$ruang_kelas));
    }
    public function lihat($id){
        $ruang_kelas=ruang_kelas::find($id);
        return view('ruang_kelas.lihat')->with(array('ruang_kelas'=>$ruang_kelas));
    }
    public function update($id,Ruang_KelasRequest $input){
        $ruang_kelas=Ruang_Kelas::find($id);
        $ruang_kelas->nama_ruangan = $input->nama_ruangan;
        $informasi=$ruang_kelas->save()?'Berhasil update data':'Gagal update data';
        return redirect('ruang_kelas')->with(['informasi'=>$informasi]);
    }
    public function hapus($id){
        $ruang_kelas=Ruang_Kelas::find($id);
        $informasi=$ruang_kelas->delete()?'Berhasil hapus data':'Gagal hapus data';
        return redirect('ruang_kelas')->with(['informasi'=>$informasi]);
    }
}
