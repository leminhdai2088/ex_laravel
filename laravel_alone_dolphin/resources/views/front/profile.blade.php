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

        #empty {
            display: none;
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
                height: 150px;
                width: 1200px;
                object-fit: cover;
                opacity: 0.3;
            }
        }
    </style>
</head>


<body class="w-full md:w-[1200px] m-auto text-gray-700">


    <div class="">
        <img src="/front/images/background-pattern.jpg" alt="pattern" id="background-pattern">
    </div>

    <h1 class="text-2xl md:text-4xl text-center font-semibold mb-10 mt-2">Tài khoản - Lịch sử mua hàng</h1>
    @if(Session::has('thanhcong'))
    <script>
        alert("Bạn đã đặt hàng thành công!!!");
    </script>
    @endif
    <div class="md:grid grid-cols-4 my-5 border-t pt-5">
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
            <a href="/edit_user" class="px-4 py-1 bg-blue-400 rounded-md border my-3">Chỉnh sửa thông tin cá nhân</a>

        </div>
        <div class="col-span-3 mt-5 md:mt-0">

            <div id="empty" class="w-full m-auto md:flex flex-col md:text-center items-center gap-6 mb-20">
                <h2 class="text-lg md:text-2xl md:text-center font-semibold mb-3 md:mb-0">Đơn hàng</h2>
                <p>Bạn chưa đặt bất kỳ đơn hàng nào cả</p>
                <img class="hidden md:block" src="/front/images/empty.png" alt="">
                <p>Bắt đầu mua sắm thôi nào!</p>
                <a class="bg-yellow-400 px-1 text-black text-lg flex gap-3 w-fit" href="/cart"><span
                        class="underline">Xem
                        thêm nhiều
                        sản phẩm mới</span>
                    <i class="fi fi-rr-arrow-small-right"></i></a>

            </div>
            @if($count_order == 0)
            <h2>Hiện tại bạn chưa có đơn hàng nào!!!</h2>
            @else
            <div id="with-orders" class="px-5">
                <h2 class="text-lg md:text-2xl font-semibold mb-3 md:mb-5">Đơn hàng</h2>
                <table>
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
                            echo '<td>'.$sum.'</td>';
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
    @endsection
