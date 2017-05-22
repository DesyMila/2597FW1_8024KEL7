@extends ('master_kepala')
@section ('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong> Seluruh Data Jadwal</strong>
			<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
		<tr>
			<th>NO.</th>
			<th>Nama Guru</th>
			<th>Nama Matapelajaran</th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1;?>
			@foreach ($semuaGuru_Matapelajaran as $guru_matapelajaran)
			<tr>
				<td>{{$x++}}</td>
				<td>{{$guru_matapelajaran->guru->nama or 'matakuliah id Kosong'}}</td>
				<td>{{$guru_matapelajaran->mata_pelajaran->nama_matapelajaran or 'dosen id kosong'}}</td>
				
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop