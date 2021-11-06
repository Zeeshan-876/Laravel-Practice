<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // public function show($data){
    //     return view('index',['key'=>$data]);
    // }
    // public function load_view($content){
    //     return view('myview',['content'=>$content]);
    // }

    // public function myData(){
    //     $data = ['Alamgir','Noman','Zeeshan','Asif'];
    //     return view('view1',['data'=>$data]);
    // }

    public function getData(Request $req){
        $req->validate([
            'username'=>'required | max:10',
            'password'=>'required | min:3'
        ]);
        return $req->input();
    }
}