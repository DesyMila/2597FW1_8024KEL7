<div class="form-group">
	<label class="col-sm-2 control-label" id="ruang_id">Ruang Kelas</label>
	<div class="col-sm-10">
		{!! Form::select('ruang_kelas_id',$ruang_kelas->lists('nama_ruangan','id'),null,['class'=>'form-control','id'=>'ruang_kelas_id','placeholder'=>"Ruang Kelas"])!!}
	</div>
	</div>
<div class="form-group">
	<label class="col-sm-2 control-label" id="dosen_matakuliah_id">Guru Matapelajaran</label>
	<div class="col-sm-10">{!! Form::select('guru_matapelajaran_id',$guru_matapelajaran->listGuruDanMatapelajaran(),null,['class'=>'form-control','id'=>'guru_matapelajaran_id','placeholder'=>"Guru Matapelajaran"])!!}</div>
</div>
