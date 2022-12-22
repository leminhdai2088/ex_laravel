<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\products;
use App\Models\product_category;
use App\Models\rooms;
class CartController extends Controller
{
    public function add($id){
        $product= products::findOrFail($id);
        
        Cart::add([
            'id' => $id,
            'name' => $product->name,
            'qty' => 1,
            'price' => $product->price,
            'weight' => $product->weight ?? 0,
            'options' => [
                'images' => $product->product_images,
                'category_name' => $product->product_category->name,
                'link' => $product->room->link,
                'id_cate' => $product->product_category->id
            ],
        ]);
        return back()->with('thanhcong','Thêm vào giỏ hàng thành công!!!');
    }
    public function index(){
        $categories_header = product_category::all();
        $rooms_header = rooms::all();
        $carts = Cart::content();
        $total = Cart::total();        
        return view('front.cart',compact('categories_header','rooms_header', 'carts', 'total'));
    }

    public function delete($rowId){
        Cart::remove($rowId);
        return back();
    }   

    public function destroy(){
        Cart::destroy();
        return back();
    }

    public function update(Request $request){
    if($request->ajax()){
        Cart::update($request->rowId, $request->qty);
    }
    }


}
