<?php

namespace App\Http\Controllers;

use App\Http\Models\Course;
use App\Http\Models\Student;
use App\Http\Models\Teacher;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::all();
        return view('courses.index', ['courses' => $courses]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teachers = Teacher::all();
        $students = Student::all();
        return view('courses.create', ['teachers' => $teachers, 'students' => $students]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
//        dd($request);
        try {
            $course = new Course();
            $course->name = $request->name;
            $course->level = $request->level;
            $course->hours = $request->hours;
            $course->teacher_id = $request->teacher_id;
            $course->save();

            foreach ($request->students as $student){
                $course->students()->attach($student->id);
            }
            dd('OK');
        }
        catch (\Exception) {
            dd('Error');
        }


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $course = Course::find($id);
        return view('courses.show', ['course' =>$course]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $course = Course::find($id);
        $teachers = Teacher::all();
        $students = Student::all();
        return view('courses.update', ['course' => $course, 'teachers' => $teachers, 'students' => $students]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $course = Course::find($id);
        $course->name = $request->name;
        $course->level= $request->level;
        $course->hours = $request->hours;
        $course->teacher_id = $request->tearcher_id;
        $course->save();

        $course->students()->detach();

        foreach ($course->students as $student){
            $course->students($student->id);
        }
     }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $course =Course::find($id);
        $course->delete();
    }
}
