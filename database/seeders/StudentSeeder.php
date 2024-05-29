<?php

namespace Database\Seeders;

use App\Http\Models\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i< 2; $i++){
            $student = new Student();
            $student->code = "12323" . $i;
            $student->full_name = "Daniel Merida" . $i;
            $student->age = 19;
            $student->phone = "3242324";
            $student->save();
        }


//        $student2 = new Student();
//        $student2->code = "1232453543";
//        $student2->full_name = "Carla Ortiz";
//        $student2->age = 21;
//        $student2->phone = "678678";
//        $student2->save();
    }
}
