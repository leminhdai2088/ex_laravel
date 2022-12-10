<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="/front/css/main.css" />
    <link href="/front/css/output.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/front/images/icon/themify-icons-font/themify-icons/themify-icons.css">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel="stylesheet" href="/front/css/header.css">
    @vite('resources/css/app.css')
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
</head>

<body class="">

    <?php
        class Order{
            public $id;
            public $name;
            public $phone;
            public $created_at;
            public $total;
            public $stage;
        }
        $order1 = new Order();
        $order1->id = "12";
        $order1->name = "Dong PHuong";
        $order1->phone = "0962306647";
        $order1->created_at = "12:23:50 10/12/2022";
        $order1->total = "590,000";
        $order1->stage = "Đã giao hàng";

        $order2 = new Order();
        $order2->id = "13";
        $order2->name = "Phuong Dong";
        $order2->phone = "0934933822";
        $order2->created_at = "03:20:10 8/11/2022";
        $order2->total = "230,000";
        $order2->stage = "Đã hoàn tất";

        $orders = array($order1, $order2);
        // phía trên là dữ liệu giả để hiện lên

        $stages = array("Chưa xử lý", "Đã gửi hàng đi", "Đã giao hàng", "Đã thanh toán", "Đã hoàn tất");
        // đây là list các stage
    ?>


    <div class="w-full md:w-[80%] mx-auto mt-10 md:mt-16">
        <h1 class="text-center text-3xl font-bold my-3">Danh sách đơn hàng</h1>
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
                <select id="stages"
                    class="px-4 py-3 leading-none rounded-lg shadow-md focus:outline-none focus:shadow-outline text-gray-600 font-medium">
                    <option value="All">Tất cả</option>
                    @for ($i = 0; $i <count($stages); $i++) <option value="{{ $stages[$i] }}">{{ $stages[$i] }}</option>
                        @endfor
                </select>
            </div>
        </div>



        <table class="w-full">
            <tr>
                <th>Mã đơn hàng</th>
                <th class="hidden md:block">Tên khách hàng</th>
                <th>Số điện thoại</th>
                <th>Thời gian đặt hàng</th>
                <th>Tổng tiền</th>
                <th class="w-1/4">Trạng thái</th>
            </tr>
            @foreach($orders as $order)
            <tr id="{{$order->id}}">
                <td>
                    <a href="">#{{$order->id}}</a>
                    <!-- tới trang chi tiết đơn hàng -->
                </td>
                <td>{{$order->name}}</td>
                <td>
                    {{$order->phone}}
                </td>
                <td>{{$order->created_at}}</td>
                <td>
                    {{$order->total}}
                </td>
                <td>
                    <?php
                        $stage_name= "Đã giao hàng";
                        for ($x = 0; $x < count($stages); $x++) {
                            if ($stages[$x]===$order->stage)
                                $stage_index=$x+1;
                          }
                    ?>
                    <div class="flex justify-center stages">
                        @for ($i = 0; $i <count($stages); $i++) <div
                            onclick="changeStage(`{{$order->id}}`,`{{$stages[$i]}}`)" @class([ 'stage' , 'bg-blue-300'=>
                            ($stage_index>=$i+1)])>
                    </div>
                    @endfor
    </div>
    <p class="text-xs">{{$order->stage}}</p>

    </td>
    </tr>
    @endforeach

    </table>

    <!-- <select>
        @for ($i = 0; $i <count($stages); $i++) <option value="{{ $stages[$i] }}">{{ $stages[$i] }}</option>
            @endfor
    </select> -->

    </div>

    <script>
        function handleExpand(event) {
            const collapsible = event.currentTarget;
            const parent = collapsible.parentElement;
            parent.classList.toggle("expanded")
        }

        function handleExpandChild(event) {
            const collapsible = event.currentTarget;
            const parent = collapsible.parentElement.parentElement;
            parent.classList.toggle("expanded")
        }

        function toggleSidebar() {
            const sidebar = document.getElementById("sidebar")
            le.log(sidebar)
            sidebar.classList.toggle("hidden")
        }

        function changeStage(orderId, stageName) {
            // đổi stage của đơn hàng có id = orderId thành stageName
            console.log(orderId)
            console.log(stageName)
        }
    </script>
</body>