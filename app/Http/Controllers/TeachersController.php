<?php

namespace App\Http\Controllers;

use App\Models\ClassRoom;
use App\Models\Teachers;

class TeachersController extends Controller
{
    //
    public function index()
    {
        $teachers = Teachers::all();
        $classrooms = ClassRoom::all();

        return view('admin.teacher.index', [
            'teachers' => $teachers,
            'classrooms' => $classrooms,
        ]);
    }
}
