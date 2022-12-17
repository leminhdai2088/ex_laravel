@extends('components.layout')
@section('head')
<style>
    #background-pattern {
        height: 5vh;
        width: 100%;
        object-fit: cover;
        opacity: 0.3;
    }

    .product-img {
        height: 80px;
        width: 80px;
        object-fit: cover;
    }

    /* table,
        tr,
        td,
        th {
            border: solid 1px black;
        } */

    th {
        background-color: rgb(250 204 21);
    }

    td {
        padding-top: 8px;
    }

    td:not(td:first-of-type) {
        padding-left: 4px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    table td {
        text-align: center;
    }

    @media (min-width: 740px) {
        #background-pattern {
            height: 100px;
            width: 100%;
            object-fit: cover;
            opacity: 0.3;
        }

        .product-img {
            height: 150px;
            width: 150px;
            object-fit: cover;
        }
    }
</style>
@endsection
@section('content')
<div class="">
    <img src="/front/images/background-pattern.jpg" alt="pattern" id="background-pattern">
</div>

<h1 class="text-2xl md:text-4xl text-center font-semibold mb-3 md:mb-10 mt-2">Chi tiết đơn hàng</h1>
<div class="laptop:grid laptop:grid-cols-4 my-5 laptop:border-t laptop:pt-5">
    <div class="md:border-r px-5">
        <h2 class="text-lg md:text-2xl font-semibold mb-3 md:mb-6">Tài khoản của bạn</h2>
        <div><b>Username: </b>{{ Auth()->user()->name }}</div>
        <p><b>Email: </b>{{ Auth()->user()->email }}</p>
        <form action="/log_out" method="POST">
            @csrf
            {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"> --}}
            <button type="submit" class="px-4 py-1 rounded-md border my-3">Đăng xuất</button>
        </form>


    </div>
    <div class="col-span-3 mt-5 md:mt-0 px-5">

        <h2 class="text-2xl font-semibold">Đơn hàng #{{ $order->id }}</h2>
        <p>Đặt lúc : {{ $order->created_at }}</p>
        <a href="/profile" class="text-gray-500">Quay về danh sách đơn hàng</a>
        <div class="md:grid md:grid-cols-2">
            <div>
                <h3 class="text-xl font-semibold mt-4 mb-2">Thông tin cá nhân</h3>
                <ul class="list-disc list-inside">
                    <li>Tên: {{ Auth()->user()->name }}</li>
                    <li>Email: {{ Auth()->user()->email }}</li>
                    <li>SĐT: {{ $order->phone }}</li>
                    <li>Địa chỉ nhận hàng: {{ $order->address }}</li>
                </ul>
            </div>
            <div>
                <h3 class="text-xl font-semibold mt-4 mb-2">Thông tin đơn hàng</h3>
                <ul class="list-disc list-inside">
                    <li>Phương thức thanh toán: {{ $order->pay_method }}</li>
                    <li>Phí vận chuyển: Freeship</li>
                    <?php
                        $sum = 0;
                        for($i = 0; $i < count($details); $i++){
                            $sum += $details[$i]->total;
                            if($i == count($details) - 1)
                                echo '<li>Tổng cộng: '.number_format($sum).'đ</li>';
                        }

                    ?>
                    <li>Trạng thái: {{ $order->status }}</li>
                </ul>
            </div>
        </div>
        <h3 class="text-xl font-semibold mt-4 mb-2">Danh sách sản phẩm</h3>
        <table class="w-full overflow-x-auto text-xs md:text-base">
            <tr>
                <th>Sản phẩm</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Số tiền</th>
            </tr>
            @foreach($details as $detail)
            <tr>
                <td>
                    <div class="flex  items-center gap-1 md:gap-3">

                        <a href="/{{ $detail->product->room->link }}/{{ $detail->product->product_category->id }}/{{ $detail->product->id }}"
                            target="_blank" class="">
                            <!-- link tới trang sản phẩm -->

                            <img class="product-img"
                                src="/front/images/image_products/{{ $detail->product->product_images[0]->path }}"
                                alt="">
                        </a>
                        <div>
                            <a href="/{{ $detail->product->room->link }}/{{ $detail->product->product_category->id }}/{{ $detail->product->id }}"
                                target="_blank" class="font-semibold md:text-lg">{{ $detail->product->name }}</a>
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
    </div>


</div>
@endsection
