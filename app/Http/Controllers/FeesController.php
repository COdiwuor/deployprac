<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fees;
use DB;

class FeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fees= Fees::all();
        return view('cyril.fees',compact('fees'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cyril.fees');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


         if(request('id')!=null){
         $fees= Fees::all()->find(request('id'));
         $fees->student_number=request('Student_Number');
         $fees->full_name=request('Full_name');
         $fees->date_of_birth=request('Date_of_Birth');
         $fees->address=request('Address');
         $fees->date_of_payment=request('Date_of_payment');
         $fees->amount=request('Amount');

         $fees->save();
         return redirect('/feestable');
     }else{ 
        $fees = new Fees();
        $fees->student_number=request('Student_Number');
        $fees->full_name=request('Full_name');
        $fees->date_of_birth=request('Date_of_Birth');
        $fees->address=request('Address');
        $fees->date_of_payment=request('Date_of_payment');
        $fees->amount=request('Amount');

        $fees->save();
        return redirect('/feestable');
        
        
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
        $fees = Fees::all();
      return view('cyril.feestable',compact('fees'));
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
    public function update(Request $request, $id)
    {
         $fees= Fees::all()->find($id);
        return view('cyril.fees',compact('fees'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fees= Fees::all()->find($id);
        $fees->delete();
        return redirect('/feestable');
    }
    public function search(Request $request){
        //$fees= Fees::all()->where("Student_Number",request('Student_Number'));
        $student_number= $request->input('Student_Number');
       $fees= Fees::where('Student_Number',$student_number)->get();

        $sum = $fees->sum('amount');

        return view('cyril.feesdisplay',compact('fees'),compact('sum'));
    
    }


}
