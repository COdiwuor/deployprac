<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Students;
use DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student= Students::all();
        return view('cyril.homestudent',compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cyril.student');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

$validateData = $request->validate([
    'Student_Number' =>'required|max:255',
    'Full_name' =>'required',
    'Full_name' =>'required',
    'Date_of_Birth' =>'required',
    'Address' =>'required',

]);
        

         if(request('id')!=null){
         $student= Students::all()->find(request('id'));
         $student->student_number=request('Student_Number');
         $student->full_name=request('Full_name');
         $student->date_of_birth=request('Date_of_Birth');
         $student->address=request('Address');
         $student->save();
         return redirect('/studenttable');
     }else{ 
        $student = new Students();
        $student->student_number=request('Student_Number');
        $student->full_name=request('Full_name');
        $student->date_of_birth=request('Date_of_Birth');
        $student->address=request('Address');
        $student->save();
        return redirect('/studenttable');
        
        
    }
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
      $student = Students::all();
      return view('cyril.studenttable',compact('student'));  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $student=Students::all()->find($id);
        return view('cyril.student',compact('student'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student= Students::all()->find($id);
        $student->delete();
        return redirect('/studenttable');
    }
}
