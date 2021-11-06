<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Gender;
class genderController extends Controller
{
    public function index(){
        return view('AddGender.index');
    }
    public function create(){
        return view('AddGender.create');
    }
    public function addGenders(Request $req,Gender $gender_model){
        $req->validate(['gender_title'=>'required']);
        $gender_model->gender_title = $req->input('gender_title');
        $gender_data = $gender_model->save();
        if($gender_data){
            return back()->with('success','Gender Added');
        }
        else{
            return back()->with('fail','something went wrong');
        }
    }
    public function showGenders(Gender $gender_model){
        $all_genders = $gender_model::all();
        return view('AddGender.index',['gendersData'=>$all_genders]);
    }
    public function deleteGender($id, Gender $gender_model){
        $gender_model::find($id)->delete();
        return redirect('gender_list');
    }
    public function fetchGender($id,Gender $gender_model){
        $gender_edit = $gender_model::find($id);
        return view('AddGender.edit',['genderData'=>$gender_edit]);
    }
    public function updateGender(Request $req,$id){
        $req->validate(['gender_title'=>'required']);
        $gender_model = Gender::find($id);
        $gender_model->gender_title = $req->input('gender_title');
        $gender_model->save();
        return redirect('gender_list');
    }
}