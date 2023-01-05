<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Profile;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('backend.about.index');
    }
    public function create(Request $request)
    {

        About::newAbout($request);
        return redirect()->back()->with('message','About info saved successfully!');
    }
}
