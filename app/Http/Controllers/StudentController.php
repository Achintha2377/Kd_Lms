<?php

namespace App\Http\Controllers;

use App\Models\Studentall;
use Illuminate\Http\Request;

class StudentController extends Controller
{
   public function index()
{
    $students = Studentall :: all();
    return view('student.index',compact('students'));
}
public function create()
{
    return view('student.create');
}
public function store(Request $request){


    $student = new Studentall();
    $student->firstName = $request->firstName;
    $student->lastName = $request->lastName;
    $student->contact = $request->contact;
    $student->address = $request->address;
    $student->bod = $request->bod;
    $student->save();

 //  {Data send 2 method}
    //    $student = Studentall :: create($request->all());
    return "success";
}
public function edit($student_id){
    $student = Studentall::where('id', $student_id)->first();
    return view('student.edit',compact('student'));
}
public function update(Request $request,$student_id )
{
    $student = Studentall::where('id', $student_id)->first();
    $student->firstName = $request->firstName;
    $student->lastName = $request->lastName;
    $student->contact = $request->contact;
    $student->address = $request->address;
    $student->bod = $request->bod;
    $student->save();

    return redirect()->route('student.index');

}
public function delete($student_id)
{
     $student = Studentall::where('id', $student_id)->delete();
     return redirect()->route('student.index');
}
}
