<?php

namespace App\Http\Controllers;

use App\Models\Coordinator;
use App\Models\Program;
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
        $program = new Program();
        $coordinator= new Coordinator(); 


        $student->student_name = $request->input('student_name');
        $student->father_name = $request->input('father_name');
        $student->gender = $request->input('gender');
        $student->cnic = $request->input('cnic');
        $student->phone_no = $request->input('phone_no');
        $student->address = $request->input('address');
        $student->save();
        
        $program->program_title = $request->input('program_title');
        $program->student_id = $student->id;
        $program->save();

        $coordinator->coordinator_name = $request->input('coordinator_name');
        $coordinator->program_id = $program->id;
        $coordinator->save();

        return response()->json([
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
       $student_data = $student::with('getProgram.getCoordinator')->get();
       return response()->json(['student_data'=>$student_data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id)->delete();
        // dd($dlte_stud);
        // dd($student);
        return response()->json([
            'status'=>202,
            'delete_message'=>'Record Deleted Successfully.'
        ]);
        
    }
}