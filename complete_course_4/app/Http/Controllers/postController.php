<?php

namespace App\Http\Controllers;

use App\Models\employee;
use Illuminate\Http\Request;
use App\Models\post;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;

class postController extends Controller
{
    public function insert_Record(Request $req){
        $postModel = new Post();
        $req->validate([
            'name'=>'required',
            'email'=>'required',
            'content'=>'required',
            'date'=>'required',
        ]);
        $postModel->name = $req->input('name');
        $postModel->email = $req->input('email');
        $postModel->content = $req->input('content');
        $postModel->date = $req->input('date');
        $postModel->save();
        return redirect('view_record');
    }

    public function display_record(post $postModel){
        $data = $postModel::all();
        return view('display_post',['records'=>$data]);
    }
    
    public function delete_post($id,post $postModel){
        $postModel::find($id)->delete();
        return redirect('view_record');
    }

    public function edit_post($id,post $postModel){
        $data = $postModel::find($id);
        return view('update',['data'=>$data]);
    }
    public function update_post($id,Request $req,post $postModel){
        $postModel = $postModel::find($id);
        $postModel->name = $req->input('name');
        $postModel->email = $req->input('email');
        $postModel->content = $req->input('content');
        $postModel->date = $req->input('date');
        $postModel->save();
        return redirect('view_record');
    }
    public function view_joins_data(employee $employeeModel){
        $join_record = $employeeModel
        ->join('companies','employees.id','=','companies.employee_id')
        ->get();
        return view('joins-view_record',['join_record'=>$join_record]);
    } 

    public function users(){
        return view('Session_practice.login');
    }
    public function profile(){
        return view('Session_practice.profile');
    }
    public function login_user(Request $req){
        $data = $req->input('username');
        $req->session()->put('user',$data);
        return redirect('profile');
    }
}