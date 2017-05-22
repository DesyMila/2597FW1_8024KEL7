<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mata_Pelajaran;
use App\Http\Requests;
use App\Http\Requests\Mata_PelajaranRequest;
use Illuminate\Support\Facades\Input;
class Mata_PelajaranController extends Controller
{
    public function awal(){
    $semuaMata_Pelajaran = Mata_Pelajaran::all();
   	return view('mata_pelajaran.awal',compact('semuaMata_Pelajaran'));
}
public function tambah(){
	return view('mata_pelajaran.tambah');
}
public function simpan(Mata_PelajaranRequest $input)
{
	$mata_pelajaran = new Mata_Pelajaran();
	$mata_pelajaran->nama_matapelajaran =$input->nama_matapelajaran;
	$informasi=$mata_pelajaran->save()?'berhasil simpan data':'gagal simpan data';
	return redirect('mata_pelajaran')->with(['informasi'=>$informasi]);
}  
public function edit($id){
$mata_pelajaran=Mata_Pelajaran::find($id);
return view('mata_pelajaran.edit')->with(array('mata_pelajaran'=>$mata_pelajaran));
}
public function lihat($id){
	$mata_pelajaran=Mata_Pelajaran::find($id);
	return view('mata_pelajaran.lihat')->with(array('mata_pelajaran'=>$mata_pelajaran));
}
public function update($id, Mata_PelajaranRequest $input){
	$mata_pelajaran=Mata_Pelajaran::find($id);
	$mata_pelajaran->nama_matapelajaran =$input->nama_matapelajaran;
	$informasi=$mata_pelajaran->save()?'berhasil update data':'gagal update data';
	return redirect('mata_pelajaran')->with(['informasi'=>$informasi]);
}
public function hapus($id){
        $mata_pelajaran=Mata_Pelajaran::find($id);
        $informasi=$mata_pelajaran->delete()?'Berhasil hapus data':'Gagal hapus data';
        return redirect('mata_pelajaran')->with(['informasi'=>$informasi]);
    }
}
