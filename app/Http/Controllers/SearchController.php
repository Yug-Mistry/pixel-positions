<?php

namespace App\Http\Controllers;

use App\Models\Job;

class SearchController extends Controller
{
    public function __invoke()
    {
        $jobs = Job::where('title', 'like', '%' . request('title') . '%')->get();
        return view('results', compact('jobs'));
    }
}
