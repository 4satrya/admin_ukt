<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Konsentrasi;
use Datatables;

class KonsentrasiController extends Controller
{
    //
    public function index()
    {
        //
        return view('datamaster.konsentrasi');
    }

    public function getKonsentrasi(Request $request){

    	DB::statement(DB::raw('set @rownum = 0'));
		$data = DB::table('m_konsentrasi AS k')
		->leftJoin('m_jurusan AS j','k.id_jurusan','=','j.id')
		->leftJoin('m_fakultas AS f','j.id_fakultas','=','f.id')
		->leftJoin('m_jenjang_studi AS i','j.id_jenjang_studi','=','i.id')
        ->select([DB::raw('@rownum  := @rownum  + 1 AS no'),'j.id', 'f.nama_fakultas','i.keterangan','j.nama_jurusan','k.konsentrasi_ps'])
        ->where('k.aktif','=',1);
        

        $datatables = Datatables::of($data);
        if ($keyword = $request->get('search')['value']) {
            $datatables->filterColumn('no', 'whereRaw', '@rownum  + 1 like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('id', 'whereRaw','j.id like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('nama_fakultas', 'whereRaw','f.nama_fakultas like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('keterangan', 'whereRaw','i.keterangan like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('nama_jurusan', 'whereRaw','j.nama_jurusan like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('konsentrasi_ps', 'whereRaw','k.konsentrasi_ps like ?', ["%{$keyword}%"]);
        }

        return $datatables->make(true);

			    
	} //end function ajax
}
