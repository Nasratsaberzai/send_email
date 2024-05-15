<?php

namespace App\Http\Controllers;

use App\Models\CvSkill;
use Illuminate\Http\Request;

class CvSkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = CvSkill::all();
        return view("CvSkill", compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("ret");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // $request->validate([
    //     'Skill' => 'required',
    // ]);

    $data = new CvSkill();
    $data->Skill = $request->Skill;
    $data->user_id= auth()->user()->id;

    $data->save();

    return redirect()->back()->with("success","your data is saved");
}

    /**
     * Display the specified resource.
     */
    public function show(CvSkill $data)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CvSkill $data)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CvSkill $data)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CvSkill $data)
    {
        //
    }
}
