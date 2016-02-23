<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Jurusan;
use App\Pertanyaan;
use App\Bobot;
use DB;
use Datatables;
use App\BobotPertanyaan;

class BobotPertanyaanController extends Controller
{
    //
    public function index()
    {
        //
        $jurusans = DB::table('m_jurusan AS j')->leftJoin('m_jenjang_studi AS js','j.id_jenjang_studi','=','js.id')->lists(DB::raw("CONCAT(js.keterangan, ' ', j.nama_jurusan) AS jurusan"),'j.id');
        //$jurusans = Jurusan::lists('nama_jurusan','id');

        foreach ($jurusans as $key => $value) {
          # code...
          $jurusan[$key]=$value;
        }

        $pertanyaan = array(''=>'Pilih Pertanyaan');
        $pertanyaans = Pertanyaan::lists('deskripsi_pertanyaan','id');
        foreach ($pertanyaans as $key => $value) {
          # code...
          $pertanyaan[$key] = $value;
        }

        $bobot = array('' =>  'Pilih Bobot Pertanyaan');
        $bobots = Bobot::lists('deskripsi_bobot','id');
        foreach ($bobots as $key => $value) {
          # code...
          $bobot[$key] = $value; 
        }

        return view('setting.bobot_pertanyaan',compact('jurusan','pertanyaan','bobot'));
    }

    public function getBobotPertanyaan(Request $request,$id_jurusan){
        DB::statement(DB::raw('set @rownum = 0'));

        $data = DB::table('t_bobot_pertanyaan AS bp')
        ->join('m_pertanyaan AS p','p.id','=','bp.id_pertanyaan')
        ->join('m_bobot AS b','b.id','=','bp.id_bobot')
        ->join('m_jurusan AS j','j.id','=','bp.id_jurusan')
        ->select([DB::raw('@rownum  := @rownum  + 1 AS no'),'bp.id', 'p.deskripsi_pertanyaan','b.deskripsi_bobot','j.nama_jurusan'])
        ->where('bp.id_jurusan','=',$id_jurusan);

        $datatables = Datatables::of($data);
        if ($keyword = $request->get('search')['value']) {
            $datatables->filterColumn('no', 'whereRaw', '@rownum  + 1 like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('deskripsi_pertanyaan', 'whereRaw','p.deskripsi_pertanyaan like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('bobot', 'whereRaw','bp.bobot like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('nama_jurusan', 'whereRaw','j.nama_jurusan   like ?', ["%{$keyword}%"]);
        }

        return $datatables
        ->addcolumn('action','<a title="Edit Data" href="#" data-toggle="modal" data-target="#modalUbahBobotPertanyaan" data-id="{!! $id !!}" ><span class="label label-info"><span class="fa fa-edit"></span></span> </a>')
        ->make(true);
    }

    public function store(Request $request)
    {
        //
        BobotPertanyaan::create($request->all());
    }

    public function edit($id)
    {
        //
        $bobotpertanyaan = BobotPertanyaan::find($id);

        $pertanyaan = array(''=>'Pilih Pertanyaan');
        $pertanyaans = Pertanyaan::lists('deskripsi_pertanyaan','id');
        foreach ($pertanyaans as $key => $value) {
          # code...
          $pertanyaan[$key] = $value;
        }

        $bobot = array('' =>  'Pilih Bobot Pertanyaan');
        $bobots = Bobot::lists('deskripsi_bobot','id');
        foreach ($bobots as $key => $value) {
          # code...
          $bobot[$key] = $value; 
        }

        return view('setting.edit_bobot_pertanyaan',compact('bobotpertanyaan','pertanyaan','bobot'));
    }

    public function update(Request $request, $id)
    {
        //
        $bobotpertanyaan = BobotPertanyaan::find($id);
        $bobotpertanyaan->update($request->all());
    }
}
