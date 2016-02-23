<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Datatables;

class LihatIsiUktController extends Controller
{
    //
    public function index()
    {
    	return view('lihatisiukt');
    }

    public function getDataIsiUkt(Request $request){
        //DB::statement(DB::raw('set @rownum = 0'));
        $id_prodi_tawar = 1;
        DB::statement(DB::raw('set @rownum = 0'));
        $data = DB::table('m_mhs_new AS mn')
        ->join('m_fakultas AS f', 'f.id', '=', 'mn.id_fakultas')
        ->join('t_prodi_tawar AS pt','pt.id','=','mn.id_prodi_tawar')
        ->join('t_periode AS p','p.id','=','mn.periode')
        ->join('m_jalur_masuk AS jm','jm.id','=','p.id_jalur_masuk')
        ->join('m_jurusan AS j','j.id','=','pt.id_jurusan')
        ->join('t_jawaban_mhs AS jm1', function($join)
                                        {
                                            $join->on('jm1.id_mhs','=','mn.no_peserta')
                                            ->on('jm1.id_pertanyaan', '=', DB::raw(20));
                                        })
        ->join('t_jawaban_mhs AS jm2', function($join)
                                        {
                                            $join->on('jm2.id_mhs','=','mn.no_peserta')
                                            ->on('jm2.id_pertanyaan', '=', DB::raw(21));
                                        })
        ->join('t_jawaban_mhs AS jm3', function($join)
                                        {
                                            $join->on('jm3.id_mhs','=','mn.no_peserta')
                                            ->on('jm3.id_pertanyaan', '=', DB::raw(22));
                                        })
        ->join('t_jawaban_mhs AS jm4', function($join)
                                        {
                                            $join->on('jm4.id_mhs','=','mn.no_peserta')
                                            ->on('jm4.id_pertanyaan', '=', DB::raw(24));
                                        })
        ->join('t_jawaban_mhs AS jm5', function($join)
                                        {
                                            $join->on('jm5.id_mhs','=','mn.no_peserta')
                                            ->on('jm5.id_pertanyaan', '=', DB::raw(25));
                                        })
        ->join('t_jawaban_mhs AS jm6', function($join)
                                        {
                                            $join->on('jm6.id_mhs','=','mn.no_peserta')
                                            ->on('jm6.id_pertanyaan', '=', DB::raw(26));
                                        })
        ->join('t_jawaban_mhs AS jm7', function($join)
                                        {
                                            $join->on('jm7.id_mhs','=','mn.no_peserta')
                                            ->on('jm7.id_pertanyaan', '=', DB::raw(27));
                                        })
        ->join('t_jawaban_mhs AS jm8', function($join)
                                        {
                                            $join->on('jm8.id_mhs','=','mn.no_peserta')
                                            ->on('jm8.id_pertanyaan', '=', DB::raw(28));
                                        })
        ->join('t_jawaban_mhs AS jm9', function($join)
                                        {
                                            $join->on('jm9.id_mhs','=','mn.no_peserta')
                                            ->on('jm9.id_pertanyaan', '=', DB::raw(40));
                                        })
        ->join('t_jawaban_mhs AS jm10', function($join)
                                        {
                                            $join->on('jm10.id_mhs','=','mn.no_peserta')
                                            ->on('jm10.id_pertanyaan', '=', DB::raw(41));
                                        })
        ->join('t_jawaban_mhs AS jm11', function($join)
                                        {
                                            $join->on('jm11.id_mhs','=','mn.no_peserta')
                                            ->on('jm11.id_pertanyaan', '=', DB::raw(42));
                                        })
        ->join('t_jawaban_mhs AS jm12', function($join)
                                        {
                                            $join->on('jm12.id_mhs','=','mn.no_peserta')
                                            ->on('jm12.id_pertanyaan', '=', DB::raw(43));
                                        })
        ->join('t_jawaban_mhs AS jm13', function($join)
                                        {
                                            $join->on('jm13.id_mhs','=','mn.no_peserta')
                                            ->on('jm13.id_pertanyaan', '=', DB::raw(44));
                                        })
        ->join('t_jawaban_mhs AS jm14', function($join)
                                        {
                                            $join->on('jm14.id_mhs','=','mn.no_peserta')
                                            ->on('jm14.id_pertanyaan', '=', DB::raw(45));
                                        })
        ->join('t_jawaban_mhs AS jm15', function($join)
                                        {
                                            $join->on('jm15.id_mhs','=','mn.no_peserta')
                                            ->on('jm15.id_pertanyaan', '=', DB::raw(46));
                                        })
        ->join('t_jawaban_mhs AS jm16', function($join)
                                        {
                                            $join->on('jm16.id_mhs','=','mn.no_peserta')
                                            ->on('jm16.id_pertanyaan', '=', DB::raw(47));
                                        })
        ->join('t_jawaban_mhs AS jm17', function($join)
                                        {
                                            $join->on('jm17.id_mhs','=','mn.no_peserta')
                                            ->on('jm17.id_pertanyaan', '=', DB::raw(48));
                                        })
        ->join('t_jawaban_mhs AS jm18',function($join)
                                        {
                                            $join->on('jm18.id_mhs','=','mn.no_peserta')
                                            ->on('jm18.id_pertanyaan', '=', DB::raw(49));
                                        })
        ->select([DB::raw('@rownum  := @rownum  + 1 AS no'),
        					'mn.no_peserta AS id',
        					'f.nama_fakultas', 
        					'j.nama_jurusan',
        					'mn.nama_lengkap',
        					'mn.no_peserta',
        					'jm.jalur_masuk',
        					'jm1.jawaban_mhs AS jawaban1',
                            'jm2.jawaban_mhs AS jawaban2',
                            'jm3.jawaban_mhs AS jawaban3',
                            'jm4.jawaban_mhs AS jawaban4',
                            'jm5.jawaban_mhs AS jawaban5',
                            'jm6.jawaban_mhs AS jawaban6',
                            'jm7.jawaban_mhs AS jawaban7',
                            'jm8.jawaban_mhs AS jawaban8',
                            'jm9.jawaban_mhs AS jawaban9',
                            'jm10.jawaban_mhs AS jawaban10',
                            'jm11.jawaban_mhs AS jawaban11',
                            'jm12.jawaban_mhs AS jawaban12',
                            'jm13.jawaban_mhs AS jawaban13',
                            'jm14.jawaban_mhs AS jawaban14',
                            'jm15.jawaban_mhs AS jawaban15',
                            'jm16.jawaban_mhs AS jawaban16',
                            'jm17.jawaban_mhs AS jawaban17',
                            'jm18.jawaban_mhs AS jawaban18'
        					])
        ->where('mn.status_valid','=',1)
        ->where('status_valid','=',1);

        $datatables = Datatables::of($data);
        if ($keyword = $request->get('search')['value']) {
            $datatables->filterColumn('no', 'whereRaw', '@rownum  + 1 like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('no_peserta', 'whereRaw','mn.no_peserta like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('jawaban1', 'whereRaw','jm1.jawaban_mhs like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('jawaban2', 'whereRaw','jm2.jawaban_mhs like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('jawaban3', 'whereRaw','jm3.jawaban_mhs like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('jawaban4', 'whereRaw','jm4.jawaban_mhs like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('jawaban5', 'whereRaw','jm5.jawaban_mhs like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('jawaban6', 'whereRaw','jm6.jawaban_mhs like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('jawaban7', 'whereRaw','jm7.jawaban_mhs like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('jawaban8', 'whereRaw','jm8.jawaban_mhs like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('jawaban9', 'whereRaw','jm9.jawaban_mhs like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('jawaban10', 'whereRaw','jm10.jawaban_mhs like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('jawaban11', 'whereRaw','jm11.jawaban_mhs like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('jawaban12', 'whereRaw','jm12.jawaban_mhs like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('jawaban13', 'whereRaw','jm13.jawaban_mhs like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('jawaban14', 'whereRaw','jm14.jawaban_mhs like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('jawaban15', 'whereRaw','jm15.jawaban_mhs like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('jawaban16', 'whereRaw','jm16.jawaban_mhs like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('jawaban17', 'whereRaw','jm17.jawaban_mhs like ?', ["%{$keyword}%"]);
            $datatables->filterColumn('jawaban18', 'whereRaw','jm18.jawaban_mhs like ?', ["%{$keyword}%"]);
        }

        return $datatables->make(true);                
    } //end function ajax
}
