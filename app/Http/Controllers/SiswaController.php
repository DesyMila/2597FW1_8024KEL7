<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Siswa;
use App\Pengguna;
use App\Http\Requests\SiswaRequest;
use Illuminate\Support\Facades\Input;
use Auth;
class SiswaController extends Controller
{
protected $informasi='Gagal melakukan aksi';
   public function awal()
    {
        $semuaSiswa = Siswa::all();
   	return view('siswa.awal',compact('semuaSiswa'));
    }
public function tambah()
    {
    	return view('siswa.tambah');
    }
  public function simpan(SiswaRequest $input){
    $pengguna = new Pengguna($input->only('username','password','level'));
    if ($pengguna->save()) {
        $siswa= new Siswa();
    $siswa->nama=$input->nama;
    $siswa->nis =$input->nis;
    $siswa->alamat =$input->alamat;
    if ($pengguna->siswa()->save($siswa)) $this->informasi='Berhasil Simpan Data';
    }
    return redirect('siswa')->with(['informasi'=>$this->informasi]);
}
public function edit($id){
$siswa= Siswa::find($id);
return view('siswa.edit')->with(array('siswa'=>$siswa));
}
public function lihat($id){
	$siswa= Siswa::find($id);
	return view('siswa.lihat')->with(array('siswa'=>$siswa));
}
public function update($id, SiswaRequest $input){
	$siswa=Siswa::find($id);
    $pengguna=$siswa->pengguna;
    $siswa->nama=$input->nama;
    $siswa->nis =$input->nis;
    $siswa->alamat =$input->alamat;
    $siswa->save();
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
    return redirect('siswa')->with(['informasi'=>$this->informasi]);
}
public function hapus($id){
        $siswa=Siswa::find($id);
        if ($siswa->pengguna()->delete()) {
            if ($siswa->delete()) {
                $this->informasi='Berhasil Hapus Data';
            }
        }
        return redirect('siswa')->with(['informasi'=>$this->informasi]);
    }
}
