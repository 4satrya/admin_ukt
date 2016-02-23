<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    //
    protected $guarded = [];
    protected $table = 'm_jurusan';
    protected $fillable = ['id', 'id_jenjang_studi', 'id_fakultas','nama_jurusan'];

	public function jenjang_studi(){
		return $this->belongsTo('App\JenjangStudi','id_jenjang_studi','id');
	}

	public function fakultas(){
		return $this->belongsTo('App\Fakultas','id_fakultas','id');
	}

	public function konsentrasi(){
		return $this->hasMany('App\Konsentrasi','id_jurusan');
	}
}
