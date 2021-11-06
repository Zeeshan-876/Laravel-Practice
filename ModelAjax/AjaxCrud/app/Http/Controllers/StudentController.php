<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function CreateStudent(Request $request){
        $request->validate([
            'student_name'=>'required',
            'father_name'=>'required',
            'cnic'=>'required',
            'gender'=>'required',
            'address'=>'required',
        ]);

        $student = new Student();
        $student->student_name = $request->input('student_name');
        $student->father_name = $request->input('father_name');
        $student->cnic = $request->input('cnic');
        $student->gender = $request->input('gender');
        $student->address = $request->input('address');
        $student->user_id = Auth::user()->id;

        $student->save();
    }





}
