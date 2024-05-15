<?php

namespace App\Http\Controllers;

use App\Models\PostJob;
use Illuminate\Http\Request;

class PostJobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $postjob = Postjob::all();
        return view("PostJob", compact("postjob"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'Comp_name' => 'required',
        'Jobtitle' => 'required',
        'Skill' => 'required',
    ]);

    $postjob = new PostJob();
    $postjob->Comp_name = $request->Comp_name;
    $postjob->Jobtitle = $request->Jobtitle;
    $postjob->Skill = $request->Skill;

    $postjob->save();

    return redirect()->back()->with("success", "Your data is saved");
}

    /**
     * Display the specified resource.
     */
    public function show(postjob $postjob)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(postjob $postjob)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, postjob $postjob)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(postjob $postjob)
    {
        //
    }
}
