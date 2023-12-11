<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function indexlogin(){
        return view('pages.auth.login');
    }

    public function indexregister(){
        return view('pages.auth.register');
    }

    public function register_post(Request $request){

        $validatedData = $request->validate([
            'name'=>'required',
            'jenis_kelamin'=>'required',
            'tgl_lahir' => 'required',
            'tempat_kelahiran'=>'required',
            'agama'=>'required',
            'nim_nik'=>'required',
            'perguruan_tinggi'=>'required',
            'password'=>'required',
        ]);
        $users = DB::table('users')->get();
        $name = $request->input('name');
        $jenis_kelamin = $request->input('jenis_kelamin');
        $tgl_lahir = $request->input('tgl_lahir');
        $tempat_kelahiran = $request->input('tempat_kelahiran');
        $agama = $request->input('agama');
        $nim_nik = $request->input('nim_nik');
        $perguruan_tinggi = $request->input('perguruan_tinggi');
        $password = bcrypt($request->input('password'));

        if(count($users) <1){
            $role = 1;
        }
        else{
            $role = 0;
        };

        $create =User::create([
            'name'=>$name,
            'jenis_kelamin'=>$jenis_kelamin,
            'tgl_lahir'=>$tgl_lahir,
            'tempat_kelahiran'=>$tempat_kelahiran,
            'agama'=>$agama,
            'nim_nik'=>$nim_nik,
            'role'=>$role,
            'perguruan_tinggi'=>$perguruan_tinggi,
            'password'=>$password
        ]);

     return  redirect()->route('login')->with('success','Berhasil Register !');

}

}
