<?php

namespace App\Http\Controllers;

use App\Models\Teachers;

class TeachersController extends Controller
{
    //
    public function index()
    {
        $teachers = Teachers::all();

        return view('admin.teachers', [
            'title' => 'teachers',
        ]);
    }
}
