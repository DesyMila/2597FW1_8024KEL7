@extends ('master')
@section ('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong> Seluruh Data Jenis Ekstrakulikuler</strong>
		<a href="{{url('jenis_eskul/tambah')}}" class="btn btn-xs btn-primary pull-right">
			<i class="fa fa-plus"></i>Jenis Eskul
		</a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
		<tr>
			<th>NO.</th>
			<th>Nama Eskul</th>
			<th>Keterangan</th>
			<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1;?>
			@foreach ($semuaJenis_Eskul as $jenis_eskul)
			<tr>
				<td>{{$x++}}</td>
				<td>{{$jenis_eskul->nama_eskul or 'Eskul Kosong'}}</td>
				<td>{{$jenis_eskul->keterangan or 'Keterangan kosong'}}</td>
				<td><div class="btn-group" role="group">
					<a href="{{url('jenis_eskul/edit/'.$jenis_eskul->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-palement="top" title="ubah"><i class="fa fa-pencil"></i></a>
					<a href="{{url('jenis_eskul/'.$jenis_eskul->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class=" fa fa-eye"></i></a>
					<a href="{{url('jenis_eskul/hapus/'.$jenis_eskul->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="glyphicon glyphicon-trash"></i></a>
				</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop