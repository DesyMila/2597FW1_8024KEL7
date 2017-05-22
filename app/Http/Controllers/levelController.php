<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Auth\SessionGuard;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\Kepala_SekolahRequest;
use App\Http\Requests\SiswaRequest;
use App\Http\Requests\Eskul_SiswaRequest;
use App\Http\Requests\GuruRequest;
use Auth;
use App\Pengguna;
use App\Siswa;
use App\Staff;
use App\Guru;
use App\Kepala_sekolah;
use App\Jadwal_Matapelajaran;
use App\Guru_Matapelajaran;
use App\Jenis_Eskul;
use App\Eskul_siswa;
use App\Mata_Pelajaran;
use App\Ruang_Kelas;
class levelController extends Controller
{
       
        public function guru_kepsek(){
        $kepala_sekolah= Kepala_sekolah::where('pengguna_id','=',Auth::user()->id)->get();   
        $semuaGuru = Guru::all();
            return view('master_kepala.guru',compact('semuaGuru','kepala_sekolah'));
        }
        public function siswa_kepsek(){   
        $kepala_sekolah= Kepala_sekolah::where('pengguna_id','=',Auth::user()->id)->get();
        $semuaSiswa = Siswa::all();
            return view('master_kepala.siswa',compact('semuaSiswa','kepala_sekolah'));
        }
        public function siswa_siswa(){   
        $kepala_sekolah= Kepala_sekolah::where('pengguna_id','=',Auth::user()->id)->get();
            return view('master_siswa.awal',compact('kepala_sekolah'));
        }
        public function staff_kepsek(){   
        $kepala_sekolah= Kepala_sekolah::where('pengguna_id','=',Auth::user()->id)->get();
        $semuaStaff = Staff::all();
        return view('master_kepala.staff',compact('semuaStaff','kepala_sekolah'));
        }
        public function ruangan_kepsek()
        {
        $kepala_sekolah= Kepala_sekolah::where('pengguna_id','=',Auth::user()->id)->get();
        return view('master_kepala.ruang_kelas',['data'=>Ruang_Kelas::all()], compact('kepala_sekolah'));
        }
        public function eskul_kepsek(){   
        $kepala_sekolah= Kepala_sekolah::where('pengguna_id','=',Auth::user()->id)->get();
        $semuaEskul_Siswa = Eskul_siswa::all();
        return view('master_kepala.eskul_siswa',compact('semuaEskul_Siswa','kepala_sekolah'));
        }
        public function jeniseskul_kepsek(){   
        $kepala_sekolah= Kepala_sekolah::where('pengguna_id','=',Auth::user()->id)->get();
            $semuaJenis_Eskul = Jenis_Eskul::all();
            return view('master_kepala.jenis_eskul',compact('semuaJenis_Eskul','kepala_sekolah'));
        }
        public function guru_matapelajaran_kepsek(){   
        $kepala_sekolah= Kepala_sekolah::where('pengguna_id','=',Auth::user()->id)->get();
        $semuaGuru_Matapelajaran = Guru_Matapelajaran::all();
        return view('master_kepala.guru_matapelajaran',compact('semuaGuru_Matapelajaran','kepala_sekolah'));
        }
        public function matapelajaran_kepsek(){   
        $kepala_sekolah= Kepala_sekolah::where('pengguna_id','=',Auth::user()->id)->get();
        $semuaMataPelajaran = Mata_Pelajaran::all();
        return view('master_kepala.matapelajaran',compact('semuaMataPelajaran','kepala_sekolah'));
        }
        public function jadwal_matapelajaran_kepsek(){   
 
            $semuaJadwal_Matapelajaran = Jadwal_Matapelajaran::all();
            return view('master_kepala.jadwal_matapelajaran',compact('semuaJadwal_Matapelajaran','kepala_sekolah'));
        }
        public function edit_kepsek($id){
           $kepala_sekolah= Kepala_sekolah::where('pengguna_id','=',Auth::user()->id)->get();
           $kepala_sekolah= Kepala_Sekolah::find($id);
            return view('master_kepala.edit')->with(array('kepala_sekolah'=>$kepala_sekolah));
        }
        public function update_kepsek($id, Kepala_SekolahRequest $input)
        {
        $kepala_sekolah=Kepala_sekolah::find($id);
        $pengguna = $kepala_sekolah->pengguna;
        $kepala_sekolah->nama = $input->nama;
        $kepala_sekolah->nip = $input->nip;
        $kepala_sekolah->alamat = $input->alamat;
        $kepala_sekolah->save();
        if(!is_null($input->username)){
            $pengguna->fill($input->only('username'));
            if(!empty($input->password)){
                $pengguna->password = $input->password;
            }
            if($pengguna->save()){
                $this->informasi = 'Berhasil Simpan Data';
            }else{
                $this->informasi = 'Gagal Simpan Data';
            }
        }
        return redirect('master_kepala')->with(['informasi'=>$this->informasi]);
    }
    public function jeniseskul_siswa(){   
            $semuaJenis_Eskul = Jenis_Eskul::all();
            return view('master_siswa.jenis_eskul',compact('semuaJenis_Eskul','siswa'));
        }
    public function jadwal_matapelajaran_siswa(){   
            $semuaJadwal_Matapelajaran = Jadwal_Matapelajaran::all();
            return view('master_siswa.jadwal_matapelajaran',compact('semuaJadwal_Matapelajaran','siswa'));
        }
        public function edit_siswa($id){
           $siswa= Siswa::where('pengguna_id','=',Auth::user()->id)->get();
           $murid=Siswa::find($id);
           return view ('master_siswa.edit_eskul',compact('siswa'))->with(array('murid' =>$murid));
        }
        public function update_siswa($id, SiswaRequest $input)
        {
        $siswa=Siswa::find($id);
        $pengguna = $siswa->pengguna;
        $siswa->nama = $input->nama;
        $siswa->alamat = $input->alamat;
        $siswa->save();
    
                if(!empty($input->password)){
                    $pengguna->password = $input->password;
                }
                    if($pengguna->save()){
                    $this->informasi = 'Berhasil Simpan Data';
                }else{
                    $this->informasi = 'Gagal Simpan Data';
                }   
        
        return redirect('master_siswa')->with(['informasi'=>$this->informasi]);

    }
    
    public function jadwal_guru(){   
            $semuaJadwal_Matapelajaran = Jadwal_Matapelajaran::all();
            return view('master_guru.jadwal_matapelajaran',compact('semuaJadwal_Matapelajaran','guru'));
    }
    public function guru_matapelajaran_guru(){   
        $guru= Guru::where('pengguna_id','=',Auth::user()->id)->get();
        $semuaGuru_Matapelajaran = Guru_Matapelajaran::all();
        return view('master_guru.guru_matapelajaran',compact('semuaGuru_Matapelajaran','guru'));
        }
    public function guru_siswa(){
       $siswa= Siswa::where('pengguna_id','=',Auth::user()->id)->get();   
        $semuaGuru = Guru::all();
            return view('guru.lihat',compact('semuaGuru','siswa'));
        }
//eskul siswa
     public function eskul_siswa_siswa()
    {       $siswa= Siswa::where('pengguna_id','=',Auth::user()->id)->get();
           $semuaEskul_Siswa = Eskul_siswa::all();
            return view('master_siswa.eskul_siswa', compact('semuaEskul_Siswa','siswa'));
 } 
}