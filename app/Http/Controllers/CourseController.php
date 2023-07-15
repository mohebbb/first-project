<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Models\courses;

class CourseController extends Controller
{
    public function home() 
    {
        $notCompleteCourses = courses::where('is_complete', 0)->get();
        return view('home', ['notCompleteCourses' => $notCompleteCourses]);
    }

    public function yourCourses()
    {
        $courses = courses::all();
        return view('yourCourses', ['courses' => $courses]);
    }

    public function showCourse(string $id)
    {
        $course = courses::find($id);
        return view('course', ['course' => $course]);
    }


}
