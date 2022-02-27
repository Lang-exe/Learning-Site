<?php

use App\Http\Controllers\CoursesController;
use Illuminate\Support\Facades\Route;
use App\Models\courses;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/loginhome', function () {
    return view('LogInHome', [
        "title" => "Home"
    ]);
});

Route::get('/', function () {
    return view('NewHome', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('About', [
        "title" => "About"
    ]);
});

Route::get('/courses', [CoursesController::class, 'index']);
Route::get('/SingleCourse/{slug}', [CoursesController::class, 'index2']);

Route::get('/login', function () {
    return view('LogIn', [
        "title" => "Log In"
    ]);
});

Route::get('/register', function () {
    return view('Register', [
        "title" => "Register"
    ]);
});