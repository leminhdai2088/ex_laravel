<!DOCTYPE html>
<html lang="en">
    <!-- DONE -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/front/css/main.css" />
    <link href="/front/css/output.css" rel="stylesheet">
    <link href="/front/css/page_rooms.css" rel="stylesheet">
    <link rel="stylesheet" href="/front/css/page_home/page_home.css">
    <link rel="stylesheet" href="/front/css/page_home/vendor/bootstrap.css">
    
    <script src="/front/css/page_home/vendor/bootstrap.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link
        rel="stylesheet"
        type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
      />
      <!-- nivo slider -->
      <link rel="stylesheet" href="/front/css/page_home/nivo-slider/themes/default/default.css" type="text/css" media="screen" />
      <link rel="stylesheet" href="/front/css/page_home/nivo-slider/nivo-slider.css" type="text/css" media="screen" />
      <!-- header -->
      <link rel="stylesheet" href="/front/images/icon/themify-icons-font/themify-icons/themify-icons.css">
      <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
      <link rel="stylesheet" href="/front/css/header.css">
      <link rel="stylesheet" href="/front/css/footer.css">
  </head>
<body>
  <!-- header -->
  <div class="header fixed left-0 right-0 top-0 z-20 h-16">
        <div class="w-[1200px] m-auto flex items-center justify-between px-3">
            <i class="fi fi-rr-menu-burger md:hidden" onclick="toggleSidebar()"></i>
            <a class="logo" href="#"><img height="64" width="64" src="/front/images/Alone Dolphin.png" alt="alone dolphin"></a>
            <div class="hidden md:flex items-center gap-10 cursor-pointer">
                <div class="h-fit"><a href="/home">Trang chủ</a> </div>
                <div class="h-fit"><a href="/page_intro">Giới thiệu</a></div>
                <div class="h-fit hover-product">
                    <a href="#" class="btn-product">Sản phẩm</a>
                    <div class="content-sub-menu">
                        <div class="container-sub-menu w-[1200px] m-auto">
                            <div class="sub-menu">
                                <ul>
                                    <li>
                                        <a href="/living_room">PHÒNG KHÁCH - living room</a>
                                        <ul class="details-menu details-living-menu">


                                            <li>
                                                <a href="/list_product">SOFA</a>
                                            </li>

                                            <li>
                                                <a href="/list_product">GHẾ ĐÔN, GHẾ BĂNG</a>
                                            </li>

                                            <li>
                                                <a href="/list_product">KỆ, TỦ TV</a>
                                            </li>

                                            <li>
                                                <a href="/list_product">ĐỒNG HỒ</a>
                                            </li>

                                            <li>
                                                <a href="/list_product">TRANH ẢNH</a>
                                            </li>

                                            <li>
                                                <a href="/list_product">GỐI TRANG TRÍ</a>
                                            </li>

                                            <li>
                                                <a href="/list_product">ĐÈN SÀN</a>
                                            </li>

                                            <li>
                                                <a href="/list_product">KỆ, TỦ GIÀY</a>
                                            </li>

                                        </ul>
                                    </li>

                                    <li>
                                        <a href="/bed_room"> PHÒNG NGỦ - bedroom</a>
                                        <ul class="details-menu details-bedroom-menu">


                                            <li>
                                                <a href="/list_product">GIƯỜNG</a>
                                            </li>

                                            <li>
                                                <a href="/list_product">BỘ KỆ/TỦ QUẦN ÁO</a>
                                            </li>

                                            <li>
                                                <a href="/list_product">ĐÈN SÀN</a>
                                            </li>

                                            <li>
                                                <a href="/list_product">BÀN TRANG ĐIỂM</a>
                                            </li>

                                            <li>
                                                <a href="/list_product">ĐÈN BÀN</a>
                                            </li>

                                            <li>
                                                <a href="/list_product">ĐÈN TRANG TRÍ</a>
                                            </li>

                                            <li>
                                                <a href="/list_product">TỦ LƯU TRỮ</a>
                                            </li>

                                            <li>
                                                <a href="/list_product">KỆ/TỦ GIÀY</a>
                                            </li>

                                            <li>
                                                <a href="/list_product">GIÁ/KỆ TREO TRANG TRÍ</a>
                                            </li>

                                            <li>
                                                <a href="/list_product">GƯƠNG</a>
                                            </li>

                                        </ul>
                                    </li>

                                    <li>
                                        <a href="/kitchen_room"> BẾP & PHÒNG ĂN - kitchen room</a>
                                        <ul class="details-menu details-kitchen-menu">


                                            <li>
                                                <a href="/list_product">BỘ BÀN ĂN</a>
                                            </li>

                                            <li>
                                                <a href="/list_product">BÀN ĂN</a>
                                            </li>

                                            <li>
                                                <a href="/list_product">GHẾ ĂN</a>
                                            </li>

                                            <li>
                                                <a href="/list_product">THẢM BẾP</a>
                                            </li>

                                            <li>
                                                <a href="/list_product">KỆ BẾP</a>
                                            </li>

                                            <li>
                                                <a href="/list_product">KHĂN BẾP</a>
                                            </li>

                                        </ul>
                                    </li>

                                    <li>
                                        <a href="/home_office"> PHÒNG LÀM VIỆC - home office</a>
                                        <ul class="details-menu details-office-menu">


                                            <li>
                                                <a href="/list_product">BÀN</a>
                                            </li>

                                            <li>
                                                <a href="/list_product">GHẾ</a>
                                            </li>

                                            <li>
                                                <a href="/list_product">ĐÈN BÀN</a>
                                            </li>

                                            <li>
                                                <a href="/list_product">ĐỒNG HỒ</a>
                                            </li>

                                            <li>
                                                <a href="/list_product">VĂN PHÒNG PHẨM</a>
                                            </li>

                                            <li>
                                                <a href="/list_product">BẢNG TRANG TRÍ</a>
                                            </li>

                                            <li>
                                                <a href="/list_product">KỆ, TỦ LƯU TRỮ</a>
                                            </li>

                                        </ul>
                                    </li>

                                    <li>
                                        <a href="/bath_room"> PHÒNG TẮM - bathroom</a>
                                        <ul class="details-menu details-bath-menu">
                                            <li>
                                                <a href="/list_product">RÈM</a>
                                            </li>

                                            <li>
                                                <a href="/list_product">KHĂN TẮM</a>
                                            </li>

                                            <li>
                                                <a href="/list_product">GƯƠNG</a>
                                            </li>

                                            <li>
                                                <a href="/list_product">THẢM CHÂN</a>
                                            </li>

                                            <li>
                                                <a href="/list_product">GIÁ, KỆ, TỦ TREO</a>
                                            </li>

                                        </ul>
                                    </li>


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
                <a href="/sign-in" class="flex items-center">
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
            <div class="py-2 border-b-2 border-b-yellow-500 text-lg"><a href="/home">Trang chủ</a></div>
            <div class="py-2 border-b-2 border-b-yellow-500 text-lg"><a href="/page_intro">Giới thiệu</a></div>
            <div class="py-2 border-b-2 border-b-yellow-500 text-lg expanded">
                <div class="flex justify-between pr-3 content-center" onclick="handleExpand(event)">
                    <a>Sản phẩm</a>
                    <i class="fi fi-rr-angle-small-down"></i>
                </div>
                <div class="px-5 collapse-section">

                    <div class="py-1 border-b border-b-yellow-500 text-lg">
                        <div class="flex justify-between pr-6 content-center" >
                            <a href="/living_room">PHÒNG KHÁCH - living room</a>
                            <i class="fi fi-rr-angle-small-down" onclick="handleExpandChild(event)"></i>
                        </div>
                        <div class="pl-5 collapse-section">

                            <div class="flex justify-start gap-4 content-center">
                                <a href="/list_product">SOFA</a>
                            </div>
                            <div class="flex justify-start gap-4 content-center">
                                <a href="/list_product">GHẾ ĐÔN, GHẾ BĂNG</a>
                            </div>
                            <div class="flex justify-start gap-4 content-center">
                                <a href="/list_product">KỆ, TỦ TV</a>
                            </div>
                            <div class="flex justify-start gap-4 content-center">
                                <a href="/list_product">TRANH ẢNH</a>
                            </div>
                            <div class="flex justify-start gap-4 content-center">
                                <a href="/list_product">GỐI TRANG TRÍ</a>
                            </div>
                            <div class="flex justify-start gap-4 content-center">
                                <a href="/list_product">ĐÈN SÀN</a>
                            </div>
                            <div class="flex justify-start gap-4 content-center">
                                <a href="/list_product">KỆ, TỦ GIÀY</a>
                            </div>
                        </div>
                    </div>

                    <div class="py-1 border-b border-b-yellow-500 text-lg">
                        <div class="flex justify-between pr-6 content-center">
                            <a href="/bed_room">PHÒNG NGỦ - bedroom</a>
                            <i class="fi fi-rr-angle-small-down" onclick="handleExpandChild(event)"></i>
                        </div>
                        <div class="pl-5 collapse-section">

                            <div class="flex justify-start gap-4 content-center">
                                <a href="/list_product">GIƯỜNG</a>
                            </div>
                            <div class="flex justify-start gap-4 content-center">
                                <a href="/list_product">BỘ KỆ/TỦ QUẦN ÁO</a>
                            </div>
                            <div class="flex justify-start gap-4 content-center">
                                <a href="/list_product">ĐÈN SÀN</a>
                            </div>
                            <div class="flex justify-start gap-4 content-center">
                                <a href="/list_product">BÀN TRANG ĐIỂM</a>
                            </div>
                            <div class="flex justify-start gap-4 content-center">
                                <a href="/list_product">ĐÈN BÀN</a>
                            </div>
                            <div class="flex justify-start gap-4 content-center">
                                <a href="/list_product">ĐÈN TRANG TRÍ</a>
                            </div>
                            <div class="flex justify-start gap-4 content-center">
                                <a href="/list_product">TỦ LƯU TRỮ</a>
                            </div>
                            <div class="flex justify-start gap-4 content-center">
                                <a href="/list_product">KỆ/TỦ GIÀY</a>
                            </div>
                            <div class="flex justify-start gap-4 content-center">
                                <a href="/list_product">GIÁ/KỆ TREO TRANG TRÍ</a>
                            </div>
                            <div class="flex justify-start gap-4 content-center">
                                <a href="/list_product">GƯƠNG</a>
                            </div>
                        </div>
                    </div>

                    <div class="py-1 border-b border-b-yellow-500 text-lg">
                        <div class="flex justify-between pr-6 content-center" >
                            <a href="/kitchen_room">BẾP & PHÒNG ĂN - kitchen room</a>
                            <i class="fi fi-rr-angle-small-down" onclick="handleExpandChild(event)"></i>
                        </div>
                        <div class="pl-5 collapse-section">

                            <div class="flex justify-start gap-4 content-center">
                                <a href="/list_product">BỘ BÀN ĂN</a>
                            </div>
                            <div class="flex justify-start gap-4 content-center">
                                <a href="/list_product">GHẾ ĂN</a>
                            </div>
                            <div class="flex justify-start gap-4 content-center">
                                <a href="/list_product">THẢM BẾP</a>
                            </div>
                            <div class="flex justify-start gap-4 content-center">
                                <a href="/list_product">KỆ BẾP</a>
                            </div>
                            <div class="flex justify-start gap-4 content-center">
                                <a href="/list_product">KHĂN BẾP</a>
                            </div>
                        </div>
                    </div>

                    <div class="py-1 border-b border-b-yellow-500 text-lg">
                        <div class="flex justify-between pr-6 content-center" >
                            <a href="/home_office">PHÒNG LÀM VIỆC - home office</a>
                            <i class="fi fi-rr-angle-small-down" onclick="handleExpandChild(event)"></i>
                        </div>
                        <div class="pl-5 collapse-section">

                            <div class="flex justify-start gap-4 content-center">
                                <a href="/list_product">BÀN</a>
                            </div>
                            <div class="flex justify-start gap-4 content-center">
                                <a href="/list_product">GHẾ</a>
                            </div>
                            <div class="flex justify-start gap-4 content-center">
                                <a href="/list_product">ĐÈN BÀN</a>
                            </div>
                            <div class="flex justify-start gap-4 content-center">
                                <a href="/list_product">ĐỒNG HỒ</a>
                            </div>
                            <div class="flex justify-start gap-4 content-center">
                                <a href="/list_product">VĂN PHÒNG PHẨM</a>
                            </div>
                            <div class="flex justify-start gap-4 content-center">
                                <a href="/list_product">BẢNG TRANG TRÍ</a>
                            </div>
                            <div class="flex justify-start gap-4 content-center">
                                <a href="/list_product">KỆ, TỦ LƯU TRỮ</a>
                            </div>
                        </div>
                    </div>

                    <div class="py-1 border-b border-b-yellow-500 text-lg">
                        <div class="flex justify-between pr-6 content-center">
                            <a href="/bath_room">PHÒNG TẮM - bathroom</a>
                            <i class="fi fi-rr-angle-small-down" onclick="handleExpandChild(event)"></i>
                        </div>
                        <div class="pl-5 collapse-section">
                            <div class="flex justify-start gap-4 content-center">
                                <a href="/list_product">RÈM</a>
                            </div>
                            <div class="flex justify-start gap-4 content-center">
                                <a href="/list_product">KHĂN TẮM</a>
                            </div>
                            <div class="flex justify-start gap-4 content-center">
                                <a href="/list_product">GƯƠNG</a>
                            </div>
                            <div class="flex justify-start gap-4 content-center">
                                <a href="/list_product">THẢM CHÂN</a>
                            </div>
                            <div class="flex justify-start gap-4 content-center">
                                <a href="/list_product">GIÁ, KỆ, TỦ TREO</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-2 border-b-2 border-b-yellow-500 text-lg"><a href="#footer">Liên hệ</a></div>
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
    <!-- Slideshow container -->
    <div id="slider" class="nivoSlider"> 
      <img src="/front/images/img_home/bg1.png" data-thumb="images/toystory.jpg" alt="" /> 
      <img src="/front/images/img_home/bg2.png" data-thumb="images/up.jpg" alt=""/>
      <img src="/front/images/img_home/img_slider_2.jpg" data-thumb="images/walle.jpg" alt="" data-transition="slideInLeft" /> 
      <img src="/front/images/img_home/img_slider_5.jpg" data-thumb="images/nemo.jpg" alt="" /> 
      </div>

