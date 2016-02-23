<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Fakultas;
use Datatables;

class FakultasController extends Controller
{
    //
    public function index()
    {
        //
        return view('datamaster.fakultas');
    }

    public function getFakultas(Request $request){

    	DB::statement(DB::raw('set @rownum = 0'));
		$data = DB::table('m_fakultas As m')
        ->select([DB::raw('@rownum  := @rownum  + 1 AS no'),'m.id', 'm.nama_fakultas']);
        

        $datatables = Datatables::of($data);
        if ($keyword = $request->get('search')['value']) {
            $datatables->filterColumn('no', 'whereRaw', '@rownum  + 1 like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('id', 'whereRaw','m.id like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('nama_fakultas', 'whereRaw','m.nama_fakultas like ?', ["%{$keyword}%"]);
        }

        return $datatables->make(true);

			    
	} //end function ajax
}
