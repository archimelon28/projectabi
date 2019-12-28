<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelUsers;
use App\ModelRoles;
use Auth;
use DB;
class ControllerSDM extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $sdm = ModelUsers::where('users.id_role','!=', 1)
                ->where('users.status',1)
                ->join('prodi','prodi.id_prodi','=','users.id_prodi')
                ->join('role','role.id_role','=','users.id_role')
                ->get();
        return view('data_sdm', compact('sdm'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $role = DB::table('role')->get();
        $prodi = DB::table('prodi')->get();
        return view('tambah_data_sdm',compact('role','prodi'));;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new ModelUsers();

        $user->id_role = $request->id_role;
        $user->id_prodi = $request->id_prodi;
        $user->nim = $request->NIM;
        $user->nip = $request->NIP;
        $user->name = $request->name;
        //$data->alamat = $request->alamat;
        // $data->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->status = 1;
        $user->save();

        return redirect()->route('sdm.index')->with('alert-success', 'Yeah Selamat!! Anda berhasil menambahkan data!');
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
    public function edit($id_user)
    {
        $sdm = ModelUsers::where('id_user', $id_user)->first();
        $roles = ModelRoles::get();

        return view('update_data_sdm', compact('sdm', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_user)
    {
        $sdm = ModelUsers::where('id_user', $id_user)->first();

        $sdm->nim = $request->nim;
        $sdm->name = $request->name;
        $sdm->tempat_lahir = $request->tempat_lahir;
        $sdm->tanggal_lahir = $request->tanggal_lahir;
        $sdm->jenis_kelamin = $request->jenis_kelamin;
        $sdm->agama = $request->agama;
        $sdm->alamat = $request->alamat;
        $sdm->jenis_kelamin = $request->jenis_kelamin;
        $sdm->agama    = $request->agama;
        $sdm->no_hp = $request->no_hp;
        $sdm->save();

        return redirect()->route('sdm.index')->with('alert-success', 'Yeah Selamat!! Anda berhasil update data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_user)
    {
          $sdm = ModelUsers::where('id_user', $id_user)->first();
         $sdm->delete();

         return redirect()->route('sdm.index')->with('alert-delete', 'Data Deleted Successfuly');
    }
}
