<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function show($slug)
    {
        $course = Course::where('slug', $slug)->with(['platform', 'authors', 'topics', 'series'])->firstOrFail();
        // return response()->json($course);
        return view('course.single', compact('course'));
    }
}
