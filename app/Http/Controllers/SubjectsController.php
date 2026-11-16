<?php

namespace App\Http\Controllers;

use App\Models\ClassRoom;
use App\Models\Subjects;

class SubjectsController extends Controller
{
    //
    public function index()
    {
        $subjects = Subjects::all();
        $classrooms = ClassRoom::all();

        return view('admin.subject.index', [
            'subjects' => $subjects,
            'classrooms' => $classrooms,
        ]);
    }
}
