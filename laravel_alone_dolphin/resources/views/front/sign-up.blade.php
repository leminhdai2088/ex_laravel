
@extends('front.header')
@section('content')
<head>
    <link rel="stylesheet" href="/front/css/form_validate.css">
<link rel="stylesheet" href="/front/css/footer.css">
    <style>
        #background-pattern {
            height: 15vh;
            width: 100%;
            object-fit: cover;
            opacity: 0.3;
        }

        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 5px 8px;
            border-radius: 0;
            border: 2px solid rgb(113, 113, 113);
            margin: 5px 0;
        }

        input[type=text]:focus,
        input[type=password]:focus {
            border-radius: 0;
            outline: none;
            border: 2px solid black;
        }

        @media (min-width: 740px) {
            #background-pattern {
                height: 150px;
                width: 1200px;
                object-fit: cover;
                opacity: 0.3;
            }
        }
    </style>
</head>


<body class="w-full md:w-[1200px] m-auto text-gray-700">

    <div class="">
        <img src="/front/images/background-pattern.jpg" alt="pattern" id="background-pattern">
    </div>
    <div class="px-5 w-full md:w-1/2 m-auto">
            @if(Session::has('thanhcong'))
            <div>{{Session::get('thanhcong')}}</div>
            @else
            <div>123</div>
            @endif
        <h1 class="text-2xl md:text-4xl text-center font-semibold my-5">Đăng ký</h1>
        <form action="/user" method="POST" id="sign-up">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="form-group">
                <label for="fullname">Họ và tên</label><span><sup class="text-red-500">*</sup></span><br>
                <input class="form-control" type="text" id="name" name="name">
                <span class="form-message"></span>
            </div>
            <div class="mt-4 form-group">
                <label for="email">Email</label><span><sup class="text-red-500">*</sup></span><br>
                <input class="form-control" type="text" id="email" name="email"> 
                @error('email')
                <span class="form-message">{{ $message }}</span>
                @enderror
            </div>
            <div class="mt-4 form-group">
                <label for="password">Mật khẩu</label><span><sup class="text-red-500">*</sup></span><br>
                <input class="form-control" type="password" id="password" name="password">
                <span class="form-message"></span>
            </div>
            <div class="mt-4 form-group">
                <label for="confirm-password">Xác nhận mật khẩu</label><span><sup
                        class="text-red-500">*</sup></span><br>
                <input class="form-control" type="password" id="confirm-password" name="confirm-password">
                <span class="form-message"></span>
            </div>
        
        <div class="mt-8">
            <a href="/sign_in">Đã có tài khoản? Đăng nhập tại đây</a>
        </div>
        <div class="flex justify-center mt-8">
            <!-- <input type="submit" value="Tạo tài khoản"
                class="px-5 py-2 bg-[#ffde59] text-black text-lg md:text-xl cursor-pointer m-auto"> -->

                {{-- <button type="submit" class="px-5 py-2 bg-[#ffde59] text-black text-lg md:text-xl cursor-pointer m-auto"
                Tạo tài khoản
                > --}}

                {{-- <button type="submit" class="px-5 py-2 bg-[#ffde59] text-black text-lg md:text-xl cursor-pointer m-auto">
                    Tạo tài khoản
                </button> --}}
                <input type="submit" class="px-5 py-2 bg-[#ffde59] text-black text-lg md:text-xl cursor-pointer m-auto"
                   value="Tạo tài khoản">
             
            
        </div>
    </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- footer -->
<div id="footer" class=" footer h-fit pb-46">
    <div class="w-[1200px] m-auto grid grid-cols-3">
        <div class="footer-item">
            <div class="head-footer font-medium my-2">Về chúng tôi</div>
            <div class="text-gray-700 text-sm">
                <div class="footer-text"><a href="#">Project này</a></div>
                <div class="footer-text"><a href="#">Thành viên</a></div>
            </div>

        </div>
        <div class="footer-item">
            <div class="head-footer font-medium my-2">Sản phẩm</div>
            <div class="text-gray-700 text-sm">
                <div class="footer-text"><a href="#">Giường</a></div>
                <div class="footer-text"><a href="#">Bàn</a></div>
                <div class="footer-text"><a href="#">Ghế</a></div>
                <div class="footer-text"><a href="#">Chăn ga gối</a></div>
            </div>
        </div>
        <div class="footer-item">
            <div class="head-footer font-medium my-2">Liên hệ</div>
            <div class="text-gray-700 text-sm">
                <div class="footer-text">Sđt: 090292xxxx</div>
                <div class="footer-text">Email: 2052xxxx@gm.uit.edu.vn</div>
                <div class="footer-text">Địa chỉ: trường đại học Công nghệ Thông tin</div>
                <div class="link flex gap-5 mt-2">
                    <a href="#"><img src="/front/images/icon/facebook.svg" alt="" height="30" width="30"></a>
                    <a href="#"><img src="/front/images/icon/youtube.svg" alt="" height="30" width="30"></a>
                    <a href="#"><img src="/front/images/icon/behance.svg" alt="" height="30" width="30"></a>
                    <a href="#"><img src="/front/images/icon/wordpress.svg" alt="" height="30" width="30"></a>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- form validate -->
    <script src="/front/javascript/form_validate.js"></script>
    <script>
        Validator({
            form: '#sign-up',

            formGroup: '.form-group',

            errorSelector:'.form-message',

            rules:[
            Validator.isRequired('#fullname'),

            Validator.isRequired('#email'),

            Validator.isEmail('#email'),

            Validator.isRequired('#password'),

            Validator.minLength('#password',6),

            Validator.isRequired('#confirm-password'),

            Validator.isConfirmed('#confirm-password',function(){
                  return document.querySelector('#sign-up #password').value
                },'Mật khẩu nhập lại không chính xác!'),
            ],

            onSubmit:function(data){
              console.log(data);    
            }
        })
    </script>
@endsection