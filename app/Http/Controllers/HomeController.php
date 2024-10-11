<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('front.home');
    }

    public function agency()
    {
        return view('front.agency');
    }

    public function expertise()
    {
        return view('front.expertise');
    }

    public function expertise_web_design()
    {
        return view('front.expertise_web_design');
    }

    public function expertise_web_development()
    {
        return view('front.expertise_web_development');
    }

    public function expertise_ecommerce_solution()
    {
        return view('front.expertise_ecommerce_solution');
    }

    public function expertise_content_writing()
    {
        return view('front.expertise_content_writing');
    }

    public function projects()
    {
        return view('front.projects');
    }

    public function project_details()
    {
        return view('front.project_details');
    }

    public function people()
    {
        return view('front.people');
    }

    public function blog()
    {
        return view('front.blog');
    }

    public function blog_details()
    {
        return view('front.blog_details');
    }

    public function contact()
    {
        return view('front.contact');
    }

    public function about()
    {
        return view('front.about');
    }
}
