@extends('../layout')
@section('content')
<section class="content-header">
  <h1>
    Setting Bobot Pertanyaan
    <small>Bobot Pertanyaan UKT Universitas Udayana</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Setting</a></li>
    <li class="active">Bobot Pertanyaan</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
	<div class="box box-danger" >
		<div class="box-header">
			<div class="col-sm-6">
				<h3 class="box-title">Bobot Pertanyaan</h3>
			</div>
			<div class="col-sm-2">
				<div align="right">
					
				</div>
			</div>
			<div class="col-sm-4">
				<div align="right">
				{!! Form::select('id_jurusan',$jurusan, null, ['class' => 'form-control','id'=>'id_jurusan','onchange'=>'refresh_tbbobotpertanyaan()']) !!}
					<a href="#modaltambah" class="btn btn-info" data-toggle="modal" ><strong>Tambah</strong></a>
				</div>

			</div>
		</div><!-- /.box-header -->
		<div class="box-body">
			<table  id="tbbobotpertanyaan" class="table table-bordered table-striped table-hover">
				<thead>
					<tr>
						<th width="5%">No.</th>
						<th>Jurusan</th>
						<th>Nama Pertanyaan</th>
						<th>Bobot</th>
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
				<h4 class="modal-title" id="myModalLabel">Formulir Tambah Bobot Pertanyaan Jurusan</h4>
			</div>
		  	<div class="modal-body">
				{!! Form::open(['id' => 'tambahBobotPertanyaan','class' => 'form-horizontal','role' => 'form']) !!}
					<div class="box-body">

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
<div class="modal fade bs-modal-lg" id="modalUbahBobotPertanyaan" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header ">
				<button type="reset" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Formulir Ubah Bobot Pertanyaan Jurusan</h4>
			</div>
			<div class="modal-body" id="isi">
			</div><!-- penutup body -->
		</div>
	</div>
</div>

<!-- Button trigger modal -->
<!-- Modal -->
@endsection