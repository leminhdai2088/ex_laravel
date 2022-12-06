@extends('front.header')
@section('content')

{{--
<link href="/front/css/page_rooms.css" rel="stylesheet"> --}}

<head>
    <link rel="stylesheet" href="/front/css/footer.css">
    <link rel="stylesheet" href="/front/css/form_validate.css">

    <style>
        #background-pattern {
            height: 15vh;
            width: 100%;
            object-fit: cover;
            opacity: 0.3;
        }

        #empty {
            display: none;
        }

        /* table,
        tr,
        td,
        th {
            border: solid 1px black;
        } */

        th {
            background-color: rgb(254 240 138);
        }

        td {
            padding: 8px 0;
        }

        th {
            text-align: left;
            padding: 0 4px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table tr:not(tr:first-of-type) {
            border-top: 1px solid rgb(229 231 235);
        }

        /* table td:nth-child(1),
        table td:nth-child(2),
        table td:nth-child(4) {
            text-align: center;
        }

        table td:nth-child(3) {
            text-align: right;
        } */

        .product-img {
            height: 100px;
            width: 100px;
        }

        .quantity {
            position: relative;
        }

        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type=number] {
            -moz-appearance: textfield;
        }

        .quantity input {
            width: 60px;
            height: 42px;
            line-height: 1.65;
            float: left;
            display: block;
            padding: 0;
            margin: 0;
            padding-left: 15px;
            border: 1px solid rgb(156 163 175);
            ;
        }

        .quantity input:focus {
            outline: 0;
        }

        .quantity-nav {
            float: left;
            position: relative;
            height: 42px;
        }

        .quantity-button {
            position: relative;
            cursor: pointer;
            border-left: 1px solid rgb(156 163 175);
            ;
            width: 20px;
            text-align: center;
            color: #333;
            font-size: 13px;
            font-family: "Trebuchet MS", Helvetica, sans-serif !important;
            line-height: 1.7;
            -webkit-transform: translateX(-100%);
            transform: translateX(-100%);
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            -o-user-select: none;
            user-select: none;
        }

        .quantity-button.quantity-up {
            position: absolute;
            height: 50%;
            top: 0;
            border-bottom: 1px solid rgb(156 163 175);
            ;
        }

        .quantity-button.quantity-down {
            position: absolute;
            bottom: -1px;
            height: 50%;
        }

        @media (min-width: 740px) {
            #background-pattern {
                height: 150px;
                width: 1200px;
                object-fit: cover;
                opacity: 0.3;
            }

            .product-img {
                height: 200px;
                width: 200px;
            }
        }
    </style>
</head>


<body class="w-full md:w-[1200px] m-auto text-gray-700">

    <div class="">
        <img src="/front/images/background-pattern.jpg" alt="pattern" id="background-pattern">
    </div>

    <h1 class="text-3xl md:text-4xl text-center font-semibold mb-5 md:mb-10 mt-2">Giỏ hàng</h1>
    <div id="empty" class="w-full m-auto md:flex flex-col md:text-center items-center gap-6 mb-20">
        <p>Giỏ hàng của bạn đang trống</p>
        <img class="hidden md:block" src="/front/images/empty.png" alt="">
        <p>Bắt đầu mua sắm thôi nào!</p>
        <a class="bg-yellow-400 px-1 text-black text-lg flex gap-3 w-fit" href="/cart"><span class="underline">Xem
                thêm nhiều
                sản phẩm mới</span>
            <i class="fi fi-rr-arrow-small-right"></i></a>

    </div>
    <div id="with-orders" class="px-5 mb-10">
        <p class="text-right mb-3">Có x sản phẩm trong giỏ hàng của bạn</p>
        <table>
            <tr>
                <th>Sản phẩm</th>
                <th class="hidden md:block">Giá</th>
                <th>Số lượng</th>
                <th>Số tiền</th>
                <th>&nbsp;</th>
            </tr>
            @foreach($carts as $cart)
            <tr>
                <td>
                    <div class="flex items-center gap-3">

                        <a href="" target="_blank" class="">
                            <!-- link tới trang sản phẩm -->
                            
                            <img src="/front/images/image_products/{{ $cart->options->images }}" alt="" height="200" width="200">
                        </a>
                        <div>
                            <a href="" target="_blank" class="font-semibold text-lg">{{$cart->name}}</a>
                            <!-- link tới trang sản phẩm -->
                            <div class="text-gray-700">{{$cart->category_name}}</div>
                        </div>

                    </div>

                </td>
                <td>{{ number_format($cart->price) }}</td>
                <td>
                    <div class="quantity"><input type="text" value="{{$cart->qty}}" min="1" step="1"></div>
                </td>
                <td>{{number_format($cart->price*$cart->qty)}}</td>
            </tr>
            @endforeach
        </table>

        <div class="flex flex-row-reverse">
            <div class="p-5 border border-gray-200 w-full md:w-1/3">
                <h3 class="text-center text-2xl font-semibold mb-3">Thông tin đơn hàng</h3>
                <div class="border-y py-2 mb-3">
                    <p class="flex justify-between items-center">Tổng tiền: <span
                            class="text-2xl font-bold text-yellow-500">{{ $total }}</span></p>
                </div>
                <div class="text-sm text-gray-400 mb-3">
                    Phí vận chuyển: Freeship
                </div>
                <button class="uppercase w-full h-10 bg-yellow-400 text-black mb-3">Thanh toán</button>
                <p class="flex justify-center gap-3 text-blue-500"><a href="#" class="text-">Tiếp tục mua hàng</a><i
                        class="fi fi-rr-redo"></i></p>
            </div>
        </div>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        jQuery('<div class="quantity-nav"><div class="quantity-button quantity-up">+</div><div class="quantity-button quantity-down">-</div></div>').insertAfter('.quantity input');
        jQuery('.quantity').each(function () {
            var spinner = jQuery(this),
                input = spinner.find('input[type="number"]'),
                btnUp = spinner.find('.quantity-up'),
                btnDown = spinner.find('.quantity-down'),
                min = input.attr('min'),
                max = input.attr('max');

            btnUp.click(function () {
                var oldValue = parseFloat(input.val());
                if (oldValue >= max) {
                    var newVal = oldValue;
                } else {
                    var newVal = oldValue + 1;
                }
                spinner.find("input").val(newVal);
                spinner.find("input").trigger("change");
            });

            btnDown.click(function () {
                var oldValue = parseFloat(input.val());
                if (oldValue <= min) {
                    var newVal = oldValue;
                } else {
                    var newVal = oldValue - 1;
                }
                spinner.find("input").val(newVal);
                spinner.find("input").trigger("change");
            });

        });
    </script>
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
</body>
<!-- @endsection -->
