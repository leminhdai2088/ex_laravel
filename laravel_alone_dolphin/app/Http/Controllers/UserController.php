<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\product_category;
use App\Models\rooms;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Auth\User as users;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
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
            'name' => '',
            'password' => '',
        ]);


        $form_field['password'] = bcrypt($form_field['password']);

        $user = User::create($form_field);
        auth()->login($user);
        return redirect()->back()->with('thanhcong','Bạn đã đăng ký thành công!!!');
    }


    public function show(){
        $categories_header = product_category::all();
        $rooms_header = rooms::all();
        return view('front.sign-in',compact('categories_header','rooms_header'));
    }

    public function auth(Request $req){
        $form_field = $req->validate([
            'email' => ['required','email'],
            'password' => 'required',
        ]);

        if(auth()->attempt($form_field)){
            $req->session()->regenerate();
            return redirect('/');

        }
        return back()->withErrors(['email' =>'Email hoặc mật khẩu không đúng'])->onlyInput('email');
    }

    public function log_out(Request $req){
        auth()->logout();
        $req->session()->invalidate();
        $req->session()->regenerateToken();
        return redirect('/');
    }


    public function edit(){
        $categories_header = product_category::all();
        $rooms_header = rooms::all();
        return view('front.edit_user',compact('categories_header', 'rooms_header'));
    }

    public function editpost(Request $request){
        $user = users::find(Auth::user()->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        return redirect()->back()->with('thanhcong','Sửa thông tin thành công!!!');
    }
}
