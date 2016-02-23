<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Konsentrasi extends Model
{
    //
    protected $guarded = [];
    protected $table = 'm_konsentrasi';
    protected $fillable = ['id', 'id_fakultas', 'id_jurusan','konsentrsi_ps'];

	public function jurusan(){
		return $this->belongsTo('App\Jurusan','id_jurusan','id');
	}
}
