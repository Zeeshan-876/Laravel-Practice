<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = new Student();
        
        $student->student_name = $request->input('student_name');
        $student->father_name = $request->input('father_name');
        $student->age = $request->input('age');
        $student->gender = $request->input('gender');
        $student->cnic = $request->input('cnic');
        $student->address = $request->input('address');
        $student->user_id = Auth::user()->id;
        
        $student->save();

        return response()->json([
            'status'=>200,
            'message'=>'Student Added Successfully.',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $student = new Student();
        $student_data = $student::all();
        return response()->json([
            'student_data'=>$student_data,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        // dd($student);
        return response()->json([
            'status'=>200,
            'student'=>$student,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        // dd($student);

        $student->student_name = $request->input('student_name');
        $student->father_name = $request->input('father_name');
        $student->age = $request->input('age');
        $student->gender = $request->input('gender');
        $student->cnic = $request->input('cnic');
        $student->address = $request->input('address');
        $student->user_id = Auth::user()->id;
        
        $student->update();

        if($student){
            return response()->json([
                'status'=>200,
                'message'=>'Student Record Updated Successfully.',
            ]);
        }
        else{
            return response()->json([
                'status'=>404,
                'message'=>'Student Record Not Found.',
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::FindOrFail($id);
        $dlte_std = $student->delete();
        return response()->json([
            'status'=>202,
            'dlte_message'=>"Student Deleted Successfully.",
        ]);
    
    }
}