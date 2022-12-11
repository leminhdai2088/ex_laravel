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
        #background-pattern {
            height: 10vh;
            width: 100%;
            object-fit: cover;
            opacity: 0.3;
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
            padding: 4px;
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
        }
    </style>
</head>

<body class="">

    <div class="w-full md:w-[80%] mx-auto mt-10 md:mt-16">
        <div class="">
            <img src="/front/images/background-pattern.jpg" alt="pattern" id="background-pattern">
        </div>

        <h1 class="text-2xl md:text-4xl text-center font-semibold mb-3 md:mb-10 mt-2">Chi tiết đơn hàng</h1>
        <div class="md:grid md:grid-cols-4 my-5 md:border-t md:pt-5">
            <div class="md:border-r px-5">
                <h2 class="text-lg md:text-2xl font-semibold mb-3 md:mb-6">Tài khoản của bạn</h2>
                <div><b>Username: </b>Dong Phuong</div>
                <p><b>Email: </b>dongphuong@gmail.com</p>
                <form action="/log_out" method="POST">
                    @csrf
                    {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"> --}}
                    <button type="submit" class="px-4 py-1 rounded-md border my-3">Đăng xuất</button>
                </form>


            </div>
            <div class="col-span-3 mt-5 md:mt-0 px-5">

                <h2 class="text-2xl font-semibold">Đơn hàng #12</h2>
                <p>Đặt lúc - 12:23:20 10/12/2022</p>
                <a href="/profile" class="text-gray-500">Quay về danh sách đơn hàng</a>
                <div class="md:grid md:grid-cols-2">
                    <div>
                        <h3 class="text-xl font-semibold mt-4 mb-2">Thông tin cá nhân</h3>
                        <ul class="list-disc list-inside">
                            <li>Tên: Dong PHuong</li>
                            <li>Email: dongphuong@gmail.com</li>
                            <li>SĐT: 0962305647</li>
                            <li>Địa chỉ nhận hàng: ktx khu A, Thủ Đức, HCM</li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mt-4 mb-2">Thông tin đơn hàng</h3>
                        <ul class="list-disc list-inside">
                            <li>Phương thức giao hàng: COD</li>
                            <li>Phương thức thanh toán: COD</li>
                            <li>Mã giảm giá: fejij3</li>
                            <li>Phí vận chuyển: Freeship</li>
                            <li>Tổng cộng: 8,400,000</li>
                            <li>Trạng thái: Đã hoàn tất</li>
                        </ul>
                    </div>
                </div>
                <h3 class="text-xl font-semibold mt-4 mb-2">Danh sách sản phẩm</h3>
                <table class="w-full overflow-x-auto">
                    <tr>
                        <th>Sản phẩm</th>
                        <th>Giá</th>
                        <th>Số lượng</th>
                        <th>Số tiền</th>
                    </tr>
                    <tr>
                        <td>
                            <div class="flex items-center gap-3">

                                <a href="" target="_blank" class="">
                                    <!-- link tới trang sản phẩm -->

                                    <img src="/front/images/product/ghe6.webp" alt="" height="150" width="150">
                                </a>
                                <div>
                                    <a href="" target="_blank" class="font-semibold text-lg">JASMIN</a>
                                    <!-- link tới trang sản phẩm -->
                                    <div class="text-gray-700">SOFA</div>
                                </div>

                            </div>

                        </td>
                        <td>8,400,000</td>
                        <td>
                            <div class="quantity pro-qty">
                                1
                            </div>
                        </td>
                        <td>8,400,000</td>
                    </tr>
                </table>
            </div>


        </div>

    </div>

    <script>
    </script>
</body>
