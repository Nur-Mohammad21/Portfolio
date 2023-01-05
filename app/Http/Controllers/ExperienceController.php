<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function index()
    {
        return view('backend.experience.index');
    }
    public function create(Request $request)
    {
        Experience::newExperience($request);
        return redirect()->back()->with('message','experience info saved successfully!');
    }
}
