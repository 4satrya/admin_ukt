@extends('../layout')
@section('content')
<section class="content-header">
  <h1>
    Setting Isi Group Pertanyaan
    <small>Isi Group Pertanyaan UKT Universitas Udayana</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Setting</a></li>
    <li class="active">Isi Group Pertanyaan</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
	<div class="box box-danger" >
		<div class="box-header">
			<div class="col-sm-6">
				<h3 class="box-title">Data Isi Group Pertanyaan</h3>
			</div>
			<div class="col-sm-2">
				<div align="right">
					
				</div>
			</div>
			<div class="col-sm-4">
				<div align="right">
					<a href="#modalfilter" class="btn btn-success" data-toggle="modal" ><strong>Filter</strong></a>
					<a href="#modaltambah" class="btn btn-info" data-toggle="modal" ><strong>Tambah</strong></a>
				</div>

			</div>
		</div><!-- /.box-header -->
		<div class="box-body">
			<table  id="tbisigroup" class="table table-bordered table-striped table-hover">
				<thead>
					<tr>
						<th width="5%">No.</th>
						<th>Nama Profile</th>
						<th>Nama Group</th>
						<th>Pertanyaan</th>
						<th>Tipe Jawaban</th>
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
<div class="modal fade bs-modal-lg" id="modalfilter" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header ">
				<button type="reset" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Filter Isi Group Pertanyaan UKT</h4>
			</div>
		  	<div class="modal-body">
				{!! Form::open(['id' => '','class' => 'form-horizontal','role' => 'form']) !!}
					<div class="box-body">

	                  <div class="form-group">
	                    {!! Form::label('nama', 'Profile UKT',['class' => 'col-md-3 control-label']) !!}
	                    <div class="col-md-8">
	                           {!! Form::select('id_profile',$profileukt, null, ['class' => 'form-control','id'=>'id_profile']) !!}
	                    </div>
	                  </div>
	                  
	                  <div class="form-group">
	                    {!! Form::label('nama', 'Group Pertanyaan',['class' => 'col-md-3 control-label']) !!}
	                    <div class="col-md-8">
	                      {!! Form::select('id_group', ['' => 'Pilih Group Pertanyaan'], null, ['class' => 'form-control','id' => 'id_group']) !!}
	                    </div>
	                  </div>
	                  

						<div class="modal-footer">
                    		<button class="btn btn-default" data-dismiss="modal" aria-hidden="true" id="clear">Batal</button>
                    		{!! Form::button('Show', ['class' => 'btn btn-info','onclick'=>'filterisigroup()']) !!}
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
<div class="modal fade bs-modal-lg" id="modaltambah" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header ">
				<button type="reset" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Formulir Tambah Isi Group Pertanyaan UKT</h4>
			</div>
		  	<div class="modal-body">
				{!! Form::open(['id' => 'tambahIsiGroupPertanyaan','class' => 'form-horizontal','role' => 'form']) !!}
					<div class="box-body">

	                  <div class="form-group">
	                    {!! Form::label('nama', 'Profile UKT',['class' => 'col-md-3 control-label']) !!}
	                    <div class="col-md-8">
	                           {!! Form::select('id_pertanyaan',$pertanyaan, null, ['class' => 'form-control','id'=>'id_profile']) !!}
	                    </div>
	                  </div>
	                  
	                  <div class="form-group">
	                    {!! Form::label('nama', 'No.Urut',['class' => 'col-md-3 control-label']) !!}
	                    <div class="col-md-8">
	                      {!! Form::text('no_urut', null, ['class' => 'form-control', 'placeholder' => 'No Urut Pertanyaan']) !!}
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