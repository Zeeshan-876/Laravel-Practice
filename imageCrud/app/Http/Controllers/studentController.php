<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class studentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(student $std_model)
    {   
        $std_Data = $std_model::all();
        return view('Students.index',['std_Data'=>$std_Data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, student $std_model)
    {   
        $std_model->std_name = $request->input('std_name');
        if($request->hasFile('std_img')){

            $file = $request->file('std_img');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('Images/studentImages/',$filename);
            $std_model->std_img = $filename;
            
        }
        $std_model->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id,student $std_model)
    {
        $std_data = $std_model::find($id);
        return view('Students.edit',['std_data'=>$std_data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        $std_model = student::find($id);
        $std_model->std_name = $request->input('std_name');
        $destination = 'Images/studentImages/'.$std_model->std_img;
        if(File::exists($destination)){
            File::delete($destination);
        }

        if($request->hasFile('std_img')){
            $file = $request->file('std_img');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('Images/studentImages/',$filename);
            $std_model->std_img = $filename;
        }
        $std_model->update();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,student $std_model)
    {
        $std_model::find($id)->delete();
        $destination = 'Images/studentImages/'.$std_model->std_img;
        if(File::exists($destination)){
            File::delete($destination);
        }
        return redirect('/');

    }
}