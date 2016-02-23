
<!-- Button trigger modal -->
<!-- Modal -->
{!! Form::model($periode, [ 'method' => 'PUT','id' => 'ubahperiode','class' => 'form-horizontal','role' => 'form']) !!}

	{!! Form::hidden('id', null, ['class' => 'form-control', 'placeholder' => 'Id Periode', 'id' => 'id']) !!}
    <div class="form-group">
      {!! Form::label('nama', 'Jenis Penerimaan',['class' => 'col-md-3 control-label']) !!}
      <div class="col-md-8">
             {!! Form::select('id_jalur_masuk',$jalurmasuk, $periode->id_jalur_masuk, ['class' => 'form-control']) !!}
      </div>
    </div>
    {{-- */$jalurmasuk[1] ;/* --}}
   
    <div class="form-group">
      {!! Form::label('Angkatan', 'Angkatan Masuk',['class' => 'col-md-3 control-label']) !!}
      <div class="col-md-8">
        {!! Form::text('angkatan', null, ['class' => 'form-control', 'placeholder' => 'Angkatan Masuk']) !!}
      </div>
    </div>

    <div class="form-group">
      {!! Form::label('Awal', 'Pembukaan',['class' => 'col-md-3 control-label']) !!}
      <div class="col-md-8">
      <div class="input-group date">
        {!! Form::text('awal', null, ['class' => 'form-control', 'placeholder' => 'Pembukaan Periode']) !!}
        <span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
      </div>
      </div>
    </div>

    <div class="form-group">
      {!! Form::label('Akhir', 'Penutupan',['class' => 'col-md-3 control-label']) !!}
      <div class="col-md-8">
      <div class="input-group date">
        {!! Form::text('akhir', null, ['class' => 'form-control', 'placeholder' => 'Penutupan Periode']) !!}
        <span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
      </div>
      </div>
    </div>
    
    <div class="form-group">
      {!! Form::label('link', 'Link Pengumuman',['class' => 'col-md-3 control-label']) !!}
      <div class="col-md-8">
        {!! Form::text('link_pengumuman', null, ['class' => 'form-control', 'placeholder' => 'Link Pengumuman']) !!}
      </div>
    </div>
    
     <div class="form-group">
      {!! Form::label('link', 'Tanggal Pengumuman',['class' => 'col-md-3 control-label']) !!}
      <div class="col-md-8">
      <div class="input-group date">
        {!! Form::text('tgl_pengumuman', null, ['class' => 'form-control', 'placeholder' => 'Tanggal Pengumuman']) !!}
        <span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
        </div>
      </div>
    </div>

     <div class="form-group">
      {!! Form::label('aktif', 'Status Periode',['class' => 'col-md-3 control-label']) !!}
      <div class="col-md-8">
             {!! Form::select('aktif', ['' => 'Pilih Status Periode', '1' => 'Aktif', '0' => 'Tidak Aktif'], $periode->aktif, ['class' => 'form-control']) !!}
      </div>
    </div>
	  
  <div class="modal-footer">
    <button class="btn btn-default" data-dismiss="modal" aria-hidden="true" id="clear">Batal</button>
      <!-- {!! Form::button('Batal', ['class' => 'btn btn-default','data-dismiss'=>'modal','aria-hidden'=>'true','id'=>'clear']) !!} -->
      {!! Form::submit('Edit Data', ['class' => 'btn btn-primary']) !!}
  </div>

{!! Form::close() !!}


<!-- Button trigger modal -->
<!-- Modal -->

<script type="text/javascript">
	
	$('.date').datepicker({
      format: "yyyy/mm/dd",
      startDate: "2000-01-01",
      endDate: "2050-01-01",
      todayBtn: "linked",
      autoclose: true,
      todayHighlight: true
  });
</script>