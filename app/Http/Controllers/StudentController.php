<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    //
    public function index(){
        $students = Student::all();
        return view('students.student_manager', ['students' => $students]);
    }
    public function create(){
        return view('students.add');
    }
    public function store(Request $request){
        Student::create([
            
            'fullname' => $request->fullname,
            'birthday' => $request->birthday,
            'address' => $request->address
        ]);
        
        return redirect('/student_manager');
    }
    public function edit($id){
        $students = Student::where('id',$id)->first();
        return view('students.edit',['student' => $students]);
    }
    public function update(Request $request, $id)
    {
        $students = Student::find($id);
        $students->fullname = $request->input('fullname');
        $students->birthday = $request->input('birthday');
        $students->address = $request->input('address');
        $students->save();
        return redirect('/student_manager');
    }
    public function delete($id){
        $students = Student::find($id);
        $students->delete();
        return redirect('student_manager');
    }
}
