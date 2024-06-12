<?php

namespace App\Repositories;

Use App\Http\Models\Teacher;
use Illuminate\Http\Request;

class TeacherRepository{

    public function getTeachersCourse()
    {
        $teachers = Teacher::select('id', 'full_name', 'profession', 'grade')->orderBy('id', 'ASC')->limit(10)->get();
        return $teachers;
    }
    
    public function getTeachers(){
        $teachers = Teacher::all();
        return $teachers;
    }

    public function validateTeacher(Request $request){

        return $request->validate([
            'full_name' => 'required|min:3|max:75',
            'profession' => 'required',
            'phone' => 'required|numeric',
        ]);
    }


}