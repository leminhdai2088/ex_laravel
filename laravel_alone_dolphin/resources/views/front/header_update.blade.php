<!DOCTYPE html>
<html lang="en">
<!-- CHƯA SỬA -->
<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="/front/css/main.css" />
    <link href="/front/css/output.css" rel="stylesheet">
    <link href="/front/css/page_rooms.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/front/images/icon/themify-icons-font/themify-icons/themify-icons.css">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel="stylesheet" href="/front/css/header.css">
</head>

<body class="w-[1200px] m-auto">
    <!-- header -->
    <div class="header fixed left-0 right-0 top-0 z-20 h-16">
        <div class="w-[1200px] m-auto flex items-center justify-between px-3">
            <i class="fi fi-rr-menu-burger md:hidden" onclick="toggleSidebar()"></i>
            <a class="logo" href="#"><img height="64" width="64" src="/front/images/Alone Dolphin.png" alt="alone dolphin"></a>
            <div class="hidden md:flex items-center gap-10 cursor-pointer">
                <div class="h-fit"><a href="./home.html">Trang chủ</a> </div>
                <div class="h-fit"><a href="./page_intro.html">Giới thiệu</a></div>
                <div class="h-fit hover-product">
                    <a href="#" class="btn-product">Sản phẩm</a>
                    <div class="content-sub-menu">
                        <div class="container-sub-menu w-[1200px] m-auto">
                            <div class="sub-menu">
                                <ul>
                                    @foreach($rooms_header as $room)
                                    <li>
                                        <a href="./living_room">{{ $room->name }}</a>
                                        <ul class="details-menu details-living-menu">

                                            @foreach($categories_header as $cate)
                                                @if($cate->room_id == $room->id)
                                                    <li>
                                                        <a href="/living_room/{{ $cate->id }}">{{ $cate->name }}</a>
                                                    </li>
                                                @endif
                                            @endforeach

                                        </ul>
                                    </li>
                                    @endforeach


                                </ul>
                            </div>
                            <div class="img-sub-menu">
                                <a href="#"><img src="/front/images/img-menu/image_menu_products.webp" alt="image menu"></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="h-fit"><a href="#footer">Liên hệ</a></div>
            </div>
            <div class="right-header flex content-center gap-6">
                <div class="text-gray-700 relative my-auto min-w-[100px] md:min-w-[250px]">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-2">
                        <button class="p-1 text-gray-400 focus:outline-none focus:shadow-outline">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" class="w-4 h-4 text-[#6B7280]">
                                <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </button>
                    </span>
                    <input type="search" class="
                    w-full
                    text-sm
                    font-normal
                    border
                    pl-8
                    pr-2
                    h-8
                    rounded-md
                    bg-white
                    text-gray-500
                    focus:text-gray-900 focus:outline-none
                  " placeholder="Tìm kiếm sản phẩm..." />
                </div>
                <!-- <a href="/profile" class="h-8 w-8">
                    <img src="/icon/user-solid.svg" alt="" class="h-8 w-8">
                </a>
                <a href="/cart" class="h-8 w-8">
                    <img src="/icon/cart-shopping-solid.svg" alt="" class="h-8 w-8">
                </a> -->
                <a href="/profile" class="flex items-center"><i class="fi fi-rr-user"></i></a>
                <a href="./sign-in.html" class="flex items-center">
                    <i class="fi fi-rr-shopping-cart"></i>
                </a>
            </div>
        </div>
    </div>

    <div id="sidebar" class="hidden fixed top-0 right-0 left-0 h-full w-full z-30 bg-white overflow-auto">
        <div class="p-5 border-b-2 border-b-yellow-500 relative">
            <div class="text-center text-2xl">Menu</div>
            <div class="absolute top-7" onclick="toggleSidebar()">
                <i class="fi fi-rr-cross"></i>
            </div>
        </div>
        <div class="pl-7 pb-10">
            <div class="py-2 border-b-2 border-b-yellow-500 text-lg"><a href="./home.html">Trang chủ</a></div>
            <div class="py-2 border-b-2 border-b-yellow-500 text-lg"><a href="./page_intro.html">Giới thiệu</a></div>
            <div class="py-2 border-b-2 border-b-yellow-500 text-lg expanded">
                <div class="flex justify-between pr-3 content-center" onclick="handleExpand(event)">
                    <a>Sản phẩm</a>
                    <i class="fi fi-rr-angle-small-down"></i>
                </div>
                <div class="px-5 collapse-section">

                    <div class="py-1 border-b border-b-yellow-500 text-lg">
                        <div class="flex justify-between pr-6 content-center" >
                            <a href="./living_room.html">PHÒNG KHÁCH - living room</a>
                            <i class="fi fi-rr-angle-small-down" onclick="handleExpandChild(event)"></i>
                        </div>
                        <div class="pl-5 collapse-section">

                            <div class="flex justify-start gap-4 content-center">
                                <a href="./list_product.html">SOFA</a>
                            </div>
                            <div class="flex justify-start gap-4 content-center">
                                <a href="./list_product.html">GHẾ ĐÔN, GHẾ BĂNG</a>
                            </div>
                            <div class="flex justify-start gap-4 content-center">
                                <a href="./list_product.html">KỆ, TỦ TV</a>
                            </div>
                            <div class="flex justify-start gap-4 content-center">
                                <a href="./list_product.html">TRANH ẢNH</a>
                            </div>
                            <div class="flex justify-start gap-4 content-center">
                                <a href="./list_product.html">GỐI TRANG TRÍ</a>
                            </div>
                            <div class="flex justify-start gap-4 content-center">
                                <a href="./list_product.html">ĐÈN SÀN</a>
                            </div>
                            <div class="flex justify-start gap-4 content-center">
                                <a href="./list_product.html">KỆ, TỦ GIÀY</a>
                            </div>
                        </div>
                    </div>

                    <div class="py-1 border-b border-b-yellow-500 text-lg">
                        <div class="flex justify-between pr-6 content-center">
                            <a href="./bed_room.html">PHÒNG NGỦ - bedroom</a>
                            <i class="fi fi-rr-angle-small-down" onclick="handleExpandChild(event)"></i>
                        </div>
                        <div class="pl-5 collapse-section">

                            <div class="flex justify-start gap-4 content-center">
                                <a href="./list_product.html">GIƯỜNG</a>
                            </div>
                            <div class="flex justify-start gap-4 content-center">
                                <a href="./list_product.html">BỘ KỆ/TỦ QUẦN ÁO</a>
                            </div>
                            <div class="flex justify-start gap-4 content-center">
                                <a href="./list_product.html">ĐÈN SÀN</a>
                            </div>
                            <div class="flex justify-start gap-4 content-center">
                                <a href="./list_product.html">BÀN TRANG ĐIỂM</a>
                            </div>
                            <div class="flex justify-start gap-4 content-center">
                                <a href="./list_product.html">ĐÈN BÀN</a>
                            </div>
                            <div class="flex justify-start gap-4 content-center">
                                <a href="./list_product.html">ĐÈN TRANG TRÍ</a>
                            </div>
                            <div class="flex justify-start gap-4 content-center">
                                <a href="./list_product.html">TỦ LƯU TRỮ</a>
                            </div>
                            <div class="flex justify-start gap-4 content-center">
                                <a href="./list_product.html">KỆ/TỦ GIÀY</a>
                            </div>
                            <div class="flex justify-start gap-4 content-center">
                                <a href="./list_product.html">GIÁ/KỆ TREO TRANG TRÍ</a>
                            </div>
                            <div class="flex justify-start gap-4 content-center">
                                <a href="./list_product.html">GƯƠNG</a>
                            </div>
                        </div>
                    </div>

                    <div class="py-1 border-b border-b-yellow-500 text-lg">
                        <div class="flex justify-between pr-6 content-center" >
                            <a href="./kitchen_room.html">BẾP & PHÒNG ĂN - kitchen room</a>
                            <i class="fi fi-rr-angle-small-down" onclick="handleExpandChild(event)"></i>
                        </div>
                        <div class="pl-5 collapse-section">

                            <div class="flex justify-start gap-4 content-center">
                                <a href="./list_product.html">BỘ BÀN ĂN</a>
                            </div>
                            <div class="flex justify-start gap-4 content-center">
                                <a href="./list_product.html">GHẾ ĂN</a>
                            </div>
                            <div class="flex justify-start gap-4 content-center">
                                <a href="./list_product.html">THẢM BẾP</a>
                            </div>
                            <div class="flex justify-start gap-4 content-center">
                                <a href="./list_product.html">KỆ BẾP</a>
                            </div>
                            <div class="flex justify-start gap-4 content-center">
                                <a href="./list_product.html">KHĂN BẾP</a>
                            </div>
                        </div>
                    </div>

                    <div class="py-1 border-b border-b-yellow-500 text-lg">
                        <div class="flex justify-between pr-6 content-center" >
                            <a href="./home_office.html">PHÒNG LÀM VIỆC - home office</a>
                            <i class="fi fi-rr-angle-small-down" onclick="handleExpandChild(event)"></i>
                        </div>
                        <div class="pl-5 collapse-section">

                            <div class="flex justify-start gap-4 content-center">
                                <a href="./list_product.html">BÀN</a>
                            </div>
                            <div class="flex justify-start gap-4 content-center">
                                <a href="./list_product.html">GHẾ</a>
                            </div>
                            <div class="flex justify-start gap-4 content-center">
                                <a href="./list_product.html">ĐÈN BÀN</a>
                            </div>
                            <div class="flex justify-start gap-4 content-center">
                                <a href="./list_product.html">ĐỒNG HỒ</a>
                            </div>
                            <div class="flex justify-start gap-4 content-center">
                                <a href="./list_product.html">VĂN PHÒNG PHẨM</a>
                            </div>
                            <div class="flex justify-start gap-4 content-center">
                                <a href="./list_product.html">BẢNG TRANG TRÍ</a>
                            </div>
                            <div class="flex justify-start gap-4 content-center">
                                <a href="./list_product.html">KỆ, TỦ LƯU TRỮ</a>
                            </div>
                        </div>
                    </div>

                    <div class="py-1 border-b border-b-yellow-500 text-lg">
                        <div class="flex justify-between pr-6 content-center">
                            <a href="./bath_room.html">PHÒNG TẮM - bathroom</a>
                            <i class="fi fi-rr-angle-small-down" onclick="handleExpandChild(event)"></i>
                        </div>
                        <div class="pl-5 collapse-section">
                            <div class="flex justify-start gap-4 content-center">
                                <a href="./list_product.html">RÈM</a>
                            </div>
                            <div class="flex justify-start gap-4 content-center">
                                <a href="./list_product.html">KHĂN TẮM</a>
                            </div>
                            <div class="flex justify-start gap-4 content-center">
                                <a href="./list_product.html">GƯƠNG</a>
                            </div>
                            <div class="flex justify-start gap-4 content-center">
                                <a href="./list_product.html">THẢM CHÂN</a>
                            </div>
                            <div class="flex justify-start gap-4 content-center">
                                <a href="./list_product.html">GIÁ, KỆ, TỦ TREO</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-2 border-b-2 border-b-yellow-500 text-lg"><a href="#footer">Liên hệ</a></div>
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
            console.log(sidebar)
            sidebar.classList.toggle("hidden")
        }
    </script>
</body>