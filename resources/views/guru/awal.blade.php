@extends ('master')
@section ('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong> Seluruh Data Guru</strong>
		<a href="{{url('guru/tambah')}}" class="btn btn-xs btn-primary pull-right">
			<i class="fa fa-plus"></i>Guru
		</a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
		<tr>
			<th>NO.</th>
			<th>Nama</th>
			<th>Nip</th>
			<th>Alamat</th>
			<th>Aksi</th>
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
				<td>
				<div class="btn-group" role="group">
					<a href="{{url('guru/edit/'.$guru->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-palement="top" title="ubah"><i class="fa fa-pencil"></i></a>
					<a href="{{url('guru/'.$guru->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
					<a href="{{url('guru/hapus/'.$guru->id)}}/" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="glyphicon glyphicon-trash"></i></a>
				</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop