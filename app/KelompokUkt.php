<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KelompokUkt extends Model
{
    //
    protected $guarded = [];
    protected $table = 'm_ukt';
    protected $fillable = ['id', 'jenis_ukt', 'keterangan','flag_delete'];

    public function periode()
    {
        return $this->hasMany('App\PersentaseUkt');
    }
}
