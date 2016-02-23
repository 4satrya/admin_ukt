<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JalurMasuk extends Model
{
    //
    protected $guarded = [];
    protected $table = 'm_jalur_masuk';
    protected $fillable = ['id', 'jalur_masuk', 'flag_lokal','flag_pasca'];
	
	public function periode()
    {
        return $this->hasMany('App\Periode');
    }
    
}
