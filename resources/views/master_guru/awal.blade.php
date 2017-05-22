@extends('master_guru')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
	@foreach($guru as $guru)
		<strong>Data {{$guru->nama}}</strong>
	</div>
	<table class="table">
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td>{{ $guru->nama }}</td>
		</tr>

		<tr>
			<td>NIP</td>
			<td>:</td>
			<td>{{ $guru->nip }}</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td>{{ $guru->alamat }}</td>
		</tr>

		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$guru->created_at }}</td>
		</tr>

		<tr>
			<td class="col-xs-4">Diperbarui tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$guru->updated_at }}</td>
		</tr>
	</table>
	@endforeach
@stop
