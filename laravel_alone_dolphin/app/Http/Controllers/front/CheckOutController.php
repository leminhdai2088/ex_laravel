<?php

namespace App\Http\Controllers\front;
use App\Models\product_category;
use App\Models\rooms;
use App\Http\Controllers\Controller;
use App\Models\order_details;
use App\Models\orders;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;

class CheckOutController extends Controller
{
    public function index()
    {
        $categories_header = product_category::all();
        $rooms_header = rooms::all();
        $carts = Cart::content();
        $total = Cart::total();
        return view('front.checkout', compact('categories_header', 'rooms_header','carts','total'));
    }

    public function add_order(Request $request){
        //thêm giỏ hàng
        $data_order = $request->all();
        $user = ['user_id'=>Auth::user()->id];
        $data_order+=$user;
        $order = orders::create($data_order);

        //thêm chi tiết giỏ hàng
        $carts = Cart::content();
        foreach($carts as $cart){
            $data = [
                'order_id' => $order->id,
                'product_id' => $cart->id,
                'qty'=> $cart->qty,
                'amount' => $cart->price,
                'total' => $cart->price*$cart->qty
            ];
            order_details::create($data);
        }

        //  xóa giỏ hàng
        Cart::destroy();

        //trả về kq
        return redirect('/profile')->with('thanhcong','Sửa thông tin thành công!!!');
    }
}
