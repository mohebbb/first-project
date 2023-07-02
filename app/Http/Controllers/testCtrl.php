<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testCtrl extends Controller
{
    public function courses()
    {
        return view('courses');
    }

    public function showCourse()
    {
        return view('course');
    }
}
