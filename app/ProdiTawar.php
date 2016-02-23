<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProdiTawar extends Model
{
    //
    protected $guarded = [];
    protected $table = 't_prodi_tawar';
    protected $fillable = ['id', 'id_periode','id_jurusan','id_konsentrasi','id_jenjang_studi','is_reguler','is_sks'];

    public function periode()
    {
    	return $this->belongsTo('App\Periode','id_periode','id');
    }

    public function jurusan()
    {
    	return $this->belongsTo('App\Jurusan','id_jurusan','id');
    }

    public function konsentrasi()
    {
    	return $this->belongsTo('App\Konsentrasi','id_konsentrasi','id');
    }

    public function jenjangstudi()
    {
    	return $this->belongsTo('App\JenjangStudi','id_jenjang_studi','id');
    }
}
