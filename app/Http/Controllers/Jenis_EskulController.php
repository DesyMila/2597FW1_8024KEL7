<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\jenis_eskul;
use App\Http\Requests\Jenis_EskulRequest;
use Illuminate\Support\Facades\Input;
class Jenis_EskulController extends Controller
{
   public function awal(){
   	$semuaJenis_Eskul = Jenis_Eskul::all();
   	return view('jenis_eskul.awal',compact('semuaJenis_Eskul'));
}
public function tambah(){
	return view('jenis_eskul.tambah');
}
public function simpan(Jenis_EskulRequest $input)
{
	$jenis_eskul = new Jenis_Eskul();
	$jenis_eskul->nama_eskul =$input->nama_eskul;
	$jenis_eskul->keterangan =$input->keterangan;
	$informasi=$jenis_eskul->save()?'berhasil simpan data':'gagal simpan data';
	return redirect('jenis_eskul')->with(['informasi'=>$informasi]);
}  
public function edit($id){
$jenis_eskul=Jenis_Eskul::find($id);
return view('jenis_eskul.edit')->with(array('jenis_eskul'=>$jenis_eskul));
}
public function lihat($id){
	$jenis_eskul=Jenis_Eskul::find($id);
	return view('jenis_eskul.lihat')->with(array('jenis_eskul'=>$jenis_eskul));
}
public function update($id, Jenis_EskulRequest $input){
	$jenis_eskul=Jenis_Eskul::find($id);
	$jenis_eskul->nama_eskul =$input->nama_eskul;
	$jenis_eskul->keterangan =$input->keterangan;
	$informasi=$jenis_eskul->save()?'berhasil update data':'gagal update data';
	return redirect('jenis_eskul')->with(['informasi'=>$informasi]);
}
public function hapus($id){
        $jenis_eskul=Jenis_Eskul::find($id);
        $informasi=$jenis_eskul->delete()?'Berhasil hapus data':'Gagal hapus data';
        return redirect('jenis_eskul')->with(['informasi'=>$informasi]);
    }
}
