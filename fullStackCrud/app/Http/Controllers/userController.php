<?php

namespace App\Http\Controllers;

use App\Models\userModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class userController extends Controller{
    public function index(){
        return view('crud.Add_Record');
    }
    public function Add_Record(Request $req){
        $req->validate([
            'name'=>'required',
            'father_name'=>'required',
            'email'=>'required',
            'occupation'=>'required'
        ]);
        $query = DB::table('user')->insert([
            'name'=>$req->input('name'),
            'father_name'=>$req->input('father_name'),
            'email'=>$req->input('email'),
            'occupation'=>$req->input('occupation')
        ]);
        if($query){
            return back()->with('success','Record Inserted Successfully.');
        }
        else{
            return back()->with('fail','Something went wrong.');
        }   
    }

    public function getData(){
        $data = array(
            'list'=>DB::table('user')->get()
        );
        return view ('crud.landing',$data);
    }
    public function Delete($id){
        $delete = DB::table('user')->where('id',$id)->delete();
        return redirect('get-data');
    }
    public function Update($id){
        
        return view('crud.update');
    }
}