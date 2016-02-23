@extends('../layout')
@section('content')
<section class="content-header">
  <h1>
    Setting Periode
    <small>Periode Pengisian UKT Universitas Udayana</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Setting</a></li>
    <li class="active">Periode</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
	<div class="box box-danger" >
		<div class="box-header">
			<div class="col-sm-8">
				<h3 class="box-title">Data Periode</h3>
			</div>
			<div class="col-sm-4">
				<div align="right">
					 <a href="#modaltambah" class="btn btn-info" data-toggle="modal" ><strong>Tambah</strong></a>
				</div>
			</div>
		</div><!-- /.box-header -->
		<div class="box-body">
			<table  id="tbperiode" class="table table-bordered table-striped table-hover">
				<thead>
					<tr>
						<th width="5%">No.</th>
						<th width="25%">Nama Jalur</th>
						<th width="5%">Angkatan</th>
						<th width="5%">Awal</th>
						<th width="5%">Akhir</th>
						<th width="20%">Link Pengumuman</th>
						<th width="25%">Tgl Pengumuman</th>
						<th width="25%">Status</th>
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
				<h4 class="modal-title" id="myModalLabel">Formulir Tambah Periode Pengisian UKT</h4>
			</div>
		  
	  
			<div class="modal-body">
				{!! Form::open(['id' => 'tambahPeriode','class' => 'form-horizontal','role' => 'form']) !!}
					<div class="box-body">

	                  <div class="form-group">
	                    {!! Form::label('nama', 'Jenis Penerimaan',['class' => 'col-md-3 control-label']) !!}
	                    <div class="col-md-8">
	                           {!! Form::select('id_jalur_masuk',$jalurmasuk, null, ['class' => 'form-control']) !!}
	                    </div>
	                  </div>
	                  
	                  <div class="form-group">
	                    {!! Form::label('Angkatan', 'Angkatan Masuk',['class' => 'col-md-3 control-label']) !!}
	                    <div class="col-md-8">
	                      {!! Form::text('angkatan', null, ['class' => 'form-control', 'placeholder' => 'Angkatan Masuk']) !!}
	                    </div>
	                  </div>

	                  <div class="form-group">
	                    {!! Form::label('Awal', 'Pembukaan',['class' => 'col-md-3 control-label']) !!}
	                    <div class="col-md-8">
	                    <div class="input-group date">
	                      {!! Form::text('awal', null, ['class' => 'form-control', 'placeholder' => 'Pembukaan Periode']) !!}
	                      <span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
	                    </div>
	                    </div>
	                  </div>

	                  <div class="form-group">
	                    {!! Form::label('Akhir', 'Penutupan',['class' => 'col-md-3 control-label']) !!}
	                    <div class="col-md-8">
	                    <div class="input-group date">
	                      {!! Form::text('akhir', null, ['class' => 'form-control', 'placeholder' => 'Penutupan Periode']) !!}
	                      <span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
	                    </div>
	                    </div>
	                  </div>
	                  
	                  <div class="form-group">
	                    {!! Form::label('link', 'Link Pengumuman',['class' => 'col-md-3 control-label']) !!}
	                    <div class="col-md-8">
	                      {!! Form::text('link_pengumuman', null, ['class' => 'form-control', 'placeholder' => 'Link Pengumuman']) !!}
	                    </div>
	                  </div>
	                  
	                   <div class="form-group">
	                    {!! Form::label('link', 'Tanggal Pengumuman',['class' => 'col-md-3 control-label']) !!}
	                    <div class="col-md-8">
	                    <div class="input-group date">
	                      {!! Form::text('tgl_pengumuman', null, ['class' => 'form-control', 'placeholder' => 'Tanggal Pengumuman']) !!}
	                      <span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
	                      </div>
	                    </div>
	                  </div>

	                   <div class="form-group">
	                    {!! Form::label('aktif', 'Status Periode',['class' => 'col-md-3 control-label']) !!}
	                    <div class="col-md-8">
	                           {!! Form::select('aktif', ['' => 'Pilih Status Periode', '1' => 'Aktif', '0' => 'Tidak Aktif'], null, ['class' => 'form-control']) !!}
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
<div class="modal fade bs-modal-lg" id="modalUbahPeriode" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
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