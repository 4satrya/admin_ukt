<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Periode extends Model
{
    //
    protected $guarded = [];
    protected $table = 't_periode';
    protected $fillable = ['angkatan', 'awal', 'akhir','aktif','id_jalur_masuk','link_pengumuman','tgl_pengumuman'];

    public function jalurmasuk(){
		return $this->belongsTo('App\JalurMasuk','id_jalur_masuk');
	}

    public function userregistrasi(){
		return $this->hasMany('App\UserRegistrasi');
	}

    public function proditawar(){
        return $this->hasMany('App\ProdiTawar');
    }
}
