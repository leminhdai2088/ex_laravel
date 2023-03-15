<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\product_category;
use App\Models\rooms;
use App\Models\products;
use Illuminate\Http\Request;

class DisProController extends Controller
{
    public function index($room, Request $request){
        $room_id = rooms::where('link',$room)->value('id');
        if(!$room_id)
            return view('errors.404');
        $products = products::where('featured', true)->
                    where('room_id',$room_id);
            
            $name_cate_room= $products->get();

            if($request->price){
            $price= $request->price;
            switch($price){
                case 1: 
                    $products->where('price', '<', 1000000);
                    break;
                case 2: 
                    $products->whereBetween('price', [1000000,2000000]);
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
       
        $categories_header = product_category::all();
        $rooms_header = rooms::all();
        $products = $products->paginate(20);
        return view('front.rooms',compact('products','room','name_cate_room','categories_header','rooms_header'));
    }
}
