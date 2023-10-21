<?php

namespace App\Http\Controllers;

class TestController extends Controller
{
    public function index()
    {

    }

    public function test(int $p1, int $p2){
        // echo 'Teste de parametros '.$p1.' - '.$p2;

        // return view('site.test', ['p1'=> $p1, 'p2'=> $p2]); // array associativo para passagem de parametros para view

        // return view('site.test', compact('p1', 'p2')); // função compact do PHP

        return view('site.test')->with('p1', $p1)->with('p2', $p2); // with do Laravel
    }
}
