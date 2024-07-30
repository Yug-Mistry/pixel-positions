<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateJobRequest;
use App\Models\Tag;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('jobs.index', [
            'jobs' => Job::orderBy('created_at', 'desc')->take(10)->get(),
            'tags' => Tag::all(),
            'featuredJobs' => Job::where('featured', true)->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jobs.create', [
            'tags' => Tag::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'title' => 'required',
            'type' => 'required',
            'schedule' => 'required',
            'salary' => 'required',
            'company' => 'required',
            'tags' => 'required',
            'location' => 'required',
        ]);

        $job = Job::create([
            'title' => $validate['title'],
            'schedule' => $validate['schedule'],
            'salary' => $validate['salary'],
            'company' => $validate['company'],
            'location' => $validate['type'].' '.$validate['location'],
            'employer_id' => auth()->user()->employer->id,
            'url' => auth()->user()->employer->logo,
        ]);

        $job->tags()->attach($validate['tags']);

        return redirect()->route('jobs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJobRequest $request, Job $job)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        //
    }
}
