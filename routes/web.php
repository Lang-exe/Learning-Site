<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogInController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\RegisterController;


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

Route::get('/course', [CoursesController::class, 'index']);
Route::get('/SingleCourse/{slug}', [CoursesController::class, 'index2']);

Route::get('/login', [LogInController::class, 'index']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'index2']);