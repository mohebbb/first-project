<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class testCtrl extends Controller
{
    public function courses(): view
    {
        $courses = DB::select('select * from courses');
        return view('courses', ['courses' => $courses] );
    }

    public function showCourse()
    {
        return view('course');
    }
}
