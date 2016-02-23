@extends('../layout')
@section('content')
<section class="content-header">
  <h1>
    Setting Profile Group
    <small>Profile Group UKT Universitas Udayana</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Setting</a></li>
    <li class="active">Profile Group</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
	<div class="box box-danger" >
		<div class="box-header">
			<div class="col-sm-6">
				<h3 class="box-title">Data Profile Group</h3>
			</div>
			<div class="col-sm-2">
				<div align="right">
					
				</div>
			</div>
			<div class="col-sm-4">
				<div align="right">
				{!! Form::select('id_profile',$profileukt, null, ['class' => 'form-control','id'=>'id_profile','onchange'=>'refresh_tbprofilegroup()']) !!}
					<a href="#modaltambah" class="btn btn-info" data-toggle="modal" ><strong>Tambah</strong></a>
				</div>

			</div>

				
		
		</div><!-- /.box-header -->
		<div class="box-body">
			<table  id="tbprofilegroup" class="table table-bordered table-striped table-hover">
				<thead>
					<tr>
						<th width="5%">No.</th>
						<th>Nama Profile</th>
						<th>Nama Group</th>
						<th width="10%">No.Urut</th>
						<th width="5%">Action</th>
					</tr>
				</thead>
				<tbody>

				</tbody>
			</table>
		</div><!-- /.box-body -->
	</div><!-- /.box-body out -->
</section><!-- /.content -->
<!-- END OF CONTENT -->

<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade bs-modal-lg" id="modaltambah" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header ">
				<button type="reset" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Formulir Tambah Profile Group UKT</h4>
			</div>
		  	<div class="modal-body">
				{!! Form::open(['id' => 'tambahProfileGroup','class' => 'form-horizontal','role' => 'form']) !!}
					<div class="box-body">

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
	                    	{!! Form::submit('Simpan', ['class' => 'btn btn-info']) !!}

						</div>
					</div><!-- penutup box -->
			   <!-- </form> -->
			   {!! Form::close() !!}
			</div><!-- penutup body -->
		</div>
	</div>
</div>
<!-- Button trigger modal -->
<!-- Modal -->

<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade bs-modal-lg" id="modalUbahProfileGroup" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header ">
				<button type="reset" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Formulir Ubah Periode Pengisian UKT</h4>
			</div>
		  
	  
			<div class="modal-body" id="isi">


			</div><!-- penutup body -->
			
		</div>
	</div>
</div>

<!-- Button trigger modal -->
<!-- Modal -->
@endsection