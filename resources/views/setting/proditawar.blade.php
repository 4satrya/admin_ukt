@extends('../layout')
@section('content')
<section class="content-header">
  <h1>
    Setting Jurusan/Prodi
    <small>Jurusan/Prodi yang ditawarkan Universitas Udayana</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Setting</a></li>
    <li class="active">Jurusan/Prodi Tawar</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
	<div class="box box-danger" >
		<div class="box-header">
			<div class="col-sm-8">
				<h3 class="box-title">Data Jurusan/Prodi Tawar</h3>
			</div>
			<div class="col-sm-4">
				<div align="right">
					 <a href="#modaltambah" class="btn btn-info" data-toggle="modal" ><strong>Tambah</strong></a>
				</div>
			</div>
		</div><!-- /.box-header -->
		<div class="box-body">
			<table  id="tbproditawar" class="table table-bordered table-striped table-hover">
				<thead>
					<tr>
						<th width="5%">No.</th>
                        <th width="10%">Nama Jalur</th>
                        <th width="5%">Angkatan</th>
                        <th width="20%">Prodi</th>
                        <th width="20%">Konsentrasi</th>
                        <th width="5%">Jenjang</th>
                        <th width="10%">Status</th>
                        <th width="5%">SKS</th>
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
				<h4 class="modal-title" id="myModalLabel">Formulir Tambah Prodi yang ditawarkan</h4>
			</div>
		  
	  		<div class="modal-body">
            {!! Form::open(['id' => 'tambahproditawar','class' => 'form-horizontal','role' => 'form']) !!}
            <div class="box-body">
              <div class="form-group">
                {!! Form::label('nama', 'Jenis Periode',['class' => 'col-md-3 control-label']) !!}
                <div class="col-md-8">
                       {!! Form::select('id_periode',$periode, null, ['class' => 'form-control','id' => 'jenisPeriode']) !!}
                </div>
              </div>

              <div class="form-group">
                {!! Form::label('nama', 'Jenjang Studi',['class' => 'col-md-3 control-label']) !!}
                <div class="col-md-8">
                       {!! Form::select('id_jenjang_studi', ['' => 'Pilih Jenjang Studi'], null, ['class' => 'form-control','id' => 'jenisJenjang']) !!}
                </div>
              </div>

               <div class="form-group">
                {!! Form::label('nama', 'Jurusan',['class' => 'col-md-3 control-label']) !!}
                <div class="col-md-8">
                       {!! Form::select('id_jurusan', ['' => 'Pilih Jurusan '], null, ['class' => 'form-control','id' => 'jenisJurusan']) !!}
                </div>
              </div>

              <div class="form-group">
                {!! Form::label('nama', 'Konsentrasi',['class' => 'col-md-3 control-label']) !!}
                <div class="col-md-8">
                       {!! Form::select('id_konsentrasi', ['' => 'Pilih Jenis Penerimaan'], null, ['class' => 'form-control','id' => 'jenisKonsentrasi']) !!}
                </div>
              </div>

              <div class="form-group">
                {!! Form::label('nama', 'Status',['class' => 'col-md-3 control-label']) !!}
                <div class="col-md-8">
                       {!! Form::select('is_reguler', ['' => 'Pilih Status', '1' => 'Regular', '0' => 'Non Regular'], null, ['class' => 'form-control']) !!}
                </div>
              </div>

              <div class="form-group">
                {!! Form::label('nama', 'Jenis SKS',['class' => 'col-md-3 control-label']) !!}
                <div class="col-md-8">
                       {!! Form::select('is_sks', ['' => 'Pilih Jenis SKS', '0' => 'Ber-SKS', '1' => 'Nol-SKS'], null, ['class' => 'form-control']) !!}
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