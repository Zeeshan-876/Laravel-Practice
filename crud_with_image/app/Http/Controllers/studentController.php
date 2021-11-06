<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Course;
use App\Models\Gender;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class studentController extends Controller
{
    public function index(){
        return view('Student.index');
    }
    public function create(){
        return view('Student.create');
    }
    public function storeStudent(Request $req,Student $std_model){
       $req->validate([
           'student_name'=>'required',
           'father_name'=>'required',
           'student_email'=>'required',
           'course_id'=>'required',
           'gender_id'=>'required',
           'DOB'=>'required',
           'city_id'=>'required',
           'address'=>'required',
           'student_profile_image'=>'required'
       ]); 
       $std_model-> student_name = $req->input('student_name');
       $std_model-> father_name = $req->input('father_name');
       $std_model-> student_email = $req->input('student_email');
       $std_model-> course_id = $req->input('course_id');
       $std_model-> gender_id = $req->input('gender_id');
       $std_model-> DOB = $req->input('DOB');
       $std_model-> city_id = $req->input('city_id');
       $std_model-> address = $req->input('address');
       
       if($req->hasFile('student_profile_image')){
            $file = $req->file('student_profile_image');
            $extension = $file->getClientOriginalExtension();
            $file_name = time().'.'.$extension;
            $file->move('Student_Images/',$file_name);
            $std_model->student_profile_image = $file_name;
       }
       $saveData = $std_model->save();
       if($saveData){
           return back()->with('success','Student Record Added.');
       }
       else{
        return back()->with('fail','Something went wrong.');
       }
       
    }
    public function displayOtherData(City $city_model,Course $course_model,Gender $gender_model){
        $cityData = $city_model::all();
        $courseData = $course_model::all();
        $genderData = $gender_model::all();

        return view('Student.create',
        [
            'cityData'=>$cityData,
            'courseData'=>$courseData,
            'genderData'=>$genderData
        ]);
    }
    public function show(Student $std_model){
        $stdData = $std_model
        ->join('cities','students.city_id','=','cities.city_id')
        ->join('genders','students.gender_id','=','genders.gender_id')
        ->join('courses','students.course_id','=','courses.course_id')
        ->get();
        return view('Student.index',['stdData'=>$stdData]);
    }
    public function edit($id,Student $std_model,City $city_model,Course $course_model,Gender $gender_model){
        $stdData = $std_model::find($id);
        $cityData = $city_model::all();
        $courseData = $course_model::all();
        $genderData = $gender_model::all();
        return view('Student.edit',
        [
            'stdData'=>$stdData,
            'cityData'=>$cityData,
            'courseData'=>$courseData,
            'genderData'=>$genderData
        ]);
    }
    public function update($id, Request $req){
        $std_model = Student::find($id);
        $destination = 'Student_Images/'.$std_model->student_profile_image;
        $req->validate([
            'student_name'=>'required',
            'father_name'=>'required',
            'student_email'=>'required',
            'course_id'=>'required',
            'gender_id'=>'required',
            'DOB'=>'required',
            'city_id'=>'required',
            'address'=>'required',
            'student_profile_image'=>'required'
        ]); 
        $std_model-> student_name = $req->input('student_name');
        $std_model-> father_name = $req->input('father_name');
        $std_model-> student_email = $req->input('student_email');
        $std_model-> course_id = $req->input('course_id');
        $std_model-> gender_id = $req->input('gender_id');
        $std_model-> DOB = $req->input('DOB');
        $std_model-> city_id = $req->input('city_id');
        $std_model-> address = $req->input('address');
        if(File::exists($destination)){
            File::delete($destination);
        }
        if($req->hasFile('student_profile_image')){
            $file = $req->file('student_profile_image');
            $extenion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenion;
            $file->move('Student_Images/',$filename);
            $std_model->student_profile_image = $filename;
        }
        $std_model->update();
        return redirect('/');
    }
    public function destroy($id){
        $std_model = Student::find($id);
        $destination = 'Student_Images/'.$std_model->student_profile_image;
        if(File::exists($destination)){
            File::delete($destination);
        }
        $std_model->delete();
        return redirect('/');
    }
}