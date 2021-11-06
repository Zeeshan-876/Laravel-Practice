<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;


class cityController extends Controller
{
    public function index(){
        return view('City.index');
    }
    public function create(){
        return view('City.create');
    }
    public function addCity(Request $req,City $city_model){
        $req->validate([
             'city_name'=>'required',
        ]);
        $city_model->city_name = $req->input('city_name');
        $data = $city_model->save();
        if($data){
             return back()->with('success','City Added.');
        }
        else{
             return back()->with('fail','Something went wrong.');
        }
    }
    public function getCity(City $city_model){
        $city_data = $city_model::all();
        return view('City.index',['cityData'=>$city_data]);
    }
    public function deleteCity(City $city_model,$id){
        $city_model::find($id)->delete();
        return redirect('city-list');
    }
    public function editCity(City $city_model,$id){
        $specific_City = $city_model::find($id);
        return view('City.edit',['myCity'=>$specific_City]);
    }
    public function updateCity($id,Request $req){
        $city_model = City::find($id);
        $req->validate([
            'city_name'=>'required'
        ]);
        $city_model->city_name = $req->input('city_name');
        $city_model->save();
        return redirect('city-list');
    }
}