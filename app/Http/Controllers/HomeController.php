<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
