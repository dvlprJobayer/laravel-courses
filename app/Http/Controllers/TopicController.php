<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    public function index($slug)
    {
        $topic = Topic::where('slug', $slug)->firstOrFail();
        $courses = $topic->courses()->paginate(9);
        return view('topic.single', compact('topic', 'courses'));
    }
}
