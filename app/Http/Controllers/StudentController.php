<?php

namespace App\Http\Controllers;

use App\Models\ClassRoom;
use App\Models\Student;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class StudentController extends Controller
{
    public function index(): View
    {
        $students = Student::all();
        $classrooms = ClassRoom::all();

        return view('admin.student.index', compact('students', 'classrooms'));
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'nis' => ['required', 'integer', 'min:1', 'max:2147483647', 'unique:students,nis'],
            'classroom_id' => ['required', 'exists:class_rooms,id'],
            'status' => ['required', 'in:aktif,tidak aktif'],
        ]);

        Student::create($validated);

        return redirect()
            ->route('admin.student.index')
            ->with('sukses', 'data siswa berhasil ditambahkan');
    }
}
