
<!-- Button trigger modal -->
<!-- Modal -->
{!! Form::model($profilegroup, [ 'method' => 'PUT','id' => 'ubahprofilegroup','class' => 'form-horizontal','role' => 'form']) !!}

	{!! Form::hidden('id', null, ['class' => 'form-control', 'placeholder' => 'ID profile Group', 'id' => 'id']) !!}
    <div class="form-group ">
      <div class="form-material">
        {!! Form::label('nama', 'Group Pertanyaan',['class' => 'col-md-3 control-label']) !!}
        <div class="col-md-8">
               {!! Form::select('id_group',$grouppertanyaan, null, ['class' => 'js-select2 form-control']) !!}
        </div>
    </div>
    </div>
    
    <div class="form-group">
      {!! Form::label('no_urut', 'No.Urut',['class' => 'col-md-3 control-label']) !!}
      <div class="col-md-8">
        {!! Form::text('no_urut', null, ['class' => 'form-control', 'placeholder' => 'No Urut Group']) !!}
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