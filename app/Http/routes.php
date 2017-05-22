<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/login','SesiController@form');
Route::post('/login','SesiController@validasi');
Route::get('/logout','SesiController@logout');
Route::get('/','SesiController@index');
Route::group(['middleware'=>'staff'],function()
{
Route::get('/master','SesiController@staff');
Route::get('pengguna','PenggunaController@awal');
Route::get('pengguna/tambah','PenggunaController@tambah');
Route::get('pengguna/{pengguna}','PenggunaController@lihat');
Route::post('pengguna/simpan','PenggunaController@simpan');
Route::get('pengguna/edit/{pengguna}','PenggunaController@edit');
Route::post('pengguna/edit/{pengguna}','PenggunaController@update');
Route::get('pengguna/hapus/{pengguna}','PenggunaController@hapus');

Route::get('siswa','SiswaController@awal');
Route::get('siswa/tambah','SiswaController@tambah');
Route::get('siswa/{siswa}','SiswaController@lihat');
Route::post('siswa/simpan','SiswaController@simpan');
Route::get('siswa/edit/{siswa}','SiswaController@edit');
Route::post('siswa/edit/{siswa}','SiswaController@update');
Route::get('siswa/hapus/{siswa}','SiswaController@hapus');

Route::get('guru','GuruController@awal');
Route::get('guru/tambah','GuruController@tambah');
Route::get('guru/{guru}','GuruController@lihat');
Route::post('guru/simpan','GuruController@simpan');
Route::get('guru/edit/{guru}','GuruController@edit');
Route::post('guru/edit/{guru}','GuruController@update');
Route::get('guru/hapus/{guru}','GuruController@hapus');

Route::get('staff','StaffController@awal');
Route::get('staff/tambah','StaffController@tambah');
Route::get('staff/{staff}','StaffController@lihat');
Route::post('staff/simpan','StaffController@simpan');
Route::get('staff/edit/{staff}','StaffController@edit');
Route::post('staff/edit/{staff}','StaffController@update');
Route::get('staff/hapus/{staff}','StaffController@hapus');

Route::get('kepala_sekolah','Kepala_SekolahController@awal');
Route::get('kepala_sekolah/tambah','Kepala_SekolahController@tambah');
Route::get('kepala_sekolah/{kepala_sekolah}','Kepala_SekolahController@lihat');
Route::post('kepala_sekolah/simpan','Kepala_SekolahController@simpan');
Route::get('kepala_sekolah/edit/{kepala_sekolah}','Kepala_SekolahController@edit');
Route::post('kepala_sekolah/edit/{kepala_sekolah}','Kepala_SekolahController@update');
Route::get('kepala_sekolah/hapus/{kepala_sekolah}','Kepala_SekolahController@hapus');

Route::get('mata_pelajaran','Mata_PelajaranController@awal');
Route::get('mata_pelajaran/tambah','Mata_PelajaranController@tambah');
Route::get('mata_pelajaran/{mata_pelajaran}','Mata_PelajaranController@lihat');
Route::post('mata_pelajaran/simpan','Mata_PelajaranController@simpan');
Route::get('mata_pelajaran/edit/{mata_pelajaran}','Mata_PelajaranController@edit');
Route::post('mata_pelajaran/edit/{mata_pelajaran}','Mata_PelajaranController@update');
Route::get('mata_pelajaran/hapus/{mata_pelajaran}','Mata_PelajaranController@hapus');

Route::get('guru_matapelajaran','Guru_MatapelajaranController@awal');
Route::get('guru_matapelajaran/tambah','Guru_MatapelajaranController@tambah');
Route::get('guru_matapelajaran/{guru_matapelajaran}','Guru_MatapelajaranController@lihat');
Route::post('guru_matapelajaran/simpan','Guru_MatapelajaranController@simpan');
Route::get('guru_matapelajaran/edit/{guru_matapelajaran}','Guru_MatapelajaranController@edit');
Route::post('guru_matapelajaran/edit/{guru_matapelajaran}','Guru_MatapelajaranController@update');
Route::get('guru_matapelajaran/hapus/{guru_matapelajaran}','Guru_MatapelajaranController@hapus');

Route::get('jadwal_matapelajaran','Jadwal_MatapelajaranController@awal');
Route::get('jadwal_matapelajaran/tambah','Jadwal_MatapelajaranController@tambah');
Route::get('jadwal_matapelajaran/{jadwal_matapelajaran}','Jadwal_MatapelajaranController@lihat');
Route::post('jadwal_matapelajaran/simpan','Jadwal_MatapelajaranController@simpan');
Route::get('jadwal_matapelajaran/edit/{jadwal_matapelajaran}','Jadwal_MatapelajaranController@edit');
Route::post('jadwal_matapelajaran/edit/{jadwal_matapelajaran}','Jadwal_MatapelajaranController@update');
Route::get('jadwal_matapelajaran/hapus/{jadwal_matapelajaran}','Jadwal_MatapelajaranController@hapus');

Route::get('ruang_kelas','Ruang_KelasController@awal');
Route::get('ruang_kelas/tambah','Ruang_KelasController@tambah');
Route::get('ruang_kelas/{ruang_kelas}','Ruang_KelasController@lihat');
Route::post('ruang_kelas/simpan','Ruang_KelasController@simpan');
Route::get('ruang_kelas/edit/{ruang_kelas}','Ruang_KelasController@edit');
Route::post('ruang_kelas/edit/{ruang_kelas}','Ruang_KelasController@update');
Route::get('ruang_kelas/hapus/{ruang_kelas}','Ruang_KelasController@hapus');

Route::get('jenis_eskul','Jenis_EskulController@awal');
Route::get('jenis_eskul/tambah','Jenis_EskulController@tambah');
Route::get('jenis_eskul/{jenis_eskul}','Jenis_EskulController@lihat');
Route::post('jenis_eskul/simpan','Jenis_EskulController@simpan');
Route::get('jenis_eskul/edit/{jenis_eskul}','Jenis_EskulController@edit');
Route::post('jenis_eskul/edit/{jenis_eskul}','Jenis_EskulController@update');
Route::get('jenis_eskul/hapus/{jenis_eskul}','Jenis_EskulController@hapus');

Route::get('eskul_siswa','Eskul_SiswaController@awal');
Route::get('eskul_siswa/tambah','Eskul_SiswaController@tambah');
Route::get('eskul_siswa/{eskul_siswa}','Eskul_SiswaController@lihat');
Route::post('eskul_siswa/simpan','Eskul_SiswaController@simpan');
Route::get('eskul_siswa/edit/{eskul_siswa}','Eskul_SiswaController@edit');
Route::post('eskul_siswa/edit/{eskul_siswa}','Eskul_SiswaController@update');
Route::get('eskul_siswa/hapus/{eskul_siswa}','Eskul_SiswaController@hapus');
});
//kepala sekolah
Route::group(['middleware'=>'kepala'],function()
{
Route::get('/master_kepala','SesiController@kepala_sekolah');
Route::get('guru_matapelajaran_kepsek','levelController@guru_matapelajaran_kepsek');
Route::get('matapelajaran_kepsek','levelController@matapelajaran_kepsek');
Route::get('jadwal_matapelajaran_kepsek','levelController@jadwal_matapelajaran_kepsek');
Route::get('ruangan_kepsek','levelController@ruangan_kepsek');
Route::get('eskul_kepsek','levelController@eskul_kepsek');
Route::get('siswa_kepsek','levelController@siswa_kepsek');
Route::get('jeniseskul_kepsek','levelController@jeniseskul_kepsek');
Route::get('staff_kepsek','levelController@staff_kepsek');
Route::get('guru_kepsek','levelController@guru_kepsek');
Route::get('kepsek_edit/edit/{kepala_sekolah}','levelController@edit_kepsek');
Route::post('kepsek_edit/edit/{kepala_sekolah}','levelController@update_kepsek');
});
//siswa
Route::group(['middleware'=>'siswa'],function(){
Route::get('/master_siswa','SesiController@siswa');
Route::get('siswa_siswa','levelController@siswa_siswa');
Route::get('siswa_sw/{siswa}','SesiController@siswa');
Route::get('jeniseskul_siswa','levelController@jeniseskul_siswa');
Route::get('eskul_siswa_siswa','levelController@eskul_siswa_siswa');
Route::get('jadwal_matapelajaran_siswa','levelController@jadwal_matapelajaran_siswa');
Route::get('eskul/tambah','levelController@eskul_siswa');
Route::get('siswa_edit/edit/{siswa}','levelController@edit_siswa');
Route::post('siswa_edit/edit/{siswa}','levelController@update_siswa');
Route::get('eskul_siswa/edit/{eskul_siswa}','levelController@edit_eskul');
Route::post('eskul_siswa/edit/{eskul_siswa}','levelController@update_eskul');
});
//guru
Route::group(['middleware'=>'guru'],function(){
Route::get('/master_guru','SesiController@guru');
Route::get('matapelajaran_guru','levelController@guru_matapelajaran_guru');	
Route::get('jadwal_matapelajaran_guru','levelController@jadwal_guru');
Route::post('guru_edit/edit/{guru}','levelController@update_guru');
Route::post('guru_edit/edit/{guru}','levelController@edit_guru');
});
Route::get('about', function(){
	return view ('about');
});