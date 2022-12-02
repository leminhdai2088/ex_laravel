<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\product_category;
use App\Models\product_details;
use App\Models\products;
use Illuminate\Http\Request;

class DisProController extends Controller
{
    public function index($room){
        switch($room){
            case 'living_room':
                $products = products::where('featured', true)->
                where('room_id',1)->get();
                return view('front.rooms',compact('products','room'));
                break;
            case 'bed_room':
                $products = products::where('featured', true)->
                where('room_id',2)->get();
                return view('front.rooms',compact('products','room'));
                break;
            case 'kitchen_room':
                $products = products::where('featured', true)->
                where('room_id',3)->get();
                return view('front.rooms',compact('products','room'));
                break;
            case 'home_office':
                
                $products = products::where('featured', true)->
                where('room_id',4)->get();
                return view('front.rooms',compact('products','room'));
                break;
            case 'bath_room':
                $products = products::where('featured', true)->
                where('room_id',5)->get();
                return view('front.rooms',compact('products','room'));
                break;
            }
    }

    

}
