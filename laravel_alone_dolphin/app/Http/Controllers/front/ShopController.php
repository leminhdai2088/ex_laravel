<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\products;
use App\Models\rooms;
use App\Models\product_category;
class ShopController extends Controller
{

    public function show($room,$loai,$id){

        $room_id = rooms::where('link',$room)->value('id');
        $product = products::where('featured', true)->
                   where('room_id',$room_id)->where('product_category_id',$loai)
                   ->where('id',$id)->findOrFail($id);
        $categories_header = product_category::all();
        $rooms_header = rooms::all();
        return view('front.product_details',compact('product','room','loai','categories_header','rooms_header'));
    }

    public function loai($room,$loai, Request $request){



        $product_cate = product_category::where('id', $loai)->value('id');
        $room_id = rooms::where('link',$room)->value('id');

        if(!$product_cate || !$room_id)
            return view('errors.404');

        $product_cate = product_category::where('id', $loai)->get();
        $products = products::where('featured', true)->
                    where('room_id',$room_id)->where('product_category_id',$loai);
                   

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
                        $products->where('price', '>', 5000000);
                        break;
                    case 0:
                        break;
                }
            }
            $categories_header = product_category::all();
            $rooms_header = rooms::all();
            $products=$products->paginate(8);
            return view('front.list_product',compact('products','room','loai','name_cate_room','categories_header','rooms_header','product_cate'));
    }
}
