<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipeJawaban extends Model
{
    //
    protected $guarded = [];
    protected $table = 'm_tipe_jawaban';
    protected $fillable = ['id', 'tipe_jawaban'];
}
