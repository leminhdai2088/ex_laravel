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
        $request->validate([
            'phone' => 'required|min:10|numeric',
            'address' => 'required',
            'pay_method' => 'required',
            
        ]);
        //thêm giỏ hàng
        $data_order = $request->all();
        $user_id = ['user_id'=>Auth::user()->id];
        $user_name = ['name'=>Auth::user()->name];
        $user_email = ['email'=>Auth::user()->email];
        $data_order+=$user_id;
        $data_order+=$user_name;
        $data_order+=$user_email;
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
