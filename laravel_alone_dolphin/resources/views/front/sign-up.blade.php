@extends('components.layout')
@section('head')
<link rel="stylesheet" href="/front/css/form_validate.css">
<link rel="stylesheet" href="/front/css/footer.css">
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

    [class^="flaticon"]:before,
    [class*=" flaticon"]:before,
    [class^="flaticon"]:after,
    [class*=" flaticon"]:after {

        font-size: 30px;
        color: #FACC15;
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
<div class="px-5 w-full md:w-1/2 m-auto">
    @if(Session::has('thanhcong'))

    <div class="fixed z-30 top-0 left-0 h-full w-full bg-black bg-opacity-30 flex items-center justify-center">
        <div class="p-10 rounded-md shadow flex flex-col gap-3 items-center bg-white">
            <i class="flaticon fi fi-rr-checkbox"></i>
            <div>{{Session::get('thanhcong')}}</div>
            <a href="/sign_in" class="underline">Đăng nhập tại đây</a>
        </div>
    </div>
    @endif
    <div>
        <h1 class="text-2xl md:text-4xl text-center font-semibold my-5">Đăng ký</h1>
        <form action="/sign_up" method="POST" id="sign-up">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="form-group">
                <label for="name">Họ và tên</label><span><sup class="text-red-500">*</sup></span><br>
                <input class="form-control" type="text" id="name" name="name">
                <span class="form-message"></span>
            </div>
            <div class="mt-4 form-group">
                <label for="email">Email</label><span><sup class="text-red-500">*</sup></span><br>
                <input class="form-control" type="text" id="email" name="email">
                <span class="form-message"></span>
                {{-- thông báo khi mail đã tồn tại --}}
                @error('email')
                <span class="form-message text-red-600">Email này đã tồn tại</span>
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

                {{-- <button type="submit"
                    class="px-5 py-2 bg-[#ffde59] text-black text-lg md:text-xl cursor-pointer m-auto" Tạo tài khoản>
                    --}}

                    {{-- <button type="submit"
                        class="px-5 py-2 bg-[#ffde59] text-black text-lg md:text-xl cursor-pointer m-auto">
                        Tạo tài khoản
                    </button> --}}
                    <input type="submit"
                        class="px-5 py-2 bg-[#ffde59] text-black text-lg md:text-xl cursor-pointer m-auto"
                        value="Tạo tài khoản">


            </div>
        </form>
    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- form validate -->
<script src="/front/javascript/form_validate.js"></script>
<script>
    Validator({
        form: '#sign-up',

        formGroup: '.form-group',

        errorSelector: '.form-message',

        rules: [
            Validator.isRequired('#name'),

            Validator.isRequired('#email'),

            Validator.isEmail('#email'),

            Validator.isRequired('#password'),

            Validator.minLength('#password', 6),

            Validator.isRequired('#confirm-password'),

            Validator.isConfirmed('#confirm-password', function () {
                return document.querySelector('#sign-up #password').value
            }, 'Mật khẩu nhập lại không chính xác!'),
        ],

        onSubmit: function (data) {
            console.log(data);
        }
    })
</script>
@endsection