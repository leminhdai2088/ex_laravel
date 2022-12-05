<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\product_category;
use App\Models\rooms;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Auth\User as users;
use App\Models\User;
class UserController extends Controller

{
    public function create(){
        $categories_header = product_category::all();
        $rooms_header = rooms::all();
        return view('front.sign-up',compact('categories_header','rooms_header'));
    }

    public function store(Request $req){
        $form_field = $req->validate([
            'email' => Rule::unique('users','email'),
            'name' => 'required',
            'password' => 'required',
        ]);
        $form_field['password'] = bcrypt($form_field['password']);

        $user = User::create($form_field);
        
        auth()->login($user);
        return redirect()->back()->with('thanhcong','thành công cmnr');
    }
}
