<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Datatables;
use App\ProfileUkt;
use App\ProfileGroup;
use App\Pertanyaan;
use App\IsiGroupPertanyaan;

class IsiGroupPertanyaanController extends Controller
{
    //
    public function index()
    {
        //
    	$profileukt = array(' '=>'Pilih Profile UKT');
    	$profileukts = ProfileUkt::lists('deskripsi_profile','id');

    	foreach ($profileukts as $key => $value) {
    		# code...
    		$profileukt[$key] = $value;
    	}

    	$pertanyaan = array(''=>'Pilih Pertanyaan');
    	$pertanyaans = Pertanyaan::lists('deskripsi_pertanyaan','id');
    	foreach ($pertanyaans as $key => $value) {
    		# code...
    		$pertanyaan[$key] = $value;
    	};

        return view('setting.isigrouppertanyaan',compact('profileukt','pertanyaan'));
    }

    public function store(Request $request)
    {
        //
        $profilegroup = ProfileGroup::where('id_profile','=',$request->id_profile)->where('id_group','=',$request->id_group)->first();
        $id_profile_group = $profilegroup['id'];

        $isigrouppertanyaan = new IsiGroupPertanyaan;
        $isigrouppertanyaan->id_profile_group = $id_profile_group;
        $isigrouppertanyaan->id_pertanyaan = $request->id_pertanyaan;
        $isigrouppertanyaan->no_urut = $request->no_urut;

        $isigrouppertanyaan->save();
    }

    public function getIsiGroup(Request $request){

    	DB::statement(DB::raw('set @rownum = 0'));
		$data = DB::table('t_isi_group_pertanyaan AS igp')
		->join('m_pertanyaan AS p','p.id','=','igp.id_pertanyaan')
		->join('m_tipe_jawaban AS tj','tj.id','=','p.id_tipe_jawaban')
		->join('t_profile_group AS pg','pg.id','=','igp.id_profile_group')
		->join('m_profile AS pr','pr.id','=','pg.id_profile')
		->join('m_group_pertanyaan AS g','g.id','=','pg.id_group')
        ->select([DB::raw('@rownum  := @rownum  + 1 AS no'),'igp.id', 'p.deskripsi_pertanyaan','igp.no_urut','pr.deskripsi_profile','g.deskripsi_group','tj.tipe_jawaban']);
        

        $datatables = Datatables::of($data);
        if ($keyword = $request->get('search')['value']) {
            $datatables->filterColumn('no', 'whereRaw', '@rownum  + 1 like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('id', 'whereRaw','igp.id like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('deskripsi_profile', 'whereRaw','pr.deskripsi_profile like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('deskripsi_group', 'whereRaw','g.deskripsi_group like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('deskripsi_pertanyaan', 'whereRaw','p.deskripsi_pertanyaan like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('tipe_jawaban', 'whereRaw','tj.tipe_jawaban like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('no_urut', 'whereRaw','igp.no_urut like ?', ["%{$keyword}%"]);
        }

        return $datatables
        ->addcolumn('action','<a title="Edit Data" href="#" data-toggle="modal" data-target="#modalUbahProfileGroup" data-id="{!! $id !!}" ><span class="label label-info"><span class="fa fa-edit"></span></span> </a>')
        ->make(true);

			    
	} //end function ajax

	public function getIsiGroupDet(Request $request, $id_profile, $id_group){

    	DB::statement(DB::raw('set @rownum = 0'));
		$data = DB::table('t_isi_group_pertanyaan AS igp')
		->join('m_pertanyaan AS p','p.id','=','igp.id_pertanyaan')
		->join('m_tipe_jawaban AS tj','tj.id','=','p.id_tipe_jawaban')
		->join('t_profile_group AS pg','pg.id','=','igp.id_profile_group')
		->join('m_profile AS pr','pr.id','=','pg.id_profile')
		->join('m_group_pertanyaan AS g','g.id','=','pg.id_group')
        ->select([DB::raw('@rownum  := @rownum  + 1 AS no'),'igp.id', 'p.deskripsi_pertanyaan','igp.no_urut','pr.deskripsi_profile','g.deskripsi_group','tj.tipe_jawaban'])
        ->where('pg.id_profile','=',$id_profile)
        ->where('pg.id_group','=',$id_group);
        

        $datatables = Datatables::of($data);
        if ($keyword = $request->get('search')['value']) {
            $datatables->filterColumn('no', 'whereRaw', '@rownum  + 1 like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('id', 'whereRaw','igp.id like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('deskripsi_profile', 'whereRaw','pr.deskripsi_profile like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('deskripsi_group', 'whereRaw','g.deskripsi_group like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('deskripsi_pertanyaan', 'whereRaw','p.deskripsi_pertanyaan like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('tipe_jawaban', 'whereRaw','tj.tipe_jawaban like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('no_urut', 'whereRaw','igp.no_urut like ?', ["%{$keyword}%"]);
        }

        return $datatables
        ->addcolumn('action','<a title="Edit Data" href="#" data-toggle="modal" data-target="#modalUbahProfileGroup" data-id="{!! $id !!}" ><span class="label label-info"><span class="fa fa-edit"></span></span> </a>')
        ->make(true);

        $id_profile_group = ProfileGroup::select('id')->where('id_profile','=',$id_profile)->where('id_group','=',$id_group)->first();
		return $id_profile_group->id;		    
	} //end function ajax

	public function getGroupPertanyaanList($id_profile)
	{
        $grouppertanyaan = ProfileGroup::leftJoin('m_group_pertanyaan','m_group_pertanyaan.id','=','t_profile_group.id_group')
        ->where('t_profile_group.id_profile','=',$id_profile)
        ->lists('m_group_pertanyaan.deskripsi_group', 't_profile_group.id_group');

        return json_encode($grouppertanyaan);
	}
}
