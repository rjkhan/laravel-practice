<?php

namespace App\Http\Controllers;
use Redirect;
use Illuminate\Http\Request;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

  
    private $student_model;
    public function __construct()
    {
        //Model
        $this->student_model = "\App\Student"; 
    }
    public function index()
    {
        //
        $students = $this->student_model::all();

        return view('viewstudents', ['allstudents' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('createstudent');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $student = new $this->student_model([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name
            ]);
   
        $student->save();
        $students =  $this->student_model::all();
        return Redirect::to('students')->with('message', 'Added');
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
print("show");
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
        print("edit");
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
        
        print("update");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        print($id);
        $student =  $this->student_model::destroy($id);
        return Redirect::to('students')->with('message', 'Added');
    }
}
