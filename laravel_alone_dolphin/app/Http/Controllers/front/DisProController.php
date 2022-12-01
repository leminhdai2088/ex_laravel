<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\product_category;
use App\Models\product_details;
use App\Models\products;
use Illuminate\Http\Request;

class DisProController extends Controller
{
    public function index($loai){
        $products = products::where('featured', true)->get();
        $filter_cates= product_category::all();
        return view('front.bath_room', compact('products','filter_cates'), ['loai'=>$loai]);
    }

    public function room(){
        $products = products::where('featured', true)->get();
        $filter_cates= product_category::all();
        return view('front.bath_room', compact('products','filter_cates'));
    }
}
