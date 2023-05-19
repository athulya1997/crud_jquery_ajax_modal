<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $student = Student::all();
        return view('student.index',compact('student'));
    }
    public function store(Request $request){
        $student = new Student;
        $student->name = $request->input('name');
        $student->course = $request->input('course');
        $student->email = $request->input('email');
        $student->phone = $request->input('phone');
        $student->save();
        return redirect()->back()->with('status','Student Added Successfully');
    }
    public function edit($id){
        $student = Student::find($id);
        return response()->json([
            'status'=>200,
            'student'=>$student,
            ]);
    }
    public function update(Request $request){
        $stud_id=$request->input('stud_id');
        $student = Student::find($stud_id);
        $student->name = $request->input('name');
        $student->course = $request->input('course');
        $student->email = $request->input('email');
        $student->phone = $request->input('phone');
        $student->update();
        return redirect()->back()->with('status','Student Updated Successfully');
    }
    public function destroy(Request $request){
        $stud_id=$request->input('delete_stud_id');
        $student=Student::find($stud_id);
        $student->delete();
        return redirect()->back()->with('status','Student Deleted Successfully');
    }
}
