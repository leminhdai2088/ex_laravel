<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product_category;
use App\Models\product_details;
use App\Models\product_images;
use App\Models\rooms;
use App\Models\products;

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

    public function orders()
    {
        $categories_header = product_category::all();
        $rooms_header = rooms::all();

        return view('dashboard.list_order', compact('categories_header', 'rooms_header'));
    }

    public function order_detail()
    {
        $categories_header = product_category::all();
        $rooms_header = rooms::all();

        return view('dashboard.order_detail', compact('categories_header', 'rooms_header'));
    }
}
