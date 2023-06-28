<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobApplicationController extends Controller
{

    /**
     * Show the form for creating a new resource.
     */
    public function create(Job $job)
    {
        $this->authorize('apply', $job);

        return view('job_application.create', ['job' => $job]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Job $job, Request $request)
    {
        $validatedData = $request->validate([
            'expected_salary' => 'required|numeric|min:1|max:1000000',
            'cv' => 'required|file|mimes:pdf,doc,docx|max:2048'
        ]);

        $file = $request->file('cv');
        $path = $file->store('cvs', 'private');

        $job->jobApplication()->create([
            'user_id' => request()->user()->id,
            'expected_salary' => $validatedData['expected_salary'],
            'cv_path' => $path
        ]);

        return redirect()->route('jobs.show', $job)->with('success', 'Job application submitted successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