<div class="slideshow-content-1 container-fluid">
    <div class="image-slider-0 row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <div class="image-0">
              <img src="/front/images/img_home/depkeusa.png" alt="">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 danhmucsanpham">
          
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
            <h3>Danh mục sản phẩm</h3>
          </div>
          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <img src="/front/images/img_home/sofa.png" alt="">
            <p>SOFA - sofas</p>
          </div>
          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <img src="/front/images/img_home/bàn.png" alt="">
            <p>BÀN - tables</p>
          </div>
          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <img src="/front/images/img_home/ghế.png" alt="">
            <p>GHẾ - chairs</p>
          </div>
          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <img src="/front/images/img_home/tủ.png" alt="">
            <p>BỘ SƯU TẬP - collections</p>
          </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 danhmuc2">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
          <img src="/front/images/img_home/product/guong.png" alt="">
          <p>GƯƠNG - mirrors</p>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
          <img src="/front/images/img_home/product/den.png" alt="">
          <p>ĐÈN - lamps</p>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
          <img src="/front/images/img_home/product/giuong.png" alt="">
          <p>GIƯỜNG - beds</p>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
          <img src="/front/images/img_home/product/ketu.png" alt="">
          <p>KỆ TỦ - shelf units, cabinets</p>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 danhmuc2">
        
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <img src="/front/images/img_home/product/changagoi.png" alt="">
        <p>CHĂN, GA, GỐI - Bedding</p>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <img src="/front/images/img_home/product/trangtri.png" alt="">
        <p>TRANG TRÍ - decorations</p>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <img src="/front/images/img_home/product/dogiadung.png" alt="">
        <p>ĐỒ GIA DỤNG - household goods</p>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <img src="/front/images/img_home/product/sanphamdetmay.png" alt="">
        <p>SẢN PHẨM DỆT MAY - home textile</p>
      </div>
  </div>
    </div>
