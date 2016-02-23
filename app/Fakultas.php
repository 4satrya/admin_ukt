<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fakultas extends Model
{
    //
    protected $guarded = [];
    protected $table = 'm_fakultas';
    protected $fillable = ['id', 'nama_fakultas'];
	
	public function jurusan()
    {
        return $this->hasMany('App\Jurusan');
    }
}
