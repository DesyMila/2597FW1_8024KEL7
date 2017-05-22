@extends ('master_kepala')
@section ('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong> Seluruh Data Ruang Kelas</strong>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
		<tr>
			<th>NO.</th>
			<th>Nama Ruangan</th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1;?>
			@foreach ($data as $ruang_kelas)
			<tr>
				<td>{{$x++}}</td>
				<td>{{$ruang_kelas->nama_ruangan or 'Ruangan kosong'}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop