<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\blog;
use App\Models\blog_rating;
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
        $orders = orders::where('user_id', Auth::user()->id)->get();
        $count_order = $orders->count('*');
        return view('front.profile', compact('categories_header', 'rooms_header', 'orders', 'count_order'));
    }
    public function order_detail($id)
    {

        $categories_header = product_category::all();
        $rooms_header = rooms::all();

        $order= orders::find($id);
        $details = order_details::where('order_id',$order->id)->get();
        return view('front.order_detail', compact('categories_header', 'rooms_header','order','details'));
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
    public function blog(){
        $categories_header = product_category::all();
        $rooms_header = rooms::all();
        $ids = [1, 2, 3];
        $blog_news = blog::whereIn('id', $ids)->get();
        $blogs = blog::all();
        return view('front.blog', compact('categories_header', 'rooms_header', 'blogs', 'blog_news'));
    }
    public function blog_detail($link){
        $categories_header = product_category::all();
        $rooms_header = rooms::all();
        $ids = [1, 2, 3];
        $id = blog::where('link', $link)->value('id');
        $blog_news = blog::whereIn('id', $ids)->get();
        $blog_detail = blog::where('link', $link)->get();
        $blog_star = blog_rating::where('blog_id', $id)->avg('stars');
        $blog_rating = blog_rating::where('blog_id', $id)->get();
        return view('front.blog_detail', compact('categories_header', 'rooms_header','blog_news', 'blog_detail', 'blog_star', 'blog_rating'));
    }
    public function blog_rating($link,Request $request){
        $star = $request->input('stars') ? $request->input('stars') : 0;
        $formData = [
            'blog_id' =>$request->input('blog_id'),
            'user_id' =>$request->input('user_id'),
            'email' =>$request->input('email'),
            'name' =>$request->input('name'),
            'messages' =>$request->input('messages'),
            'stars' =>$star
        ];
        blog_rating::create($formData);
        return redirect("/blog/{$link}");
    }
}
