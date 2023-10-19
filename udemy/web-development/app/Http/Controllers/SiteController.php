<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
    public function index()
    {
        return view('site.default', ['page' => 'Default']);
    }

    public function contact(){
        return view('site.contact',['page' => 'Contact']);
    }

    public function about(){
        return view('site.about',['page' => 'About']);
    }

    public function login(){
        return view('site.login',['page' => 'Login']);
    }
}
