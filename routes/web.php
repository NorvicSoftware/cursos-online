<?php

use Illuminate\Support\Facades\Route;
use App\Models\Teacher;

Route::get('/', function () {
    $teachers = Teacher::find(1);
    return view('welcome', ['teachers' => $teachers->full_name]);
});
