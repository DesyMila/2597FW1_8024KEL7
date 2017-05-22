@extends ('master')
@section ('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong> Seluruh Data Mata Pelajaran</strong>
		<a href="{{url('mata_pelajaran/tambah')}}" class="btn btn-xs btn-primary pull-right">
			<i class="fa fa-plus"></i>Mata Pelajaran
		</a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
		<tr>
			<th>NO.</th>
			<th>Mata Pelajaran</th>
			<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1;?>
			@foreach ($semuaMata_Pelajaran as $mata_pelajaran)
			<tr>
				<td>{{$x++}}</td>
				<td>{{$mata_pelajaran->nama_matapelajaran or 'nama kosong'}}</td>
				<td>
				<div class="btn-group" role="group">
					<a href="{{url('mata_pelajaran/edit/'.$mata_pelajaran->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-palement="top" title="ubah"><i class="fa fa-pencil"></i></a>
					<a href="{{url('mata_pelajaran/'.$mata_pelajaran->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
					<a href="{{url('mata_pelajaran/hapus/'.$mata_pelajaran->id)}}/" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="glyphicon glyphicon-trash"></i></a>
				</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop