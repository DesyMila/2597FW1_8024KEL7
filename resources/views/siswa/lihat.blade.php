@extends('master')
@section('container')


<div class="panel panel-warning">
<div class="panel-heading">
	<strong>
	Detail Data Siswa</strong>
	</div>
	<table class="table">
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td>{{ $siswa->nama }}</td>
		</tr>

		<tr>
			<td>NIS</td>
			<td>:</td>
			<td>{{ $siswa->nis }}</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td>{{ $siswa->alamat }}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$siswa->created_at }}</td>
		</tr>

		<tr>
			<td class="col-xs-4">Diperbarui tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$siswa->updated_at }}</td>
		</tr>
	</table>
</div>
@stop 