</div>
<!-- end slideshow content -->
    


    <!-- content body 2 -->
    <div class="container content-body-23">
      <div class="row">
        
        <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 content-body-2">
          <h3 class="first">M-Concept - Giải pháp nội thất toàn diện</h3>
          <p>Concept là gói sản phẩm nội thất và cải tạo không gian toàn diện theo thiết kế có sẵn từ thương hiệu Make My Home</p>

            <p>Concept by Make My Home sẽ mang đến những giải pháp nội thất tối giản với độ ứng dụng cao, phù hợp với nhiều phong cách khác nhau, 
              tạo ra không gian sống tiện nghi, thoải mái và giúp bạn thực sự thư giãn mỗi khi trở về nhà.</p>
        </div>
        
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-sm-pull-1 col-md-push-1 col-lg-pull-1 content-body-3">
          <h3>TRẢI NGHIỆM GIẢI PHÁP KHÔNG GIAN SỐNG MỚI CÙNG M-CONCEPT</h3>
          <h4>TIẾT KIỆM THỜI GIAN</h4>
          <h4>TỐI ƯU HOÁ NGÂN SÁCH</h4>
          <h4>ĐỊNH HÌNH THẨM MỸ CAO</h4>
        </div>
        
      </div>
    </div>
</div>
<!-- SLIDER 2 ẢNH -->
<div class="share-moment">
  <div class="image-slider-1">
    <div class="image-item-1 col-xs-12 col-sm-6 col-md-6 col-lg-6">
      <div class="image-1">
          <img src="/front/images/img_home/dalat.png" alt="" width="">
      </div>
      <h4>DALAT GRACE Concept</h4>
  </div>
  <div class="image-item-1 col-xs-12 col-sm-6 col-md-6 col-lg-6">
    <div class="image-1">
        <img src="/front/images/img_home/EZ.png" alt="" width="">
    </div>
    <h4>EZ Concept</h4>
