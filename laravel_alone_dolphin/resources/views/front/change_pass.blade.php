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

{{-- @if(session()->has('message'))
    <div class="alert alert-success">
        {!! session()->get('message') !!}
    </div>
@elseif(session()->has('error'))
    <div class="alert alert-danger">
        {!! session()->get('error') !!}
    </div>
@endif --}}
<div class="px-5 w-full md:w-1/2 m-auto">
    <h1 class=" text-2xl md:text-4xl text-center font-semibold my-5">Đổi mật khẩu</h1>
    @php
        $token = $_GET['token'];
        $email = $_GET['email'];

    @endphp
    <form action="/update-new-password" method="POST" id="change_pass">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="hidden" name="email" value="{{ $email }}">
        <input type="hidden" name="token" value="{{ $token }}">

        <div class="mt-4 form-group">
            <label for="password">Mật khẩu mới</label><span><sup class="text-red-500">*</sup></span><br>
            <input class="form-control" type="password" id="password" name="password">
            <span class="form-message"></span>
        </div>
        <div class="mt-4 form-group">
            <label for="confirm-password">Xác nhận mật khẩu</label><span><sup class="text-red-500">*</sup></span><br>
            <input class="form-control" type="password" id="confirm-password" name="confirm-password">
            <span class="form-message"></span>
        </div>

        <div class="flex justify-center mt-8">
            <!-- <input type="submit" value="Tạo tài khoản"
                class="px-5 py-2 bg-[#ffde59] text-black text-lg md:text-xl cursor-pointer m-auto"> -->
            <input type="submit" class="px-5 py-2 bg-[#ffde59] text-black text-lg md:text-xl cursor-pointer m-auto"
                value="Đổi mật khẩu">
        </div>
    </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



<!-- form validate -->
<!-- form validate -->
<script src="/front/javascript/form_validate.js"></script>
<script>
    Validator({
        form: '#change_pass',

        formGroup: '.form-group',

        errorSelector: '.form-message',

        rules: [
        Validator.isRequired('#password'),

        Validator.minLength('#password', 6),

        Validator.isRequired('#confirm-password'),

        Validator.isConfirmed('#confirm-password', function () {
                return document.querySelector('#change_pass #password').value
            }, 'Mật khẩu nhập lại không chính xác!')
        ]
    })
</script>

@endsection
