@extends ('master_kepala')
@section ('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong> Seluruh Data Mata Pelajaran</strong>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
		<tr>
			<th>NO.</th>
			<th>Mata Pelajaran</th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1;?>
			@foreach ($semuaMataPelajaran as $mata_pelajaran)
			<tr>
				<td>{{$x++}}</td>
				<td>{{$mata_pelajaran->nama_matapelajaran or 'nama kosong'}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop