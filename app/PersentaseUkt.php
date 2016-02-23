<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersentaseUkt extends Model
{
    //
    protected $table = 'm_nominal_ukt';
    protected $fillable = ['id', 'id_ukt','id_prodi_tawar','nominal','presentase_mhs'];

    public function prodi_tawar(){
		return $this->belongsTo('App\ProdiTawar','id_prodi_tawar','id');
	}

	public function kelompokukt(){
		return $this->belongsTo('App\KelompokUkt','id_ukt','id');
	}
}
