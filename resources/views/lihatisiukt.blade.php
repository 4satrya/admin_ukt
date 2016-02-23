@extends('layout')
@section('content')
<!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Lihat Isian UKT Calon Mahasiswa Baru
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
          <table  id="tblihatisiukt" class="table table-bordered table-striped table-hover" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th width="8%">No.</th>
                <th width="12%">Fakultas</th>
                <th width="10%">Jurusan</th>
                <th width="10%">Nama</th>
                <th width="10%">No.Pendaftaran</th>
                <th width="10%">Jalur Masuk</th>
                <th width="10%">Pekerjaan Ayah</th>
                <th>Pekerjaan Ibu</th>
                <th>Status Rumah Tinggal</th>
                <th>Luas Bangunan</th>
                <th>Kondisi Rumah</th>
                <th>Avg. Air 3 Bulan</th>
                <th width="8%">Penerangan/Listrik</th>
                <th>Avg. Listrik 3 Bulan</th>
                <th>Rek.Telp rumah+internet</th>
                <th width="10%">Jumlah Pemakaian Pulsa Hp.sekeluarga</th>
                <th width="10%">Total tabungan & deposito</th>
                <th>Total Nilai emas</th>
                <th>Total Premi Asuransi</th>
                <th>Total Investasi Lainnya</th>
                <th>Nilai Total Mobil</th>
                <th>Nilai Sepeda Motor</th>
                <th width="10%">Jumlah Tanggungan orang tua</th>
                <th width="10%">Total Penghasilan Keluarga</th>
              </tr>
            </thead>
            <tbody>
         
            </tbody>
          </table>
        </div>
    </div>
    <!-- END OF DATATABLE -->
  </div>
  

  </section>
  <!-- END Main content -->
        
@endsection