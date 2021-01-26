<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TempController extends Controller
{
    public function home()
    {
        $pageName = 'Home';
        return view('pages.home-blade', compact('pageName'));
    }
    public function blog()
    {
        $pageName = 'Blog';
        return view('pages.blog-blade', compact('pageName'));
    }
    public function about()
    {
        $pageName = 'About';
        return view('pages.about-blade', compact('pageName'));
    }
}
