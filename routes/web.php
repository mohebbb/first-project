<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;

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
    Route::get('/', 'home')->name('showHome');
    route::get('/course', 'yourCourses')->name('showYourCourses');
    route::get('/course/{id}', 'showCourse')->name('showCourse');
});
