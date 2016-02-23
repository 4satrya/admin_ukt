<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Datatables;
use App\Periode;
use App\Fakultas;
use App\Jurusan;
Use App\ProdiTawar;

class LihatUktController extends Controller
{
    //
    public function index()
    {
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

        $fakultas = array(''=>'Semua Fakultas');
        $fakultass = Fakultas::lists('nama_fakultas','id');

        foreach ($fakultass as $key => $value) {
        	# code...
        	$fakultas[$key] = $value;
        }

    	return view('lihatukt',compact('periode','fakultas'));
    }

    public function getDataUkt(Request $request){
        DB::statement(DB::raw('set @rownum = 0'));
        $data = DB::table('m_mhs_new AS mn')
        ->join('m_fakultas AS f', 'f.id', '=', 'mn.id_fakultas')
        ->join('t_prodi_tawar AS pt','pt.id','=','mn.id_prodi_tawar')
        ->join('t_periode AS p','p.id','=','mn.periode')
        ->join('m_jalur_masuk AS jm','jm.id','=','p.id_jalur_masuk')
        ->join('m_jurusan AS j','j.id','=','pt.id_jurusan')
        ->select([DB::raw('@rownum  := @rownum  + 1 AS no'),'mn.no_peserta AS id','f.nama_fakultas', 'j.nama_jurusan','mn.nama_lengkap','mn.no_peserta','jm.jalur_masuk','mn.tgl_lahir','mn.group_ukt','hasil_cluster','ukt_cluster_xie_beni','hasil_electre'])
        ->where('mn.status_valid','=',1);
        
        //debug($data);

        $datatables = Datatables::of($data);
        if ($keyword = $request->get('search')['value']) {
            $datatables->filterColumn('no', 'whereRaw', '@rownum  + 1 like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('nama_fakultas', 'whereRaw','f.nama_fakultas like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('nama_jurusan', 'whereRaw','j.nama_jurusan like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('nama_lengkap', 'whereRaw','mn.nama_lengkap like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('no_peserta', 'whereRaw','mn.no_peserta like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('jalur_masuk', 'whereRaw','jm.jalur_masuk like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('tgl_lahir', 'whereRaw','mn.tgl_lahir like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('group_ukt', 'whereRaw','mn.group_ukt like ?', ["%{$keyword}%"]);
        }

        return $datatables
        ->addcolumn('action','<a title="Edit Data" href="#" data-toggle="modal" data-target="#modalUbahProfileUkt" data-id="{!! $id !!}" ><span class="label label-info"><span class="fa fa-edit"></span></span> </a>')
        ->make(true);                
    } //end function ajax

    public function getDataUktDetail(Request $request,$id_periode,$id_fakultas,$id_jurusan){
        if($id_fakultas == '')
        {
            $id_fakultas = '%%';
        }

        if($id_jurusan == '')
        {   
            $id_jurusan = '%%';
        }else
        {
            $proditawar = ProdiTawar::where('id_periode','=',$id_periode)->where('id_jurusan','=',$id_jurusan)->first();
            $id_jurusan = $proditawar['id_prodi_tawar'];
        }

        debug($id_jurusan);
        DB::statement(DB::raw('set @rownum = 0'));
        $data = DB::table('m_mhs_new AS mn')
        ->join('m_fakultas AS f', 'f.id', '=', 'mn.id_fakultas')
        ->join('t_prodi_tawar AS pt','pt.id','=','mn.id_prodi_tawar')
        ->join('t_periode AS p','p.id','=','mn.periode')
        ->join('m_jalur_masuk AS jm','jm.id','=','p.id_jalur_masuk')
        ->join('m_jurusan AS j','j.id','=','pt.id_jurusan')
        ->select([DB::raw('@rownum  := @rownum  + 1 AS no'),'mn.no_peserta AS id','f.nama_fakultas', 'j.nama_jurusan','mn.nama_lengkap','mn.no_peserta','jm.jalur_masuk','mn.tgl_lahir','mn.group_ukt','hasil_cluster','ukt_cluster_xie_beni','hasil_electre'])
        ->where('mn.status_valid','=',1)
        ->where('mn.periode','=',$id_periode)
        ->where('mn.id_fakultas','like',$id_fakultas);
        
        debug($data);

        $datatables = Datatables::of($data);
        if ($keyword = $request->get('search')['value']) {
            $datatables->filterColumn('no', 'whereRaw', '@rownum  + 1 like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('nama_fakultas', 'whereRaw','f.nama_fakultas like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('nama_jurusan', 'whereRaw','j.nama_jurusan like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('nama_lengkap', 'whereRaw','mn.nama_lengkap like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('no_peserta', 'whereRaw','mn.no_peserta like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('jalur_masuk', 'whereRaw','jm.jalur_masuk like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('tgl_lahir', 'whereRaw','mn.tgl_lahir like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('group_ukt', 'whereRaw','mn.group_ukt like ?', ["%{$keyword}%"]);
        }

        return $datatables
        ->addcolumn('action','<a title="Edit Data" href="#" data-toggle="modal" data-target="#modalUbahProfileUkt" data-id="{!! $id !!}" ><span class="label label-info"><span class="fa fa-edit"></span></span> </a>')
        ->make(true);                
    } //end function ajax

    public function getJurusanList($id_fakultas,$id_periode)
    {

        $jurusan = Jurusan::leftJoin('m_mhs_new','m_mhs_new.id_fakultas','=','m_jurusan.id_fakultas')
        ->where('m_jurusan.id_fakultas','=',$id_fakultas)
        ->lists('m_jurusan.nama_jurusan','m_jurusan.id');

        return json_encode($jurusan);
    }
}
