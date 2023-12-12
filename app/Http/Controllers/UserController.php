<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function indexlogin(){
        return view('pages.auth.login');
    }

    public function login_post(Request $request){

        $validateddata = $request->validate([
            'nim_nik' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($validateddata)) {
            $request->session()->regenerate();

                if (auth()->user()->role == 0) {
                    return redirect()->route('home')->with('success', 'Berhasil Login !');
                } else {
                    return redirect()->route('homeAdmin')->with('success', 'Berhasil Login !');
                }

        } else {
            return redirect()->back()->with('errors', 'Email atau password salah');
        }
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

        if(count($users) <1){ //KONDISIONAL ROLE =  1 (SUPER ADMIN)
            $role = 1;
        }
        elseif(strlen($nim_nik)==16) //KONDISIONAL ROLE = 2 ( ADMIN) JIKA INPUT NYA ADALAH NIK KARENA 16 DIGIT NIK
        {
            $role = 2;
        }
        else{
            $role = 0;  //USER BIASA
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

public function homepage(){
    return view('pages.auth.homepage');
}

public function viewunggahdokumen(){
    return view('pages.auth.unggahdokumen');
}

public function lengkapiDokumen(){
    return view('pages.auth.profil');
}

public function unggahDokumen($id,Request $request){

   try {
    $validateddata = $request->validate([
        'file_cv' =>'nullable',
        'file_kk'=>'nullable',
        'file_ktp'=>'nullable',
        'surat_pengantar'=>'nullable'
    ]);
    if($request->hasFile('file_cv')){
        $gambar = $request->file('file_cv')->getClientOriginalName();
         $request->file('file_cv')->move(public_path('dokumenCV/'),$gambar);
         $validateddata['file_cv']=$gambar;
     }

     if($request->hasFile('file_kk')){
        $gambar = $request->file('file_kk')->getClientOriginalName();
         $request->file('file_kk')->move(public_path('dokumenKK/'),$gambar);
         $validateddata['file_kk']=$gambar;
     }


     if($request->hasFile('file_ktp')){
        $gambar = $request->file('file_ktp')->getClientOriginalName();
         $request->file('file_ktp')->move(public_path('dokumenKTP/'),$gambar);
         $validateddata['file_ktp']=$gambar;
     }

     if($request->hasFile('surat_pengantar')){
        $gambar = $request->file('surat_pengantar')->getClientOriginalName();
         $request->file('surat_pengantar')->move(public_path('dokumenSuratPengantar/'),$gambar);
         $validateddata['surat_pengantar']=$gambar;
     }

     $users = DB::table('users')->where('id_user',$id);
     $users->update($validateddata);

     return redirect()->route('viewunggahdokumen')->with('success','Berhasil !');
   } catch (\Throwable $th) {
        return redirect()->route('viewunggahdokumen')->with($th->getMessage());
   }
}

public function profil(){
    return view('pages.auth.lengkapidokumen');
}


}
