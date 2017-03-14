<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class ServiceController extends Controller
{
    public function index(){
        $services = Service::all();
        return view('pages.services', ['allServices' => $services]);
    }
    public function showPage($link){
        $service = Service::where('link', $link)->firstOrFail();
        return view('single.service', ['service' => $service]);
    }

    public function search(Request $request){
        $service = Service::where('title', $request['searchword'])->get();
        if(sizeof($service)){
           return redirect("service/{$service[0]['link']}");
        } else return view('actions.notfound');
    }
}
