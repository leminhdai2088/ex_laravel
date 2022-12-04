<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\product_category;
use App\Models\product_details;
use App\Models\products;
use Illuminate\Http\Request;

class DisProController extends Controller
{
    public function index($room, Request $request){
        switch($room){
            case 'living_room':
                $products = products::where('featured', true)->
                where('room_id',1);
                break;
            case 'bed_room':
                $products = products::where('featured', true)->
                where('room_id',2);
                break;
            case 'kitchen_room':
                $products = products::where('featured', true)->
                where('room_id',3);
                break;
            case 'home_office':
                
                $products = products::where('featured', true)->
                where('room_id',4);
                break;
            case 'bath_room':
                $products = products::where('featured', true)->
                where('room_id',5);
                break;
            }
            
            if($request->price){
            $price= $request->price;
            switch($price){
                case 1: 
                    $products->where('price', '<', 50);
                    break;
                case 2: 
                    $products->whereBetween('price', [50,100]);
                    break;
                case 3: 
                    $products->whereBetween('price', [2000000,3000000]);
                    break;
                case 4: 
                    $products->whereBetween('price', [3000000,5000000]);
                    break;
                case 5: 
                    $products->where('price', '>',5000000);
                    break;
                case 0:
                    break;
            }
        }
        return view('front.rooms',compact('products','room'));
    }

    

}
