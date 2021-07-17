<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class ApiController extends Controller
{
    public function create(Request $request)
    {
        $students = new student();
        $students->fname = $request->input('fname');
        $students->lname = $request->input('lname');
        $students->email = $request->input('email');
        $students->password = $request->input('password');
        $students->save();
        return response()->json($students);
    }

    public function show(){
        $students = student::all();
        return response()->json($students);
    }
}
