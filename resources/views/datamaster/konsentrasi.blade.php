@extends('../layout')
@section('content')
<section class="content-header">
  <h1>
    Master Konsentrasi
    <small>Data Konsentrasi Tiap Jurusan/Prodi Universitas Udayana</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Data Master</a></li>
    <li class="active">Konsentrasi</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
      <div class="box box-danger" >
        <div class="box-header">
        	<div class="col-sm-8">
          <h3 class="box-title">Data Konsentrasi</h3>
          </div>
          <div class="col-sm-4">
          <div align="right">
          <!-- <a href="#modaltambah" class="btn btn-info" data-toggle="modal" ><strong>Tambah</strong></a> -->
          </div>
          </div>
        </div><!-- /.box-header -->
        <div class="box-body">
			<table  id="tbkonsentrasi" class="table table-bordered table-striped table-hover">
			    <thead>
            <tr>
                <th width="8%">No.</th>
                <th width="22%">Fakultas</th>
                <th width="15%">Jenjang Studi</th>
                <th width="25%">Jurusan/Prodi</th>
                <th width="20%">Konsentrasi</th>
            </tr>
            </thead>
            <tbody>

            </tbody>
			</table>
      </div><!-- /.box-body -->
   </div><!-- /.box-body out -->
</section><!-- /.content -->
<!-- END OF CONTENT -->
@endsection