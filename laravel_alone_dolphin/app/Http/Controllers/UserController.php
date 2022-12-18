<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\product_category;
use App\Models\rooms;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Auth\User as users;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
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
        // return back()->withErrors(['email' =>'Email hoặc mật khẩu không đúng'])->onlyInput('email');
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

    public function forgot_pass(Request $request){
        $categories_header = product_category::all();
        $rooms_header = rooms::all();
        return view('front.forgot_pass',compact('categories_header','rooms_header'));
    }


    public function recover_pass(Request $request){
        $data = $request->all();
        $now = Carbon::now('Asia/Ho_Chi_Minh')->format('d-m-Y');
        $title_mail = "Alone Dolphin - Lấy lại mật khẩu ".$data['email']." ".$now;
        $user = User::where('email',$data['email'])->get();
        foreach($user as $key => $value){
            $id = $value->id;
        }

        if($user){
            $count_user = $user->count();
            if($count_user == 0)
            {
                return redirect()->back()->with('error','Email chưa được đăng ký để khôi phục mật khẩu');
            }
            else
            {
                $token_random = Str::random();
                $user = User::find($id);
                $user->customer_token = $token_random;
                $user->save();  
                $to_email = $data['email'];
                $link_reset_pass = url('update-new-password?email='.$to_email.'&token='.$token_random);
                $data = array(
                    'name' =>  $title_mail,
                    'body' => $link_reset_pass,
                    'email' => $data['email']);
                
                Mail::send('front.forgot_pass_notify',['data' => $data], function($message) use ($title_mail,$data)
                {
                    $message->to($data['email'])->subject($title_mail);
                    $message->from($data['email'],$title_mail);
                });
                return redirect()->back()->with('message','Gửi mail thành công, vui lòng vào email để xác nhận thay đổi mật khẩu');
            }
        }

    }

    public function test_mail(){
        $mail_title = 'Title';
        Mail::send('front.test_mail',compact('mail_title'), function($message){
           $message->from('louistart0ggy@gmail.com','Coder');
           $message->to('20521153@gm.uit.edu.vn');
           $message->subject('Testmail'); 
        });
    }

    public function change_password(Request $request){
        $categories_header = product_category::all();
        $rooms_header = rooms::all();
        return view('front.change_pass',compact('categories_header','rooms_header'));
    }



    public function change_passpost(Request $request){
        $data = $request->all();
        $token_random = Str::random();
        $user = User::where('email',$data['email'])
                ->where('customer_token',$data['token'])->get();
        $count = $user->count();
        if($count > 0)
        {
            foreach($user as $key => $value){
                $id = $value->id;
            }
            $reset = User::find($id);
            $reset->password = bcrypt($data['password']);
            $reset->customer_token = $token_random;
            $reset->save();
            return redirect('/sign_in')->with('success','Đã thay đổi mật khẩu thành công. Quay lại trang đăng nhập');
        }
        else
            return redirect()->back()->with('error','Vui lòng nhập lại Email vì link xác thực đã quá hạn!');
    }
}
