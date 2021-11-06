<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    // public function index(){
    //     $data = Http::get('https://reqres.in/api/users?page=1');
    //     return view('data_api',['data'=>$data['data']]);
    // }

    // public function test_data(Request $req){
    //     return $req->input();
    // }

    public function userLogin(Request $request){
        $data = $request->input('user');
        $request->session()->put(['user'=>$data]);
        return redirect('profile');
    }

}