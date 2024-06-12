<?php

namespace App\Repositories\Excel;

use App\Http\Models\Teacher;
use Maatwebsite\Excel\Concerns\FromCollection;
use App\Repositories\TeacherRepository;

class TeacherExport implements FromCollection
{
    protected $reportTeacher;

    public function __construct($reportTeacher)
    {
        $this->reportTeacher = $reportTeacher;
    }

    public function collection()
    {
        // $teachers = $this->reportTeacher->getTeachersCourse();
        return $this->reportTeacher;
    }
}