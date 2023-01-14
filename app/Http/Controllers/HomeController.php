<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index()
    {
        $series = \App\Models\Series::take(6)->get();
        $featuredCourses = \App\Models\Course::take(6)->get();
        return view('welcome', [
            'series' => $series,
            'courses' => $featuredCourses
        ]);
    }

    public function dashboard()
    {
        if(!auth()->user()->is_admin) {
            return redirect()->route('home');
        }
        return view('dashboard');
    }

    public function archive($archive_type, $slug)
    {
        $allowed_archive_type = ['series', 'topic', 'level', 'platform', 'duration'];
        if(!in_array($archive_type, $allowed_archive_type)) {
            return abort(404);
        }

        if($archive_type == 'series') {
            $archive = \App\Models\Series::where('slug', $slug)->firstOrFail();
            $title = 'Courses on ' . $archive->name;
            $courses = $archive->courses()->paginate(9);
        } elseif ($archive_type == 'topic') {
            $archive = \App\Models\Topic::where('slug', $slug)->firstOrFail();
            $title = 'Courses on ' . $archive->name;
            $courses = $archive->courses()->paginate(9);
        } elseif ($archive_type == 'level') {
            $allowed_archive_levels = ['beginner', 'intermediate', 'advanced'];
            if(!in_array($slug, $allowed_archive_levels)) {
                return abort(404);
            }
            $level = null;
            if($slug == 'beginner') {
                $level = 0;
            } elseif ($slug == 'intermediate') {
                $level = 1;
            } else {
                $level = 2;
            }
            $title = Str::ucfirst($slug) . ' level courses';
            $courses = \App\Models\Course::where('difficulty_level', $level)->paginate(9);
        } elseif ($archive_type == 'platform') {
            $archive = \App\Models\Platform::where('slug', $slug)->firstOrFail();
            $title = 'Courses from ' . $archive->name;
            $courses = $archive->courses()->paginate(9);
        } else {
            $allowed_archive_duration = ['1h-5h', '5h-10h', '10h+'];
            if(!in_array($slug, $allowed_archive_duration)) {
                return abort(404);
            }
            $title = 'Courses within ' . $slug . ' hours';
            if($slug === '1h-5h') {
                $courses = \App\Models\Course::whereBetween('duration', [1, 5])->paginate(9);
            } elseif ($slug === '5h-10h') {
                $courses = \App\Models\Course::whereBetween('duration', [5, 10])->paginate(9);
            } else {
                $courses = \App\Models\Course::where('duration', '>', 10)->paginate(9);
            }
        }

        return view('archive.single', [
            'title' => $title,
            'courses' => $courses
        ]);
    }
}
