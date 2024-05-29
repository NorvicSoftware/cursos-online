<?php

use App\Http\Controllers\TeacherController;
use App\Http\Models\Student;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;

Route::get('/', function () {

//    $students = Student::find(3);
    $students = Student::all();
//    Student::update(['address' => 'BOLIVAR']);
    $a = DB::table('students')->update(['address' => 'AMERICA OESTE']);
//    $courses = Course::all();

//    $students = DB::table('students')
//        ->join('course_student', 'course_student.student_id', '=', 'students.id')
//        ->join('courses', 'courses.id', '=', 'course_student.course_id')
//        ->select('students.full_name', 'courses.name')
//        ->where('students.id', '=', 3)
//        ->get();

//    $students = DB::table('students')->get();
//    $count = 0;
//    foreach ($students as $student) {
//        $courses = DB::table('courses')
//            ->join('course_student', 'course_student.course_id', '=', 'courses.id')
//            ->select( 'courses.name')
//            ->where('course_student.student_id', '=', $student->id)
//            ->get();
//        $students[$count]->courses = $courses;
//        $count++;
//    }

//        $students = DB::table('students')
//        ->join('course_student', 'course_student.student_id', '=', 'students.id')
//        ->join('courses', 'courses.id', '=', 'course_student.course_id')
//        ->select('students.full_name', 'courses.name')
//        ->get();

//    $courses = DB::table('courses')
//        ->join('teachers', 'teachers.id', '=', 'courses.teacher_id')
//        ->select('teachers.full_name', 'courses.name')->get();


    //insert into teachers () values ();
    return view('welcome', ['students' => $students]);
});

Route::get('teachers', [TeacherController::class, 'index']);
Route::get('teachers/{teacherId}', [TeacherController::class, 'show']);
Route::get('teachers/form/create', [TeacherController::class, 'create']);
Route::post('teachers/form/store', [TeacherController::class, 'store']);
Route::get('teachers/form/edit/{teacherId}', [TeacherController::class, 'edit']);
Route::put('teachers/form/update/{teacherId}', [TeacherController::class, 'update']);
Route::delete('teachers/form/delete/{teacherId}', [TeacherController::class, 'destroy']);

Route::get('students', [StudentController::class, 'index']);
Route::get('students/{studentId}', [StudentController::class, 'show']);
Route::get('students/form/create', [StudentController::class, 'create']);
Route::post('students/form/store', [StudentController::class, 'store']);
Route::get('students/form/edit/{studentId}', [StudentController::class, 'edit']);
Route::put('students/form/update/{studentId}', [StudentController::class, 'update']);
Route::delete('students/form/delete/{studentId}', [StudentController::class, 'destroy']);

Route::get('courses', [CourseController::class, 'index']);
Route::get('courses/{courseId}', [CourseController::class, 'show']);
Route::get('courses/form/create', [CourseController::class, 'create']);
Route::post('courses/form/store', [CourseController::class, 'store']);
Route::get('courses/form/edit/{courseId}', [CourseController::class, 'edit']);
Route::put('courses/form/update/{courseId}', [CourseController::class, 'update']);
Route::delete('courses/form/delete/{courseId}', [CourseController::class, 'destroy']);


