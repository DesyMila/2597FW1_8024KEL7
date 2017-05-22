@extends ('master')
@section ('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong> Seluruh Data Siswa</strong>
		<a href="{{url('siswa/tambah')}}" class="btn btn-xs btn-primary pull-right">
			<i class="fa fa-plus"></i>siswa
		</a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
		<tr>
			<th>NO.</th>
			<th>Nama</th>
			<th>NIS</th>
			<th>Alamat</th>
			<th>Aksi</th>
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
				<div class="btn-group" role="group">
					<a href="{{url('siswa/edit/'.$siswa->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-palement="top" title="ubah"><i class="fa fa-pencil"></i></a>
					<a href="{{url('siswa/'.$siswa->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
					<a href="{{url('siswa/hapus/'.$siswa->id)}}/" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="glyphicon glyphicon-trash"></i></a>
				</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop