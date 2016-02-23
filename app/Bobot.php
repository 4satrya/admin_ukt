<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bobot extends Model
{
    //
    protected $guarded = [];
    protected $table = 'm_bobot';
    protected $fillable = ['id', 'deskripsi_bobot','nilai_bobot'];
}
