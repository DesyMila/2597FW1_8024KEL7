@extends ('master_kepala')
@section ('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong> Seluruh Data Guru</strong>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
		<tr>
			<th>NO.</th>
			<th>Nama</th>
			<th>Nip</th>
			<th>Alamat</th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1;?>
			@foreach ($semuaGuru as $guru)
			<tr>
				<td>{{$x++}}</td>
				<td>{{$guru->nama or 'nama kosong'}}</td>
				<td>{{$guru->nip or 'nip Kosong'}}</td>
				<td>{{$guru->alamat or 'alamat kosong'}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop