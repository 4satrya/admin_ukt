<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfileGroup extends Model
{
    //
    protected $guarded = [];
    protected $table = 't_profile_group';
    protected $fillable = ['id', 'id_profile','id_group','no_urut'];

    public function profile()
    {
    	return $this->belongsTo('App\ProfileUkt','id_profile','id');
    }

    public function grouppertanyaan()
    {
    	return $this->belongsTo('App\GroupPertanyaan','id_group','id');
    }
}
