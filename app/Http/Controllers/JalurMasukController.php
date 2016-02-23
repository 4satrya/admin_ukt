<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Datatables;
use App\JalurMasuk;

class JalurMasukController extends Controller
{
    //

    public function index()
    {
        //
        return view('datamaster.jalurmasuk');
    }

    public function store(Request $request)
    {
        //
        JalurMasuk::create($request->all());
    }

    public function edit($id)
    {
        //
		$jalurmasuk = JalurMasuk::find($id);
        return view('datamaster.edit_jalurmasuk', compact('jalurmasuk'));
    }

    public function update(Request $request, $id)
    {
        //
        $jalurMasuk = JalurMasuk::find($id);
        $jalurMasuk->update($request->all());
    }
    
    public function getJalurMasuk(Request $request){

    	DB::statement(DB::raw('set @rownum = 0'));
		$data = DB::table('m_jalur_masuk As m')
        ->select([DB::raw('@rownum  := @rownum  + 1 AS no'),'m.id', 'm.jalur_masuk', DB::raw('if(m.flag_lokal=1,"Lokal","Nasional") AS flag_lokal'), DB::raw('if(m.flag_pasca=1,"Pascasarjana","Non Pascasarjana") AS flag_pasca')]);
        

        $datatables = Datatables::of($data);
        if ($keyword = $request->get('search')['value']) {
            $datatables->filterColumn('no', 'whereRaw', '@rownum  + 1 like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('flag_lokal', 'whereRaw','if(m.flag_lokal=1,"Lokal","Nasional") like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('flag_pasca', 'whereRaw','if(m.flag_pasca=1,"Pascasarjana","Non Pascasarjana") like ?', ["%{$keyword}%"]);
        }

        return $datatables
        ->addcolumn('action','<a title="Edit Data" href="#" data-toggle="modal" data-target="#modalUbah" data-id="{!! $id !!}" ><span class="label label-info"><span class="fa fa-edit"></span></span> </a>')
        ->make(true);

			    
	} //end function ajax

}
