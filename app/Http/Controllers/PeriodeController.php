<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\JalurMasuk;
use DB;
use Datatables;
use App\Periode;

class PeriodeController extends Controller
{
    //
    public function index()
    {
        //
        $jalurmasuk = array(
            '' => 'Pilih Jalur Masuk'
        );
        $jalurmasuks = JalurMasuk::lists('jalur_masuk', 'id');

        foreach ($jalurmasuks as $key => $obj) {
            $jalurmasuk[$key] = $obj;
        }
        return view('setting.periode',compact('jalurmasuk'));
    }


    public function store(Request $request)
    {
        //
        periode::create($request->all());
    }

    public function edit($id)
    {
        //
        $jalurmasuk = array(
            '' => 'Pilih Jalur Masuk'
        );
        $jalurmasuks = JalurMasuk::lists('jalur_masuk', 'id');

        foreach ($jalurmasuks as $key => $obj) {
            $jalurmasuk[$key] = $obj;
        }

        $periode = Periode::find($id);
        return view('setting.edit_periode', compact('periode','jalurmasuk'));
    }

    public function update(Request $request, $id)
    {
        //
        $periode = periode::find($id);
        $periode->update($request->all());
    }


    public function getPeriode(Request $request){
        DB::statement(DB::raw('set @rownum = 0'));
        $data = DB::table('t_periode AS p')
        ->join('m_jalur_masuk As m', 'm.id', '=', 'p.id_jalur_masuk')
        ->select([DB::raw('@rownum  := @rownum  + 1 AS no'),'p.id', 'm.jalur_masuk', 'p.angkatan','p.awal','p.akhir','p.link_pengumuman','p.tgl_pengumuman', DB::raw('if(p.aktif=1,"Aktif","Tidak Aktif") AS aktif')]);
        
        //debug($data);

        $datatables = Datatables::of($data);
        if ($keyword = $request->get('search')['value']) {
            $datatables->filterColumn('no', 'whereRaw', '@rownum  + 1 like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('aktif', 'whereRaw','if(p.aktif=1,"Aktif","Tidak Aktif") like ?', ["%{$keyword}%"]);
        }

        return $datatables
        ->editColumn('link_pengumuman','<a href="{!! $link_pengumuman !!}" target="_blank">{!! $link_pengumuman !!}</a>')
        ->addcolumn('action','<a title="Edit Data" href="#" data-toggle="modal" data-target="#modalUbahPeriode" data-id="{!! $id !!}" ><span class="label label-info"><span class="fa fa-edit"></span></span> </a>')
        ->make(true);                
    } //end function ajax
}
