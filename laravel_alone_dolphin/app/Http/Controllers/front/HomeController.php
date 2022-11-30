<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\products;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        
        return view('front.home');
    }
}
