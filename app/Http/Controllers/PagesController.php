<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to laravel';
        return view('pages.index')->with('title', $title);
    }

    public function about(){

        $title = 'About us';

        return view('pages.about')->with('title',$title);

    }

    public function login(){
        return view('pages.login');
    }
    public function register(){
        return view('pages.register');
    }
}
