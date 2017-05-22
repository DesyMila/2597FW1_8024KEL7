@extends('master_kepala')
@section('container')
<div class="panel panel-info">
<div class="panel-heading">
	<strong>
	Perbarui Data Kepala Sekolah</strong>
	</div>
		{!! Form::model($guru,['url'=>'guru_edit/edit/'.$guru->id,'class'=>'form-horizontal  ']) !!}
		@include('master_guru.form')
		<div style="width: 100%;text-align: right;">
				<button class="btn btn-info"><i class="fa fa-save"></i>Perbarui</button>
				<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i>Ulangi</button>
</div>
{!! Form::close() !!}
</div>

@stop