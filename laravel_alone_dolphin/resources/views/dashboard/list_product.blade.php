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
                <th>Chất liệu</th>
                <th>Khối lượng (kg)</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Hành động</th>
            </tr>
            <tr id="">
                <td>
                    #133
                </td>
                <td>
                    JASMIN
                </td>
                <td>
                    SOFA
                </td>
                <td>
                    Phòng khách
                </td>
                <td>
                    Vải polyester, khung gỗ sồi
                </td>
                <td>
                    5
                </td>
                <td>
                    1,050,000
                </td>
                <td>
                    13
                </td>

                <td>
                    <div class="flex justify-center gap-5">
                        <button data-c-tooltip="Chỉnh sửa"><i class="fi fi-rr-edit"></i></button>
                        <button data-c-tooltip="Xóa"><i class="fi fi-rr-trash"></i></button>
                    </div>
                </td>
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
