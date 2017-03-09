<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class ServiceController extends Controller
{
    public function showTirePage(){
        $description = 'sadf';
        return view('services.tire', ['description' => $description]);
    }
}
