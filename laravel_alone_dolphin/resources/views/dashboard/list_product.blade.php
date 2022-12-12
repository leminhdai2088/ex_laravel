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

        [data-c-tooltip]:after {
            z-index: 1000;
            padding: 8px;
            width: 160px;
            background-color: #000;
            background-color: rgba(51, 51, 51, 0.9);
            color: #fff;
            content: attr(data-c-tooltip);
            font-size: 14px;
            line-height: 1.2;
        }

        [data-c-tooltip]:before {
            z-index: 1001;
            border: 6px solid transparent;
            background: transparent;
            content: "";
            margin-left: -6px;
            margin-bottom: -12px;
            border-top-color: rgba(51, 51, 51, 0.9)
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
                        <a href="/admin/edit/{{ $product->id }}" data-c-tooltip="Chỉnh sửa"><i class="fi fi-rr-edit"></i></a>
                        
                        <form action="/admin/delete_product/{{ $product->id }}" method="POST">
                            @method('DELETE')
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <button type="submit"  onclick="return confirm('Xác nhận xóa sản phẩm?')" data-c-tooltip="Xóa"><i class="fi fi-rr-trash"></i></button>
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
