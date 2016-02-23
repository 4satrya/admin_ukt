<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenjangStudi extends Model
{
    //
    protected $guarded = [];
    protected $table = 'm_jenjang_studi';
    protected $fillable = ['id', 'kode', 'keterangan'];

    public function jurusan(){
		return $this->hasMany('App\Jurusan','id_jenjang_studi');
	}
}
