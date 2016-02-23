<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IsiGroupPertanyaan extends Model
{
    //
    protected $guarded = [];
    protected $table = 't_isi_group_pertanyaan';
    protected $fillable = ['id', 'id_profile_group','id_pertanyaan','no_urut'];

    public function pertanyaan()
    {
    	return $this->belongsTo('App\Pertanyaan','id_pertanyaan','id');
    }

    public function profilegroup()
    {
    	return $this->belongsTo('App\ProfileGroup','id_profile_group','id');
    }
}
