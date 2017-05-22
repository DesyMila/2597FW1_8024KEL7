<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Staff;
use App\Pengguna;
use App\Http\Requests\StaffRequest;
use Illuminate\Support\Facades\Input;
use Auth;
class StaffController extends Controller
{
protected $informasi='Gagal melakukan aksi';
   public function awal()
    {
        $semuaStaff = Staff::all();
   	return view('staff.awal',compact('semuaStaff','staff'));
    }
public function tambah()
    {
    	return view('staff.tambah');
    }
  public function simpan(StaffRequest $input){
    $pengguna = new Pengguna($input->only('username','password','level'));
    if ($pengguna->save()) {
        $staff= new Staff();
    $staff->nama=$input->nama;
    $staff->nip =$input->nip;
    $staff->alamat =$input->alamat;
    if ($pengguna->staff()->save($staff)) $this->informasi='Berhasil Simpan Data';
    }
    return redirect('staff')->with(['informasi'=>$this->informasi]);
}
public function edit($id){
$staff= Staff::find($id);
return view('staff.edit')->with(array('staff'=>$staff));
}
public function lihat($id){
	$staff= Staff::find($id);
	return view('staff.lihat')->with(array('staff'=>$staff));
}
public function update($id, StaffRequest $input){
	$staff=Staff::find($id);
    $pengguna=$staff->pengguna;
    $staff->nama=$input->nama;
    $staff->nip =$input->nip;
    $staff->alamat =$input->alamat;
    $staff->save();
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
    return redirect('staff')->with(['informasi'=>$this->informasi]);
}
public function hapus($id){
        $staff=Staff::find($id);
        if ($staff->pengguna()->delete()) {
            if ($staff->delete()) {
                $this->informasi='Berhasil Hapus Data';
            }
        }
        return redirect('staff')->with(['informasi'=>$this->informasi]);
    }
}
