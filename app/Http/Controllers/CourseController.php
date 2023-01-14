<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function show($slug)
    {
        $course = Course::where('slug', $slug)->with(['platform', 'authors', 'topics', 'series', 'reviews'])->firstOrFail();
        $ratings = $course->reviews->pluck('rating');
        $average_ratings = null;
        if(count($ratings) > 0) {
            $sum = collect($ratings)->sum();
            $average_ratings = $sum / count($ratings);
        }
        // return response()->json($course);
        return view('course.single', compact('course' , 'average_ratings'));
    }
}
