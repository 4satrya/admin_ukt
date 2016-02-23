<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BobotPertanyaan extends Model
{
    //
    protected $guarded = [];
    protected $table = 't_bobot_pertanyaan';
    protected $fillable = ['id', 'id_pertanyaan','id_bobot','id_jurusan'];

   public function pertnyaan()
   {
    	return $this->belongsTo('App\Pertanyaan','id_pertanyaan','id');
   }

   public function bobot()
   {
    	return $this->belongsTo('App\Bobot','id_bobot','id');
   }

   public function jurusan()
   {
    	return $this->belongsTo('App\Pertanyaan','id_jurusan','id');
   }
}
