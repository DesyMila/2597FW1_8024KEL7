<div class="form-group">
	<label class="col-sm-2 control-label" id="ruang_id">Jenis Ekstrakulikuler</label>
	<div class="col-sm-10">
		{!! Form::select('jenis_id',$jenis_eskul->lists('nama_eskul','id'),null,['class'=>'form-control','id'=>'jenis_id','placeholder'=>"Jenis Eskul"])!!}
	</div>
	</div>
<div class="form-group">
	<label class="col-sm-2 control-label" id="dosen_matakuliah_id">Nama Siswa</label>
	<div class="col-sm-10">{!! Form::select('siswa_id',$siswa->listSiswaDanNis(),null,['class'=>'form-control','id'=>'siswa_id','placeholder'=>"Nama Siswa"])!!}</div>
</div>