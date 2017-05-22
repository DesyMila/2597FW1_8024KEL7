@extends ('master_kepala')
@section ('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong> Seluruh Data Siswa</strong>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
		<tr>
			<th>NO.</th>
			<th>Nama</th>
			<th>NIS</th>
			<th>Alamat</th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1;?>
			@foreach ($semuaSiswa as $siswa)
			<tr>
				<td>{{$x++}}</td>
				<td>{{$siswa->nama or 'username kosong'}}</td>
				<td>{{$siswa->nis or 'password Kosong'}}</td>
				<td>{{$siswa->alamat or 'password Kosong'}}</td>
				<td>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop