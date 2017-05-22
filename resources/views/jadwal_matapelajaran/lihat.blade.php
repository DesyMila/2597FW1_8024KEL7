@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{url('jadwal_matapelajaran')}}"><i style="#8a6b3b" class="fa text=default fa-chevron-left"></i></a>Detail Data Jadwal Mata Pelajaran</strong>
	</div>
	<table class="table">
		<tr>
			<td>Nama Guru </td>
			<td>:</td>
			<td>{{$jadwal_matapelajaran->guru_matapelajaran->guru->nama}}</td>
		</tr>
		<tr>
			<td>Nama Mata Pelajaran</td>
			<td>:</td>
			<td>{{$jadwal_matapelajaran->guru_matapelajaran->mata_pelajaran->nama_matapelajaran}}</td>
		</tr>
		</tr>
		<tr>
			<td>Ruang Kelas</td>
			<td>:</td>
			<td>{{$jadwal_matapelajaran->ruang_kelas->nama_ruangan}}</td>
		</tr>		
		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$jadwal_matapelajaran->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diperbarui Tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$jadwal_matapelajaran->updated_at}}</td>
		</tr>
	</table>
</div>
@stop