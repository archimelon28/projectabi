<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Input;
use App\ModelUsers  ;
use App\ModelPermohonan;

class ControllerPermohonan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cek = DB::table('users')->where('id_user',Session::get('user'))->first();
        // dd($user->status);die();
           if ($cek->tempat_lahir == null) {
            $user = DB::table('users')
                    ->join('role','users.id_role','=','role.id_role')
                    ->join('prodi','users.id_prodi','=','prodi.id_prodi')
                    ->where('id_user',Session::get('user'))
                    ->get();
            return view('update_profil',compact('user'))->with('Mohon isi terlebih dahulu');
        } elseif(Session::get('roles') == 1) {
            $mohon  = DB::table('permohonan')
                ->join('users','permohonan.id_user','=','users.id_user')
                ->join('surat','permohonan.id_surat','=','surat.id_surat')
                ->where('permohonan.id_user',Session::get('user'))
                ->select('permohonan.*','users.name','surat.*')
                ->get();
                // dd($mohon);die();
            return view('data_permohonan',compact('mohon'));
        } elseif (Session::get('roles') == 2) {
            $mohon  = DB::table('permohonan')
                ->join('users','permohonan.id_user','=','users.id_user')
                ->join('surat','permohonan.id_surat','=','surat.id_surat')
                ->select('permohonan.*','users.name','surat.*')
                ->get();
                // dd(Session::get('roles'));die();
            return view('data_permohonan',compact('mohon'));
        } elseif (Session::get('roles') == 3) {
            $mohon  = DB::table('permohonan')
                ->join('users','permohonan.id_user','=','users.id_user')
                ->join('surat','permohonan.id_surat','=','surat.id_surat')
                ->where('permohonan.status',1)
                ->select('permohonan.*','users.name','surat.*')
                ->get();
                // dd(Session::get('roles'));die();
            return view('data_permohonan',compact('mohon'));
        } elseif (Session::get('roles') == 4) {
            $mohon  = DB::table('permohonan')
                ->join('users','permohonan.id_user','=','users.id_user')
                ->join('surat','permohonan.id_surat','=','surat.id_surat')
                ->where('permohonan.status',2)
                ->select('permohonan.*','users.name','surat.*')
                ->get();
                // dd(Session::get('roles'));die();
            return view('data_permohonan',compact('mohon'));
        } 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $surat = DB::table('surat')->get();

        return view('tambah_data_permohonan',compact('surat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Session::put('id_surat',$request->id_surat);
        $mohon = new ModelPermohonan();
        
        $mohon->id_surat = Session::get('id_surat');
        $mohon->id_user = Session::get('user');
        $mohon->save();
        Session::put('mohon',$mohon->id_permohonan);
        
        return redirect('permohonandetail');
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
    public function edit($id_permohonan)
    {
        $permohonan = DB::table('permohonan')->where('id_permohonan',$id_permohonan)->first();
        // dd($permohonan->id_surat);die(); 
        $surat1 = DB::table('surat')->where('id_surat', $permohonan->id_surat)->first();
        $surat['prasyarat'] = explode(",", $surat1->prasyarat);
        $array = $surat['prasyarat'];
        // dd($array);die();
        // dd(Session::get('roles'));die();
        return view('update_data_permohonan', compact('permohonan','array'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_permohonan)
    {
        $data = ModelPermohonan::where('id_permohonan',$id_permohonan)->first();
            
        if(Session::get('roles') == 2 or Session::get('roles') == 1) {
            // dd(!empty($request->file('krs')));die();    
            if (empty($request->file('krs')) and empty($request->file('bukti_tf')) and empty($request->file('transkip_nilai')))
            {
                $data->krs = $data->krs;
                $data->transkip_nilai = $data->transkip_nilai;
                $data->bukti_tf = $data->bukti_tf;
            }elseif (!empty($request->file('krs'))) {
                unlink('uploads/krs/'.$data->krs); //menghapus file lama
                $krs = $request->file('krs');
                $ext = $krs->getClientOriginalExtension();
                $newName = "krs ".date('Ymd_his').".".$ext;
                $krs->move('uploads/krs',$newName);
                $data->krs = $newName;
            }
            elseif (!empty($request->file('transkip_nilai'))) {
                unlink('uploads/transkip_nilai/'.$data->transkip_nilai); //menghapus file lama
                $transkip_nilai = $request->file('transkip_nilai');
                $ext1 = $transkip_nilai->getClientOriginalExtension();
                $newName1 = "transkip_nilai ".date('Ymd_his').".".$ext1;
                $transkip_nilai->move('uploads/transkip_nilai',$newName1);
                $data->transkip_nilai = $newName1;
            } elseif (!empty($request->file('bukti_tf'))) {
                unlink('uploads/bukti_tf/'.$data->bukti_tf); //menghapus file lama
                $bukti_tf = $request->file('bukti_tf');
                $ext2 = $bukti_tf->getClientOriginalExtension();
                $newName2 = "bukti_tf ".date('Ymd_his').".".$ext2;
                $bukti_tf->move('uploads/bukti_tf',$newName2);
                $data->bukti_tf = $newName2;
            }
        } elseif(Session::get('roles') == 3)
        {    
            if(Input::get('Terima'))
            {
                $data = ModelPermohonan::where('id_permohonan',$id_permohonan)->first();
                $data->catatan = $request->catatan;
                $data->status = 2;
                // $data->save();
            } elseif (Input::get('Tolak')) {
                $data = ModelPermohonan::where('id_permohonan',$id_permohonan)->first();
                $data->catatan = $request->catatan;
                $data->status = 1;
                // $data->save();
            }
        } elseif(Session::get('roles') == 4)
        {    
            if(Input::get('Terima'))
            {
                $data = ModelPermohonan::where('id_permohonan',$id_permohonan)->first();
                $data->catatan = $request->catatan;
                $data->status = 3;
                // $data->save();
            } elseif (Input::get('Tolak')) {
                $data = ModelPermohonan::where('id_permohonan',$id_permohonan)->first();
                $data->catatan = $request->catatan;
                $data->status = 1;
                // $data->save();
            }
        }
        $data->save();
        return redirect()->route('permohonan.index')->with('alert-success','Data berhasil diubah!');    
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
