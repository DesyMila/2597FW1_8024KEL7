@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong>Detail Data Pengguna</strong>
	</div>
	<table class="table">
		<tr>
			<td>Username</td>
			<td>:</td>
			<td>{{$pengguna->username}}</td>
		</tr>		
		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$pengguna->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diperbarui Tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$pengguna->updated_at}}</td>
		</tr>
	</table>
</div>
@stop