@extends('master_siswa')
@section('container')
<div class="panel panel-info">
<div class="panel-heading">
	<strong>
	Perbarui Data Eskul</strong>
	</div>
		{!! Form::model($siswa,['url'=>'siswa/edit/'.$siswa->id,'class'=>'form-horizontal  ']) !!}
		@include('master_siswa.form')
		<div style="width: 100%;text-align: right;">
				<button class="btn btn-info"><i class="fa fa-save"></i>Perbarui</button>
				<button type"reset"class="btn btn-danger"><i class="fa fa-undo"></i>Ulangi</button>
</div>
{!! Form::close() !!}
</div>

@stop