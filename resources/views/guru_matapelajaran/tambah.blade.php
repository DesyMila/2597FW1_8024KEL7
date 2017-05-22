@extends('master')
@section('container')
<div class="panel panel=primary">
	<div class="panel-heading">
		<strong><a href="{{url('guru_matapelajaran')}}"><i style="color: white" class="fa text-default fa-chevron-left"></i></a>Tambah Data Guru Matapelajaran</strong>
	</div>
	{!! Form::open(['url'=>'guru_matapelajaran/simpan','class'=>'form-horizontal'])!!}
@include('guru_matapelajaran.form')
<div style="width: 100%;text-align: right;">
	<button class="btn btn-primary"><i class="fa fa-save"></i>Simpan</button>
	<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i>Ulangi</button>
</div>
{!! Form::close()!!}
</div>
@stop