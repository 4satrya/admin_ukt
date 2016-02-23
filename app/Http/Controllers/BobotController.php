<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Datatables;
use App\Bobot;

class BobotController extends Controller
{
    //
    public function index()
    {
        //
        return view('datamaster.bobot');
    }

    public function getBobot(Request $request){

    	DB::statement(DB::raw('set @rownum = 0'));
		$data = DB::table('m_bobot AS b')
        ->select([DB::raw('@rownum  := @rownum  + 1 AS no'),'b.id', 'b.deskripsi_bobot','nilai_bobot']);
        

        $datatables = Datatables::of($data);
        if ($keyword = $request->get('search')['value']) {
            $datatables->filterColumn('no', 'whereRaw', '@rownum  + 1 like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('id', 'whereRaw','m.id like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('deskripsi_bobot', 'whereRaw','b.deskripsi_bobot like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('nilai_bobot', 'whereRaw','b.nilai_bobot like ?', ["%{$keyword}%"]);
        }

        return $datatables
        ->addcolumn('action','<a title="Edit Data" href="#" data-toggle="modal" data-target="#modalUbahBobot" data-id="{!! $id !!}" ><span class="label label-info"><span class="fa fa-edit"></span></span> </a>')
        ->make(true);

			    
	} //end function ajax

	public function store(Request $request)
    {
        //
        Bobot::create($request->all());
    }

    public function edit($id)
    {
    	$bobot = Bobot::find($id);
    	return view('datamaster.edit_bobot',compact('bobot'));
    }

    public function update(Request $request, $id)
    {
    	$bobot = Bobot::find($id);
    	$bobot->update($request->all());
    }
}