</div>
<div class="image-item-1 col-xs-12 col-sm-6 col-md-6 col-lg-6">
  <div class="image-1">
      <img src="/front/images/img_home/EZ-TINY.png" alt="" width="">
  </div>
  <h4>EZ TINY Concept</h4>
</div>
<div class="image-item-1 col-xs-12 col-sm-6 col-md-6 col-lg-6">
  <div class="image-1">
      <img src="/front/images/img_home/QUADA.png" alt="" width="">
  </div>
  <h4>QUADA Concept</h4>
</div>
<div class="image-item-1 col-xs-12 col-sm-6 col-md-6 col-lg-6">
  <div class="image-1">
      <img src="/front/images/img_home/SAGO.png" alt="" width="">
  </div>
  <h4>SAGO Concept</h4>
</div>
</div>
</div>

<!-- 4 Ảnh -->

<div class="container-fluid body-4-anh">
  <div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 image-items-2">
      
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 image-items-2">
        <img src="/front/images/img_home/canho.png" alt="">
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 image-items-2">
        <img src="/front/images/img_home/nhapho.png" alt="">
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 image-items-2">
        <img src="/front/images/img_home/congcong.png" alt="">
      </div>
      
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 image-items-2">
      <img src="/front/images/img_home/inspiration.png" alt="">
    </div>
  </div>
