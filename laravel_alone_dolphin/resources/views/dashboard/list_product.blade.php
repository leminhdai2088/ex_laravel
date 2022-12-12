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
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css">
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

        /* Add this attribute to the element that needs a tooltip */

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

        /* Show tooltip content on hover */

        [data-tooltip]:hover:before,
        [data-tooltip]:hover:after {
            visibility: visible;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
            filter: progid: DXImageTransform.Microsoft.Alpha(Opacity=100);
            opacity: 1;
        }
    </style>
</head>

<body class="">

    <?php

    ?>


    <div class="w-full md:w-[80%] mx-auto mt-10 md:mt-16">
        <h1 class="text-center text-3xl font-bold my-3">Danh sách đơn hàng</h1>



        <table class="w-full">
            <tr>
                <th>Mã sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Phân loại</th>
                <th>Phòng</th>
                <th>Khối lượng (kg)</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Hành động</th>
            </tr>
            @foreach($products as $product)
            <tr id="{{ $product->id }}">
                <td>
                    #{{ $product->id }}
                </td>
                <td>
                    {{ $product->name }}
                </td>
                <td>
                    {{ $product->product_category->name }}
                </td>
                <td>
                    {{ $product->room->name }}
                </td>
                <td>
                    {{ $product->weight }}
                </td>
                <td>
                    {{ number_format($product->price) }}
                </td>
                <td>
                    {{ $product->qty }}
                </td>

                <td>
                    <div class="flex justify-center gap-5">
                        <a href="/admin/edit/{{ $product->id }}" data-tooltip="Chỉnh sửa"><i
                                class="fi fi-rr-edit"></i></a>

                        <form action="/admin/delete_product/{{ $product->id }}" method="POST">
                            @method('DELETE')
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <button type="submit" onclick="return confirm('Xác nhận xóa sản phẩm?')"
                                data-tooltip="Xóa"><i class="fi fi-rr-trash"></i></button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </table>
        <div class="shop-content-bottom">
            <div class="pages">
                {{-- {{$products->links()}} --}}
            </div>
        </div>

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
