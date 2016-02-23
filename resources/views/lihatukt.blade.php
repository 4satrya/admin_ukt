@extends('layout')
@section('content')
<!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Lihat UKT Calon Mahasiswa Baru
      <small></small>
    </h1>
  </section>
  <!-- Main content -->
  <section class="content">
     <!-- DATA TABLE -->
      <div class="box">
        <div class="box-header">
          <div class="col-sm-8">
              <h3 class="box-title">Data Calon Mahasiswa Baru</h3>
            </div>
            <div class="col-sm-4">
              <div align="right">
                <a href="#modalfilter" class="btn btn-info" data-toggle="modal" ><strong>Filter</strong></a>
              </div>
            </div>
        </div><!-- /.box-header -->
        <div class="box-body">
          <table  id="tblihatukt" class="table table-bordered table-striped table-hover">
            <thead>
              <tr>
                <th width="8%">No.</th>
                <th>Fakultas</th>
                <th>Jurusan</th>
                <th>Nama</th>
                <th>No.Pendaftaran</th>
                <th>Jalur Masuk</th>
                <th>Tanggal Lahir</th>
                <th>UKT Sistem Lama</th>
                <th>Cluster</th>
                <th>UKT Hasil Cluster</th>
                <th>UKT Hasil ELECTRE</th>
                <th width="8%">Lihat Isian</th>
              </tr>
            </thead>
          </table>
        </div>
    </div>
    <!-- END OF DATATABLE -->
  </div>
  

  </section>
  <!-- END Main content -->

<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade bs-modal-lg" id="modalfilter" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header ">
        <button type="reset" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Filter Data UKT Calon Mahasiswa Baru</h4>
      </div>
        <div class="modal-body">
        {!! Form::open(['id' => '','class' => 'form-horizontal','role' => 'form']) !!}
          <div class="box-body">

            <div class="form-group">
              {!! Form::label('nama', 'Periode',['class' => 'col-md-3 control-label']) !!}
              <div class="col-md-8">
                {!! Form::select('id_periode',$periode, null, ['class' => 'form-control','id'=>'id_periode']) !!}
              </div>
            </div>
                    
            <div class="form-group">
              {!! Form::label('nama', 'Fakultas',['class' => 'col-md-3 control-label']) !!}
              <div class="col-md-8">
                {!! Form::select('id_fakultas',$fakultas, null, ['class' => 'form-control','id'=>'id_fakultas']) !!}
              </div>
            </div>

            <div class="form-group">
              {!! Form::label('nama', 'Program Studi',['class' => 'col-md-3 control-label']) !!}
              <div class="col-md-8">
                {!! Form::select('id_prodi', ['' => 'Semua Program Studi'], null, ['class' => 'form-control','id' => 'id_prodi']) !!}
              </div>
            </div>

            <div class="modal-footer">
              <button class="btn btn-default" data-dismiss="modal" aria-hidden="true" id="clear">Batal</button>
              {!! Form::button('Show', ['class' => 'btn btn-info','onclick'=>'filteruktmhs()']) !!}
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
        
@endsection