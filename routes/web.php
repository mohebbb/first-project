<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Models\courses;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

route::controller(CourseController::class)->group(function(){
    Route::get('/', 'index')->name('showHome');
    route::get('/course', 'show')->name('showYourCourses');
});

route::get('/test', function()
{
    return view('testTailwind');
});
route::get('/course/{course}', function (courses $course)
{
    return view('course', ['course' => $course]);
})->name('showCourse');
