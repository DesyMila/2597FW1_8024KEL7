<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Eskul_siswa;
use App\Jenis_Eskul;
use App\Siswa;
use Auth;
use App\Http\Requests\Eskul_SiswaRequest;
use Illuminate\Support\Facades\Input;
class Eskul_SiswaController extends Controller
{
protected $informasi='Gagal melakukan aksi';
   public function awal()
    {
        $semuaEskul_Siswa = Eskul_Siswa::all();
   	return view('eskul_siswa.awal',compact('semuaEskul_Siswa'));
    }
    public function tambah()
    {
    	$siswa= new Siswa;
    	$jenis_eskul= new Jenis_Eskul;
    	return view('eskul_siswa.tambah',compact('siswa','jenis_eskul'));
    }

    public function edit($id){
    $eskul_siswa= Eskul_Siswa::find($id);
    $siswa= new Siswa;
    $jenis_eskul= new Jenis_Eskul;
    return view('eskul_siswa.edit',compact('siswa','jenis_eskul'));
    }
    public function lihat($id){
    $eskul_siswa= Eskul_Siswa::find($id);
    return view('eskul_siswa.lihat')->with(array('eskul_siswa'=>$eskul_siswa));
    }
    public function update($id, Eskul_SiswaRequest $input){
    $eskul_siswa=Eskul_Siswa::find($id);
    $eskul_siswa->siswa_id=$input->siswa_id;
    $eskul_siswa->jenis_eskul_id=$input->jenis_eskul_id;
    $informasi->$Jenis_eskul->save()?'Berhasil update data':'Gagal update data'; 
    return redirect('eskul_siswa')->with(['informasi'=>$informasi]);
    }
    public function hapus($id){
        $eskul_siswa=eskul_siswa::find($id);
        $informasi=$eskul_siswa->delete()?'Berhasil hapus data':'Gagal hapus Data';
        return redirect('eskul_siswa')->with(['informasi'=>$informasi]);
    }
    public function simpan(Eskul_SiswaRequest $input){
    $eskul_siswa = new Eskul_siswa($input->only('siswa_id','jenis_id'));
    if($eskul_siswa->save())$this->informasi="Ekstrakulikuler Telah Berhasil Disimpan";
    $informasi=$eskul_siswa->save()?'berhasil simpan data':'gagal simpan data';
    return redirect('eskul_siswa')->with(['informasi'=>$this->informasi]);
}

    
}
