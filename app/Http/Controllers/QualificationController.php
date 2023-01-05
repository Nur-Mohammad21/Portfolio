<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Qualification;
use Illuminate\Http\Request;

class QualificationController extends Controller
{
    public function index()
    {
        return view('backend.education&experience.index');
    }

    public function create(Request $request)
    {
        Qualification::newQualification($request);
        return redirect()->back()->with('message','qualification info saved successfully!');
    }
}
