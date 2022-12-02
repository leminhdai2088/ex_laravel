<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\product_category;
use App\Models\product_details;
use App\Models\products;
use Illuminate\Http\Request;

class DisProController extends Controller
{
    public function index(){
        $products = products::where('featured', true)->get();
        return view('front.bath_room',compact('products'));
    }

}
