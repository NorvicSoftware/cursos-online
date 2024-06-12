<?php

namespace App\Http\Controllers;

use App\Http\Models\Teacher;
use Illuminate\Http\Request;
use App\Repositories\TeacherRepository;

class TeacherController extends Controller
{
    protected $reportTeacher;

    public function __construct(TeacherRepository $reportTeacher)
    {
        $this->reportTeacher = $reportTeacher;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = $this->reportTeacher->getTeachersCourse();
        // $teachers = Teacher::select('id', 'full_name', 'profession', 'grade')->orderBy('id', 'ASC')->get();
        return view('teachers.index', compact('teachers'));
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
        // $request->validate([
        //     'full_name' => 'required|min:3|max:75',
        //     'profession' => 'required',
        //     'phone' => 'required|numeric',
        // ]);

        $this->reportTeacher->validateTeacher($request);

        $teacher = new Teacher();
        $teacher->full_name = $request->full_name;
        $teacher->profession = $request->profession;
        $teacher->grade = $request->grade;
        $teacher->phone = $request->phone;
        $teacher->save();

        return redirect()->action([TeacherController::class, 'index']);
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
        return view('teachers.edit', ['teacher' => $teacher]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $this->reportTeacher->validateTeacher($request);

        $teacher = Teacher::find($id);
        $teacher->full_name = $request->full_name;
        $teacher->profession = $request->profession;
        $teacher->grade = $request->grade;
        $teacher->phone = $request->phone;
        $teacher->save();
        return redirect()->action([TeacherController::class, 'index']);

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
