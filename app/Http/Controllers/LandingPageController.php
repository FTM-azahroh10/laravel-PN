<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function beranda()
    {
        return view('Landing_Page.beranda');
    }
    public function profil()
    {
        return view('Landing_Page.profil');
    }
    public function kabinet()
    {
        return view('Landing_Page.kabinet');
    }
    public function lapor()
    {
        return view('Landing_Page.lapor');
    }
}
