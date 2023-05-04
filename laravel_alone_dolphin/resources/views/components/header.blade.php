<head>
    <link rel="stylesheet" href="/front/css/main.css">
    <link href="/front/css/output.css" rel="stylesheet">
    <link rel="stylesheet" href="/front/images/icon/themify-icons-font/themify-icons/themify-icons.css">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- <link rel="stylesheet" href="/front/css/header.css"> -->
    @vite('resources/css/app.css')
    <style>
        .nav-item:hover .subnav {
            display: block;
            position: absolute;
            top: 22px;
            left: -10px;
            z-index: 10;
        }

        .subnav {
            display: none;
            min-width: 200px;
            background-color: rgb(229 231 235);
            color: black;
            padding: 5px;
        }

        .nav-item {
            position: relative;
            /* background-color: #00008B; */
            /* padding-top: 12px; */
            /* padding-bottom: 12px;
            padding-right: 5px;
            padding-left: 5px; */
        }



        .subnav-item {
            /* padding-top: 12px;
            padding-bottom: 12px;
            padding-left: 5px; */
            padding: 2px 10px;
            cursor: pointer
        }

        .subnav-item:hover {
            /* background-color: lightblue; */
            background-color: rgb(209 213 219);
        }

        .res-width {
            width: 100vw;
        }

        @media (min-width:740px) {
            .res-width {
                width: 95vw;
            }
        }

        @media (min-width:1280px) {
            .res-width {
                width: 1200px;
            }
        }
    </style>
</head>

