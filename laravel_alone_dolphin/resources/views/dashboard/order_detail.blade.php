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

    <div class="w-full md:w-[80%] mx-auto mt-10 md:mt-16">
        <h1 class="text-center text-3xl font-bold my-3">Chi tiết đơn hàng</h1>
        <div class="flex gap-10 items-end">
            <h2 class="text-2xl font-semibold">Đơn hàng #12</h2>
            <a href="/admin/orders" class="text-gray-500">Quay về danh sách đơn hàng</a>
        </div>
        <p>Đặt lúc - 12:23:20 10/12/2022</p>
        <div class="grid grid-cols-2">
            <div>
                <h3 class="text-xl font-semibold mt-4 mb-2">Thông tin khách hàng</h3>
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


        <h3 class="text-xl font-semibold mt-4 mb-2">Chi tiết đơn hàng</h3>
        <table class="w-full">
            <tr>
                <th>Sản phẩm</th>
                <th class="hidden md:block">Giá</th>
                <th>Số lượng</th>
                <th>Số tiền</th>
            </tr>
            <tr>
                <td>
                    <div class="flex items-center gap-3">

                        <a href="" target="_blank" class="">
                            <!-- link tới trang sản phẩm -->

                            <img src="/front/images/product/ghe6.webp" alt="" height="200" width="200">
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


    </script>
</body>
