@extends ('master_siswa')
@section ('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong> Seluruh Data Jenis Ekstrakulikuler</strong>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
		<tr>
			<th>NO.</th>
			<th>Nama Eskul</th>
			<th>Keterangan</th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1;?>
			@foreach ($semuaJenis_Eskul as $jenis_eskul)
			<tr>
				<td>{{$x++}}</td>
				<td>{{$jenis_eskul->nama_eskul or 'Eskul Kosong'}}</td>
				<td>{{$jenis_eskul->keterangan or 'Keterangan kosong'}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop