@extends('components.layout')
@section('head')
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<link rel="canonical" href="https://noithatfudo.vn/living_room/1/1"/>

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

    .main-detail {
        margin-top: 104px;
    }

    .product-description {
        margin-bottom: 40px;
    }

    .gallery,
    .gallery-slide {
        width: 95vw;
    }


    .gallery img {
        width: 95vw;
        height: 95vw;

        object-fit: cover;
    }

    .gallery-slide img {
        width: 23vw;
        height: 23vw;
        padding: 8px;
        object-fit: cover;
    }

    [class^="arrow"]:before,
    [class*=" arrow"]:before,
    [class^="arrow"]:after,
    [class*=" arrow"]:after {

        font-size: 20px;
    }

    /* @media (min-width: 740px) {

        .gallery,
        .gallery-slide {
            width: 500px;
        }


        .gallery img {
            width: 500px;
            height: 500px;

            object-fit: cover;
        }

        .gallery-slide img {
            width: 125px;
            height: 125px;
            padding: 8px;
        }
    } */

    @media (min-width: 1024px) {

        .gallery,
        .gallery-slide {
            width: 500px;
        }


        .gallery img {
            width: 500px;
            height: 500px;

            object-fit: cover;
        }

        .gallery-slide img {
            width: 125px;
            height: 125px;
            padding: 8px;
        }

        [class^="arrow"]:before,
        [class*=" arrow"]:before,
        [class^="arrow"]:after,
        [class*=" arrow"]:after {

            font-size: 30px;
        }
    }
</style>
@endsection
@section('content')
<div class="px-5 laptop:px-0 grid laptop:grid-cols-2 gap-10 mb-10">
    <div>
        <div class="gallery mb-2">
            @for($i = 0; $i < count($product->product_images); $i++)
                <img src="/front/images/image_products/{{ $product->product_images[$i]->path }}" alt="{{ $product->name }} - Sản phẩm {{ $product->product_category->name }} {{ $product->room->name }} của Nội thất Fudo">
                @endfor
        </div>
        <div class="relative w-[95vw] laptop:w-[500px]">
            <div class="gallery-slide">
                @for($i = 0; $i < count($product->product_images); $i++)
                    <img src="/front/images/image_products/{{ $product->product_images[$i]->path }}" alt="{{ $product->name }} - Sản phẩm {{ $product->product_category->name }} {{ $product->room->name }} của Nội thất Fudo">
                    @endfor

            </div>
            <!-- <i
                class="arrow fi fi-rr-angle-left prev absolute -left-3 top-10 md:top-16 laptop:top-10 cursor-pointer"></i>
            <i
                class="arrow fi fi-rr-angle-right next absolute -right-3 top-10 md:top-16 laptop:top-10 cursor-pointer"></i> -->
        </div>
    </div>
    <div class="md:mt-5">
        <h1 class="uppercase text-gray-700 text-2xl font-bold">{{ $product->name }}</h1>
        <div>{{ $product->product_category->name }}</div>
        <div class="text-3xl">
            {{ number_format($product->price)}}đ
        </div>
        <div class="product-description">
            <p><strong>Kích thước: </strong><span>{{ $product->product_details->size }}</span></p>
            <p><strong>Chất liệu: </strong><span>{{ $product->material }}</span></p>
            
            @if($product->weight)
            <p><strong>Cân nặng: </strong><span>{{ $product->weight }}kg</span></p>
            @endif
        </div>
        @if(Session::has('thanhcong'))

    <div class="p-10 rounded-md shadow flex flex-col gap-3 items-center bg-blue-100 mb-6">
        <i class="flaticon fi fi-rr-checkbox"></i>
        <div>{{Session::get('thanhcong')}}</div>
    </div>
@endif
        @if(auth()->user())
        @if(auth()->user()->level == 0)
        <a class="cursor-pointer px-5 py-2 bg-yellow-400" href="/cart/add/{{ $product->id }}">Thêm vào giỏ</a>
        @else
        <a class="cursor-pointer px-5 py-2 bg-blue-400 my-5" href="/admin/edit/{{ $product->id }}">Sửa thông tin</a>
        <form action="/admin/delete_product/{{ $product->id }}" method="POST">
            @method('DELETE')
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <button type="submit" class="cursor-pointer px-5 py-2 bg-red-400 my-5"
                onclick="return confirm('Xác nhận xóa sản phẩm?')">Xóa sản phẩm</button>
        </form>
        @endif
        @else
        <a class="cursor-pointer px-5 py-2 bg-yellow-400 my-5" href="/cart/add/{{ $product->id }}">Thêm vào
            giỏ</a>
        @endif


        <div class="text-xs p-5 border rounded-md mt-10 text-gray-700">
            <h2 class="text-lg font-semibold">Bảo quản và bảo hành</h2>
            <h3 class="text-base font-semibold">Bảo quản:</h3>

            <p>Dùng khăn ẩm với nước sạch hoặc dung dịch tẩy rửa nhẹ để làm sạch sản phẩm. Sau đó, lau khô sản phẩm bằng
                khăn
                mềm.</p>

            <p>Không để sản phẩm tiếp xúc với nước hoặc nguồn nhiệt độ cao trong thời gian dài.</p>

            <p>Không dùng các vật sắc nhọn, thô cứng, sần sùi chà xát sản phẩm.</p>

            <h3 class="text-base font-semibold">Bảo hành:</h3>

            <p>Thời hạn bảo hành: Nệm 12 tháng, khung 24 tháng</p>

            <p>Bảo hành cho các sản phẩm có lỗi nguyên vật liệu hay lỗi từ nhà sản xuất (như móp, méo, cong vênh các chi
                tiết
                sản phẩm, bong tróc sơn,...). Hoặc các sản phẩm bị bể vỡ/ trầy xước/ biến dạng trong quá trình vận
                chuyển.</p>

            <p>Không bảo hành cho các sản phẩm hư hỏng trong quá trình quý khách sử dụng do sử dụng không cẩn thận, bảo
                quản và
                vệ sinh không đúng cách. Cũng như sản phẩm bị các hao mòn thông thường (như phai mờ, rỉ sét do trầy
                xước, lỏng
                ốc vít sau một khoảng thời gian...).</p>
        </div>
    </div>
</div>

<!-- <div class="flex gap-5 border-t">
    {{-- <div class="tab-button active" onclick="openTab('tab1', event)">Mô tả sản phẩm</div> --}}
    <div style="font-weight: bold;">Hướng dẫn bảo quản</div>
    {{-- <div class="tab-button " onclick="openTab('tab3', event)">Phí giao hàng và lắp đặt</div> --}}
</div> -->





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
            fade: false,
            asNavFor: '.gallery-slide',
            infinite: false,
        });
        $('.gallery-slide').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            asNavFor: '.gallery',
            dots: false,
            // centerMode: true,
            focusOnSelect: true,
            prevArrow: $('.prev'),
            nextArrow: $('.next'),
            draggable: true,
            infinite: false,
        });
    });

</script>

@endsection