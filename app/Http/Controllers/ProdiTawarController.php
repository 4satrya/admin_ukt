<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Datatables;
use App\Periode;

class ProdiTawarController extends Controller
{
    //
    public function index()
    {
        //
    	$periode = array(
            '' => 'Pilih Periode'
        );
        $periodes = Periode::selectRaw('CONCAT(t_periode.angkatan, " - ",j.jalur_masuk) as periode, t_periode.id as id')
        ->join('m_jalur_masuk AS j','j.id','=','t_periode.id_jalur_masuk')
        ->orderBy('t_periode.angkatan', 'desc')
        ->lists('periode', 'id');

        foreach ($periodes as $key => $obj) {
            $periode[$key] = $obj;
        }

        return view('setting.proditawar',compact('periode'));
    }

    public function getProdiTawar(Request $request){

    	DB::statement(DB::raw('set @rownum = 0'));
        $data = DB::table('t_prodi_tawar AS t')
        ->join('t_periode AS p', 't.id_periode', '=', 'p.id')
        ->join('m_konsentrasi AS k', 't.id_konsentrasi', '=', 'k.id')
        ->join('m_jurusan AS j', 't.id_jurusan', '=', 'j.id')
        ->join('m_jalur_masuk AS jm', 'p.id_jalur_masuk', '=', 'jm.id')
        ->join('m_jenjang_studi AS js', 't.id_jenjang_studi', '=', 'js.id')
        ->select([DB::raw('@rownum  := @rownum  + 1 AS no'),'t.id','p.angkatan','jm.jalur_masuk','j.nama_jurusan','k.konsentrasi_ps','js.keterangan',DB::raw('if(t.is_reguler=1,"REGULER","NON-REGULER") AS status'),DB::raw('if(t.is_sks=1,"BER-SKS","NOL-SKS") AS sks')]);
        
        //debug($data);

        $datatables = Datatables::of($data);
        if ($keyword = $request->get('search')['value']) {
            $datatables->filterColumn('no', 'whereRaw', '@rownum  + 1 like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('is_reguler', 'whereRaw','if(t.is_reguler=1,"REGULER","NON-REGULER") like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('is_sks', 'whereRaw','if(t.is_sks=1,"BER-SKS","NOL-SKS") like ?', ["%{$keyword}%"]);
        }

        return $datatables
        ->make(true);    

			    
	} //end function ajax
}
