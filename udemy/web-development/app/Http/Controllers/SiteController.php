<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
    public function index()
    {
        return view('site.default', ['title' => 'Principal']);
    }

    public function contact(){
        return view('site.contact',['title' => 'Contato']);
    }

    public function about(){
        return view('site.about',['title' => 'Sobre']);
    }

    public function login(){
        return view('site.login',['title' => 'Login']);
    }
}
