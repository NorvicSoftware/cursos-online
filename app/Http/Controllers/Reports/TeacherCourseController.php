<?php

namespace App\Http\Controllers\Reports;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Models\Teacher;
use App\Repositories\TeacherRepository;
// use Barryvdh\DomPDF\PDF;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Repositories\Excel\TeacherExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Arr;

class TeacherCourseController extends Controller
{
    protected $reportTeacher;

    public function __construct(TeacherRepository $reportTeacher)
    {
        $this->reportTeacher = $reportTeacher;
    }

    public function index(){
        $teachers = $this->reportTeacher->getTeachersCourse();
        // $teachers = Teacher::select('id', 'full_name', 'profession', 'grade')->orderBy('id', 'ASC')->get();
        return view('reports.teachers.index', ['teachers' => $teachers]);
    }


    public function report(){
        $teachers = $this->reportTeacher->getTeachersCourse();
        $data = [
            'teachers' => $teachers,
        ];
        $pdf = Pdf::loadView('reports.teachers.pdf', $data);
        return $pdf->stream();
    }

    public function excel(){
        $teachers = $this->reportTeacher->getTeachersCourse();
        // $teachers = Arr::add($teachers, 'full_name', "Profesor");
        return Excel::download(new TeacherExport($teachers), 'profesores.xlsx');
    }

}
