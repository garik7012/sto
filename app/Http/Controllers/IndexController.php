<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view('index');
    }
    public function contacts(){
        return view('pages.contacts');
    }
    public function vacancies(){
        return view('pages.vacancies');
    }
    public function services(){
        return view('pages.services');
    }
    public function about(){
        return view('pages.about');
    }
    public function online(){
        return view('pages.online');
    }
}
