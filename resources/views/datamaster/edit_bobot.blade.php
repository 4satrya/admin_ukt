<!-- Button trigger modal -->
<!-- Modal -->
{!! Form::model($bobot, [ 'method' => 'PUT','id' => 'ubahBobot','class' => 'form-horizontal','role' => 'form']) !!}

	{!! Form::hidden('id', null, ['class' => 'form-control', 'placeholder' => 'ID Bobot', 'id' => 'id']) !!}
	<div class="form-group">
    	{!! Form::label('nama', 'Nama Bobot',['class' => 'col-md-3 control-label']) !!}
        <div class="col-md-8">
          {!! Form::text('deskripsi_bobot', null, ['class' => 'form-control', 'placeholder' => 'Deskripsi Bobot']) !!}
        </div>
  	</div>
  	<div class="form-group">
    	{!! Form::label('nama', 'Nilai Bobot',['class' => 'col-md-3 control-label']) !!}
        <div class="col-md-8">
          {!! Form::text('nilai_bobot', null, ['class' => 'form-control', 'placeholder' => 'Nilai Bobot']) !!}
        </div>
  	</div>
	<div class="modal-footer">
		<button class="btn btn-default" data-dismiss="modal" aria-hidden="true" id="clear">Batal</button>
	    {!! Form::submit('Edit Data', ['class' => 'btn btn-primary']) !!}
	</div>
{!! Form::close() !!}
<!-- Button trigger modal -->
<!-- Modal -->

