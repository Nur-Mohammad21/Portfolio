<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\PortfolioImage;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    private $portfolios;
    public function index()
    {
        return view('backend.portfolio.index');
    }
    public function create(Request $request)
    {
        Portfolio::newPortfolio($request);
        return redirect()->back()->with('message','Portfolio save successfully!');
    }
    public function getAllPortfolio()
    {
        $this->portfolios = Portfolio::latest()->get();
        return view('backend.portfolio.manage',['portfolios'=>$this->portfolios]);
    }
    public function uploadImage($id)
    {
        return view('backend.portfolio.upload_image',['id'=>$id]);
    }
    public function uploadImageSave(Request $request)
    {
        foreach ($request->file('images') as $image)
        {
            PortfolioImage::uploadImageSave($request,$image);
        }
        return redirect()->back()->with('message','Image Upload Successfully!.');
       // echo "<pre>";print_r($request->all());exit();
    }
}
