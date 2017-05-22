@extends('master')
@section('container')
<div class="panel panel-info">
<div class="panel-heading">
	<strong><a href="{{ url('kepala_sekolah') }}">
	<i class="fa text-default fa-chevron-left"></i></a>
	Perbarui Data Kepala Sekolah</strong>
	</div>
		{!! Form::model($kepala_sekolah,['url'=>'kepala_sekolah/edit/'.$kepala_sekolah->id,'class'=>'form-horizontal  ']) !!}
		@include('kepala_sekolah.form')
		<div style="width: 100%;text-align: right;">
				<button class="btn btn-info"><i class="fa fa-save"></i>Perbarui</button>
				<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i>Ulangi</button>
</div>
{!! Form::close() !!}
</div>

@stop