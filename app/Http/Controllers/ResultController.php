<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Result;
use App\Unit;
use App\Student;

class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('results')->with('results', Result::all());
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
        //$data=$request->all();
        //$lastid=Orders::create($data)->id;
        if(count($request->marks)>0){
            foreach($request->marks as $item=>$v){
            $data=array(
                'unit_id' => $request->unit_id[$item],
                'student_id' => $request->student_id[$item],
                'marks' => $request->marks[$item],
            );

                 Result::insert($data);
            }
        }

        return redirect()->back();
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

    public function student_result()
    {
        $results=Result::all();

        return view('admin.results.student_result')
        ->with('results', $results);
    }

    public function singlestudent($id)
    {
        $student=Student::find($id);

        $results=Result::where('student_id',$id)->get();

        return view('admin.results.single_student')
        ->with('student', $student)
        ->with('results', $results);   
    }

    public function singleunit($id)
    {
        
        //$unit= Unit::find($id);

        $results=Result::where('unit_id',$id)->get();

        return view('admin.results.unit_result')
        ->with('results', $results);

    }


    /**
     * Show the frm for editing the specified resource.
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
