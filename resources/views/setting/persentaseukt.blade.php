@extends('../layout')
@section('content')
<section class="content-header">
  <h1>
    Setting Nominal dan Persentase
    <small>Nominal dan Persentase UKT</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Setting</a></li>
    <li class="active">Nominal dan Persentase</li>
  </ol>
</section>

<section class="content">
  <div class="box box-danger" >
    <div class="box-header">
    	<div class="col-sm-8">
        <h3 class="box-title">Data Nominal</h3>
      </div>
      <div class="col-sm-4">
        <div align="right">
        <a href="#modaltambah" class="btn btn-info" data-toggle="modal" ><strong>Tambah</strong></a>
        </div>
      </div>
    </div><!-- /.box-header -->
    <div class="box-body">
      <table  id="tbnominal" class="table table-bordered table-striped table-hover">
          <thead>
            <tr>
                <th width="5%">No.</th>
                <th width="15%">Nama Jalur</th>
                <th width="5%">Angkatan</th>
                <th width="25%">Fakultas</th>
                <th width="25%">Prodi</th>
                <th width="10%">Jenjang Studi</th>
                <th width="5%">UKT</th>
                <th width="10%">Nominal</th>
                <th width="5%">Presentase</th>
                <th width="5%">Action</th>
            </tr>
            </thead>
            <tbody>

            </tbody>
      </table>

  </div><!-- /.box-body -->
</div><!-- /.box-body out -->
</section><!-- /.content -->


<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade bs-modal-lg" id="modaltambah" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header ">
					<button type="reset" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="myModalLabel">Formulir Tambah Jalur Masuk</h4>
				</div>
			  
		  
				<div class="modal-body">
				  <!-- <form id="formtambahJalurMasuk" class="form-horizontal" role="form" > -->
						{!! Form::open(['id' => 'tambahjalurmasuk','class' => 'form-horizontal','role' => 'form']) !!}
						<div class="box-body">
                          
                          <div class="form-group">
                            <!-- <label for="input" class="col-md-3 control-label">Nama Jalur Masuk </label> -->
                            {!! Form::label('nama', 'Nama Jalur',['class' => 'col-md-3 control-label']) !!}
                            <div class="col-md-8">
                              <!-- <input type="text" id="jalurMasuk" name="jalurMasuk" class="form-control" placeholder="Nama Jalur Masuk" required> -->
                              {!! Form::text('jalur_masuk', null, ['class' => 'form-control', 'placeholder' => 'Nama Jalur Masuk']) !!}
                            </div>
                          </div>
                          
                          
                           <div class="form-group">
                            <!-- <label for="input" class="col-md-3 control-label">Jenis Penerimaan</label> -->
                            {!! Form::label('nama', 'Jenis Penerimaan',['class' => 'col-md-3 control-label']) !!}
                            <div class="col-md-8">
                                  <!-- <select class="form-control" name="flagLokal" id="flagLokal" required>
                                    <option value="">---- Pilih Jenis Penerimaan -----</option>
                                        <option value="1"> Lokal </option>
                                        <option value="2"> Nasional </option>
                                   </select> -->
                                   {!! Form::select('flag_lokal', ['' => 'Pilih Jenis Penerimaan', '1' => 'Lokal', '2' => 'Nasional'], null, ['class' => 'form-control']) !!}
                            </div>
                          </div>
                          

								<div class="modal-footer">
                                	<button class="btn btn-default" data-dismiss="modal" aria-hidden="true" id="clear">Batal</button>
                                	<!-- <button type="submit" class="btn btn-info" id="daftar" name="daftar" >Simpan</button>  -->
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
<div class="modal fade bs-modal-lg" id="modalUbah" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header ">
					<button type="reset" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="myModalLabel">Formulir Ubah Jalur Masuk</h4>
				</div>
			  
		  
				<div class="modal-body" id="isi">


				</div><!-- penutup body -->
			
				
			</div>
		</div>
	</div>

<!-- Button trigger modal -->
<!-- Modal -->



@endsection