<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{

    public function index()
    {
        $courses = Course::where(function ($query) {
            if(!empty(request()->search)) {
                $query->where('name', 'like', '%' . request()->search . '%');
            }
        })->when(request()->levels, function ($query) {
            $query->whereIn('difficulty_level', request()->levels);
        })->when(request()->types, function ($query) {
            $query->whereIn('type', request()->types);
        })->when(request()->platforms, function ($query) {
            $query->whereIn('platform_id', request()->platforms);
        })->paginate(10);
        return view('course.index', compact('courses'));
    }
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
