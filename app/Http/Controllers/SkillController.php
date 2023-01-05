<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index()
    {
        return view('backend.skill.index');
    }
    public function create(Request $request)
    {
        Skill::newSkill($request);
        return redirect()->back()->with('message','skill info saved successfully!');
    }
}
