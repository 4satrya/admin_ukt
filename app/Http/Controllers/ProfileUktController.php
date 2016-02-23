<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Datatables;
use App\ProfileUkt;

class ProfileUktController extends Controller
{
    //
    public function index()
    {
        //
        return view('datamaster.profileukt');
    }

    public function store(Request $request)
    {
        //
        ProfileUkt::create($request->all());
    }

    public function edit($id)
    {
        //
        $profileukt = ProfileUkt::find($id);
        return view('datamaster.edit_profileukt',compact('profileukt'));
    }

     public function update(Request $request, $id)
    {
    	$profileukt = ProfileUkt::find($id);
        $profileukt->update($request->all());
    }

    public function getProfileUkt(Request $request){

    	DB::statement(DB::raw('set @rownum = 0'));
		$data = DB::table('m_profile AS m')
        ->select([DB::raw('@rownum  := @rownum  + 1 AS no'),'m.id', 'm.deskripsi_profile']);
        

        $datatables = Datatables::of($data);
        if ($keyword = $request->get('search')['value']) {
            $datatables->filterColumn('no', 'whereRaw', '@rownum  + 1 like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('id', 'whereRaw','m.id like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('deskripsi_profile', 'whereRaw','m.deskripsi_profile like ?', ["%{$keyword}%"]);
        }

        return $datatables
        ->addcolumn('action','<a title="Edit Data" href="#" data-toggle="modal" data-target="#modalUbahProfileUkt" data-id="{!! $id !!}" ><span class="label label-info"><span class="fa fa-edit"></span></span> </a>')
        ->make(true);

			    
	} //end function ajax
}
