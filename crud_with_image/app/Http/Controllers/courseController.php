<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class courseController extends Controller
{
    public function index(){
         return view('Courses.index');
    }
    public function create(){
         return view('Courses.create');
    }
    public function addCourse(Request $req, Course $course_model){
     $req->validate([
          'course_title'=>'required',
          'course_reg'=>'required'
     ]);
     $course_model->course_title = $req->input('course_title');
     $course_model->course_reg = $req->input('course_reg');
     $data = $course_model->save();
     if($data){
          return back()->with('success','Course Added.');
     }
     else{
          return back()->with('fail','Something went wrong.');
     }
    }
    public function showCourses(Course $course_model){
          $courses_data = $course_model::all();
          return view('Courses.index',['coursesData'=>$courses_data]);
    }
    public function deleteCourse($id, Course $course_model){
         $course_model::find($id)->delete();
         return redirect('course-list');
    }
    public function fetchCourse($id,Course $course_model){
          $course_data = $course_model::find($id);
          return view('Courses.edit',['courseData'=>$course_data]);
    }
    public function updateCourse(Request $req,$id){
         $course_model = Course::find($id);
         $req->validate([
          'course_title'=>'required',
          'course_reg'=>'required'
     ]);
     $course_model->course_title = $req->input('course_title');
     $course_model->course_reg = $req->input('course_reg');
     $course_model->save();
     return redirect('course-list');
    }
}