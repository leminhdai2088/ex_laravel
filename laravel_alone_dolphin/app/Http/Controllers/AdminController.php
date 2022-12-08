<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product_category;
use App\Models\rooms;
class AdminController extends Controller
{
    public function add(Request $request){
        $categories_header = product_category::all();
        $rooms_header = rooms::all();
        $categories = product_category::where('room_id', $request->id_selected)->get();
        
        return view('dashboard.pro_modifier',compact('categories_header','rooms_header','categories'));
    }

    public function store(Request $request){
        $data = [
            'name' => $request->input('name'),
            'product_category_id' => $request->input('product_category_id'),
            'material' => $request->input('material'),
            'room_id' => $request->input('room_id'),
            'qty' => $request->input('qty'),
            'weight' => $request->input('weight'),
            'price' => $request->input('price'),
        ];

        $form_field = $request->validate([
            'product-name' => '',
            'category_name' => '',
            'room_name' => '',
            'size' => '',
            'mateial' => '',
            'room_id' => '',
        ]);
      
        dd($request->all());
    }
    
}
