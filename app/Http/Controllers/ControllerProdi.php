<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\ModelProdi;
class ControllerProdi extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prodi = DB::table('prodi')->get();
        return view('data_prodi',compact('prodi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('tambah_data_prodi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prodi = new ModelProdi();

        $prodi->kode_prodi = $request->kode_prodi;
        $prodi->nama_prodi = $request->nama_prodi;
        $prodi->save();

        return redirect()->route('prodi.index')->with('alert-success', 'Yeah Selamat!! Anda berhasil menambahkan data!');
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
    public function edit($id_prodi)
    {
        $prodi = ModelProdi::where('id_prodi', $id_prodi)->first();
        return view ('update_data_prodi',compact('prodi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_prodi)
    {
        $prodi = ModelProdi::where('id_prodi', $id_prodi)->first();

        $prodi->kode_prodi = $request->kode_prodi;
        $prodi->nama_prodi = $request->nama_prodi;
        $prodi->save();

        return redirect()->route('prodi.index')->with('alert-success', 'Yeah Selamat!! Anda berhasil update data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_prodi)
    {
        $data = ModelProdi::where('id_prodi',$id_prodi)->first();
        $data->delete();
        return redirect()->route('prodi.index')->with('alert-success','Success delete data!');
    }
}
