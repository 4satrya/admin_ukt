@extends('../layout')
@section('content')
<section class="content-header">
  <h1>
    Hitung UKT
    <small>Proses Perhitungan UKT Fuzzy <i>C-means</i></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Hitung UKT</a></li>
    <li class="active">Proses FCM</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
	<div class="box box-danger" >
		<div class="box-header">
			<div class="col-sm-6">
				<h3 class="box-title">Proses Clustering UKT Fuzzy <i>C-means</i></h3>
			</div>
			<div class="col-sm-2">
				<div align="right">
					
				</div>
			</div>
			<div class="col-sm-4">
				<div align="right">
					<a href="#modaltambah" class="btn btn-info" data-toggle="modal" ><strong>Hitung</strong></a>
				</div>

			</div>
		</div><!-- /.box-header -->
	</div><!-- /.box-body out -->
</section><!-- /.content -->
<!-- END OF CONTENT -->
@endsection