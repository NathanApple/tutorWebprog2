<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function index(){
        $students = Student::all();
        // $students = Student::where('id', 1)->limit(20)->get();
        // return view('index', ['students' => $students]);
        return view('index', compact('students'));
    }

    public function create(){
        $students = Student::all();
        
        return view('create', compact('students'));
    }

    public function insert(Request $request){
        $phone = $request->phone;

        Student::create([
            'name' => $request->name,
            'phone_number' => $phone
        ]);

        return redirect(route('index'));

        // route('index')
        // Return route jadi string => '127.0.0.1/'

        // dd($request->name);
    }

    public function edit(Request $request, $id){
        $student = Student::find($id);
        // dd($student);
        return view('edit', compact('student'));
    }

    public function update(Request $request, $id){
        $student = Student::find($id);

        $student->name = $request->name;
        $student->phone_number = $request->phone;

        $student->save();

        return redirect(route('index'));

    }

    public function delete(Request $request, $id){
        $student = Student::find($id)->delete();

        return redirect(route('index'));
    }

}
