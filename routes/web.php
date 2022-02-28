<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\CoursesController;
use Illuminate\Support\Facades\Route;


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
    return view('About Web.About', [
        "title" => "About"
    ]);
});

Route::get('/courses', [CoursesController::class, 'index']);
Route::get('/SingleCourse/{slug}', [CoursesController::class, 'index2']);

Route::get('/login', [Controller::class, 'LogIn']);
Route::get('/register', [Controller::class, 'Regis']);