<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\products;
use Illuminate\Http\Request;
use App\Models\product_category;
use App\Models\rooms;
class HomeController extends Controller
{
    public function index(){
        
        return view('front.home');
    }

    public function loai_header(){
        $categories_header = product_category::all();
        $rooms_header = rooms::all();
        return view('front.header_update',compact('categories_header','rooms_header'));
    }

    public function about(){
        $categories_header = product_category::all();
        $rooms_header = rooms::all();
        return view('front.page_intro',compact('categories_header','rooms_header'));
    }

}
