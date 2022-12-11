<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\order_details;
use App\Models\products;
use Illuminate\Http\Request;
use App\Models\product_category;
use App\Models\rooms;
use App\Models\orders;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Hash;
use Illuminate\Support\Facades\Hash as FacadesHash;

class HomeController extends Controller
{
    public function index()
    {

        $categories_header = product_category::all();
        $rooms_header = rooms::all();
        return view('front.home', compact('categories_header', 'rooms_header'));
    }

    public function loai_header()
    {
        $categories_header = product_category::all();
        $rooms_header = rooms::all();
        return view('front.header_update', compact('categories_header', 'rooms_header'));
    }

    public function about()
    {
        $categories_header = product_category::all();
        $rooms_header = rooms::all();
        return view('front.page_intro', compact('categories_header', 'rooms_header'));
    }

    public function profile()
    {
        $categories_header = product_category::all();
        $rooms_header = rooms::all();
        $orders = orders::where('user_id',Auth::user()->id)->get();
        $count_order = $orders->count('*');
        return view('front.profile', compact('categories_header', 'rooms_header','orders','count_order'));
    }
    public function order_detail()
    {

        $categories_header = product_category::all();
        $rooms_header = rooms::all();
        return view('front.order_detail', compact('categories_header', 'rooms_header'));
    }


    // public function signin()
    // {
    //     $categories_header = product_category::all();
    //     $rooms_header = rooms::all();
    //     return view('front.sign-in', compact('categories_header', 'rooms_header'));
    // }

    public function signup()
    {
        $categories_header = product_category::all();
        $rooms_header = rooms::all();
        return view('front.sign-up', compact('categories_header', 'rooms_header'));
    }

    public function cart()
    {
        $categories_header = product_category::all();
        $rooms_header = rooms::all();
        return view('front.cart', compact('categories_header', 'rooms_header'));
    }

    public function pro_detail()
    {
        $categories_header = product_category::all();
        $rooms_header = rooms::all();
        return view('front.product_details', compact('categories_header', 'rooms_header'));
    }
    public function post_signup(Request $request)
    {
        // $form_field = $request;
        // dd($form_field);

        return view('front.home');

        // $user = new User();
        // $user->name = $request->fullname;
        // $user->email = $request->email;
        // $user->password = FacadesHash::make($request->password);
        // $user->save();
        // return redirect()->back()->with('thanhcong','Tạo tài khoản thành công');
    }
}
