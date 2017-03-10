<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

class IndexController extends Controller
{
    public function index(){
        return view('index');
    }
    public function contacts(){
        return view('pages.contacts');
    }
    public function vacancies(){
        $content = Page::where('link', 'vacancies')->get();
        return view('pages.vacancies', ['content' => $content]);
    }
    public function services(){
        return view('pages.services');
    }
    public function about(){
        $content = Page::all()->where('link', '==', 'about');
        return view('pages.about', ['content' => $content]);
    }
    public function online(){
        return view('pages.online');
    }
}
