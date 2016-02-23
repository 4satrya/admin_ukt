<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Datatables;
use App\KelompokUkt;

class KelompokUktController extends Controller
{
    //
    public function index()
    {
    	return view('datamaster.kelompokukt');
    }

    public function store(Request $request)
    {
        //
        KelompokUkt::create($request->all());
    }

    public function edit($id)
    {
        //
		$kelompokukt = KelompokUkt::find($id);
        return view('datamaster.edit_kelompokukt', compact('kelompokukt'));
    }

    public function update(Request $request, $id)
    {
    	$kelompokukt = KelompokUkt::find($id);
    	$kelompokukt->update($request->all());
    }
    public function getKelompokUkt(Request $request){

    	DB::statement(DB::raw('set @rownum = 0'));
		$data = DB::table('m_ukt As m')
        ->select([DB::raw('@rownum  := @rownum  + 1 AS no'),'m.id', 'm.jenis_ukt', 'm.keterangan']);
        

        $datatables = Datatables::of($data);
        if ($keyword = $request->get('search')['value']) {
            $datatables->filterColumn('no', 'whereRaw', '@rownum  + 1 like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('jenis_ukt', 'whereRaw','m.jenis_ukt like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('keterangan', 'whereRaw','m.keterangan like ?', ["%{$keyword}%"]);
        }

        return $datatables
        ->addcolumn('action','<a title="Edit Data" href="#" data-toggle="modal" data-target="#modalUbahKelompokUkt" data-id="{!! $id !!}" ><span class="label label-info"><span class="fa fa-edit"></span></span> </a>')
        ->make(true);
	} //end function ajax
}
