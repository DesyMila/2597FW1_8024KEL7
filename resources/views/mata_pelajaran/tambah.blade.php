@extends('master')
@section('container')
<div class="panel panel=primary">
	<div class="panel-heading">
		<strong><a href="{{url('mata_pelajaran')}}"><i style="color: white" class="fa text-default fa-chevron-left"></i></a>Tambah Data Mata Pelajaran</strong>
	</div>
	{!! Form::open(['url'=>'mata_pelajaran/simpan','class'=>'form-horizontal'])!!}
@include('mata_pelajaran.form')
<div style="width: 100%;text-align: right;">
	<button class="btn btn-primary"><i class="fa fa-save"></i>Simpan</button>
	<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i>Ulangi</button>
</div>
{!! Form::close()!!}
</div>
@stop