<!-- Button trigger modal -->
<!-- Modal -->
{!! Form::model($kelompokukt, [ 'method' => 'PUT','id' => 'ubahkelompokukt','class' => 'form-horizontal','role' => 'form']) !!}

	{!! Form::hidden('id', null, ['class' => 'form-control', 'placeholder' => 'Id Kelompok UKT', 'id' => 'id']) !!}

  	  <div class="form-group">
	    {!! Form::label('nama', 'Jenis UKT',['class' => 'col-md-3 control-label']) !!}
	    <div class="col-md-8">
	      {!! Form::text('jenis_ukt', null, ['class' => 'form-control', 'placeholder' => 'Jenis UKT']) !!}
	    </div>
	  </div>

		   <div class="form-group">
		    {!! Form::label('nama', 'Keterangan',['class' => 'col-md-3 control-label']) !!}
		    <div class="col-md-8">
		    {!! Form::text('keterangan', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) !!}
		    </div>
		  </div>
	  
		<div class="modal-footer">
			<button class="btn btn-default" data-dismiss="modal" aria-hidden="true" id="clear">Batal</button>
		    {!! Form::submit('Edit Data', ['class' => 'btn btn-primary']) !!}
		</div>
{!! Form::close() !!}
<!-- Button trigger modal -->
<!-- Modal -->

