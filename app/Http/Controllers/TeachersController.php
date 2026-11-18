<?php

namespace App\Http\Controllers;

use App\Models\ClassRoom;
use App\Models\Subjects;
use App\Models\Teachers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
    //
    public function index()
    {
        $teachers = Teachers::all();
        $classrooms = ClassRoom::all();
        $subjects = Subjects::all();

        return view('admin.teacher.index', compact('teachers', 'classrooms', 'subjects'));
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'niy' => ['required', 'integer', 'digits:9', 'unique:teacher,niy'],
            'subject_id' => ['required', 'exists:subjects,id'],
            'start_date' => ['required', 'string', 'max:20'],
        ]);
        Teachers::create($validated);

        return redirect()->route('admin.teacher.index')->with('sukses', 'data guru berhasil ditambahkan');
    }
}
