@extends ('master_siswa')
@section ('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong> Seluruh Data Matapelajaran</strong>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
		<tr>
			<th>NO.</th>
			<th>Ruangan</th>
			<th>Nama Mata Pelajaran</th>
			<th>Guru Mengajar</th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1;?>
			@foreach ($semuaJadwal_Matapelajaran as $jadwal_matapelajaran)
			<tr>
				<td>{{$x++}}</td>
				<td>{{$jadwal_matapelajaran->ruang_kelas->nama_ruangan or 'Ruangan kosong'}}</td>
				<td>{{$jadwal_matapelajaran->guru_matapelajaran->mata_pelajaran->nama_matapelajaran or 'Matapelajaran Kosong'}}</td>
				<td>{{$jadwal_matapelajaran->guru_matapelajaran->guru->nama or 'Matapelajaran Kosong'}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop