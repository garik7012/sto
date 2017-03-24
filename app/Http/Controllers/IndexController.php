<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\News;

class IndexController extends Controller
{
    public function index(){
        $news = News::latest()->take(3)->where('is_public', '1')->get();
        $content = Page::where('link', 'news')->get();
        return view('index', ['news' => $news, 'content' => $content]);
    }
    public function contacts(){
        $content = Page::where('link', 'contacts')->get();
        return view('pages.contacts', ['content' => $content]);
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
        $content = Page::where('link', 'online')->get();
        return view('pages.online', ['content' => $content]);
    }
    public function test(){
        return view('test');
    }
    public function rservice(){
        return redirect('/services');
    }
    public function rmain(){
        return redirect('');
    }
}
