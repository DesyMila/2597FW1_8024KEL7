<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Kepala_Sekolah;
use App\Pengguna;
use Auth;
use validator;
use App\Http\Requests\Kepala_SekolahRequest;
use Illuminate\Support\Facades\Input;
class Kepala_SekolahController extends Controller
{
protected $informasi='Gagal melakukan aksi';
   public function awal()
    {   
        $semuaKepala_Sekolah = kepala_sekolah::all();
   	return view('kepala_sekolah.awal',compact('semuaKepala_Sekolah'));
    }
public function tambah()
    {
    	return view('kepala_sekolah.tambah');
    }
  public function simpan(Kepala_SekolahRequest $input){
    $pengguna = new Pengguna($input->only('username','password','level'));
    if ($pengguna->save()) {
        $kepala_sekolah= new Kepala_Sekolah();
    $kepala_sekolah->nama=$input->nama;
    $kepala_sekolah->nip =$input->nip;
    $kepala_sekolah->alamat =$input->alamat;
    if ($pengguna->Kepala_Sekolah()->save($kepala_sekolah)) $this->informasi='Berhasil Simpan Data';
    }
    return redirect('kepala_sekolah')->with(['informasi'=>$this->informasi]);
}
public function edit($id){
$kepala_sekolah= Kepala_Sekolah::find($id);
return view('kepala_sekolah.edit')->with(array('kepala_sekolah'=>$kepala_sekolah));
}
public function lihat($id){
	$kepala_sekolah= Kepala_Sekolah::find($id);
	return view('kepala_sekolah.lihat')->with(array('kepala_sekolah'=>$kepala_sekolah));
}
public function update($id, Kepala_SekolahRequest $input){
	$kepala_sekolah=Kepala_Sekolah::find($id);
    $pengguna=$kepala_sekolah->pengguna;
    $kepala_sekolah->nama=$input->nama;
    $kepala_sekolah->nip =$input->nip;
    $kepala_sekolah->alamat =$input->alamat;
    $kepala_sekolah->save();
    if (!is_null($input->username)){
        $pengguna->fill($input->only('username'));
        if (!empty($input->password)) {
            $pengguna->password=$input->password;
        }
        if ($pengguna->save()) {
            $this->informasi='berhasil Simpan Data';
        }
        else{
            $this->informasi='Gagal Simpan Data';
        }
    }
    return redirect('kepala_sekolah')->with(['informasi'=>$this->informasi]);
}
public function hapus($id){
        $kepala_sekolah=Kepala_Sekolah::find($id);
        if ($kepala_sekolah->Pengguna()->delete()) {
            if ($kepala_sekolah->delete()) {
                $this->informasi='Berhasil Hapus Data';
            }
        }
        return redirect('kepala_sekolah')->with(['informasi'=>$this->informasi]);
    }
}
