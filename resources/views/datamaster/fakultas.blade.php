@extends('../layout')
@section('content')
<section class="content-header">
  <h1>
    Master Fakultas
    <small>Data Fakultas Universitas Udayana</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Data Master</a></li>
    <li class="active">Fakultas</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
      <div class="box box-danger" >
        <div class="box-header">
        	<div class="col-sm-8">
          <h3 class="box-title">Data Fakultas</h3>
          </div>
          <div class="col-sm-4">
          <div align="right">
          <!-- <a href="#modaltambah" class="btn btn-info" data-toggle="modal" ><strong>Tambah</strong></a> -->
          </div>
          </div>
        </div><!-- /.box-header -->
        <div class="box-body">
			<table  id="tbfakultas" class="table table-bordered table-striped table-hover">
			    <thead>
                    <tr>
                        <th width="8%">No.</th>
                        <th width="20%">ID Fakultas</th>
                        <th width="72%">Nama Fakultas</th>
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