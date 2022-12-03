<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\products;
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

    public function loai($room,$loai){
        switch($room){
            case 'living_room':
                $products = products::where('featured', true)->
                where('room_id',1)->where('product_category_id',$loai)->get();
                return view('front.list_product',compact('products','room','loai'));
                break;


            case 'bed_room':
                $products = products::where('featured', true)->
                where('room_id',2)->where('product_category_id',$loai)->get();
                return view('front.list_product',compact('products','room','loai'));
                break;

            case 'kitchen_room':
                $products = products::where('featured', true)->
                where('room_id',3)->where('product_category_id',$loai)->get();
                return view('front.list_product',compact('products','room','loai'));
                break;
            case 'home_office':
                $products = products::where('featured', true)->
                where('room_id',4)->where('product_category_id',$loai)->get();
                return view('front.list_product',compact('products','room','loai'));
                break;
            case 'bath_room':
                $products = products::where('featured', true)->
                where('room_id',5)->where('product_category_id',$loai)->get();
                return view('front.list_product',compact('products','room','loai'));
                break;
            }
    }
}