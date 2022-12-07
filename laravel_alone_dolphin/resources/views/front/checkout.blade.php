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
    <style>
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

        table tr:not(tr:first-of-type) td {
            padding-top: 12px;
        }

        .product-img {
            height: 80px;
            width: 80px;
        }

        @media (min-width: 740px) {

            .product-img {
                height: 100px;
                width: 100px;
            }
        }
    </style>
    @vite('resources/css/app.css')
</head>

<body class="">
    <div class="w-full md:w-[80%] mx-auto mt-5 md:mt-16">
        <!-- <div class="w-full md:w-[90%] mx-auto mt-16"></div> -->

        <div class="md:w-[40%] md:float-right px-5 md:px-0 md:pl-10">
            <h1 class="md:hidden text-2xl text-center mb-5">Alone Dolphin</h1>
            <table class="w-full">
                <tr>
                    <td class="w-1/4">

                        <a href="" target="_blank" class="">
                            <!-- link tới trang sản phẩm -->
                            <img src="/front/images/product/ghe1.webp" alt="" class="product-img">
                        </a>
                    </td>
                    <td class="w-1/2 pl-3">
                        <a href="" target="_blank" class="font-semibold text-lg">Bàn sắt</a>
                        <!-- link tới trang sản phẩm -->
                        <div class="text-gray-700">Màu sắc: đen</div>
                        <div class="text-gray-700">Số lượng: 1</div>
                    </td>
                    <td>130,000₫</td>
                </tr>

                <tr>
                    <td class="w-1/4">

                        <a href="" target="_blank" class="">
                            <!-- link tới trang sản phẩm -->
                            <img src="/front/images/product/ghe1.webp" alt="" class="product-img">
                        </a>
                    </td>
                    <td class="w-1/2 pl-3">
                        <a href="" target="_blank" class="font-semibold text-lg">Bàn sắt</a>
                        <!-- link tới trang sản phẩm -->
                        <div class="text-gray-700">Màu sắc: đen</div>
                        <div class="text-gray-700">Số lượng: 1</div>
                    </td>
                    <td>130,000₫</td>
                </tr>
            </table>
            <form class="mt-5">
                <label for="code">Mã giảm giá</label></span>
                <input class="form-control" type="text" id="code" name="code">
            </form>

            <div class="mt-5 border-y py-2">
                <div class="flex justify-between"><span>Tạm tính</span><span>260,000₫</span></div>
                <div class="flex justify-between"><span>Phí vận chuyển</span><span>20,000₫</span></div>
            </div>
            <div class="flex justify-between"><span>Tổng cộng</span><span class="font-semibold text-xl">280,000₫</span>
            </div>

        </div>
        <div
            class="px-5 py-8 border md:border-0 mt-5 md:py-0 md:mt-0 md:w-[60%] md:float-left md:px-0 md:pr-20 md:border-r">
            <h1 class="hidden md:block text-3xl text-center">Alone Dolphin</h1>
            <h2 class="text-xl">Thông tin giao hàng</h2>
            <form action="" method="">
                <div class="form-group">
                    <label for="fullname">Họ và tên</label><span><sup class="text-red-500">*</sup></span><br>
                    <input class="form-control" type="text" id="fullname" name="fullname">
                    <span class="form-message"></span>
                </div>
                <div class="mt-4 form-group">
                    <label for="phoneNumber">Số điện thoại</label><span><sup class="text-red-500">*</sup></span><br>
                    <input class="form-control" type="text" id="phoneNumber" name="phoneNumber">
                    <span class="form-message"></span>
                </div>
                <div class="mt-4 form-group">
                    <label for="email">Email</label><span><sup class="text-red-500">*</sup></span><br>
                    <input class="form-control" type="text" id="email" name="email">
                    <span class="form-message"></span>
                </div>
                <div class="mt-4 form-group">
                    <label for="address">Địa chỉ</label><span><sup class="text-red-500">*</sup></span><br>
                    <input class="form-control" type="text" id="address" name="address">
                    <span class="form-message"></span>
                </div>

                <div class="flex justify-between mt-8">
                    <a href="" class="text-blue-500">
                        Quay lại giỏ hàng
                    </a>
                    <button class="px-5 py-2 bg-[#ffde59] text-black text-lg md:text-xl cursor-pointer">
                        Đặt hàng
                    </button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>

    </script>
</body>
