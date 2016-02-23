<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfileUkt extends Model
{
    //
    protected $guarded = [];
    protected $table = 'm_profile';
    protected $fillable = ['id', 'deskripsi_profile'];
}
