@extends('master')
@section('container')
<div class="panel panel-info">
	<div class="panel-heading">
		<strong><a href="{{url('guru_matapelajaran')}}"><i class="fa text-default fa-chevron-left"></i></a>Perbarui Data Guru Matapelajaran </strong>
	</div>
	{!!Form::model($guru_matapelajaran,['url'=>'guru_matapelajaran/edit/'.$guru_matapelajaran->id,'class'=>'form-horizontal'])!!}
	@include('guru_matapelajaran.form')
	<div style="width: 100%;text-align: center;">
		<button class="btn btn-info"><i class="fa fa-save"></i>Perbarui</button>
		<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i>Ulangi</button>
	</div>
	{!! Form::close()!!}
</div>
@stop