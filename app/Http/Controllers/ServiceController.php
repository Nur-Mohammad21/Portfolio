<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return view('backend.service.index');
    }
    public function create(Request $request)
    {
        Service::newService($request);
        return redirect()->back()->with('message','Service info saved successfully!');
    }
}
