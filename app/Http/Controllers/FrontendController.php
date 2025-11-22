<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        return view('Frontend.Home.home');
    }

    public function about()
    {
        return view('Frontend.About.about');
    }
    
    public function features()
    {
        return view('Frontend.Features.features');
    }

    public function pricing()
    {
        return view('Frontend.Pricing.pricing');
    }

    public function contact()
    {
        return view('Frontend.Contact.contact');
    }

    public function retail()
    {
        return view('Frontend.Services.Retails.retail');
    }

    public function distributor()
    {
        return view('Frontend.Services.Distributor.distributor');
    }

}
