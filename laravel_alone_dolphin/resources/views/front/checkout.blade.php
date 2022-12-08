
@extends('front.header')
@section('content')
<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="/front/css/main.css" />
    <link href="/front/css/output.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/front/images/icon/themify-icons-font/themify-icons/themify-icons.css">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel="stylesheet" href="/front/css/header.css">
    <link rel="stylesheet" href="/front/css/footer.css">

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
    @vite('resources/css/app.css')
</head>


    <div class="w-full md:w-[80%] mx-auto mt-5 md:mt-16">
        <!-- <div class="w-full md:w-[90%] mx-auto mt-16"></div> -->

        <div class="md:w-[40%] md:float-right px-5 md:px-0 md:pl-10">
            <h1 class="md:hidden text-2xl text-center mb-5">Alone Dolphin</h1>
            <table class="w-full">
                @foreach($carts as $cart)
                <tr>
                    <td class="w-1/4">

                        <a href="" target="_blank" class="">
                            <!-- link tới trang sản phẩm -->
                            <img src="/front/images/image_products/{{ $cart->options->images[0]->path }}" alt="" class="product-img">
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
            class="px-5 py-8 border md:border-0 mt-5 md:py-0 md:mt-0 md:w-[60%] md:float-left md:px-0 md:pr-20 md:border-r">
            <h1 class="hidden md:block text-3xl text-center">Alone Dolphin</h1>

            @if(count($carts) <0 )
            <h2 class="text-xl">Thông tin giao hàng</h2>
            @endif
            
            @if(count($carts) <= 0)
            <div class="w-full m-auto md:flex flex-col md:text-center items-center gap-6 mb-20">
                <p>Giỏ hàng của bạn đang trống</p>
                <img class="hidden md:block" src="/front/images/empty.png" alt="">
                <p>Bắt đầu mua sắm thôi nào!</p>
                <a class="bg-yellow-400 px-1 text-black text-lg flex gap-3 w-fit" href="/home_office"><span class="underline">Xem
                        thêm nhiều
                        sản phẩm mới</span>
                    <i class="fi fi-rr-arrow-small-right"></i></a>
        
            </div>
            @else
            <form action="/checkout" method="post">
                @csrf
                <div class="form-group">
                    <label for="fullname">Họ và tên</label><span><sup class="text-red-500">*</sup></span><br>
                    <input class="form-control" type="text" id="name" name="name">
                    <span class="form-message"></span>
                </div>
                <div class="mt-4 form-group">
                    <label for="phoneNumber">Số điện thoại</label><span><sup class="text-red-500">*</sup></span><br>
                    <input class="form-control" type="text" id="phone" name="phone">
                    <span class="form-message"></span>
                </div>
                <div class="mt-4 form-group">
                    <label for="email">Email</label><span><sup class="text-red-500">*</sup></span><br>
                    <input class="form-control" type="text" id="email" name="email">
                    <span class="form-message"></span>
                </div>
                <div class="mt-4 form-group">
                    <label for="address">Địa chỉ</label><span><sup class="text-red-500">*</sup></span><br>
                    <input class="form-control" type="text" id="address" name="address">
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
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>

    </script>

@endsection