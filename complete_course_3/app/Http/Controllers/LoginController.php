<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    // function login_user(Request $req){
    //     $data = $req->input('username');
    //     $req->session()->put(['username'=>$data]);
    //     return redirect('user_profile');
    // }

    function StoreMember(Request $req){
       return $req->input(); 
    }
}