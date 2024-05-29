<?php

namespace App\Http\Controllers;

use App\Http\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Teacher::select('id', 'full_name', 'profession', 'grade')->get();
        dd(csrf_token());
//        return view('teachers.index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request);
//        $teacher = new Teacher();
//        $teacher->full_name = $request->full_name;
//        $teacher->profession = $request->profession;
//        $teacher->grade = $request->grade;
//        $teacher->phone = $request->phone;
//        $teacher->save();
//        dd('El profesor fue registrado correctamente');
//        return view('teachers.create', ['teachers' => null , 'message' => 'El profesor fue registrado correctamente']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $teacher = Teacher::find($id);
        return view('teachers.show', ['teacher' => $teacher]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $teacher = Teacher::find($id);
        return view('teachers.update', ['teacher' => $teacher]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $teacher = Teacher::find($id);
        $teacher->full_name = $request->full_name;
        $teacher->profession = $request->profession;
        $teacher->grade = $request->grade;
        $teacher->phone = $request->phone;
        $teacher->save();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $teacher = Teacher::find($id);
        $teacher->delete();
    }
}
