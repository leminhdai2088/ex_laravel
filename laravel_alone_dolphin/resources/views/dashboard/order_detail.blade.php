@extends('components.layout')
@section('head')
<title>Chi tiết sản phẩm</title>
<style>
    th {
        background-color: rgb(254 240 138);
    }

    td {
        text-align: center;
    }

    .stage {
        border: 1px solid black;
        height: 12px;
        width: 30px;
        cursor: pointer;
        background-color: none;
    }

    .stages:hover>.stage {
        background-color: aqua;
    }

    .stage:hover~.stage {
        background-color: white;
    }

    .active {
        background-color: blue;
    }
</style>
@endsection
@section('content')
<h1 class="text-center text-3xl font-bold my-3">Chi tiết đơn hàng</h1>
<div class="flex gap-10 items-end">
    <h2 class="text-2xl font-semibold">Đơn hàng #12</h2>
    <a href="/admin/orders" class="text-gray-500">Quay về danh sách đơn hàng</a>
</div>

<p>Đặt lúc - {{ $order_detail[0]->created_at }}</p>
<div class="grid grid-cols-2">
    <div>
        <h3 class="text-xl font-semibold mt-4 mb-2">Thông tin khách hàng</h3>
        <ul class="list-disc list-inside">
            <li>Tên: {{ $order_detail[0]->order->name }}</li>
            <li>Email: {{ $order_detail[0]->order->email }}</li>
            <li>SĐT: {{ $order_detail[0]->order->phone }}</li>
            <li>Địa chỉ: {{ $order_detail[0]->order->address }}</li>
        </ul>
    </div>
    <div>
        <h3 class="text-xl font-semibold mt-4 mb-2">Thông tin đơn hàng</h3>
        <ul class="list-disc list-inside">
            <li>Phương thức thanh toán: {{ $order_detail[0]->order->pay_method }}</li>
            <li>Phí vận chuyển: Freeship</li>
            @php
            $sum = 0;
            for($i = 0; $i < count($order_detail); $i++){ $sum +=$order_detail[$i]->total;
                if($i == count($order_detail) - 1)
                echo '<li>'.'Tổng cộng: '.number_format($sum).'đ'.'</li>';
                }
                @endphp
                <li>Trạng thái: {{ $order_detail[0]->order->status }}</li>
        </ul>
    </div>
</div>

<h3 class="text-xl font-semibold mt-4 mb-2">Chi tiết đơn hàng</h3>
<table class="w-full">
    <tr>
        <th>Sản phẩm</th>
        <th class="hidden md:block">Giá</th>
        <th>Số lượng</th>
        <th>Số tiền</th>
    </tr>
    @foreach($order_detail as $detail)
    <tr>
        <td>
            <div class="flex items-center gap-3">
                <a href="/{{ $detail->product->room->link }}/{{ $detail->product->product_category->id }}/{{ $detail->product->id }}" target="_blank" class="">
                    <!-- link tới trang sản phẩm -->
                    <img src="/front/images/image_products/{{ $detail->product->product_images[0]->path }}" alt="" height="200" width="200">
                </a>
                <div>
                    <a href="" target="_blank" class="font-semibold text-lg">{{ $detail->product->name }}</a>
                    <!-- link tới trang sản phẩm -->
                    <div class="text-gray-700">{{ $detail->product->product_category->name }}</div>
                </div>

            </div>

        </td>
        <td>{{ number_format($detail->amount) }}đ</td>
        <td>
            <div class="quantity pro-qty">
                {{ $detail->qty }}
            </div>
        </td>
        <td>{{ number_format($detail->total) }}đ</td>
    </tr>
    @endforeach
</table>
@endsection
