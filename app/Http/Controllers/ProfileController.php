<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('backend.profile.index');
    }
    public function create(Request $request)
    {
        $request->validate(
            [
                'name'          => 'required|max:20|regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/',
                'qualification' => 'required|regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/',
                'cv'            => 'required',
                'image'         => 'required|mimes:jpeg,png,jpg,gif'
            ],
            [
                'qualification.required' => 'The field dfssadfdsafsdfsdafdsafdsfdsf  is required'
            ]
        );
       Profile::newProfile($request);
       return redirect()->back()->with('message','Profile info saved successfully!');
    }
}
