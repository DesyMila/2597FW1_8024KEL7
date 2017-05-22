@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{url('eskul_siswa')}}"><i style="#8a6b3b" class="fa text=default fa-chevron-left"></i></a>Detail Data Ekstrakulikuler Siswa</strong>
	</div>
	<table class="table">
		<tr>
			<td>Nama Siswa</td>
			<td>:</td>
			<td>{{$eskul_siswa->siswa->nama}}</td>
		</tr>
		<tr>
			<td>NIS Siswa</td>
			<td>:</td>
			<td>{{$eskul_siswa->siswa->nis}}</td>
		</tr>
		<tr>
			<td>Jenis Ekstrakulikuler </td>
			<td>:</td>
			<td>{{$eskul_siswa->jenis_eskul->nama_eskul}}</td>
		</tr>		
		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$eskul_siswa->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diperbarui Tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$eskul_siswa->updated_at}}</td>
		</tr>
	</table>
</div>
@stop