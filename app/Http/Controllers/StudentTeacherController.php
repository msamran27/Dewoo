<?php

namespace App\Http\Controllers;

use App\Models\StudentTeacher;
use Illuminate\Http\Request;

class StudentTeacherController extends Controller
{
    public function create(Request $request)
    {
        StudentTeacher::create($request->all());
    }
}
