<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LihatUkt extends Model
{
    //
    protected $table = 'm_mhs_new';
    protected $fillable = ['no_peserta', 'nama_lengkap', 'jns_kelamin','tempat_lahir','tgl_lahir','id_fakultas','id_prodi_tawar','angkatan','periode','skor','group_ukt','last_login','cetak_status','pass','status_valid','hasil_cluster','ukt_cluster_xie_beni','hasil_electre','hasil_terakhir'];

	public function fakultas(){
		return $this->belongsTo('App\Fakultas','id_fakultas','id');
	}

	public function prodi_tawar(){
		return $this->belongsTo('App\ProdiTawar','id_prodi_tawar','id');
	}

	public function periode(){
		return $this->belongsTo('App\Periode','periode','id');
	}
}
