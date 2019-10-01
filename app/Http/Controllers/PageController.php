<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('pages.index');
    }
    public function home(){
        return view('home');
    }

    public function about(){
        return view('pages.about');
    }
}
