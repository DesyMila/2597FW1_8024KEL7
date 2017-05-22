@extends ('master')
@section ('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong> Seluruh Data Jadwal</strong>
		<a href="{{url('guru_matapelajaran/tambah')}}" class="btn btn-xs btn-primary pull-right">
			<i class="fa fa-plus"></i>Dosen Matakuliah
		</a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
		<tr>
			<th>NO.</th>
			<th>Nama Guru</th>
			<th>Nama Matapelajaran</th>
			<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1;?>
			@foreach ($semuaGuru_Matapelajaran as $guru_matapelajaran)
			<tr>
				<td>{{$x++}}</td>
				<td>{{$guru_matapelajaran->guru->nama or 'matakuliah id Kosong'}}</td>
				<td>{{$guru_matapelajaran->mata_pelajaran->nama_matapelajaran or 'dosen id kosong'}}</td>
				<td><div class="btn-group" role="group">
					<a href="{{url('guru_matapelajaran/edit/'.$guru_matapelajaran->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-palement="top" title="ubah"><i class="fa fa-pencil"></i></a>
					<a href="{{url('guru_matapelajaran/'.$guru_matapelajaran->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class=" fa fa-eye"></i></a>
					<a href="{{url('guru_matapelajaran/hapus/'.$guru_matapelajaran->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="glyphicon glyphicon-trash"></i></a>
				</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop