@extends('../layout')
@section('content')
<section class="content-header">
  <h1>
    Master Kelompok UKT
    <small>Kelompok UKT Mahasiswa Baru Universitas Udayana</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Data Master</a></li>
    <li class="active">Kelompok UKT</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
      <div class="box box-danger" >
        <div class="box-header">
        	<div class="col-sm-8">
          		<h3 class="box-title">Data Kelompok UKT</h3>
          	</div>
          	<div class="col-sm-4">
          		<div align="right">
          			<a href="#modaltambah" class="btn btn-info" data-toggle="modal" ><strong>Tambah</strong></a>
          		</div>
          	</div>
        </div><!-- /.box-header -->
        <div class="box-body">
			<table  id="tbkelompokukt" class="table table-bordered table-striped table-hover">
			    <thead>
                    <tr>
                        <th width="8%">No.</th>
                        <th width="25%">Jenis UKT</th>
                        <th width="25%">Keterangan</th>
                        <th width="8%">Action</th>
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
				<h4 class="modal-title" id="myModalLabel">Formulir Tambah Kelompok UKT</h4>
			</div>
		  
	  
			<div class="modal-body">
			  <!-- <form id="formtambahJalurMasuk" class="form-horizontal" role="form" > -->
					{!! Form::open(['id' => 'tambahkelompokukt','class' => 'form-horizontal','role' => 'form']) !!}
					<div class="box-body">
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
<div class="modal fade bs-modal-lg" id="modalUbahKelompokUkt" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
	<div class="modal-content">
		<div class="modal-header ">
			<button type="reset" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<h4 class="modal-title" id="myModalLabel">Formulir Ubah Kelompok UKT</h4>
		</div>
		<div class="modal-body" id="isi">


		</div><!-- penutup body -->
	</div>
</div>
</div>

<!-- Button trigger modal -->
<!-- Modal -->
@endsection