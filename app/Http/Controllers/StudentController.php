<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
         $students = Student::orderBy('id','desc')->get(); 
        return view ('backend.student.list', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('backend.student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        //var_dump($request->all());
        //die();
        $request->validate([
            'studentName' => 'required',
        ]);

        
        $studentName = $request->studentName;
        $studentAge = $request->studentAge;
        $studentGender = $request->studentGender;
        $studentAddress = $request->studentAddress;

        Student::create([
            'name' => $studentName,
            'age' => $studentAge,
            'gender' => $studentGender,
            'address' => $studentAddress,

        ]);
        

        //redirect to list page
        return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('backend.student.detail', compact('id'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('backend.student.detail', compact('id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
