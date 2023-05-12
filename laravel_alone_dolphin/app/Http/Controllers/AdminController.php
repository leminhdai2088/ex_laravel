<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Support\Facades\DB;

use App\Models\order_details;
use App\Models\orders;
use Illuminate\Http\Request;
use App\Models\product_category;
use App\Models\product_details;
use App\Models\product_images;
use App\Models\rooms;
use App\Models\products;
use App\Models\User;

class AdminController extends Controller
{
    public function add(Request $request)
    {
        $categories_header = product_category::all();
        $rooms_header = rooms::all();
        $categories = product_category::where('room_id', $request->id_selected)->get();

        return view('dashboard.pro_modifier', compact('categories_header', 'rooms_header', 'categories'));
    }

    public function store(Request $request)
    {
        // thêm sản phẩm
        $data_pro = [
            'name' => $request->input('name'),
            'product_category_id' => $request->input('product_category_id'),
            'material' => $request->input('material'),
            'room_id' => $request->input('room_id'),
            'qty' => $request->input('qty'),
            'weight' => $request->input('weight'),
            'price' => $request->input('price'),
        ];
        $product = products::create($data_pro);
        // thêm chi tiết sản phẩm
        $data_detail = [
            'product_id' => $product->id,
            'size' => $request->input('size'),
        ];
        product_details::create($data_detail);

        // thêm product_images

        // $image = array();

        $files = $request->image;
        $upload_path = public_path('front/images/image_products');
        if ($files) {
            foreach ($files as $file) {
                $data_image = [
                    'product_id' => $product->id,
                    'path' => $file->getClientOriginalName()
                ];
                product_images::create($data_image);
                $file->move($upload_path, $file->getClientOriginalName());
            }
        }
        return redirect()->back()->with('thanhcong', 'Thêm sản phẩm thành công!!!');



    }

    public function edit($id)
    {
        $product = products::find($id);

        if(!$product)
            return view('errors.404');

        $images = product_images::where('product_id', $id)->get();
        $categories_header = product_category::all();
        $rooms_header = rooms::all();
        return view('dashboard.edit_product', compact('product', 'categories_header', 'rooms_header', 'images'));
    }

    public function editpost($id, Request $request)
    {
        $pro = products::find($id);
        $pro->name = $request->name;
        $pro->product_details->size = $request->size;
        $pro->material = $request->material;
        $pro->price = $request->price;
        $pro->qty = $request->qty;
        $pro->weight = $request->weight;
        $pro->save();
        return redirect()->back()->with('thanhcong', 'Sửa sản phẩm thành công!!!');
    }

    public function delete_pro($id){
        product_details::destroy(product_details::where('product_id',$id)->get());
        product_images::destroy(product_images::where('product_id',$id)->get());
        products::destroy($id);
        return redirect()->back();
    }

    public function orders()
    {
        $categories_header = product_category::all();
        $rooms_header = rooms::all();
        $orders = orders::all();
        return view('dashboard.list_order', compact('categories_header', 'rooms_header', 'orders'));
    }
    public function products(Request $request)
    {
        $categories_header = product_category::all();
        $rooms_header = rooms::all();
        $products = products::paginate(20);
        if(isset($_GET['name'])){
            $search_text = $_GET['name'];
            $products = products::where('name', 'LIKE', '%'.$search_text.'%')->paginate(20);
        }
        return view('dashboard.list_product', compact('categories_header', 'rooms_header','products'));
    }



    // blog
    public function blogs()
    {
        $categories_header = product_category::all();
        $rooms_header = rooms::all();
        $blogs = blog::all();
        if(isset($_GET['name_title'])){
            $search_text = $_GET['name_title'];
            $blogs = blog::where('title', 'LIKE', '%'.$search_text.'%')->get();
        }
        return view('dashboard.blog.list_blog', compact('categories_header', 'rooms_header','blogs'));
    }

    public function add_blog()
    {
        $categories_header = product_category::all();
        $rooms_header = rooms::all();
        $categories = product_category::all();

        return view('dashboard.blog.blog_modifier', compact('categories_header', 'rooms_header', 'categories'));
    }

    public function store_blog(Request $request)
    {
        // thêm sản phẩm
        $file = $request->image;
        $upload_path = public_path('front/images/image_blog');
        if ($file) {
                $file->move($upload_path, $file->getClientOriginalName());
        }
        $data_blog = [
            'title' => $request->input('title'),
            'link' => $request->input('link'),
            'short_description' => $request->input('short_description'),
            'image' => $file->getClientOriginalName(),
            'keywords' => $request->input('keywords'),
            'content' => $request->input('content'),
            'author' => $request->input('author'),
        ];
        blog::create($data_blog);
        

        // thêm product_images

        // $image = array();

        
        return redirect()->back()->with('thanhcong', 'Thêm blog thành công!!!');



    }

    public function edit_blog($id){
        $categories_header = product_category::all();
        $rooms_header = rooms::all();
        $categories = product_category::all();
        $blog = blog::find($id);

        if(!$blog)
            return view('errors.404');
            
        return view('dashboard.blog.edit_blog', compact('blog','categories_header', 'rooms_header', 'categories'));
    }

    public function edit_blog_post($id, Request $request){
        $blog = blog::find($id);
        $blog->title = $request->title;
        $blog->link = $request->link;
        $blog->short_description = $request->short_description;
        $blog->keywords = $request->keywords;
        $blog->content = $request->content;
        $blog->author = $request->author;
        $blog->status = $request->status;
        $blog->save();
        return redirect()->back()->with('thanhcong', 'Sửa sản phẩm thành công!!!');
    }

    public function delete_blog($id){
        blog::destroy($id);
        return redirect()->back();
    }



    public function order_detail($id)
    {
        $categories_header = product_category::all();
        $rooms_header = rooms::all();
        $order_detail = order_details::where('order_id',$id)->get();

        return view('dashboard.order_detail', compact('categories_header', 'rooms_header','order_detail'));
    }


    public function change_status(Request $request){
        $order = orders::find($request->id);
        $order->status = $request->status;
        $order->save();
        return  redirect()->back();
    }

    public function filter_order(Request $request){
        $orders = orders::all();
        $categories_header = product_category::all();
        $rooms_header = rooms::all();
        if($request->startTime != null){
            $orders = $orders->where('created_at', '>=',$request->startTime);
        }
        if($request->endTime != null){
            $orders = $orders->where('created_at', '<=',$request->endTime);
        }
        if($request->status != 'All'){
            $orders = $orders->where('status',$request->status);
        }
        return view('dashboard.list_order',compact('orders','categories_header','rooms_header'));

    }


    public function users()
    {
        $categories_header = product_category::all();
        $rooms_header = rooms::all();
        $users = User::where('level',0)->paginate(20);
        return view('dashboard.list_user', compact('categories_header', 'rooms_header', 'users'));
    }
}
