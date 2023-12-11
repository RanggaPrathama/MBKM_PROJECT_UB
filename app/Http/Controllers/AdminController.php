<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function homeAdmin(){
        $users = DB::table('users')->where('role','=',0)->get();

        return view('pages.admin.dashboard',['users'=>$users]);
    }

    public function dataAdmin(){
        return view('pages.admin.dataAdmin');
    }

    public function destroyUser($id){
        $users = DB::table('users')->where('id_user',$id);
        $users->delete();
        return redirect()->route('homeAdmin')->with('success','Berhasil !');
    }
}
