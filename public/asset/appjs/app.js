$(document).ready(function(){
	
	var tbfakultas = $('#tbfakultas').dataTable({
						processing: true,
						serverSide: true,
						ajax: 'tbfakultas',
						columns: [
							{data: 'no', name: 'no',width:"2%"},
							{data: 'id', name: 'id'},
							{data: 'nama_fakultas', name: 'nama_fakultas'}
							]
						});
										
						$('#tbfakultas_filter input').unbind();
						$('#tbfakultas_filter input').bind('keyup', function(e) {
					   	if(e.keyCode == 13) {
							tbfakultas.fnFilter(this.value);
					 	}
	});

	var tbjurusan = $('#tbjurusan').dataTable({
					processing: true,
					serverSide: true,
					ajax: 'tbjurusan',
					columns: [
						{data: 'no', name: 'no',width:"2%"},
						{data: 'nama_fakultas', name: 'f.nama_fakultas'},
						{data: 'keterangan', name: 'k.keterangan'},
						{data: 'nama_jurusan', name: 'j.nama_jurusan'}
						]
					});
									
					$('#tbjurusan_filter input').unbind();
					$('#tbjurusan_filter input').bind('keyup', function(e) {
				   	if(e.keyCode == 13) {
						tbjurusan.fnFilter(this.value);
				 	}
	});

	var tbkonsentrasi = $('#tbkonsentrasi').dataTable({
					processing: true,
					serverSide: true,
					ajax: 'tbkonsentrasi',
					columns: [
						{data: 'no', name: 'no',width:"2%"},
						{data: 'nama_fakultas', name: 'f.nama_fakultas'},
						{data: 'keterangan', name: 'i.keterangan'},
						{data: 'nama_jurusan', name: 'j.nama_jurusan'},
						{data: 'konsentrasi_ps', name: 'k.konsentrasi_ps'}
						]
					});
									
					$('#tbkonsentrasi_filter input').unbind();
					$('#tbkonsentrasi_filter input').bind('keyup', function(e) {
				   	if(e.keyCode == 13) {
						tbkonsentrasi.fnFilter(this.value);
				 	}
	});


	var tbjalurmasuk = $('#tbjalurmasuk').dataTable({
					processing: true,
					serverSide: true,
					ajax: 'tbjalurmasuk',
					columns: [
						{data: 'no', name: 'no',width:"2%"},
						{data: 'jalur_masuk', name: 'jalur_masuk'},
						{data: 'flag_lokal', name: 'flag_lokal'},
						{data: 'flag_pasca', name: 'flag_pasca'},
						{data: 'action', name: 'id',orderable: false, searchable: false}
						]
					});
									
					$('#tbjalurmasuk_filter input').unbind();
					$('#tbjalurmasuk_filter input').bind('keyup', function(e) {
				   	if(e.keyCode == 13) {
						tbjalurmasuk.fnFilter(this.value);
				 	}
	});

	var tbperiode = $('#tbperiode').dataTable( {
					processing: true,
			        serverSide: true,
			        ajax: 'tbperiode',
			        columns: [
			            {data: 'no', name: 'no',width:"2%"},
			            {data: 'jalur_masuk', name: 'jalur_masuk'},
			            {data: 'angkatan', name: 'angkatan'},
			            {data: 'awal', name: 'awal'},
			            {data: 'akhir', name: 'akhir'},
			            {data: 'link_pengumuman', name: 'link_pengumuman'},
			            {data: 'tgl_pengumuman', name: 'tgl_pengumuman'},
			            {data: 'aktif', name: 'aktif'},
			            {data: 'action', name: 'id',orderable: false, searchable: false}
			        	]
			        });

			        $('#tbperiode_filter input').unbind();
						$('#tbperiode_filter input').bind('keyup', function(e) {
					   	if(e.keyCode == 13) {
							tbperiode.fnFilter(this.value);
					 	}
	 });


	var tbkelompokukt = $('#tbkelompokukt').dataTable({
						processing: true,
						serverSide: true,
						ajax: 'tbkelompokukt',
						columns: [
							{data: 'no', name: 'no',width:"2%"},
							{data: 'jenis_ukt', name: 'jenis_ukt'},
							{data: 'keterangan', name: 'keterangan'},
							{data: 'action', name: 'id',orderable: false, searchable: false}
							]
						});
										
						$('#tbkelompokukt_filter input').unbind();
						$('#tbkelompokukt_filter input').bind('keyup', function(e) {
					   	if(e.keyCode == 13) {
							tbkelompokukt.fnFilter(this.value);
					 	}
	});

	var tbprofileukt = $('#tbprofileukt').dataTable({
						processing: true,
						serverSide: true,
						ajax: 'tbprofileukt',
						columns: [
							{data: 'no', name: 'no',width:"2%"},
							{data: 'deskripsi_profile', name: 'deskripsi_profile'},
							{data: 'action', name: 'id',orderable: false, searchable: false}
							]
						});
						$('#tbprofileukt_filter input').unbind();
						$('#tbprofileukt_filter input').bind('keyup', function(e) {
					   	if(e.keyCode == 13) {
							tbprofileukt.fnFilter(this.value);
					 	}
						
	});

	var tbgrouppertanyaan = $('#tbgrouppertanyaan').dataTable({
						processing: true,
						serverSide: true,
						ajax: 'tbgrouppertanyaan',
						columns: [
							{data: 'no', name: 'no',width:"2%"},
							{data: 'deskripsi_group', name: 'deskripsi_group'},
							{data: 'action', name: 'id',orderable: false, searchable: false}
							]
						});
						$('#tbgrouppertanyaan_filter input').unbind();
						$('#tbgrouppertanyaan_filter input').bind('keyup', function(e) {
					   	if(e.keyCode == 13) {
							tbgrouppertanyaan.fnFilter(this.value);
					 	}
						
	});

	var tbpertanyaan = $('#tbpertanyaan').dataTable({
							processing: true,
							serverSide: true,
							ajax: 'tbpertanyaan',
							columns: [
								{data: 'no', name: 'no',width:"2%"},
								{data: 'deskripsi_pertanyaan', name: 'p.deskripsi_pertanyaan'},
								{data: 'tipe_jawaban', name: 't.tipe_jawaban'},
								{data: 'keterangan', name: 'p.keterangan'},
								{data: 'action', name: 'id',orderable: false, searchable: false}
								]
							});
							$('#tbpertanyaan_filter input').unbind();
							$('#tbpertanyaan_filter input').bind('keyup', function(e) {
								if(e.keyCode == 13) {
								tbpertanyaan.fnFilter(this.value);
								}
						
	});

	var tbprofilegroup = $('#tbprofilegroup').dataTable({
						processing: true,
						serverSide: true,
						ajax: 'tbprofilegroup/'+$("#id_profile").val(),
						columns: [
							{data: 'no', name: 'no',width:"2%"},
							{data: 'deskripsi_profile', name: 'p.deskripsi_profile'},
							{data: 'deskripsi_group', name: 'g.deskripsi_group'},
							{data: 'no_urut', name: 'pg.no_urut'},
							{data: 'action', name: 'id',orderable: false, searchable: false}
							]
						});
						$('#tbprofilegroup_filter input').unbind();
						$('#tbprofilegroup_filter input').bind('keyup', function(e) {
					   	if(e.keyCode == 13) {
							tbprofilegroup.fnFilter(this.value);
					 	}
						
	});

	var tbproditawar = $('#tbproditawar').dataTable({
						processing: true,
						serverSide: true,
						ajax: 'tbproditawar',
						columns: [
							{data: 'no', name: 'no',width:"2%"},
				            {data: 'jalur_masuk', name: 'jalur_masuk'},
				            {data: 'angkatan', name: 'angkatan'},
				            {data: 'nama_jurusan', name: 'nama_jurusan'},
				            {data: 'konsentrasi_ps', name: 'konsentrasi_ps'},
				            {data: 'keterangan', name: 'keterangan'},
				            {data: 'status', name: 'is_reguler'},
				            {data: 'sks', name: 'is_sks'},
							]
						});
						$('#tbproditawar_filter input').unbind();
						$('#tbproditawar_filter input').bind('keyup', function(e) {
					   	if(e.keyCode == 13) {
							tbproditawar.fnFilter(this.value);
					 	}
						
	});

	var tbnominal = $('#tbnominal').dataTable({
						processing: true,
						serverSide: true,
						ajax: 'tbnominal',
						columns: [
							{data: 'no', name: 'no',width:"2%"},
				            {data: 'jalur_masuk', name: 'jalur_masuk'},
				            {data: 'angkatan', name: 'angkatan'},
				            {data: 'nama_fakultas', name: 'nama_fakultas'},
				            {data: 'nama_jurusan', name: 'nama_jurusan'},
				            {data: 'status_studi', name: 'status_studi'},
				            {data: 'keterangan', name: 'u.keterangan'},
				            {data: 'nominal', name: 'nominal'},
				            {data: 'presentase_mhs', name: 'presentase_mhs'},
				            {data: 'action', name: 'id',orderable: false, searchable: false}
							]
						});
						$('#tbnominal_filter input').unbind();
						$('#tbnominal_filter input').bind('keyup', function(e) {
					   	if(e.keyCode == 13) {
							tbnominal.fnFilter(this.value);
					 	}
						
	});

	var tbisigroup = $('#tbisigroup').dataTable({
						processing: true,
						serverSide: true,
						ajax: 'tbisigroup',
						columns: [
							{data: 'no', name: 'no',width:"2%"},
				            {data: 'deskripsi_profile', name: 'pr.deskripsi_profile'},
				            {data: 'deskripsi_group', name: 'g.deskripsi_group'},
				            {data: 'deskripsi_pertanyaan', name: 'p.deskripsi_pertanyaan'},
				            {data: 'tipe_jawaban', name: 'tj.tipe_jawaban'},
				            {data: 'no_urut', name: 'igp.no_urut'},
				            {data: 'action', name: 'id',orderable: false, searchable: false}
							]
						});
						$('#tbisigroup_filter input').unbind();
						$('#tbisigroup_filter input').bind('keyup', function(e) {
					   	if(e.keyCode == 13) {
							tbisigroup.fnFilter(this.value);
					 	}
						
	});

	var tblihatukt = $('#tblihatukt').dataTable({
						processing: true,
						serverSide: true,
						ajax: 'tblihatukt',
						columns: [
							{data: 'no', name: 'no',width:"2%"},
				            {data: 'nama_fakultas', name: 'f.nama_fakultas'},
				            {data: 'nama_jurusan', name: 'j.nama_jurusan'},
				            {data: 'nama_lengkap', name: 'mn.nama_lengkap'},
				            {data: 'no_peserta', name: 'mn.no_peserta'},
				            {data: 'jalur_masuk', name: 'jm.jalur_masuk'},
				            {data: 'tgl_lahir', name: 'mn.tgl_lahir'},
				            {data: 'group_ukt', name: 'mn.group_ukt'},
				            {data: 'hasil_cluster', name: 'mn.hasil_cluster'},
				            {data: 'ukt_cluster_xie_beni', name: 'mn.ukt_cluster_xie_beni'},
				            {data: 'hasil_electre', name: 'mn.hasil_electre'},
				            {data: 'action', name: 'id',orderable: false, searchable: false}
							]
						});
						$('#tblihatukt_filter input').unbind();
						$('#tblihatukt_filter input').bind('keyup', function(e) {
					   	if(e.keyCode == 13) {
							tblihatukt.fnFilter(this.value);
					 	}
						
	});

	var tbbobot = $('#tbbobot').dataTable({
						processing: true,
						serverSide: true,
						ajax: 'tbbobot',
						columns: [
							{data: 'no', name: 'no',width:"2%"},
				            {data: 'deskripsi_bobot', name: 'deskripsi_bobot'},
				            {data: 'nilai_bobot', name: 'nilai_bobot'},
				            {data: 'action', name: 'id',orderable: false, searchable: false}
							]
						});
						$('#tbbobot_filter input').unbind();
						$('#tbbobot_filter input').bind('keyup', function(e) {
					   	if(e.keyCode == 13) {
							tbbobot.fnFilter(this.value);
					 	}
						
	});

	var tbbobotpertanyaan = $('#tbbobotpertanyaan').dataTable({
						processing: true,
						serverSide: true,
						ajax: 'tbbobotpertanyaan/'+$("#id_jurusan").val(),
						columns: [
							{data: 'no', name: 'no',width:"2%"},
				            {data: 'nama_jurusan', name: 'j.nama_jurusan'},
				            {data: 'deskripsi_pertanyaan', name: 'p.deskripsi_pertanyaan'},
				            {data: 'deskripsi_bobot', name: 'deskripsi_bobot'},
				            {data: 'action', name: 'id',orderable: false, searchable: false}
							]
						});
						$('#tbbobotpertanyaan_filter input').unbind();
						$('#tbbobotpertanyaan_filter input').bind('keyup', function(e) {
					   	if(e.keyCode == 13) {
							tbbobotpertanyaan.fnFilter(this.value);
					 	}
						
	});

	var tblihatisiukt = $('#tblihatisiukt').dataTable({
						"processing": true,
				        "serverSide": true,
				        "scrollX" : true,
						"ajax": 'tblihatisiukt',
						"columns": [
							{data: 'no', name: 'no',width:"2%"},
				            {data: 'nama_fakultas', name: 'f.nama_fakultas'},
				            {data: 'nama_jurusan', name: 'j.nama_jurusan'},
				            {data: 'nama_lengkap', name: 'mn.nama_lengkap'},
				            {data: 'no_peserta', name: 'mn.no_peserta'},
				            {data: 'jalur_masuk', name: 'jm.jalur_masuk'},
				            {data: 'jawaban1', name: 'jm1.jawaban_mhs'},
				            {data: 'jawaban2', name: 'jm2.jawaban_mhs'},
				            {data: 'jawaban3', name: 'jm3.jawaban_mhs'},
				            {data: 'jawaban4', name: 'jm4.jawaban_mhs'},
				            {data: 'jawaban5', name: 'jm5.jawaban_mhs'},
				            {data: 'jawaban6', name: 'jm6.jawaban_mhs'},
				            {data: 'jawaban7', name: 'jm7.jawaban_mhs'},
				            {data: 'jawaban8', name: 'jm8.jawaban_mhs'},
				            {data: 'jawaban9', name: 'jm9.jawaban_mhs'},
				            {data: 'jawaban10', name: 'jm10.jawaban_mhs'},
				            {data: 'jawaban11', name: 'jm11.jawaban_mhs'},
				            {data: 'jawaban12', name: 'jm12.jawaban_mhs'},
				            {data: 'jawaban13', name: 'jm13.jawaban_mhs'},
				            {data: 'jawaban14', name: 'jm14.jawaban_mhs'},
				            {data: 'jawaban15', name: 'jm15.jawaban_mhs'},
				            {data: 'jawaban16', name: 'jm16.jawaban_mhs'},
				            {data: 'jawaban17', name: 'jm17.jawaban_mhs'},
				            {data: 'jawaban18', name: 'jm18.jawaban_mhs'}
							]
						});
						$('#tblihatisiukt_filter input').unbind();
						$('#tblihatisiukt_filter input').bind('keyup', function(e) {
					   	if(e.keyCode == 13) {
							tblihatisiukt.fnFilter(this.value);
					 	}
						
	});

	$(document).on('submit', '#tambahjalurmasuk', function() {
		// post the data from the form
		var data = $(this).serialize();
		$('#modaltambah').modal('hide');
		$('.overlay').css('display','block');
		$.ajax({
			url:'jalurmasuk',
			type:"post",
			data: data,
			success:function(data){
				tbjalurmasuk.api().ajax.reload();
				setTimeout(function() {
						//alert($("#reloadJs").html());
						$('.overlay').css('display','none');
						$("#infotambah").fadeIn(300);
				}, 1000);
				setTimeout(function() {
						$("#infotambah").fadeOut(2500);
				}, 2500);
			}
		})	
        return false;
    });

    $(document).on('submit', '#ubahjalurmasuk', function() {
		$('#modalUbah').modal('hide');
		$('.overlay').css('display','block');
		var id = $("#id").val();
		var data = $(this).serialize();
		
		$.ajax({
			url:'jalurmasuk/'+id,
			type:'PUT',
			data: data,
			success:function(data){
				tbjalurmasuk.api().ajax.reload();
				setTimeout(function() {
						//alert($("#reloadJs").html());
						$('.overlay').css('display','none');
						$("#infotambah").fadeIn(300);
				}, 1000);
				setTimeout(function() {
						$("#infotambah").fadeOut(2500);
				}, 2500);
			}
		})	
        return false;
	});

	$(document).on('submit', '#tambahPeriode', function() {
		// post the data from the form
		var data = $(this).serialize();
		$('#modaltambah').modal('hide');
		$('.overlay').css('display','block');
		$.ajax({
			url:'periode',
			type:"post",
			data: data,
			success:function(data){
				tbperiode.api().ajax.reload();
				setTimeout(function() {
						//alert($("#reloadJs").html());
						$('.overlay').css('display','none');
						$("#infotambah").fadeIn(300);
				}, 1000);
				setTimeout(function() {
						$("#infotambah").fadeOut(2500);
				}, 2500);
			}
		})	
        return false;
    });


	$(document).on('submit', '#ubahperiode', function() {
		$('#modalUbahPeriode').modal('hide');
		$('.overlay').css('display','block');
		var id = $("#id").val();
		var data = $(this).serialize();
		
		$.ajax({
			url:'periode/'+id,
			type:'PUT',
			data: data,
			success:function(data){
				tbperiode.api().ajax.reload();
				setTimeout(function() {
						//alert($("#reloadJs").html());
						$('.overlay').css('display','none');
						$("#infotambah").fadeIn(300);
				}, 1000);
				setTimeout(function() {
						$("#infotambah").fadeOut(2500);
				}, 2500);
			}
		})	
        return false;
	});

	$(document).on('submit', '#tambahkelompokukt', function() {
		// post the data from the form
		var data = $(this).serialize();
		$('#modaltambah').modal('hide');
		$('.overlay').css('display','block');

		$.ajax({
			url:'kelompokukt',
			type:"post",
			data: data,
			success:function(data){
				tbkelompokukt.api().ajax.reload();
				setTimeout(function() {
						//alert($("#reloadJs").html());
						$('.overlay').css('display','none');
						$("#infotambah").fadeIn(300);
				}, 1000);
				setTimeout(function() {
						$("#infotambah").fadeOut(2500);
				}, 2500);
			}
		})	
        return false;
    }); 

	$(document).on('submit', '#ubahkelompokukt', function() {
		$('#modalUbahKelompokUkt').modal('hide');
		$('.overlay').css('display','block');
		var id = $("#id").val();
		var data = $(this).serialize();
		
		$.ajax({
			url:'kelompokukt/'+id,
			type:'PUT',
			data: data,
			success:function(data){
				tbkelompokukt.api().ajax.reload();
				setTimeout(function() {
						//alert($("#reloadJs").html());
						$('.overlay').css('display','none');
						$("#infotambah").fadeIn(300);
				}, 1000);
				setTimeout(function() {
						$("#infotambah").fadeOut(2500);
				}, 2500);
			}
		})	
        return false;
	});

	$(document).on('submit', '#tambahprofileukt', function() {
		// post the data from the form
		var data = $(this).serialize();
		$('#modaltambah').modal('hide');
		$('.overlay').css('display','block');

		$.ajax({
			url:'profileukt',
			type:"post",
			data: data,
			success:function(data){
				tbprofileukt.api().ajax.reload();
				setTimeout(function() {
						//alert($("#reloadJs").html());
						$('.overlay').css('display','none');
						$("#infotambah").fadeIn(300);
				}, 1000);
				setTimeout(function() {
						$("#infotambah").fadeOut(2500);
				}, 2500);
			}
		})	
        return false;
    });

    $(document).on('submit', '#ubahprofileukt', function() {
		$('#modalUbahProfileUkt').modal('hide');
		$('.overlay').css('display','block');
		var id = $("#id").val();
		var data = $(this).serialize();
		
		$.ajax({
			url:'profileukt/'+id,
			type:'PUT',
			data: data,
			success:function(data){
				tbprofileukt.api().ajax.reload();
				setTimeout(function() {
						//alert($("#reloadJs").html());
						$('.overlay').css('display','none');
						$("#infotambah").fadeIn(300);
				}, 1000);
				setTimeout(function() {
						$("#infotambah").fadeOut(2500);
				}, 2500);
			}
		})	
        return false;
	});

	$(document).on('submit', '#tambahgrouppertanyaan', function() {
		// post the data from the form
		var data = $(this).serialize();
		$('#modaltambah').modal('hide');
		$('.overlay').css('display','block');

		$.ajax({
			url:'grouppertanyaan',
			type:"post",
			data: data,
			success:function(data){
				tbgrouppertanyaan.api().ajax.reload();
				setTimeout(function() {
						//alert($("#reloadJs").html());
						$('.overlay').css('display','none');
						$("#infotambah").fadeIn(300);
				}, 1000);
				setTimeout(function() {
						$("#infotambah").fadeOut(2500);
				}, 2500);
			}
		})	
        return false;
    });

    $(document).on('submit', '#ubahgrouppertanyaan', function() {
		$('#modalUbahGroupPertanyaan').modal('hide');
		$('.overlay').css('display','block');
		var id = $("#id").val();
		var data = $(this).serialize();
		
		$.ajax({
			url:'grouppertanyaan/'+id,
			type:'PUT',
			data: data,
			success:function(data){
				tbgrouppertanyaan.api().ajax.reload();
				setTimeout(function() {
						//alert($("#reloadJs").html());
						$('.overlay').css('display','none');
						$("#infotambah").fadeIn(300);
				}, 1000);
				setTimeout(function() {
						$("#infotambah").fadeOut(2500);
				}, 2500);
			}
		})	
        return false;
	});

	$(document).on('submit', '#tambahpertanyaan', function() {
		// post the data from the form
		var data = $(this).serialize();
		$('#modaltambah').modal('hide');
		$('.overlay').css('display','block');

		$.ajax({
			url:'pertanyaan',
			type:"post",
			data: data,
			success:function(data){
				tbpertanyaan.api().ajax.reload();
				setTimeout(function() {
						//alert($("#reloadJs").html());
						$('.overlay').css('display','none');
						$("#infotambah").fadeIn(300);
				}, 1000);
				setTimeout(function() {
						$("#infotambah").fadeOut(2500);
				}, 2500);
			}
		})	
        return false;
    });

    $(document).on('submit', '#ubahpertanyaan', function() {
		$('#modalUbahPertanyaan').modal('hide');
		$('.overlay').css('display','block');
		var id = $("#id").val();
		var data = $(this).serialize();
		
		$.ajax({
			url:'pertanyaan/'+id,
			type:'PUT',
			data: data,
			success:function(data){
				tbpertanyaan.api().ajax.reload();
				setTimeout(function() {
						//alert($("#reloadJs").html());
						$('.overlay').css('display','none');
						$("#infotambah").fadeIn(300);
				}, 1000);
				setTimeout(function() {
						$("#infotambah").fadeOut(2500);
				}, 2500);
			}
		})	
        return false;
	});

	$(document).on('submit', '#tambahProfileGroup', function() {
		// post the data from the form
		var data = $(this).serialize();
		$('#modaltambah').modal('hide');
		$('.overlay').css('display','block');
		var id_profile = $("#id_profile").val();

		$.ajax({
			url:'profilegroup',
			type:"post",
			data: data+'&id_profile='+id_profile,
			success:function(data){
				refresh_tbprofilegroup();
				setTimeout(function() {
						//alert($("#reloadJs").html());
						$('.overlay').css('display','none');
						$("#infotambah").fadeIn(300);
				}, 1000);
				setTimeout(function() {
						$("#infotambah").fadeOut(2500);
				}, 2500);
			}
		})	
        return false;
    });

    $(document).on('submit', '#ubahprofilegroup', function() {
		// post the data from the form
		var data = $(this).serialize();
		$('#modalUbahProfileGroup').modal('hide');
		$('.overlay').css('display','block');
		var id_profile = $("#id_profile").val();
		var id = $("#id").val();

		$.ajax({
			url:'profilegroup/'+id,
			type:'PUT',
			data: data+'&id_profile='+id_profile,
			success:function(data){
				refresh_tbprofilegroup();
				setTimeout(function() {
						//alert($("#reloadJs").html());
						$('.overlay').css('display','none');
						$("#infotambah").fadeIn(300);
				}, 1000);
				setTimeout(function() {
						$("#infotambah").fadeOut(2500);
				}, 2500);
			}
		})	
        return false;
    });

    $(document).on('submit', '#tambahIsiGroupPertanyaan', function() {
		// post the data from the form
		var data = $(this).serialize();
		$('#modaltambah').modal('hide');
		$('.overlay').css('display','block');
		var id_profile = $("#id_profile").val();
		var id_group = $("#id_group").val();

		$.ajax({
			url:'isigrouppertanyaan',
			type:"post",
			data: data+'&id_profile='+id_profile+"&id_group="+id_group,
			success:function(data){
				tbisigroup.api().ajax.reload();
				setTimeout(function() {
						//alert($("#reloadJs").html());
						$('.overlay').css('display','none');
						$("#infotambah").fadeIn(300);
				}, 1000);
				setTimeout(function() {
						$("#infotambah").fadeOut(2500);
				}, 2500);
			}
		})	
        return false;
    }); 

    $(document).on('submit', '#tambahBobot', function() {
		// post the data from the form
		var data = $(this).serialize();
		$('#modaltambah').modal('hide');
		$('.overlay').css('display','block');

		$.ajax({
			url:'bobot',
			type:"post",
			data:data,
			success:function(data){
				tbbobot.api().ajax.reload();
				setTimeout(function() {
						//alert($("#reloadJs").html());
						$('.overlay').css('display','none');
						$("#infotambah").fadeIn(300);
				}, 1000);
				setTimeout(function() {
						$("#infotambah").fadeOut(2500);
				}, 2500);
			}
		})	
        return false;
    });

    $(document).on('submit', '#ubahBobot', function() {
		$('#modalUbahBobot').modal('hide');
		$('.overlay').css('display','block');
		var id = $("#id").val();
		var data = $(this).serialize();
		
		$.ajax({
			url:'bobot/'+id,
			type:'PUT',
			data: data,
			success:function(data){
				tbbobot.api().ajax.reload();
				setTimeout(function() {
						//alert($("#reloadJs").html());
						$('.overlay').css('display','none');
						$("#infotambah").fadeIn(300);
				}, 1000);
				setTimeout(function() {
						$("#infotambah").fadeOut(2500);
				}, 2500);
			}
		})	
        return false;
	});

	$(document).on('submit', '#tambahBobotPertanyaan', function() {
		// post the data from the form
		var data = $(this).serialize();
		$('#modaltambah').modal('hide');
		$('.overlay').css('display','block');
		var id_jurusan = $("#id_jurusan").val();

		$.ajax({
			url:'bobotpertanyaan',
			type:"post",
			data: data+'&id_jurusan='+id_jurusan,
			success:function(data){
				refresh_tbbobotpertanyaan();
				setTimeout(function() {
						//alert($("#reloadJs").html());
						$('.overlay').css('display','none');
						$("#infotambah").fadeIn(300);
				}, 1000);
				setTimeout(function() {
						$("#infotambah").fadeOut(2500);
				}, 2500);
			}
		})	
        return false;
    });

    $(document).on('submit', '#ubahbobotpertanyaan', function() {
		$('#modalUbahBobotPertanyaan').modal('hide');
		$('.overlay').css('display','block');
		var id = $("#id").val();
		var data = $(this).serialize();
		var id_jurusan = $("#id_jurusan").val();
		
		$.ajax({
			url:'bobotpertanyaan/'+id,
			type:'PUT',
			data: data+'&id_jurusan='+id_jurusan,
			success:function(data){
				refresh_tbbobotpertanyaan();
				setTimeout(function() {
						//alert($("#reloadJs").html());
						$('.overlay').css('display','none');
						$("#infotambah").fadeIn(300);
				}, 1000);
				setTimeout(function() {
						$("#infotambah").fadeOut(2500);
				}, 2500);
			}
		})	
        return false;
	});


	$('#modalUbahPeriode').on('shown.bs.modal', function (e) {
	  	$('.overlay2').css('display','block');
	  	var id = $(e.relatedTarget).data('id');
	  	$('#isi').load('periode/'+ id +'/edit');
	});

	$('#modalUbah').on('shown.bs.modal', function (e) {
	  	//$('#id_jalur_masuk').val($(e.relatedTarget).data('id'));
	  	$('.overlay2').css('display','block');
	  	var id = $(e.relatedTarget).data('id');
	  	$('#isi').load('jalurmasuk/'+ id +'/edit');
	});

	$('#modalUbahKelompokUkt').on('shown.bs.modal', function (e) {
	  	$('.overlay2').css('display','block');
	  	var id = $(e.relatedTarget).data('id');
	  	$('#isi').load('kelompokukt/'+ id +'/edit');
	});

	$('#modalUbahKelompokUkt').on('shown.bs.modal', function (e) {
	  	$('.overlay2').css('display','block');
	  	var id = $(e.relatedTarget).data('id');
	  	$('#isi').load('kelompokukt/'+ id +'/edit');
	});

	$('#modalUbahProfileUkt').on('shown.bs.modal', function (e) {
	  	$('.overlay2').css('display','block');
	  	var id = $(e.relatedTarget).data('id');
	  	$('#isi').load('profileukt/'+ id +'/edit');
	});

	$('#modalUbahGroupPertanyaan').on('shown.bs.modal', function (e) {
	  	$('.overlay2').css('display','block');
	  	var id = $(e.relatedTarget).data('id');
	  	$('#isi').load('grouppertanyaan/'+ id +'/edit');
	});

	$('#modalUbahPertanyaan').on('shown.bs.modal', function (e) {
	  	$('.overlay2').css('display','block');
	  	var id = $(e.relatedTarget).data('id');
	  	$('#isi').load('pertanyaan/'+ id +'/edit');
	});

	$('#modalUbahProfileGroup').on('shown.bs.modal', function (e) {
	  	$('.overlay2').css('display','block');
	  	var id = $(e.relatedTarget).data('id');
	  	$('#isi').load('profilegroup/'+ id +'/edit');
	});

	$('#modalUbahBobot').on('shown.bs.modal', function (e) {
	  	$('.overlay2').css('display','block');
	  	var id = $(e.relatedTarget).data('id');
	  	$('#isi').load('bobot/'+ id +'/edit');
	});

	$('#modalUbahBobotPertanyaan').on('shown.bs.modal', function (e) {
	  	$('.overlay2').css('display','block');
	  	var id = $(e.relatedTarget).data('id');
	  	$('#isi').load('bobotpertanyaan/'+ id +'/edit');
	});

	$('#id_profile').change(function(){
		$.ajax({
			url: "selectprofile/"+this.value,
			dataType : "json",
			success: function(result){
				$('#id_group').empty();
				  $('#id_group').append("<option value='' >Pilih Group Pertanyaan</option>");                    
	            $.each(result, function(key, value) {
	                $('#id_group').append("<option value='" + key +"'>" + value + "</option>");
	            });
			} 
		});
	});

	$('#id_fakultas').change(function(){
		$.ajax({
			url: "selectjurusan/"+this.value+"/"+$('#id_periode').val(),
			dataType : "json",
			success: function(result){
				$('#id_prodi').empty();
				  $('#id_prodi').append("<option value='' >Semua Program Studi</option>");                    
	            $.each(result, function(key, value) {
	                $('#id_prodi').append("<option value='" + key +"'>" + value + "</option>");
	            });
			} 
		});
	});

	 $("#id_jurusan").select2({});
	 //$("#id_pertanyaan").select2({});
});

function refresh_tbprofilegroup()
{
	var table = $('#tbprofilegroup').dataTable();
    table.fnReloadAjax( 'tbprofilegroup/'+$("#id_profile").val());
}

function refresh_tbbobotpertanyaan()
{
	var table = $('#tbbobotpertanyaan').dataTable();
    table.fnReloadAjax( 'tbbobotpertanyaan/'+$("#id_jurusan").val());
}

function filterisigroup()
{
	$('#modalfilter').modal('hide');
	var table = $('#tbisigroup').dataTable();
	table.fnReloadAjax( 'tbisigroup/'+$("#id_profile").val()+'/'+$("#id_group").val());
}

function filteruktmhs()
{
	$('#modalfilter').modal('hide');
	var table = $('#tblihatukt').dataTable();
	table.fnReloadAjax( 'tblihatukt/'+$("#id_periode").val()+'/'+$("#id_fakultas").val()+'/'+$("#id_jurusan").val());
}

