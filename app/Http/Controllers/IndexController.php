<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\News;

class IndexController extends Controller
{
    public function index(){
        $news = News::latest()->take(3)->get();
        return view('index', ['news' => $news]);
    }
    public function contacts(){
        return view('pages.contacts');
    }
    public function vacancies(){
        $content = Page::where('link', 'vacancies')->get();
        return view('pages.vacancies', ['content' => $content]);
    }
    public function about(){
        $content = Page::all()->where('link', '==', 'about');
        return view('pages.about', ['content' => $content]);
    }
    public function online(){
        return view('pages.online');
    }
    public function test(){
        return view('test');
    }
}
