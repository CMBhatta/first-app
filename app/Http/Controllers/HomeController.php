<?php
// app/Http/Controllers/HomeController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function service(){
        return view('service');
    }
    public function about(){
        return view('about');
    }
    public function projects(){
        return view('projects');
    }
    public function testimonial(){
        return view('testimonial');
    }
    public function contact(){
        return view('contact');
    }
}
