<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function FetchStudents(){
        $user = new User();
        $student_data = $user::with('getStudent')->orderBy('id','desc')->get();
        // dd($student_data);
        return response()->json($student_data);
    }

    public function getSpecificStudent($ID){
        $user = new User();
        $student_data = $user::with('getStudent')->where('id',$ID)->first();
        return response()->json($student_data);
    }
}
