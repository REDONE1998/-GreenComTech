<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        return view('home');
    }

    public function acceuil(){
        return view('index');
    }
    public function contact(){
        return view('contact');
    }
    public function devis(){
        return view('devis');
    }
    public function blog(){
        return view('blog');
    }
    public function fonctionnalite(){
        return view('fonctionnalite');
    }

    public function propos(){
        return view('propos');
    }

    public function admin(){
        return view('adminPage');
    }

    
}