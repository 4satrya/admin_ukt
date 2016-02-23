<!-- Button trigger modal -->
<!-- Modal -->
{!! Form::model($grouppertanyaan, [ 'method' => 'PUT','id' => 'ubahgrouppertanyaan','class' => 'form-horizontal','role' => 'form']) !!}

	{!! Form::hidden('id', null, ['class' => 'form-control', 'placeholder' => 'Id Group Pertanyaan', 'id' => 'id']) !!}

	<div class="form-group">
		{!! Form::label('nama', 'Nama Group Pertanyaan',['class' => 'col-md-3 control-label']) !!}
		<div class="col-md-8">
	  	{!! Form::text('deskripsi_group', null, ['class' => 'form-control', 'placeholder' => 'Nama Group Pertanyaan UKT']) !!}
		</div>
	</div>
	  
	<div class="modal-footer">
		<button class="btn btn-default" data-dismiss="modal" aria-hidden="true" id="clear">Batal</button>
	    {!! Form::submit('Edit Data', ['class' => 'btn btn-primary']) !!}
	</div>
{!! Form::close() !!}
<!-- Button trigger modal -->
<!-- Modal -->

