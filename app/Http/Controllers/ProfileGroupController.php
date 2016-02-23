<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Datatables;
use App\ProfileUkt;
use App\GroupPertanyaan;
use App\ProfileGroup;	

class ProfileGroupController extends Controller
{
    //
    public function index()
    {
        //
    	$profileukt = array(' '=>'Pilih Profile UKT');
    	$profileukts = ProfileUkt::lists('deskripsi_profile','id');

    	foreach ($profileukts as $key => $value) {
    		# code...
    		$profileukt[$key]=$value;
    	}

    	$grouppertanyaan = array(''=>'Pilih Group Pertanyaan');
    	$groups = GroupPertanyaan::lists('deskripsi_group','id');
    	foreach ($groups as $key => $value) {
    		# code...
    		$grouppertanyaan[$key]=$value;
    	}
        return view('setting.profilegroup',compact('profileukt','grouppertanyaan'));
    }

    public function store(Request $request)
    {
        //
        ProfileGroup::create($request->all());
    }

    public function edit($id)
    {
        //
        $grouppertanyaan = array(''=>'Pilih Group Pertanyaan');
    	$groups = GroupPertanyaan::lists('deskripsi_group','id');
    	foreach ($groups as $key => $value) {
    		# code...
    		$grouppertanyaan[$key]=$value;
    	}

        $profilegroup = ProfileGroup::find($id);
        return view('setting.edit_profilegroup', compact('profilegroup','grouppertanyaan'));
    }

    public function update(Request $request, $id)
    {
        //
        $profilegroup = ProfileGroup::find($id);
        $profilegroup->update($request->all());
    }

    public function getProfileGroup(Request $request,$id_profile){

    	DB::statement(DB::raw('set @rownum = 0'));
		$data = DB::table('t_profile_group AS pg')
		->join('m_profile AS p','p.id','=','pg.id_profile')
		->join('m_group_pertanyaan AS g','g.id','=','pg.id_group')
        ->select([DB::raw('@rownum  := @rownum  + 1 AS no'),'pg.id', 'p.deskripsi_profile','g.deskripsi_group','pg.no_urut'])
        ->where('pg.id_profile','=',$id_profile);
        

        $datatables = Datatables::of($data);
        if ($keyword = $request->get('search')['value']) {
            $datatables->filterColumn('no', 'whereRaw', '@rownum  + 1 like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('id', 'whereRaw','pg.id like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('deskripsi_profile', 'whereRaw','p.deskripsi_profile like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('deskripsi_group', 'whereRaw','g.deskripsi_group like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('no_urut', 'whereRaw','pg.no_urut like ?', ["%{$keyword}%"]);
        }

        return $datatables
        ->addcolumn('action','<a title="Edit Data" href="#" data-toggle="modal" data-target="#modalUbahProfileGroup" data-id="{!! $id !!}" ><span class="label label-info"><span class="fa fa-edit"></span></span> </a>')
        ->make(true);

			    
	} //end function ajax
}
