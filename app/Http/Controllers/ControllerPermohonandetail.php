<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
use Carbon\Carbon;
use App\ModelPermohonan;
use App\ModdelUsers;
class ControllerPermohonandetail extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $surat1 = DB::table('surat')->where('id_surat', Session::get('id_surat'))->first();
        $surat['prasyarat'] = explode(",", $surat1->prasyarat);
        $array = $surat['prasyarat'];



        $mohon = DB::table('permohonan')
            ->where('id_permohonan', Session::get('mohon'))
            // ->where('')
            ->first();
        // dd($mohon);die();
        // dd(Session::get('id_surat'));die();
        Session::put('mohon',$mohon->id_permohonan);
        // dd(Session::get('mohon'));die();
        return view('tambah_data_permohonan_detail',compact('array','mohon'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $permohonan = ModelPermohonan::where('id_permohonan', Session::get('mohon'))->first();

        if ($request->file('transkip_nilai') == null) {
            $permohonan->transkip_nilai = null;
        } else {
            $transkip_nilai = $request->file('transkip_nilai');
            $ext2 = $transkip_nilai->getClientOriginalExtension();
            $newName2 = "transkip_nilai ".date('Ymd_his').".".$ext2;
            $transkip_nilai->move('uploads/transkip_nilai',$newName2);
            $permohonan->transkip_nilai = $newName2;    
        }

        if ($request->file('krs') == null) {
            $permohonan->krs = null;
        } else {
            $krs = $request->file('krs');   
            $ext = $krs->getClientOriginalExtension();
            $newName = "krs ".date('Ymd_his').".".$ext;
            $krs->move('uploads/krs',$newName);        
            $permohonan->krs = $newName;    
        }
        

        if ($request->file('bukti_tf') == null) {
            $permohonan->bukti_tf = null;
        } else{
            $bukti_tf = $request->file('bukti_tf');
            $ext1 = $bukti_tf->getClientOriginalExtension();
            $newName1 = "bukti_tf ".date('Ymd_his').".".$ext1;
            $bukti_tf->move('uploads/bukti_tf',$newName1);
            $permohonan->bukti_tf = $newName1;    
        }
        
        $permohonan->catatan = $request->nomor_surat;
        $dt = Carbon::now();
        $permohonan->tanggal = $dt->toDateString();
        $permohonan->status = 1;
        $permohonan->save();

        return redirect()->route('permohonan.index')->with('alert-success', 'Yeah Selamat!! Anda berhasil menambahkan data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
