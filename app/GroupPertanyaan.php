<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GroupPertanyaan extends Model
{
    //
    protected $guarded = [];
    protected $table = 'm_group_pertanyaan';
    protected $fillable = ['id', 'deskripsi_group'];
}
