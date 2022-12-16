@extends('components.layout')
@section('head')
<title>Danh sách đơn hàng</title>
<style>
    th {
        background-color: rgb(254 240 138);
    }

    td {
        text-align: center;
        padding: 10px 0;
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

    [data-tooltip] {
        position: relative;
        z-index: 2;
        cursor: pointer;
    }

    /* Hide the tooltip content by default */

    [data-tooltip]:before,
    [data-tooltip]:after {
        visibility: hidden;
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
        filter: progid: DXImageTransform.Microsoft.Alpha(Opacity=0);
        opacity: 0;
        pointer-events: none;
    }

    /* Position tooltip above the element */

    [data-tooltip]:before {
        position: absolute;
        bottom: 150%;
        left: 50%;
        margin-bottom: 5px;
        margin-left: -80px;
        padding: 7px;
        width: 160px;
        border-radius: 3px;
        border: 1px outset #C0C0C0;
        background-color: #000;
        background-color: hsla(0, 0%, 20%, 0.9);
        color: #FFFFFF;
        content: attr(data-tooltip);
        text-align: center;
        font-size: 11px;
        font-weight: bold;
        line-height: 1.2;
    }

    /* Triangle hack to make tooltip look like a speech bubble */

    [data-tooltip]:after {
        position: absolute;
        bottom: 150%;
        left: 50%;
        margin-left: -5px;
        width: 0;
        border-top: 5px solid #000;
        border-top: 5px solid hsla(0, 0%, 20%, 0.9);
        border-right: 5px solid transparent;
        border-left: 5px solid transparent;
        content: " ";
        font-size: 0;
        line-height: 0;
    }

    #filter-order {
        margin-top: 40px;
        margin-left: 15px;
        border: 1px solid yellow;
        padding: 4px 24px;
        border-radius: 12px;
        background-color: pink;
    }

    /* Show tooltip content on hover */

    [data-tooltip]:hover:before,
    [data-tooltip]:hover:after {
        visibility: visible;
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
        filter: progid: DXImageTransform.Microsoft.Alpha(Opacity=100);
        opacity: 1;
    }
</style>
@endsection
@section('content')
<?php


        $stages = array("Chưa xử lý", "Đã gửi hàng đi", "Đã giao hàng", "Đã thanh toán", "Đã hoàn tất");
        // đây là list các stage
    ?>
<h1 class="text-center text-3xl font-bold my-3">Danh sách đơn hàng</h1>
<form action="/admin/orders/filter" method="GET">
    <div class="flex gap-4 my-4">
        <div>
            <label for="startTime" class="font-bold mb-1 text-gray-700 block">Từ:</label>
            <input type="date" id="startTime" name="startTime"
                class="px-4 py-3 leading-none rounded-lg shadow-md focus:outline-none focus:shadow-outline text-gray-600 font-medium">

        </div>
        <div>
            <label for="endTime" class="font-bold mb-1 text-gray-700 block">Đến:</label>
            <input type="date" id="endTime" name="endTime"
                class="px-4 py-3 leading-none rounded-lg shadow-md focus:outline-none focus:shadow-outline text-gray-600 font-medium">

        </div>
        <div class="ml-10">
            <label for="stages" class="font-bold mb-1 text-gray-700 block">Trạng thái:</label>
            <select id="stages" name="status"
                class="px-4 py-3 leading-none rounded-lg shadow-md focus:outline-none focus:shadow-outline text-gray-600 font-medium">
                <option value="All">Tất cả</option>
                @for ($i = 0; $i <count($stages); $i++) <option value="{{ $stages[$i] }}">{{ $stages[$i] }}</option>
                    @endfor
            </select>
        </div>
        <div>
            <button id="filter-order" type="submit">Tìm kiếm</button>
        </div>
    </div>
</form>



<table class="w-full">
    <tr>
        <th>Mã đơn hàng</th>
        <th>Tên khách hàng</th>
        <th>Số điện thoại</th>
        <th>Thời gian đặt hàng</th>
        <th>Tổng tiền</th>
        <th class="w-1/4">Trạng thái</th>
    </tr>
    @foreach($orders as $order)
    <tr id="{{$order->id}}">
        <td>
            <a href="/admin/order/{{$order->id}}">#{{$order->id}}</a>
            <!-- tới trang chi tiết đơn hàng -->
        </td>
        <td>{{$order->name}}</td>
        <td>
            {{$order->phone}}
        </td>
        <td>{{$order->created_at}}</td>
        @php
        $sum = 0;
        for($i = 0; $i < count($order->order_details); $i++){
            $sum += $order->order_details[$i]->total;
            if($i == count($order->order_details) - 1)
            echo '<td>'.number_format($sum).'đ'.'</td>';
            }
            @endphp
            <td>
                <?php
                        for ($x = 0; $x < count($stages); $x++) {
                            if ($stages[$x]===$order->status)
                                $stage_index=$x+1;
                          }
                    ?>
                <form action="/admin/orders/change_status" method="POST" class="mb-0">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    @method('PATCH')
                    <div class="flex justify-center stages">

                        @for ($i = 0; $i < count($stages); $i++) <label for="status{{ $i.$order->id }}"
                            data-tooltip="{{$stages[$i]}}" @class([ 'stage' , 'bg-blue-300'=>
                            ($stage_index>=$i+1)])>
                            </label>
                            <div>
                                <input name="id" type="hidden" value="{{ $order->id }}">
                                <div style="display: none;">
                                    <input id="status{{ $i.$order->id }}" name="status" type="submit"
                                        value="{{ $stages[$i] }}">
                                </div>
                            </div>
                            @endfor

                    </div>
                </form>
                <p class="text-xs">{{$order->status}}</p>

            </td>
    </tr>
    @endforeach
</table>
@endsection
