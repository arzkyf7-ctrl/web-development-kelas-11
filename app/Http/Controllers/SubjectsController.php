<?php

namespace App\Http\Controllers;

use App\Models\ClassRoom;
use App\Models\Subjects;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class SubjectsController extends Controller
{
    //
    public function index()
    {
        $subjects = Subjects::all();
        $classrooms = ClassRoom::all();

        return view('admin.subject.index', compact('subjects', 'classrooms'));
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:50'],
        ]);
        Subjects::create($validated);

        return redirect()
            ->route('admin.subjects.index')->with('sukses', 'data mapel berhasil ditambahkan');
    }
}