<body>
    @props(['rooms_header', 'categories_header'])
    @auth
        {{-- mobile --}}
        <div class="header fixed left-0 right-0 top-0 z-20 h-16">
            <div class="res-width h-full flex px-3 md:px-0 m-auto items-center justify-between">
                <i class="fi fi-rr-menu-burger md:hidden" onclick="toggleSidebar()"></i>
                <a class="logo" href="/"><img height="64" width="64" src="/front/images/noithatfudo.png"
                        alt="nội thất Fudo"></a>
                <div class="hidden md:flex items-center gap-10 cursor-pointer">
                    <div class="h-fit"><a href="/">Trang chủ</a> </div>
                    <div class="h-fit"><a href="/about_us">Giới thiệu</a></div>
                    <div class="h-fit hover-product">
                        <a href="#" class="btn-product">Sản phẩm</a>
                        <div class="content-sub-menu">
                            <div class="container-sub-menu w-[1200px] m-auto">
                                <div class="sub-menu">
                                    <ul>
                                        @foreach ($rooms_header as $room)
                                            <li>
                                                <a href="/{{ $room->link }}">{{ $room->name }}</a>
                                                <ul class="details-menu details-{{ $room->link }}">

                                                    @foreach ($categories_header as $cate)
                                                        @if ($cate->room_id == $room->id)
                                                            <li>
                                                                <a
                                                                    href="/{{ $room->link }}/{{ $cate->id }}">{{ $cate->name }}</a>
                                                            </li>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="img-sub-menu">
                                    <a href="#"><img src="/front/images/img-menu/image_menu_products.webp"
                                            alt="image menu"></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="h-fit"><a href="#footer">Liên hệ</a></div>
                    <div class="h-fit"><a href="/blog">Blog</a></div>
                </div>
                <div class="right-header flex content-center items-center gap-3 md:gap-6">
                    <div class="text-gray-700 relative my-auto max-w-[120px] md:max-w-[250px]">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-2">
                            <button aria-label="search button" class="p-1 text-gray-400 focus:outline-none focus:shadow-outline">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" viewBox="0 0 24 24" class="w-4 h-4 text-[#6B7280]">
                                    <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </button>
                        </span>
                        <input type="search"
                            class="
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
                  "
                            placeholder="Tìm kiếm...">
                    </div>
                    <a href="/profile" class="flex items-center"><i class="fi fi-rr-user"></i></a>
                    <a href="/cart" class="flex items-center relative">
                        {{-- <span class="absolute -top-3 -right-3 text-[10px] rounded-full bg-gray-300 px-1">10</span> --}}
                        <i class="fi fi-rr-shopping-cart"></i>
                    </a>
                    @if (auth()->user()->level == 1)
                        <div class="nav-item"><i style="padding: 0 10px 10px 0;margin-top: 10px"
                                class="fa-solid fa-user-secret"></i>
                            <ul class="subnav">
                                <li class="subnav-item" onclick="window.location = '/admin/products'">Quản lý sản phẩm</li>
                                <li class="subnav-item" onclick="window.location = '/admin/orders'">Quản lý đơn hàng</li>
                                <li class="subnav-item" onclick="window.location = '/admin/users'">Quản lý user</li>
                                <li class="subnav-item" onclick="window.location = '/admin/blogs'">Quản lý blog</li>

                            </ul>
                        </div>
                    @endif
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
                <div class="py-2 border-b-2 border-b-yellow-500 text-lg"><a href="/">Trang chủ</a></div>
                <div class="py-2 border-b-2 border-b-yellow-500 text-lg"><a href="/about_us">Giới thiệu</a></div>
                <div class="py-2 border-b-2 border-b-yellow-500 text-lg expanded">
                    <div class="flex justify-between pr-3 content-center" onclick="handleExpand(event)">
                        <a>Sản phẩm</a>
                        <i class="fi fi-rr-angle-small-down"></i>
                    </div>
                    <div class="px-5 collapse-section">

                        @foreach ($rooms_header as $room)
                            <div class="py-1 border-b border-b-yellow-500 text-lg">
                                <div class="flex justify-between pr-6 content-center">
                                    <a href="/{{ $room->link }}">{{ $room->name }}</a>
                                    <i class="fi fi-rr-angle-small-down" onclick="handleExpandChild(event)"></i>
                                </div>
                                <div class="pl-5 collapse-section">
                                    @foreach ($categories_header as $cate)
                                        <div class="flex justify-start gap-4 content-center">
                                            @if ($cate->room_id == $room->id)
                                                <a href="/{{ $room->link }}/{{ $cate->id }}">{{ $cate->name }}</a>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
                <div class="py-2 border-b-2 border-b-yellow-500 text-lg"><a href="#footer">Liên hệ</a></div>
                <div class="py-2 border-b-2 border-b-yellow-500 text-lg"><a href="/blog">Blog</a></div>
            </div>
        </div>
    @else
        <div class="header fixed left-0 right-0 top-0 z-20 h-16">
            <div class="res-width h-full flex px-3 md:px-0 m-auto items-center justify-between">
                <i class="fi fi-rr-menu-burger md:hidden" onclick="toggleSidebar()"></i>
                <a class="logo" href="/"><img height="64" width="64" src="/front/images/noithatfudo.png"
                        alt="nội thất Fudo"></a>
                <div class="hidden md:flex items-center gap-10 cursor-pointer">
                    <div class="h-fit"><a href="/">Trang chủ</a> </div>
                    <div class="h-fit"><a href="/about_us">Giới thiệu</a></div>
                    <div class="h-fit hover-product">
                        <a href="#" class="btn-product">Sản phẩm</a>
                        <div class="content-sub-menu">
                            <div class="container-sub-menu w-[1200px] m-auto">
                                <div class="sub-menu">
                                    <ul>
                                        @foreach ($rooms_header as $room)
                                            <li>
                                                <a href="/{{ $room->link }}">{{ $room->name }}</a>
                                                <ul class="details-menu details-{{ $room->link }}">

                                                    @foreach ($categories_header as $cate)
                                                        @if ($cate->room_id == $room->id)
                                                            <li>
                                                                <a
                                                                    href="/{{ $room->link }}/{{ $cate->id }}">{{ $cate->name }}</a>
                                                            </li>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="img-sub-menu">
                                    <a href="#"><img src="/front/images/img-menu/image_menu_products.webp"
                                            alt="image menu"></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="h-fit"><a href="#footer">Liên hệ</a></div>
                    <div class="h-fit"><a href="/blog">Blog</a></div>
                </div>
                <div class="right-header flex content-center items-center gap-3 md:gap-6">
                    <div class="text-gray-700 relative my-auto max-w-[120px] md:max-w-[250px]">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-2">
                            <button aria-label="search button" class="p-1 text-gray-400 focus:outline-none focus:shadow-outline">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" viewBox="0 0 24 24" class="w-4 h-4 text-[#6B7280]">
                                    <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </button>
                        </span>
                        <input type="search"
                            class="
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
                  "
                            placeholder="Tìm kiếm...">
                    </div>
                    <a href="/sign_in" aria-label="Liên kết tới trang đăng nhập" class="flex items-center"><i class="fi fi-rr-user"></i></a>
                    <a href="/cart" aria-label="Liên kết tới trang giỏ hàng" class="flex items-center relative">
                        {{-- <span class="absolute -top-3 -right-3 text-[10px] rounded-full bg-gray-300 px-1">10</span> --}}
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
                <div class="py-2 border-b-2 border-b-yellow-500 text-lg"><a href="/">Trang chủ</a></div>
                <div class="py-2 border-b-2 border-b-yellow-500 text-lg"><a href="/about_us">Giới thiệu</a></div>
                <div class="py-2 border-b-2 border-b-yellow-500 text-lg expanded">
                    <div class="flex justify-between pr-3 content-center" onclick="handleExpand(event)">
                        <a>Sản phẩm</a>
                        <i class="fi fi-rr-angle-small-down"></i>
                    </div>
                    <div class="px-5 collapse-section">

                        @foreach ($rooms_header as $room)
                            <div class="py-1 border-b border-b-yellow-500 text-lg">
                                <div class="flex justify-between pr-6 content-center">
                                    <a href="/{{ $room->link }}">{{ $room->name }}</a>
                                    <i class="fi fi-rr-angle-small-down" onclick="handleExpandChild(event)"></i>
                                </div>
                                <div class="pl-5 collapse-section">
                                    @foreach ($categories_header as $cate)
                                        <div class="flex justify-start gap-4 content-center">
                                            @if ($cate->room_id == $room->id)
                                                <a
                                                    href="/{{ $room->link }}/{{ $cate->id }}">{{ $cate->name }}</a>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
                <div class="py-2 border-b-2 border-b-yellow-500 text-lg"><a href="#footer">Liên hệ</a></div>
                <div class="py-2 border-b-2 border-b-yellow-500 text-lg"><a href="/blog">Blog</a></div>
            </div>
        </div>
    @endauth
    <script>
        function handleExpand(event) {
            const collapsible = event.currentTarget;
            const parent = collapsible.parentElement;
            parent.classList.toggle("expanded")
        }

        function handleExpandChild(event) {
            const collapsible = event.currentTarget;
            const parent = collapsible.parentElement.parentElement;
            parent.classList.toggle("expanded");
        }

        function toggleSidebar() {
            const sidebar = document.getElementById("sidebar");
            console.log(sidebar)
            sidebar.classList.toggle("hidden")
        }
    </script>
</body>
