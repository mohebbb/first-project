<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Models\courses;

class CourseController extends Controller
{
    public function courses(): view
    {
        $courses = courses::all();
        return view('courses', ['courses' => $courses] );
    }

    public function showCourse(string $id)
    {
        $course = courses::where('id', $id)->get();
        return view('course', ['course' => $course, 'id'=> $id]);
    }
}
