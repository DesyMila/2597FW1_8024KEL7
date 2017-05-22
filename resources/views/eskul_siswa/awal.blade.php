@extends ('master')
@section ('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong> Seluruh Data Eskul Siswa</strong>
		<a href="{{url('eskul_siswa/tambah')}}" class="btn btn-xs btn-primary pull-right">
			<i class="fa fa-plus"></i>eskul_siswa
		</a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
		<tr>
			<th>NO.</th>
			<th>Nama siswa</th>
			<th>Jenis Eskul</th>
			<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1;?>
			@foreach ($semuaEskul_Siswa as $eskul_siswa)
			<tr>
				<td>{{$x++}}</td>
				<td>{{$eskul_siswa->siswa->nama or 'nama kosong'}}</td>
				<td>{{$eskul_siswa->jenis_eskul->nama_eskul or 'jenis eskul Kosong'}}</td>
				<td>
				<div class="btn-group" role="group">
					<a href="{{url('eskul_siswa/edit/'.$eskul_siswa->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-palement="top" title="ubah"><i class="fa fa-pencil"></i></a>
					<a href="{{url('eskul_siswa/'.$eskul_siswa->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
					<a href="{{url('eskul_siswa/hapus/'.$eskul_siswa->id)}}/" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="glyphicon glyphicon-trash"></i></a>
				</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop