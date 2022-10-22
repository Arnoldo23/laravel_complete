<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        return view('user.home');

    }

    public function about()
    {
        return view('about');

    }

    public function blog()
    {
        return view('blog');

    }

    public function outreach()
    {
        return view('outreach');
    }

    public function comingsoon()
    {
        return view('comingsoon');

    }
}
