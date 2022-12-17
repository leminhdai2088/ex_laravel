@extends('components.layout')
@section('head')
{{--
<link href="/front/css/page_rooms.css" rel="stylesheet"> --}}
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

    table,
    tr,
    td,
    th {
        border: solid 1px black;
    }

    th {
        background-color: rgb(250 204 21);
    }

    td {
        padding: 4px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    table td:nth-child(1),
    table td:nth-child(2),
    table td:nth-child(4) {
        text-align: center;
    }

    table td:nth-child(3) {
        text-align: right;
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

<h1 class="text-2xl md:text-4xl text-center font-semibold mb-10 mt-2">Tài khoản - Lịch sử mua hàng</h1>
@if(Session::has('thanhcong'))
<script>
    alert("Bạn đã đặt hàng thành công!!!");
</script>
@endif
<div class="md:grid grid-cols-4 my-5 md:border-t pt-5 px-5 md:px-0">
    <div class="md:border-r">
        <h2 class="text-lg md:text-2xl font-semibold mb-3 md:mb-6">Tài khoản của bạn</h2>
        <div><b>Username: </b>{{ Auth::user()->name }}</div>
        <p><b>Email: </b>{{ Auth::user()->email }}</p>
        <form action="/log_out" method="POST">
            @csrf
            {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"> --}}
            <button type="submit" class="px-4 py-1 rounded-md border my-3">Đăng xuất</button>
        </form>
        {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"> --}}
        <!-- <a href="/edit_user" class="px-4 py-1 bg-blue-400 rounded-md border my-3">Chỉnh sửa thông tin cá
            nhân</a> -->

        <button class="bg-blue-200 border rounded-md px-4 py-1" onclick="window.location='/edit_user'">Chỉnh sửa <br>
            thông
            tin cá
            nhân</button>
    </div>
    <div class="col-span-3 mt-5 md:mt-0 border-t md:border-0">

        @if($count_order == 0)
        <div id="empty" class="w-full m-auto md:flex flex-col md:text-center items-center gap-6 mb-20">
            <h2 class="text-lg md:text-2xl md:text-center font-semibold mb-3 md:mb-0">Đơn hàng</h2>
            <p>Bạn chưa đặt bất kỳ đơn hàng nào cả</p>
            <img class="hidden md:block" src="/front/images/empty.png" alt="">
            <p>Bắt đầu mua sắm thôi nào!</p>
            <a class="bg-yellow-400 px-1 text-black text-lg flex gap-3 w-fit" href="/cart"><span class="underline">Xem
                    thêm nhiều
                    sản phẩm mới</span>
                <i class="fi fi-rr-arrow-small-right"></i></a>

        </div>
        @else
        <div id="with-orders" class="md:px-5">
            <h2 class="text-lg md:text-2xl font-semibold mb-3 md:mb-5">Đơn hàng</h2>
            <table class="text-xs md:text-base">
                <tr>
                    <th>Mã đơn hàng</th>
                    <th>Ngày đặt</th>
                    <th>Thành tiền</th>
                    <th>Trạng thái</th>
                </tr>
                @foreach( $orders as $order)
                <tr>
                    <td><a href="/profile/orders/{{ $order->id }}" class="text-gray-500 underline">#{{ $order->id }}
                        </a></td>
                    <td>{{ $order->created_at }}</td>
                    @php
                    $sum = 0;
                    for($i = 0; $i < count($order->order_details); $i++){
                        $sum += $order->order_details[$i]->total;
                        if($i == count($order->order_details) - 1)
                        echo '<td>'.number_format($sum).'đ</td>';
                        }
                        @endphp
                        <td>{{ $order->status }}</td>
                </tr>
                @endforeach
            </table>
        </div>
        @endif
    </div>


</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


@endsection
