@extends('master')
@section('container')
<div class="panel panel-info">
	<div class="panel-heading">
		<strong><a href="{{url('jadwal_matapelajaran')}}"><i class="fa text-default fa-chevron-left"></i></a>Perbarui Data Jadwal Mata Pelajaran</strong>
	</div>
	{!!Form::model($jadwal_matapelajaran,['url'=>'jadwal_matapelajaran/edit/'.$jadwal_matapelajaran->id,'class'=>'form-horizontal'])!!}
	@include('jadwal_matapelajaran.form')
	<div style="width: 100%;text-align: center;">
		<button class="btn btn-info"><i class="fa fa-save"></i>Perbarui</button>
		<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i>Ulangi</button>
	</div>
	{!! Form::close()!!}
</div>
@stop