@extends('components.layout')
@section('head')
<link rel="stylesheet" href="/front/css/form_validate.css">
<link href="/front/css/page_rooms.css" rel="stylesheet">
<style>
    .dec.qtybtn {
        position: relative;
        left: -20px;
        top: 20px;
        font-size: 20px;
        font-weight: 700;
        cursor: pointer;
    }

    .inc.qtybtn {
        position: relative;
        font-size: 20px;
        right: 36px;
        cursor: pointer;
    }

    .btn-delete-row-cart {
        cursor: pointer;

    }

    .btn-delete-row-cart:hover {
        opacity: 0.6;
    }

    #background-pattern {
        height: 5vh;
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


    .quantity {
        position: relative;
        overflow: hidden;
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
        width: 73px;
        height: 50px;
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
        height: 40%;
        top: 1px;
        border-bottom: 1px solid rgb(156 163 175);
        ;
    }

    .quantity-button.quantity-down {
        position: absolute;
        bottom: -1px;
        height: 50%;
    }

    .product-img {
        height: 80px;
        width: 80px;
        object-fit: cover;
    }

    @media (min-width: 740px) {
        #background-pattern {
            height: 100px;
            width: 1200px;
            object-fit: cover;
            opacity: 0.3;
        }

        .product-img {
            height: 120px;
            width: 120px;
        }
    }

    @media (min-width: 1280px) {

        .product-img {
            height: 200px;
            width: 200px;
        }
    }
</style>
@endsection
@section('content')

<div class="">
    <img src="/front/images/background-pattern.jpg" alt="pattern" id="background-pattern">
</div>

<h1 class="text-3xl md:text-4xl text-center font-semibold mb-5 md:mb-10 mt-2">Giỏ hàng</h1>

@if(count($carts) <= 0) <div class="w-full m-auto flex flex-col text-center items-center gap-6 mb-20">
    <p>Giỏ hàng của bạn đang trống</p>
    <img class="" src="/front/images/empty.png" alt="">
    <p>Bắt đầu mua sắm thôi nào!</p>
    <a class="bg-yellow-400 px-1 text-black text-lg flex gap-3 w-fit" href="/home_office"><span class="underline">Xem
            thêm nhiều
            sản phẩm mới</span>
        <i class="fi fi-rr-arrow-small-right"></i></a>

    </div>

    @else

    <div id="with-orders" class="mb-10">
        <p class="text-right mb-3">Có x sản phẩm trong giỏ hàng của bạn</p>
        <table>
            <tr>
                <th>Sản phẩm</th>
                <th class="hidden md:block">Giá</th>
                <th>Số lượng</th>
                <th>Số tiền</th>
                <th><i onclick="confirm('Bạn có muốn xóa toàn bộ sản phẩm trong giỏ hàng?') === true ? window.location = '/cart/destroy' : ''"
                        class="ti-close ti-close btn-delete-row-cart"></i></th>
                <th>&nbsp;</th>
            </tr>
            @foreach($carts as $cart)
            <tr>
                <td>
                    <div class="flex flex-col md:flex-row items-center gap-3">

                        <a href="/{{ $cart->options->link }}/{{ $cart->options->id_cate }}/{{ $cart->id }}"
                            target="_blank" class="">
                            <!-- link tới trang sản phẩm -->

                            <img class="product-img"
                                src="/front/images/image_products/{{ $cart->options->images[0]->path }}"
                                alt="{{$cart->name}}">
                        </a>
                        <div>
                            <a href="/{{ $cart->options->link }}/{{ $cart->options->id_cate }}/{{ $cart->id }}"
                                target="_blank" class="font-semibold text-lg">{{$cart->name}}</a>
                            <!-- link tới trang sản phẩm -->
                            <div class="text-gray-700">{{$cart->category_name}}</div>
                        </div>

                    </div>

                </td>
                <td class="hidden md:table-cell">{{ number_format($cart->price) }}đ</td>
                <td>
                    <div class="quantity pro-qty">
                        <input type="text" value="{{$cart->qty}}" data-rowid="{{ $cart->rowId }}" min="1" step="1">
                    </div>
                </td>
                <td>{{number_format($cart->price*$cart->qty)}}đ</td>
                <td><a href="/cart/delete/{{ $cart->rowId }}"><i class="ti-close btn-delete-row-cart"></i></a></td>
            </tr>
            @endforeach
        </table>

        <div class="flex flex-row-reverse">
            <div class="p-5 border border-gray-200 w-full md:w-1/2 laptop:w-1/3">
                <h3 class="text-center text-2xl font-semibold mb-3">Thông tin đơn hàng</h3>
                <div class="border-y py-2 mb-3">
                    <p class="flex justify-between items-center">Tổng tiền: <span
                            class="text-2xl font-bold text-yellow-500">{{ $total }}đ</span></p>
                </div>
                <div class="text-sm text-gray-400 mb-3">
                    Phí vận chuyển: Freeship
                </div>
                <button class="uppercase w-full h-10 bg-yellow-400 text-black mb-3"
                    onclick="window.location='/checkout'">Thanh toán</button>
                <p class="flex justify-center gap-3 text-blue-500"><a href="#" class="text-">Tiếp tục mua hàng</a><i
                        class="fi fi-rr-redo"></i></p>
            </div>
        </div>

    </div>
    @endif

    {{--
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
    </script> --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="/front/javascript/cart.js"></script>
    @endsection
