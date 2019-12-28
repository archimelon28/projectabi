<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Session;
use App\ModelSurat;
use PDF;
use Carbon\Carbon;
use DateTimeZone;
use DateTime;  
class ControllerSurat extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $surat = DB::table('surat')->get();
        // dd($surat);die();
        return view('data_surat',compact('surat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambah_data_surat');
    }

    public function suratjadi($id_surat)
    {
            $data = DB::table('users')
            ->join('prodi', 'users.id_prodi', '=', 'prodi.id_prodi')
            // ->join('permohonan', 'permohonan.id_user', '=', 'users.id_user')    
            ->where('users.id_user',Session::get('user'))
            // ->where()
            ->get();

            $t = Carbon::now()->format('d-m-Y');
            // dd($t);die();

             Session::put('id_suratpake',$id_surat);
             return view('suratjadi',compact('data','t'));
        // $pdf = PDF::loadView('suratjadi',compact('data'));  
        // return $pdf->download('medium.pdf');
    }

    public function postsurat(Request $request,$id_surat)
    {
        if (Session::get('id_suratpake') == 1) {
            $data = DB::table('users')
                ->join('prodi', 'users.id_prodi', '=', 'prodi.id_prodi')
                ->where('id_user',Session::get('user'))
                // ->where()
                ->get();

            $surat = $request->tanggal_surat;
            Session::put('tanggal_surat',$surat);
            // $surat->save();

            return view('pdf', compact('data','surat'));

         }
         if (Session::get('id_suratpake') == 2) {
                $data = DB::table('users')
                ->join('prodi', 'users.id_prodi', '=', 'prodi.id_prodi')
                ->where('id_user',Session::get('user'))
                // ->where()
                ->get();
            // dd($data);die();
                $tujuan = $request->tujuan_magang;
                Session::put('tujuan',$tujuan);
                $t = Carbon::now()->format('d-m-Y');
                // dd($tujuan);die();
            return view('pdf', compact('data','tujuan','t'));
         }
         if (Session::get('id_suratpake') == 3) {
                $data = DB::table('users')
                ->join('prodi', 'users.id_prodi', '=', 'prodi.id_prodi')
                ->where('id_user',Session::get('user'))
                // ->where()
                ->get();
            // dd($data);die();
                $alasan= $request->alasan;
                $semester = $request->semester;
                $catatan = $request->catatan;
                $surat = $request->tanggal_surat;
                Session::put('alasan',$alasan);
                Session::put('semester',$semester);
                Session::put('catatan',$catatan);
                Session::put('tanggal_surat',$surat);
                return view('pdf', compact('data','alasan','semester','catatan','surat'));
         }
         if (Session::get('id_suratpake') == 4) {
                $data = DB::table('users')
                ->join('prodi', 'users.id_prodi', '=', 'prodi.id_prodi')
                ->where('id_user',Session::get('user'))
                // ->where()
                ->get();
                
                $nama = $request->nama;
                $nidn = $request->nidn;
                $jabatan = $request->jabatan;
                $surat = $request->tanggal_surat;


                Session::put('nama',$nama);
                Session::put('nidn',$nidn);
                Session::put('jabatan',$jabatan);
                Session::put('tanggal_surat',$surat);
            
                return view('pdf', compact('data','nama','nidn','jabatan','surat'));
         }
    }

    public function print(Request $request,$id_surat)
    {   
         if (Session::get('id_suratpake') == 1) {
                $data = DB::table('users')
                ->join('prodi', 'users.id_prodi', '=', 'prodi.id_prodi')
                ->where('id_user',Session::get('user'))
                // ->where()
                ->get();
            
            $surat =Session::get('tanggal_surat');
            // dd($surat);die();

            $pdf = PDF::loadView('print',compact('data','surat'));  
            return $pdf->download('medium.pdf');
         }
         if (Session::get('id_suratpake') == 2) {
                $data = DB::table('users')
                ->join('prodi', 'users.id_prodi', '=', 'prodi.id_prodi')
                ->where('id_user',Session::get('user'))
                // ->where()
                ->get();
            // dd($data);die();
                $tujuan = Session::get('tujuan');;
                $t = Carbon::now()->format('d-m-Y');
            $pdf = PDF::loadView('print',compact('data','tujuan','t'));  
            return $pdf->download('medium.pdf');
         }
         if (Session::get('id_suratpake') == 3) {
                $data = DB::table('users')
                ->join('prodi', 'users.id_prodi', '=', 'prodi.id_prodi')
                ->where('id_user',Session::get('user'))
                // ->where()
                ->get();
            // dd($data);die();
                $alasan= Session::get('alasan');
                $semester = Session::get('semester');
                $catatan = Session::get('catatan');
                $surat = Session::get('tanggal_surat');
                
            $pdf = PDF::loadView('print',compact('data','alasan','semester','catatan','surat'));  
            return $pdf->download('medium.pdf');
         }
         if (Session::get('id_suratpake') == 4) {
                $data = DB::table('users')
                ->join('prodi', 'users.id_prodi', '=', 'prodi.id_prodi')
                ->where('id_user',Session::get('user'))
                // ->where()
                ->get();
                $nama = Session::get('nama');
                $nidn = Session::get('nidn');
                $jabatan = Session::get('jabatan');
                $surat = Session::get('tanggal_surat');
            // dd($data);die();
            $pdf = PDF::loadView('print',compact('data','nama','nidn','jabatan','surat'));  
            return $pdf->download('medium.pdf');
         }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $surat = new ModelSurat();

        $surat->nomor_surat = $request->nomor_surat;
        $surat->nama_surat = $request->nama_surat;
        $surat->prasyarat = implode(",", $request->input('prasyarat'));
        $surat->save();

        return redirect()->route('surat.index')->with('alert-success', 'Yeah Selamat!! Anda berhasil menambahkan data!');
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
    public function edit($id_surat)
    {
        $surat['data'] = DB::table('surat')->where('id_surat', $id_surat)->get();
        
        $surat1 = DB::table('surat')->where('id_surat', $id_surat)->first();
        $surat['prasyarat'] = explode(",", $surat1->prasyarat);
        // dd($surat['prasyarat']);die();
        
        return view ('update_data_surat',compact('surat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_surat)
    {
        $surat = ModelSurat::where('id_surat', $id_surat)->first();

        $surat->nomor_surat = $request->nomor_surat;
        $surat->nama_surat = $request->nama_surat;
        $surat->prasyarat = implode(",", $request->input('prasyarat'));
        $surat->save();

        return redirect()->route('surat.index')->with('alert-success', 'Yeah Selamat!! Anda berhasil update data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_surat)
    {
        $data = ModelSurat::where('id_surat',$id_surat)->first();
        $data->delete();
        return redirect()->route('surat.index')->with('alert-success','Success delete data!');
    }
}
