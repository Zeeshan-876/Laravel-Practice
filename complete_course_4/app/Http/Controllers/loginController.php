<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function loginUser(Request $req){
        $req->validate([
            'username'=>'required',
            'password'=>'required'
        ]);
        $data = $req->input('username');
        $req->session()->put('user',$data);
        return redirect('profile');
    }
}