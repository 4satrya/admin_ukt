<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    //
    protected $guarded = [];
    protected $table = 'm_pertanyaan';
    protected $fillable = ['id', 'deskripsi_pertanyaan','id_tipe_jawaban','keterangan'];

    public function tipe_jawaban()
    {
    	return $this->belongsTo('App\TipeJawaban','id_tipe_jawaban','id');
    }
}
