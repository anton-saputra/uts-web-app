<?php

namespace App\Http\Controllers;

class MenuController extends Controller
{
    
    public function home()
    {
        return view("home");
    }
    public function about()
    {
        return view("about");
    }

    public function contact()
    {
        return view("contact");
    }

    public function team()
    {
        return view("team");
    }

    public function harga()
    {
        return view("harga");
    }
}
