@extends('components.layout')
@section('head')

<head>
    <link rel="stylesheet" href="/front/css/form_validate.css">
</head>
<style>
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

    table tr:not(tr:first-of-type) td {
        padding-top: 12px;
    }

    .product-img {
        height: 80px;
        width: 80px;
    }

    @media (min-width: 740px) {

        .product-img {
            height: 100px;
            width: 100px;
        }
    }
</style>
@endsection
@section('content')
<div class="md:w-[80%] m-auto laptop:w-[40%] laptop:float-right px-5 laptop:px-0 laptop:pl-10">
    <h1 class="laptop:hidden text-2xl text-center mb-5">Alone Dolphin</h1>
    <table class="w-full">
        @foreach($carts as $cart)
        <tr>
            <td class="w-1/4">

                <a href="" target="_blank" class="">
                    <!-- link tới trang sản phẩm -->
                    <img src="/front/images/image_products/{{ $cart->options->images[0]->path }}" alt=""
                        class="product-img">
                </a>
            </td>
            <td class="w-1/2 pl-3">
                <a href="" target="_blank" class="font-semibold text-lg">{{ $cart->name }}</a>
                <!-- link tới trang sản phẩm -->
                <div class="text-gray-700">Số lượng: {{ $cart->qty }}</div>
            </td>
            <td>{{ number_format($cart->price*$cart->qty) }}đ</td>
        </tr>
        @endforeach


    </table>
    {{-- <form class="mt-5">
        <label for="code">Mã giảm giá</label></span>
        <input class="form-control" type="text" id="code" name="code">
    </form> --}}

    <div class="mt-5 border-y py-2">
        <div class="flex justify-between"><span>Tạm tính</span><span>{{ $total }}₫</span></div>
        <div class="flex justify-between"><span>Phí vận chuyển</span><span>0₫</span></div>
    </div>
    <div class="flex justify-between"><span>Tổng cộng</span><span class="font-semibold text-xl">{{ $total }}₫</span>
    </div>

</div>
<div
    class="md:w-[80%] m-auto px-5 py-8 border laptop:border-0 mt-5 laptop:py-0 laptop:mt-0 laptop:w-[60%] laptop:float-left laptop:px-0 laptop:pr-20 laptop:border-r">
    <h1 class="hidden laptop:block text-3xl text-center">Alone Dolphin</h1>

    @if(count($carts) < 0) <h2 class="text-xl">Thông tin giao hàng</h2>
        @endif

        @if(count($carts) <= 0) <div class="w-full m-auto md:flex flex-col md:text-center items-center gap-6 mb-20">
            <p>Đơn hàng của bạn hiện tại chưa có sản phẩm nào!!!</p>
            <img class="hidden md:block" src="/front/images/empty.png" alt="">
            <p>Bắt đầu mua sắm thôi nào!</p>
            <a class="bg-yellow-400 px-1 text-black text-lg flex gap-3 w-fit" href="/home_office"><span
                    class="underline">Xem
                    thêm nhiều
                    sản phẩm mới</span>
                <i class="fi fi-rr-arrow-small-right"></i></a>

</div>
@else
<form action="/checkout" method="post" id="checkout">
    @csrf
    {{-- <div class="form-group">
        <label for="fullname">Họ và tên</label><span><sup class="text-red-500">*</sup></span><br>
        <input class="form-control" type="text" id="name" name="name">
        <span class="form-message"></span>
    </div> --}}
    <div class="mt-4 form-group">
        <label for="phoneNumber">Số điện thoại</label><span><sup class="text-red-500">*</sup></span><br>
        <input class="form-control" type="text" id="phone" name="phone">
        <span class="form-message"></span>
    </div>
    {{-- <div class="mt-4 form-group">
        <label for="email">Email</label><span><sup class="text-red-500">*</sup></span><br>
        <input class="form-control" type="text" id="email" name="email">
        <span class="form-message"></span>
    </div> --}}
    <div class="mt-4 form-group">
        <label for="address">Địa chỉ</label><span><sup class="text-red-500">*</sup></span><br>
        <input class="form-control" type="text" id="address" name="address">
        <span class="form-message"></span>
    </div>

    <div class="mt-4 form-group">
        <label>Phương thức thanh toán</label><span><sup class="text-red-500">*</sup></span><br>
        <input class="form-control pay" type="radio" id="pay1" name="pay_method" value="Thanh toán khi nhận hàng" checked>
        <label for="pay1">Thanh toán khi nhận hàng</label><br>

        <input class="form-control pay" type="radio" id="pay2" name="pay_method" value="Ví điện tử MoMo">
        <label for="pay2">Ví điện tử MoMo</label><br>

        <input class="form-control pay" type="radio" id="pay3" name="pay_method" value="Ngân hàng điện tử - Thẻ tín dụng">
        <label for="pay3">Ngân hàng điện tử - Thẻ tín dụng</label>
        <span class="form-message"></span>
    </div>

    <div class="flex justify-between mt-8">
        <a href="/cart" class="text-blue-500">
            Quay lại giỏ hàng
        </a>
        <button type="submit" class="px-5 py-2 bg-[#ffde59] text-black text-lg md:text-xl cursor-pointer">
            Đặt hàng
        </button>
    </div>
</form>
@endif
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="/front/javascript/form_validate.js"></script>
<script>
    Validator({
        form: '#checkout',

        formGroup: '.form-group',

        errorSelector: '.form-message',

        rules: [
            Validator.isRequired('#phone'),

            Validator.isPhone('#phone'),

            Validator.isRequired('#address'),

            Validator.isRequired('.pay'),



        ]


    })
</script>

@endsection
