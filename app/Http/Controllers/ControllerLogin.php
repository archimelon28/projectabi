<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use DateTimeZone;
use Carbon\Carbon;
use Hash;   
use Illuminate\Support\Facades\Session;
use App\User;
use App\ModelUsers;
class ControllerLogin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!Session::get('login')){
            return redirect('/login')->with('alert','Kamu harus login dulu');
        }
        else{
            $user = DB::table('users')->where('id_user',2)->get();
            $sdm = DB::table('users')->where('id_user','!=',2)->get();
            $mohonn = DB::table('permohonan')->get();
            $surat = DB::table('surat')->get();
            return view('index',compact('user','sdm','mohon','surat'));
        }
    }

    public function login(){
        return view('login');
    }

    public function loginPost(Request $request){
        $email = $request->idm;
        $password = $request->password;

        $data = ModelUsers::where('nim',$email)->join('role','role.id_role','=','users.id_role')->orWhere('nip',$email)->first();
        if($data){ //apakah email tersebut ada atau tidak
            if(Hash::check($password, $data->password)) {
                Session::put('name',$data->name);
                Session::put('roles',$data->id_role);
                Session::put('nama_roles',$data->role_name);
                Session::put('user',$data->id_user);
                Session::put('email',$data->email);
                Session::put('login',TRUE);
                return redirect('/');
            }
            else{
                return redirect('login')->with('alert','Password Salah !');
            }
        }
        else{
            return redirect('login')->with('alert','Password atau Email, Salah!');
        }
    }

    public function UpdateUser(Request $request){
        if(!Session::get('login')){
            return redirect('/login')->with('alert','Kamu harus login dulu');
        }
        else{
            $user = DB::table('users')
                    ->join('role','users.id_role','=','role.id_role')
                    ->join('prodi','users.id_prodi','=','prodi.id_prodi')
                    ->where('id_user',Session::get('user'))
                    ->get();
             //   dd($user);die();
            return view('update_profil',compact('user'));
        }
    }

    public function UpdateUserData(Request $request)
    {
        $data = ModelUsers::where('id_user',Session::get('user'))
                ->first();
        $data->alamat = $request->alamat;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->agama = $request->agama;
        $data->no_hp = $request->no_hp;
        $data->email = $request->email;
        $data->tempat_lahir = $request->tempat_lahir;
        $data->tanggal_lahir = $request->tanggal_lahir;
        $data->status = 1;
        $data->save();
        return redirect('/')->with('alert-success','Data berhasil diubah!');
    }
    public function UpdatePass(Request $request,$id_user)
    {
        
        $oldpass = $request->oldpass;
        $newpass = $request->newpass;
        if (Session::get('roles') == 1) {
        $data = ModelUsers::where('id_user',$id_user)
                ->first();
          $data->password = bcrypt($newpass);
          $data->save();
          return redirect('/')->with('alert-success','Success update data!');            
        } else{
            $data = ModelUsers::where('id_user',Session::get('user'))
                ->first();
            if(Hash::check($oldpass,$data->password)){
                  $newpass = $request->input('newpass');

                  $data->password = bcrypt($newpass);
                  $data->save();
                  return redirect('/')->with('alert-success','Success update data!');
                }
            else{
                return redirect('/update_profil/'.Session::get('user'))->with('alert-danger','Password wrong !'.Hash::check($oldpass,$data->password));
            }
        }
            
    }
    public function logout(){
        Session::flush();
        return redirect('/')->with('alert-success','Kamu sudah logout');
    }


}
    