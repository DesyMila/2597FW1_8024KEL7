@extends('master')
@section('container')
<div class="panel panel=primary">
	<div class="panel-heading">
		<strong>Tambah Data Ekstrakulikuler Siswa</strong>
	</div>
	{!! Form::open(['url'=>'eskul_siswa/simpan','class'=>'form-horizontal'])!!}
@include('master_siswa.form_eskul')
<div style="width: 100%;text-align: right;">
	<button class="btn btn-primary"><i class="fa fa-save"></i>Simpan</button>
	<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i>Ulangi</button>
</div>
{!! Form::close()!!}
</div>
@stop