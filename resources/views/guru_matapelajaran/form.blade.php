<div class="form-group">
	<label class="col-sm-2 control-label" id="mata_pelajaran_id">Mata Pelajaran</label>
	<div class="col-sm-10">
		{!! Form::select('mata_pelajaran_id',$mata_pelajaran->lists('nama_matapelajaran','id'),null,['class'=>'form-control','id'=>'mata_pelajaran_id','placeholder'=>"Mata Pelajaran"])!!}
	</div>
<div class="form-group">
	<label class="col-sm-2 control-label" id="dosen_matakuliah_id">Nama Guru Mengajar</label>
	<div class="col-sm-10">{!! Form::select('guru_id',$guru->listGuruDanNip(),null,['class'=>'form-control','id'=>'guru_id','placeholder'=>"Nama Siswa"])!!}</div>
</div>
