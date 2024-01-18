<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::orderBy('updated_at', 'desc')->get();
        return view('Backend.student.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Backend.student.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $student = new Student();
        // $student->name =  $request->name;
        // $student->email =  $request->email;
        // $student->phone =  $request->phone;
        // $student->course =  $request->course;
        // $student->school =  $request->school;
        // $student->remarks =  $request->remarks;
        // $student->save();
        // return redirect()->back();
       $student = new Student();
       $student->create($request->all());
       return redirect()->back();

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Student::find($id);
        return view('Backend.student.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $student = new Student();
        // $student->create($request->all());
        // return redirect()->back();
        $student = Student::find($id);
        $student->update($request->all());
        return redirect()->back();


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
