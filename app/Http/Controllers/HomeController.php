<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Experience;
use App\Models\Portfolio;
use App\Models\PortfolioImage;
use App\Models\Profile;
use App\Models\Qualification;
use App\Models\Service;
use App\Models\Skill;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    private $myProfile;
    private $myAbout;
    private $educations;
    private $experiences;
    private $skills;
    private $services;
    private $portfolios;
    public function index()
    {
        $this->myProfile = Profile::orderBy('id','desc')->first();
        $this->myAbout   = About::orderBy('id','desc')->first();
//        $this->educations =Qualification::all();
        $this->educations =Qualification::orderBy('id','desc')->limit(2)->get();
        $this->experiences = Experience::all();
        $this->skills = Skill::take(3)->get();
        $this->right_skills = Skill::skip(3)->take(3)->get();
        //return $this->right_skills;
        $this->services = Service::all();
        //return $this->services;
        $this->portfolios = Portfolio::with('images')->get();
        return view('frontend.home.index',['myProfile'=>$this->myProfile, 'myAbout'=>$this->myAbout,'educations'=>$this->educations,
            'experiences'=>$this->experiences,'skills'=>$this->skills,'right_skills'=>$this->right_skills,'services'=>$this->services,
            'portfolios'=>$this->portfolios]);
    }
}
