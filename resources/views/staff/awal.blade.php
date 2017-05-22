@extends ('master')
@section ('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong> Seluruh Data Staff</strong>
		<a href="{{url('staff/tambah')}}" class="btn btn-xs btn-primary pull-right">
			<i class="fa fa-plus"></i>Staff
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
			@foreach ($semuaStaff as $staff)
			<tr>
				<td>{{$x++}}</td>
				<td>{{$staff->nama or 'username kosong'}}</td>
				<td>{{$staff->nip or 'password Kosong'}}</td>
				<td>{{$staff->alamat or 'password Kosong'}}</td>
				<td>
				<div class="btn-group" role="group">
					<a href="{{url('staff/edit/'.$staff->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-palement="top" title="ubah"><i class="fa fa-pencil"></i></a>
					<a href="{{url('staff/'.$staff->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
					<a href="{{url('staff/hapus/'.$staff->id)}}/" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="glyphicon glyphicon-trash"></i></a>
				</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop