<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Datatables;
use App\GroupPertanyaan;

class GroupPertanyaanController extends Controller
{
    //
    public function index()
    {
        //
        return view('datamaster.grouppertanyaan');
    }

    public function store(Request $request)
    {
        //
        GroupPertanyaan::create($request->all());
    }

    public function edit($id)
    {
        //
        $grouppertanyaan = GroupPertanyaan::find($id);
        return view('datamaster.edit_grouppertanyaan',compact('grouppertanyaan'));
    }

     public function update(Request $request, $id)
    {
    	$grouppertanyaan = GroupPertanyaan::find($id);
        $grouppertanyaan->update($request->all());
    }

    public function getGroupPertanyaan(Request $request){

    	DB::statement(DB::raw('set @rownum = 0'));
		$data = DB::table('m_group_pertanyaan AS m')
        ->select([DB::raw('@rownum  := @rownum  + 1 AS no'),'m.id', 'm.deskripsi_group']);
        

        $datatables = Datatables::of($data);
        if ($keyword = $request->get('search')['value']) {
            $datatables->filterColumn('no', 'whereRaw', '@rownum  + 1 like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('id', 'whereRaw','m.id like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('deskripsi_profile', 'whereRaw','m.deskripsi_group like ?', ["%{$keyword}%"]);
        }

        return $datatables
        ->addcolumn('action','<a title="Edit Data" href="#" data-toggle="modal" data-target="#modalUbahGroupPertanyaan" data-id="{!! $id !!}" ><span class="label label-info"><span class="fa fa-edit"></span></span> </a>')
        ->make(true);

			    
	} //end function ajax
}
