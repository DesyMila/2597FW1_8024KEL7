@extends ('master_siswa')
@section ('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong> Seluruh Data Eskul Siswa</strong>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
		<tr>
			<th>NO.</th>
			<th>Nama siswa</th>
			<th>Jenis Eskul</th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1;?>
			@foreach ($semuaEskul_Siswa as $eskul_siswa)
			<tr>
				<td>{{$x++}}</td>
				<td>{{$eskul_siswa->siswa->nama or 'nama kosong'}}</td>
				<td>{{$eskul_siswa->jenis_eskul->nama_eskul or 'jenis eskul Kosong'}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop