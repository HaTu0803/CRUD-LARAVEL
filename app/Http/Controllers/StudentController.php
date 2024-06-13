<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
   
    public function index()
    {
        $students = Student::all();
        return view('home', ['students' => $students]);
    }
    public function create(Request $request) :mixed
    {
        return view('create');
    }

   
    public function store(Request $request)
    {
        
        $student = new Student();
        $student->id = $request->id;
        $student->fullname = $request->fullname;
        $student->dob = $request->dob;
        $student->email = $request->email;
        $student->score = $request->score;
        $student->save();
        return redirect()->route('index')->with('status', 'Student created successfully');
    }

    
    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $student = Student::where('id', $id)->first();
        if ($student) {
            return view('edit', ['student' => $student]);
        } else {
            return redirect()->route('index')->with('status', 'Student not found');
        }
    }

    
    public function update(Request $request, string $id)
    {
        $student = Student::where('id', $id)->first();
        if ($student) {
            $student->fullname = $request->fullname;
            $student->dob = $request->dob;
            $student->email = $request->email;
            $student->score = $request->score;
            $student->save();
            return redirect()->route('index')->with('status', 'Student updated successfully');
        } else {
            return redirect()->route('index')->with('error', 'Student not found');
        }
    }

    
    public function destroy(string $id)
    {
 
        $student = Student::where('id', $id)->first();
        if ($student) {
            $student->delete();
            return redirect()->route('index')->with('status', 'Student deleted successfully');
        } else {
            return redirect()->route('index')->with('error', 'Student not found');
        }
    }
    
}
