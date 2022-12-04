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
        // $product = products::
        // where('product_category_id',$loai)->where('id',$id)->get();
        // // $loai = product_category::where('id',$product->product_category_id)->get();
        // return view('front.product_details',compact('product'));


        switch($room){
            case 'living_room':
                $product = products::where('featured', true)->
                where('room_id',1)->where('product_category_id',$loai)
                ->where('id',$id)->findOrFail($id);
                return view('front.product_details',compact('product','room','loai'));
                break;


            case 'bed_room':
                $product = products::where('featured', true)->
                where('room_id',2)->where('product_category_id',$loai)
                ->where('id',$id)->findOrFail($id);
                return view('front.product_details',compact('product','room','loai'));
                break;

            case 'kitchen_room':
                $product = products::where('featured', true)->
                where('room_id',3)->where('product_category_id',$loai)
                ->where('id',$id)->findOrFail($id);
                return view('front.product_details',compact('product','room','loai'));
                break;
            case 'home_office':
                $products = products::where('featured', true)->
                where('room_id',4)->where('product_category_id',$loai)
                ->where('id',$id)->findOrFail($id);
                return view('front.product_details',compact('product','room','loai'));
                break;
            case 'bath_room':
                $product = products::where('featured', true)->
                where('room_id',5)->where('product_category_id',$loai)
                ->where('id',$id)->findOrFail($id);
                return view('front.product_details',compact('product','room','loai'));
                break;
            }
    }

    public function loai($room,$loai, Request $request){
        switch($room){
            case 'living_room':
                $products = products::where('featured', true)->
                where('room_id',1)->where('product_category_id',$loai);
                break;


            case 'bed_room':
                $products = products::where('featured', true)->
                where('room_id',2)->where('product_category_id',$loai);
                break;

            case 'kitchen_room':
                $products = products::where('featured', true)->
                where('room_id',3)->where('product_category_id',$loai);
                break;
            case 'home_office':
                $products = products::where('featured', true)->
                where('room_id',4)->where('product_category_id',$loai);
                break;
            case 'bath_room':
                $products = products::where('featured', true)->
                where('room_id',5)->where('product_category_id',$loai);
                break;
            }

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
            return view('front.list_product',compact('products','room','loai','name_cate_room','categories_header','rooms_header'));
    }
}
