<!-- Button trigger modal -->
<!-- Modal -->
{!! Form::model($pertanyaan, [ 'method' => 'PUT','id' => 'ubahpertanyaan','class' => 'form-horizontal','role' => 'form']) !!}

	{!! Form::hidden('id', null, ['class' => 'form-control', 'placeholder' => 'Id Group Pertanyaan', 'id' => 'id']) !!}

	<div class="box-body">
	  	<div class="form-group">
	    	{!! Form::label('nama', 'Deskripsi Pertanyaan',['class' => 'col-md-3 control-label']) !!}
	        <div class="col-md-8">
	          {!! Form::text('deskripsi_pertanyaan', null, ['class' => 'form-control', 'placeholder' => 'Pertanyaan UKT']) !!}
	        </div>
	  	</div>
	  	<div class="form-group">
	        {!! Form::label('nama', 'Tipe Jawaban',['class' => 'col-md-3 control-label']) !!}
	        <div class="col-md-8">
	               {!! Form::select('id_tipe_jawaban',$tipejawaban, null, ['class' => 'form-control']) !!}
	        </div>
	    </div>
	    <div class="form-group">
	    	{!! Form::label('nama', 'Keterangan',['class' => 'col-md-3 control-label']) !!}
	        <div class="col-md-8">
	          {!! Form::text('keterangan', null, ['class' => 'form-control', 'placeholder' => 'Keterangan Pertanyaan UKT']) !!}
	        </div>
	  	</div>
		
	</div><!-- penutup box -->
	  
	<div class="modal-footer">
		<button class="btn btn-default" data-dismiss="modal" aria-hidden="true" id="clear">Batal</button>
	    {!! Form::submit('Edit Data', ['class' => 'btn btn-primary']) !!}
	</div>
{!! Form::close() !!}
<!-- Button trigger modal -->
<!-- Modal -->