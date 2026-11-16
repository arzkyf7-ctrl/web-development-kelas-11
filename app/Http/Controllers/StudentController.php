<?php

namespace App\Http\Controllers;

use APp\Models\ClassRoom;
use App\Models\Student;
use Illuminate\Http\Client\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        $classrooms = ClassRoom::all();

        return view('admin.student.index', compact('students', 'classrooms'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            // 'nis'=>'required|string|max:20|unique:students,nis',
            // 'name'=>'required|string|max:255',
            // 'classroom_id'=>'required|exists:classrooms,id',
            // 'status'=>'required|in:aktif,tidak-aktif',
        ], [
            // 'nis.required'=>'NIS harus diisi',
            // 'nis.unique'=>'NIS sudah digunakan',
            // 'name.required'=>'Nama harus diisi',
            // 'classroom_id.required'=>'Kelas harus dipilih',
            // 'classroom_id.exists'=>'Kelas tidak valid',
            // 'status.required'=>'Status harus dipilih',
            // 'status.in'=>'Status tidak valid',
        ]);
        Student::create($validated);

        return redirect()
            ->route('admin.student.index')
            ->with('sukses', 'data siswa berhasil ditambahkan');
    }
}
