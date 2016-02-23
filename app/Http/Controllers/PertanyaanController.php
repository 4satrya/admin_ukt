<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\TipeJawaban;
use DB;
use Datatables;
use App\Pertanyaan;

class PertanyaanController extends Controller
{
    //
    public function index()
    {
        //
        $tipejawaban = array(
            '' => 'Pilih Tipe Jawaban'
        );
        $tipejawabans = TipeJawaban::lists('tipe_jawaban', 'id');

        foreach ($tipejawabans as $key => $obj) {
            $tipejawaban[$key] = $obj;
        }
        return view('datamaster.pertanyaan',compact('tipejawaban'));
    }

    public function store(Request $request)
    {
        //
        Pertanyaan::create($request->all());
    }

    public function edit($id)
    {
        //
        $tipejawaban = array(
            '' => 'Pilih Tipe Jawaban'
        );
        $tipejawabans = TipeJawaban::lists('tipe_jawaban', 'id');

        foreach ($tipejawabans as $key => $obj) {
            $tipejawaban[$key] = $obj;
        }
        $pertanyaan = Pertanyaan::find($id);
        return view('datamaster.edit_pertanyaan',compact('pertanyaan','tipejawaban'));
    }

    public function update(Request $request, $id)
    {
        //
        $pertanyaan = Pertanyaan::find($id);
        $pertanyaan->update($request->all());
    }

    public function getPertanyaan(Request $request){
        DB::statement(DB::raw('set @rownum = 0'));
        $data = DB::table('m_pertanyaan AS p')
        ->join('m_tipe_jawaban AS t', 't.id', '=', 'p.id_tipe_jawaban')
        ->select([DB::raw('@rownum  := @rownum  + 1 AS no'),'p.id','p.deskripsi_pertanyaan','t.tipe_jawaban','p.keterangan']);
        
        //debug($data);

        $datatables = Datatables::of($data);
        if ($keyword = $request->get('search')['value']) {
            $datatables->filterColumn('no', 'whereRaw', '@rownum  + 1 like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('deskripsi_pertanyaan', 'whereRaw','p.deskripsi_pertanyaan like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('tipe_jawaban', 'whereRaw','t.tipe_jawaban like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('keterangan', 'whereRaw','p.keterangan like ?', ["%{$keyword}%"]);
        }

        return $datatables
        ->addcolumn('action','<a title="Edit Data" href="#" data-toggle="modal" data-target="#modalUbahPertanyaan" data-id="{!! $id !!}" ><span class="label label-info"><span class="fa fa-edit"></span></span> </a>')
        ->make(true);                
    } //end function ajax
}
