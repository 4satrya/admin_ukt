<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Jurusan;
use Datatables;

class JurusanController extends Controller
{
    //
    public function index()
    {
        //
        return view('datamaster.jurusan');
    }

    public function getJurusan(Request $request){

    	DB::statement(DB::raw('set @rownum = 0'));
		$data = DB::table('m_jurusan AS j')
		->leftJoin('m_fakultas AS f','j.id_fakultas','=','f.id')
		->leftJoin('m_jenjang_studi AS k','j.id_jenjang_studi','=','k.id')
        ->select([DB::raw('@rownum  := @rownum  + 1 AS no'),'j.id', 'f.nama_fakultas','k.keterangan','j.nama_jurusan']);
        

        $datatables = Datatables::of($data);
        if ($keyword = $request->get('search')['value']) {
            $datatables->filterColumn('no', 'whereRaw', '@rownum  + 1 like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('id', 'whereRaw','j.id like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('nama_fakultas', 'whereRaw','f.nama_fakultas like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('keterangan', 'whereRaw','k.keterangan like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('nama_jurusan', 'whereRaw','j.nama_jurusan like ?', ["%{$keyword}%"]);
        }

        return $datatables->make(true);

			    
	} //end function ajax
}
