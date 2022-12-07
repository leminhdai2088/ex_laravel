
    

@extends('front.header')
@section('content')
<head>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="/front/css/footer.css">
    <style>
        .tab-button {
            padding: 8px 12px;
            cursor: pointer;
        }

        .tab-button.active {
            border-top-width: 2px;
            border-color: rgb(234 179 8);
            font-weight: 500;
        }

        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
        }
        .main-detail{
            margin-top: 104px;
        }
    </style>
</head>
    <div class="grid grid-cols-2 gap-10 main-detail">
        <div>
            <div class="gallery">
                @for($i = 0; $i < count($product->product_images); $i++)
                <img src="/front/images/image_products/{{ $product->product_images[$i]->path }}" alt="" width="300" height="300">
                @endfor
            </div>
            <div class="gallery-slide">
                @for($i = 0; $i < count($product->product_images); $i++)
                    <img src="/front/images/image_products/{{ $product->product_images[$i]->path }}" alt="" width="300" height="300">
                @endfor 
                
            </div>
        </div>
        <div>
            <h1 class="uppercase text-gray-700 text-2xl font-bold">{{ $product->name }}</h1>
            <div>{{ $product->product_category->name }}</div>
            <div class="text-3xl">
                {{ $product->price }}
            </div>
            <div class="product-description">
                <p><strong>Kích thước: </strong><span>{{ $product->product_details->size }}</span></p>
                <p><strong>Chất liệu: </strong><span>{{ $product->material }}</span></p>
            </div>
            <!-- <form action="/gio-hang" method="GET">
                <div>
                    <strong>Số lượng:</strong>
                    <input type="number" value="1" min="1">
                </div>
                
                <input type="submit" value="Thêm vào giỏ" class="cursor-pointer px-5 py-2 bg-yellow-400 my-5">
            </form> -->
            <a class="cursor-pointer px-5 py-2 bg-yellow-400 my-5" href="/cart/add/{{ $product->id }}">Thêm vào giỏ</a>
        </div>
    </div>

    <div class="flex gap-5 border-t">
        <div class="tab-button active" onclick="openTab('tab1', event)">Mô tả sản phẩm</div>
        <div class="tab-button " onclick="openTab('tab2', event)">Hướng dẫn bảo quản</div>
        <div class="tab-button " onclick="openTab('tab3', event)">Phí giao hàng và lắp đặt</div>
    </div>

    <div class="tab-content active" id="tab1">
        Sản phẩm này được làm từ {{ $product->material }}, được chiếc xuất hoàn toàn từ thiên nhiên, không chất hóa học
    </div>
    <div class="tab-content" id="tab2">
        this is tab2
    </div>
    <div class="tab-content" id="tab3">
        this is tab3
    </div>

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




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        function openTab(tabId, event) {
            tabcontent = document.getElementsByClassName("tab-content");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].classList.remove('active')
            }
            tabButton = document.getElementsByClassName("tab-button");
            for (i = 0; i < tabButton.length; i++) {
                tabButton[i].classList.remove('active')
            }

            document.getElementById(tabId).classList.add('active')
            event.target.classList.add('active')
        }

        $(document).ready(function () {
            $('.gallery').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                fade: true,
                asNavFor: '.gallery-slide'
            });
            $('.gallery-slide').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                asNavFor: '.gallery',
                dots: false,
                centerMode: false,
                focusOnSelect: true
            });
        });

    </script>

@endsection

