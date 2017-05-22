@extends('master')
@section('container')
<div class="panel panel-info">
<div class="panel-heading">
	<strong><a href="{{ url('jenis_eskul') }}">
	<i class="fa text-default fa-chevron-left"></i></a>
	Perbarui Data Ekstrakulikuler</strong>
	</div>
		{!! Form::model($jenis_eskul,['url'=>'jenis_eskul/edit/'.$jenis_eskul->id,'class'=>'form-horizontal  ']) !!}
		@include('jenis_eskul.form')
		<div style="width: 100%;text-align: right;">
				<button class="btn btn-info"><i class="fa fa-save"></i>Perbarui</button>
				<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i>Ulangi</button>
</div>
{!! Form::close() !!}
</div>

@stop