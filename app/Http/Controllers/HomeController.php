<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        return view('welcome');
    }

    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
    public function services(){
        return view('service');
    }
    public function careers(){
        return view('careers');
    }
}
