@extends('components.layout')
@section('head')
<link rel="stylesheet" href="/front/css/form_validate.css">
<style>
    #background-pattern {
        height: 5vh;
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
            height: 100px;
            width: 1200px;
            object-fit: cover;
            opacity: 0.3;
        }
    }
</style>
@endsection
@section('content')
<div class="">
    <img src="/front/images/background-pattern.jpg" alt="pattern" id="background-pattern">
</div>
<div class="px-5 w-full md:w-2/3 laptop:w-1/2 m-auto">
    <h1 class=" text-2xl md:text-4xl text-center font-semibold my-5">Đăng nhập</h1>
    {{-- @if(session()->has('message'))
    <div class="alert alert-success">
        {!! session()->get('message') !!}
    </div>
    @elseif(session()->has('error'))
    <div class="alert alert-danger">
        {!! session()->get('error') !!}
    </div>
    @endif --}}

    @if($errors->any())
    <div class="p-2 border rounded-md flex gap-3 text-red-600 border-red-600 bg-red-100">
        <i class="fi fi-rr-cross-circle mt-1"></i>
        <div>{{$errors->first()}}. Vui lòng đăng nhập lại</div>
    </div>
    @endif
    <form action="/sign_in" method="POST" id="sign-in">
        <input type="hidden" name="_token" value="{{csrf_token()}}">

        <div class="mt-4 form-group">
            <label for="email">Email</label><span><sup class="text-red-500">*</sup></span><br>
            <input class="form-control" type="text" id="email" name="email">
            <span class="form-message"></span>
        </div>
        <div class="mt-4 form-group">
            <label for="password">Mật khẩu</label><span><sup class="text-red-500">*</sup></span><br>
            <input class="form-control" type="password" id="password" name="password">
            <span class="form-message"></span>
        </div>

        <div class="mt-8 flex flex-col md:flex-row justify-between">
            <a href="/sign_up">Chưa có tài khoản? Đăng ký tại đây</a>
            <a href="/forgot_password">Quên mật khẩu</a>
        </div>
        <div class="flex justify-center mt-8">
            <!-- <input type="submit" value="Tạo tài khoản"
                class="px-5 py-2 bg-[#ffde59] text-black text-lg md:text-xl cursor-pointer m-auto"> -->

            <input type="submit" class="px-5 py-2 bg-[#ffde59] text-black text-lg md:text-xl cursor-pointer m-auto"
                value="Đăng nhập">
        </div>
    </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



<!-- form validate -->
<!-- form validate -->
<script src="/front/javascript/form_validate.js"></script>
<script>
    Validator({
        form: '#sign-in',

        formGroup: '.form-group',

        errorSelector: '.form-message',

        rules: [

            Validator.isRequired('#email'),

            Validator.isEmail('#email'),

            Validator.isRequired('#password'),

            Validator.minLength('#password', 6),

        ],

        onSubmit: function (data) {
            console.log(data);
        }
    })
</script>

@endsection