<!-- Button trigger modal -->
<!-- Modal -->
{!! Form::model($jalurmasuk, [ 'method' => 'PUT','id' => 'ubahjalurmasuk','class' => 'form-horizontal','role' => 'form']) !!}

	{!! Form::hidden('id', null, ['class' => 'form-control', 'placeholder' => 'Id Jalur Masuk', 'id' => 'id']) !!}

  	  <div class="form-group">
	    {!! Form::label('nama', 'Nama Jalur',['class' => 'col-md-3 control-label']) !!}
	    <div class="col-md-8">
	      {!! Form::text('jalur_masuk', null, ['class' => 'form-control', 'placeholder' => 'Nama Jalur Masuk']) !!}
	    </div>
	  </div>

		   <div class="form-group">
		    {!! Form::label('nama', 'Jenis Penerimaan',['class' => 'col-md-3 control-label']) !!}
		    <div class="col-md-8">
		           {!! Form::select('flag_lokal', ['' => 'Pilih Jenis Penerimaan', '1' => 'Lokal', '2' => 'Nasional'], null, ['class' => 'form-control']) !!}
		    </div>
		  </div>
	  
		<div class="modal-footer">
			<button class="btn btn-default" data-dismiss="modal" aria-hidden="true" id="clear">Batal</button>
		    {!! Form::submit('Edit Data', ['class' => 'btn btn-primary']) !!}
		</div>
{!! Form::close() !!}
<!-- Button trigger modal -->
<!-- Modal -->

