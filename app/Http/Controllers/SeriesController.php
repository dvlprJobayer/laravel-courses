<?php

namespace App\Http\Controllers;

use App\Models\Series;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index($slug) {
        $series = Series::where('slug', $slug)->firstOrFail();
        $courses = $series->courses()->paginate(9);
        return view('series.single', compact('series', 'courses'));
    }
}
