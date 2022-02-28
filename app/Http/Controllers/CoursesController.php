<?php

namespace App\Http\Controllers;

use App\Models\courses;
use Illuminate\Routing\Controller;

class CoursesController extends Controller
{
    public function index()
    {
        return view('Course.Courses', [
            "title" => "Courses",
            "courses" => courses::all()
        ]);
    }

    public function index2($slug)
    {
        return view('Course.SingleCourse', [
            "course" => courses::find($slug),
            "title" => "Single Course",
        ]);
    }
}
