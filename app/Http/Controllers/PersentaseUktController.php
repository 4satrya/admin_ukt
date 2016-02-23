<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Datatables;

class PersentaseUktController extends Controller
{
    //
    public function index()
    {
    	return view('setting.persentaseukt');
    }

    public function getPersentaseUkt(Request $request){

    	DB::statement(DB::raw('set @rownum = 0'));
        $data = DB::table('m_nominal_ukt AS m')
        ->join('t_prodi_tawar AS t', 'm.id_prodi_tawar', '=', 't.id')
        ->join('m_jenjang_studi AS js', 't.id_jenjang_studi', '=', 'js.id')
        ->join('m_ukt AS u', 'm.id_ukt', '=', 'u.id')
        ->join('t_periode AS p', 't.id_periode', '=', 'p.id')
        ->join('m_konsentrasi AS k', 't.id_konsentrasi', '=', 'k.id')
        ->join('m_jurusan AS j', 't.id_jurusan', '=', 'j.id')
        ->join('m_fakultas AS f', 'j.id_fakultas', '=', 'f.id')
        ->join('m_jalur_masuk AS jm', 'p.id_jalur_masuk', '=', 'jm.id')
        ->select([DB::raw('@rownum  := @rownum  + 1 AS no'),DB::raw('CONCAT(if(t.is_reguler=1,"REGULER","NON-REGULER"),"-",js.keterangan) AS status_studi'),'m.id','p.angkatan','m.presentase_mhs', 'u.keterangan','m.nominal','f.nama_fakultas','j.nama_jurusan','jm.jalur_masuk']);
        
        //debug($data);

        $datatables = Datatables::of($data);
        if ($keyword = $request->get('search')['value']) {
            $datatables->filterColumn('no', 'whereRaw', '@rownum  + 1 like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('aktif', 'whereRaw','if(p.aktif=1,"Aktif","Tidak Aktif") like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('status_studi', 'whereRaw','CONCAT(if(t.is_reguler=1,"REGULER","NON-REGULER"),"-",js.keterangan) like ?', ["%{$keyword}%"]);
        }

        return $datatables
        ->editColumn('nominal','{!! number_format($nominal,2) !!}')
        ->editColumn('presentase_mhs','{!! $presentase_mhs !!} %')
        ->addcolumn('action','<a title="Edit Data" href="#" data-toggle="modal" data-target="#modalUbah" data-id="{!! $id !!}" ><span class="label label-info"><span class="fa fa-edit"></span></span> </a>')
        ->make(true);   

			    
	} //end function ajax
}