</div> 
<!-- End body 4 anh -->

<!-- About Us -->
<div class="container-fluid about-us">
  <div class="row">
    
    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 about-us-content">
      <h3>About Us</h3>
      <br>
      <div class="about-content">
        <p>Tại ALONE DOLPHINS, tất cả sản phẩm trang trí nội thất & giải pháp không gian sống không 
          chỉ đơn thuần tuân thủ theo ngôn 
          ngữ giản lược của Minimalism, mà còn cân bằng được tính năng và độ thẩm mỹ cần có.</p>
        <p>
          “Ít tức là nhiều", nhưng mỗi chi tiết xuất hiện trên thiết kế đều là một sự chăm chút kỹ lưỡng 
          và hoàn hảo. Và đó cũng chính là tôn chỉ hoạt động của ALONE DOLPHINS. Với tinh thần cầu tiến luôn cố gắng hết mình để cung cấp những sản phẩm chất lượng cộng với dịch vụ thân thiện cho khách hàng, chúng tôi hy vọng có thể chia sẻ một niềm tin cố hữu với tất cả mọi người: 
          “Cuộc sống sẽ trở nên tốt đẹp hơn khi không gian sống được quan tâm và đầu tư đúng mực.
        </p>
      </div>
    </div>
    
    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 about-us-img">
      <img src="/front/images/img_home/about-us.png" alt="">
    </div>
  </div>
