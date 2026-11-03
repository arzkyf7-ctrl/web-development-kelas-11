<?php

namespace App\Http\Controllers;

use App\Models\Subjects;
use Illuminate\Http\Request;

class SubjectsController extends Controller
{
    //
    public function index(){
        $subjects=Subjects::all();
        return view('admin.subjects',[
            'title'=> 'Subjects',
            ''=> ''
        ]);
    }
}
