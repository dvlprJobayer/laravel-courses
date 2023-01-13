<?php

namespace App\Http\Controllers;

use App\Models\Series;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index($slug) {
        $series = Series::where('slug', $slug)->with('courses')->firstOrFail();
        // return $series;
        return view('series.single', compact('series'));
    }
}
