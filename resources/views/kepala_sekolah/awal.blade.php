@extends ('master')
@section ('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong> Seluruh Data Kepala Sekolah</strong>
		<a href="{{url('kepala_sekolah/tambah')}}" class="btn btn-xs btn-primary pull-right">
			<i class="fa fa-plus"></i>Kepala Sekolah
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
			@foreach ($semuaKepala_Sekolah as $kepala_sekolah)
			<tr>
				<td>{{$x++}}</td>
				<td>{{$kepala_sekolah->nama or 'nama kosong'}}</td>
				<td>{{$kepala_sekolah->nip or 'nip Kosong'}}</td>
				<td>{{$kepala_sekolah->alamat or 'alamat kosong'}}</td>
				<td>
				<div class="btn-group" role="group">
					<a href="{{url('kepala_sekolah/edit/'.$kepala_sekolah->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-palement="top" title="ubah"><i class="fa fa-pencil"></i></a>
					<a href="{{url('kepala_sekolah/'.$kepala_sekolah->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
					<a href="{{url('kepala_sekolah/hapus/'.$kepala_sekolah->id)}}/" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="glyphicon glyphicon-trash"></i></a>
				</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop