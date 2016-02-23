<!-- Button trigger modal -->
<!-- Modal -->
{!! Form::model($bobotpertanyaan, [ 'method' => 'PUT','id' => 'ubahbobotpertanyaan','class' => 'form-horizontal','role' => 'form']) !!}

	{!! Form::hidden('id', null, ['class' => 'form-control', 'placeholder' => 'ID profile Group', 'id' => 'id']) !!}
    <div class="form-group">
      {!! Form::label('nama', 'Nama Pertanyaan',['class' => 'col-md-3 control-label']) !!}
      <div class="col-md-8">
             {!! Form::select('id_pertanyaan',$pertanyaan, null, ['class' => 'form-control','id'=>'id_pertanyaan']) !!}
      </div>
    </div>
    
    <div class="form-group">
      {!! Form::label('nama', 'Nama Bobot',['class' => 'col-md-3 control-label']) !!}
      <div class="col-md-8">
             {!! Form::select('id_bobot',$bobot, null, ['class' => 'form-control','id'=>'id_bobot']) !!}
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