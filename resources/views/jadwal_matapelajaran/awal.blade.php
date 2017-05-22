@extends ('master')
@section ('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong> Seluruh Data Matapelajaran</strong>
		<a href="{{url('jadwal_matapelajaran/tambah')}}" class="btn btn-xs btn-primary pull-right">
			<i class="fa fa-plus"></i>Jadwal Matapelajaran
		</a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
		<tr>
			<th>NO.</th>
			<th>Ruangan</th>
			<th>Nama Mata Pelajaran</th>
			<th>Guru Mengajar</th>
			<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1;?>
			@foreach ($semuaJadwalMatapelajaran as $jadwal_matapelajaran)
			<tr>
				<td>{{$x++}}</td>
				<td>{{$jadwal_matapelajaran->ruang_kelas->nama_ruangan or 'Ruangan kosong'}}</td>
				<td>{{$jadwal_matapelajaran->guru_matapelajaran->mata_pelajaran->nama_matapelajaran or 'Matapelajaran Kosong'}}</td>
				<td>{{$jadwal_matapelajaran->guru_matapelajaran->guru->nama or 'Matapelajaran Kosong'}}</td>
				<td><div class="btn-group" role="group">
					<a href="{{url('jadwal_matapelajaran/edit/'.$jadwal_matapelajaran->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-palement="top" title="ubah"><i class="fa fa-pencil"></i></a>
					<a href="{{url('jadwal_matapelajaran/'.$jadwal_matapelajaran->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class=" fa fa-eye"></i></a>
					<a href="{{url('jadwal_matapelajaran/hapus/'.$jadwal_matapelajaran->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="glyphicon glyphicon-trash"></i></a>
				</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop