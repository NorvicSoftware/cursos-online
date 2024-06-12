<?php

namespace App\Http\Controllers;

use App\Http\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('students.index', ['students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            // 'code' => 'required',
            'full_name' => 'required',
            'age' => 'required|numeric',
            'phone' => 'numeric|nullable'

        ]);

        $student = new Student();
        $student->code = "122312";
        $student->full_name = ucfirst(strtolower($request->full_name));
        $student->age = $request->age;
        $student->phone = $request->phone;
        $student->address = $request->address;
        $student->save();

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = Student::find($id);
        return view('students.show', ['student' => $student]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Student::find($id);
        return view('students.edit', ['student' => $student]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student = Student::find($id);
        $student->code = $request->code;
        $student->full_name = $request->full_name;
        $student->age = $request->age;
        $student->phone = $request->phone;
        $student->address = $request->address;
        $student->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::find($id);
        $student->delete();
    }
}
