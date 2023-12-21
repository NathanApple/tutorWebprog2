<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function index(){
        return view('index');
    }

    public function create(){
        return view('create');
    }

    public function insert(Request $request){
        dd($request);
    }
}
