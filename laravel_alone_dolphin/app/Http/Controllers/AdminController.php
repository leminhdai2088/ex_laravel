<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product_category;
use App\Models\rooms;
class AdminController extends Controller
{
    public function admin(){
        $categories_header = product_category::all();
        $rooms_header = rooms::all();
        return view('dashboard.pro_modifier',compact('categories_header','rooms_header'));
    }

    public function add(){
        
    }
}
