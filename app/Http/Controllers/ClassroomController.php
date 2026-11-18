<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    //
    public function index()
    {
        $classrooms = Classroom::all();

        return view('admin.classroom.index', compact('classrooms'));

    }

    public function store(Request $r): RedirectResponse
    {
        $validated = $r->validate([
            'name' => ['required', 'string', 'max:20'],
            'major' => ['required', 'in:dkv,pplg,animasi'],
        ]);
        Classroom::create($validated);

        return redirect()->route('admin.classroom.index')->with('sukses', 'data kelas berhasil dimasukkan');
    }
}