</div>
<!-- end about us -->

<!-- chia se khoanh khac -->
<div class="container-fluid chiasekhoanhkhac">
  <div class="row">
    
    <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
      <div class="image-slider-2">
        <div class="image-item-2 col-xs-3 col-sm-3 col-md-3 col-lg-3">
          <div class="image-2">
            <img src="/front/images/img_home/chiasekhoanhkhac/anh1.png" alt="">
          </div>
        </div><!--end anh-->
        <div class="image-item-2 col-xs-3 col-sm-3 col-md-3 col-lg-3">
          <div class="image-2">
            <img src="/front/images/img_home/chiasekhoanhkhac/anh2.png" alt="">
          </div>
        </div>
        <div class="image-item-2 col-xs-3 col-sm-3 col-md-3 col-lg-3">
          <div class="image-2">
            <img src="/front/images/img_home/chiasekhoanhkhac/anh3.png" alt="">
          </div>
        </div>
        <div class="image-item-2 col-xs-3 col-sm-3 col-md-3 col-lg-3">
          <div class="image-2">
            <img src="/front/images/img_home/chiasekhoanhkhac/anh4.png" alt="">
          </div>
        </div>
        <div class="image-item-2 col-xs-3 col-sm-3 col-md-3 col-lg-3">
          <div class="image-2">
            <img src="/front/images/img_home/chiasekhoanhkhac/anh5.png" alt="">
          </div>
        </div>
        <div class="image-item-2 col-xs-3 col-sm-3 col-md-3 col-lg-3">
          <div class="image-2">
            <img src="/front/images/img_home/chiasekhoanhkhac/anh6.png" alt="">
          </div>
        </div>
        <div class="image-item-2 col-xs-3 col-sm-3 col-md-3 col-lg-3">
          <div class="image-2">
            <img src="/front/images/img_home/chiasekhoanhkhac/anh7.png" alt="">
          </div>
        </div>
        <div class="image-item-2 col-xs-3 col-sm-3 col-md-3 col-lg-3">
          <div class="image-2">
            <img src="/front/images/img_home/chiasekhoanhkhac/anh8.png" alt="">
          </div>
        </div>
    </div> 
    </div> <!-- END 9 COT -->
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 share-title">
      <h3>Chia sẻ khoảnh khắc</h3>
    </div>
    
  </div>
</div>
<!-- footer -->
<div id="footer" class=" footer h-fit pb-46" style="text-align: left;">
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

<script
  type="text/javascript"
  src="https://code.jquery.com/jquery-1.11.0.min.js"
></script>
</body>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/front/css/page_home/nivo-slider/jquery.nivo.slider.js"></script>
<script
  type="text/javascript"
  src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"
></script>
<script
  type="text/javascript"
  src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
></script>

<script src="/front/javascript/page_home.js"></script>

<!-- header -->
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


</html>