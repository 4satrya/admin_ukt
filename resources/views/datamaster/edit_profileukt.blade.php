<!-- Button trigger modal -->
<!-- Modal -->
{!! Form::model($profileukt, [ 'method' => 'PUT','id' => 'ubahprofileukt','class' => 'form-horizontal','role' => 'form']) !!}

	{!! Form::hidden('id', null, ['class' => 'form-control', 'placeholder' => 'Id Jalur Masuk', 'id' => 'id']) !!}

	<div class="form-group">
		{!! Form::label('nama', 'Nama Jalur',['class' => 'col-md-3 control-label']) !!}
		<div class="col-md-8">
	  	{!! Form::text('deskripsi_profile', null, ['class' => 'form-control', 'placeholder' => 'Nama Profile UKT']) !!}
		</div>
	</div>
	  
	<div class="modal-footer">
		<button class="btn btn-default" data-dismiss="modal" aria-hidden="true" id="clear">Batal</button>
	    {!! Form::submit('Edit Data', ['class' => 'btn btn-primary']) !!}
	</div>
{!! Form::close() !!}
<!-- Button trigger modal -->
<!-- Modal -->

