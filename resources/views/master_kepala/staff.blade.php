@extends ('master_kepala')
@section ('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong> Seluruh Data Staff</strong>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
		<tr>
			<th>NO.</th>
			<th>Nama</th>
			<th>Nip</th>
			<th>Alamat</th>
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
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop