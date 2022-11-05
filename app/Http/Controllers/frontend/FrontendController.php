<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    public function index()
    {
        return view('pages.frontend.index');
    }
    public function about()
    {
        return view('pages.frontend.about');
    }

    public function doctor()
    {
        return view('pages.frontend.doctor');
    }
    public function treatments()
    {
        return view('pages.frontend.treatments');
    }
    public function blogs()
    {
        return view('pages.frontend.blogs');
    }
    public function faqs()
    {
        return view('pages.frontend.faqs');
    }
    public function contact()
    {
        return view('pages.frontend.contact');
    }
}