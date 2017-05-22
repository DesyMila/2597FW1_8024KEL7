<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Pengguna;
use App\Siswa;
use App\Staff;
use App\Guru;
use App\Kepala_sekolah;
use Illuminate\Auth\SessionGuard;
use Auth;
use Illuminate\Support\Facades\Input;
class SesiController extends Controller
{
    public function index()
    {
      return view('home');
    }
    public function form()
    {
      if (Auth::check()){
         return redirect('/');
      }
      return view('login');
    }
    public function validasi(Request $input){
      $this->validate($input,[
         'username'=>'required',
         'password'=>'required',
         ]);
      $pengguna = Pengguna::where($input->only('username','password'))->first();
      if(!is_null($pengguna)){
         Auth::login($pengguna);
         if(Auth::check()){
                if(Auth::user()->level == 'staff'){
                  return redirect('/master')->with('informasi',"selamat datang ".Auth::user()->username);        
                }else if (Auth::user()->level == 'siswa') {
                    return redirect('/master_siswa')->with('informasi',"selamat datang ".Auth::user()->username);
                }else if (Auth::user()->level == 'guru') {
                    return redirect('/master_guru')->with('informasi',"selamat datang ".Auth::user()->username);
                }else if (Auth::user()->level == 'kepala') {
                    return redirect('/master_kepala')->with('informasi',"selamat datang ".Auth::user()->username);
                }
            }
         return redirect('/')->with('informasi',"selamat datang ".Auth::user()->username);
      }
   else{
      return redirect('/login')->withErrors(['pengguna tidak ditemukan']);
   }
}
      public function logout(){
         if(Auth::check()){
            Auth::logout();
            return redirect('/')->withErrors(['silahkan login untuk masuk kesistem']);
         }else{
            return redirect('/')->withErrors(['silahkan login terlebih dahulu']);
         }
         
      }
         public function siswa(){
            $siswa = Siswa::where('pengguna_id','=',Auth::user()->id)->get();
            return view('master_siswa.awal',compact('siswa'));
        }
        public function guru(){
            $guru = Guru::where('pengguna_id','=',Auth::user()->id)->get();
            return view('master_guru.awal',compact('guru'));
        }
        public function kepala_sekolah(){
            $kepala_sekolah = Kepala_sekolah::where('pengguna_id','=',Auth::user()->id)->get();
            return view('master_kepala',compact('kepala_sekolah'));
        }
        public function staff(){
            $staff = Staff::where('pengguna_id','=',Auth::user()->id)->get();
            return view('/master',compact('staff'));
        }
}
