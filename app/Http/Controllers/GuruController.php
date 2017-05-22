<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Guru;
use App\Pengguna;
use Auth;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\GuruRequest;
class GuruController extends Controller
{
protected $informasi='Gagal melakukan aksi';
   public function awal()
    {
        $semuaGuru = Guru::all();
   	return view('guru.awal',compact('semuaGuru'));
    }
public function tambah()
    {
    	return view('guru.tambah');
    }
  public function simpan(GuruRequest $input){
    $pengguna = new Pengguna($input->only('username','password','level'));
    if ($pengguna->save()) {
        $guru= new guru();
    	$guru->nama=$input->nama;
    	$guru->nip =$input->nip;
    	$guru->alamat =$input->alamat;
        if ($pengguna->guru()->save($guru)) $this->informasi='Berhasil Simpan Data';
    }
    return redirect('guru')->with(['informasi'=>$this->informasi]);
}
public function edit($id){
$guru= Guru::find($id);
return view('guru.edit')->with(array('guru'=>$guru));
}
public function lihat($id){
	$guru= Guru::find($id);
	return view('guru.lihat')->with(array('guru'=>$guru));
}
public function update($id, GuruRequest $input){
	$guru=Guru::find($id);
    $pengguna=$guru->pengguna;
    $guru->nama=$input->nama;
    $guru->nip =$input->nip;
    $guru->alamat =$input->alamat;
    $guru->save();
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
    return redirect('guru')->with(['informasi'=>$this->informasi]);
}
public function hapus($id){
        $guru=Guru::find($id);
        if ($guru->Pengguna()->delete()) {
            if ($guru->delete()) {
                $this->informasi='Berhasil Hapus Data';
            }
        }
        return redirect('guru')->with(['informasi'=>$this->informasi]);
    }
}
