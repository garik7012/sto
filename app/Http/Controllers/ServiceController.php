<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Page;

class ServiceController extends Controller
{
    public function index(){
        $services = Service::all()->where('is_public', '1');
        $content = Page::where('link', 'services')->get();
        return view('pages.services', ['allServices' => $services, 'content' => $content]);
    }
    public function showPage($link){
        $service = Service::where('link', $link)->where('is_public', '1')->firstOrFail();
        return view('single.service', ['service' => $service]);
    }

    public function search(Request $request){
        $service = Service::where('title', $request['searchword'])->where('is_public', '1')->get();
        if(sizeof($service)){
           return redirect("service/{$service[0]['link']}");
        } else return view('actions.notfound');
    }
}
