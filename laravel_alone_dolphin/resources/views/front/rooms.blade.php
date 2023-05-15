@extends('components.layout')
@section('head')
<link rel="stylesheet" href="/front/css/footer.css">
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<link href="/front/css/page_rooms.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
<link rel="stylesheet" href="https://unpkg.com/tailwindcss@1.0/dist/tailwind.min.css">
@if ($name_cate_room[0]->room->id == 1)
<title>Nội thất phòng khách hiện đại - Nội thất Fudo</title>
<meta name="description" content="Nội Thất Fudo cung cấp các sản phẩm nội thất phòng khách như sofa, bàn cafe, kệ tủ giày, tủ rượu, đèn sàn, đồng hồ cho nhà ống, chung cư, nhà phố, đạt chuẩn quốc tế">
<meta name="keywords" content="fudo, nội thất, nội thất fudo, nội thất giá rẻ, nội thất phòng khách, sofa, ghế, kệ tủ trang trí phòng khách, đồng hồ, tranh ảnh phòng khách, decor phòng khách nhỏ"> 
@endif
@if ($name_cate_room[0]->room->id == 2)
<title>Nội thất ngủ đẹp - Nội thất Fudo</title>
<meta name="description" content="Nội Thất Fudo cung cấp các sản phẩm nội thất phòng ngủ như giường ngủ, bàn ghế phòng ngủ, tủ kệ tivi, tủ đầu giường, bàn trang điểm,... với thiết kế đẹp và hiện đại">
<meta name="keywords" content="fudo, nội thất, nội thất fudo, nội thất giá rẻ, nội thất phòng ngủ, phòng ngủ đẹp đơn giản, đèn trang trí phòng ngủ, bàn trang điểm, tủ phòng ngủ, trang trí phòng ngủ nhỏ">
@endif
@if ($name_cate_room[0]->room->id == 3)
<title>Nội thất bếp và phòng ăn - Nội thất Fudo</title>
<meta name="description" content="Nội Thất Fudo cung cấp các sản phẩm nội thất bếp và phòng ăn như bộ bàn ăn, ghế ăn, thảm bếp, kệ bếp, khăn bếp với phong cách hiện đại cho nhà bếp, nhà hàng, chung cư">
<meta name="keywords" content="fudo, nội thất, nội thất fudo, nội thất giá rẻ, nội thất phòng bếp, thiết kế phòng bếp, bộ bàn ăn noven, thảm bếp line"> 
@endif
@if ($name_cate_room[0]->room->id == 4)
<title>Nội thất phòng làm việc - Nội thất Fudo</title>
<meta name="description" content="Nội Thất Fudo cung cấp các sản phẩm nội thất phòng làm việc như bàn làm việc, bàn máy tính, tủ sách, với thiết kế hiện đại">
<meta name="keywords" content="fudo, nội thất, nội thất fudo, nội thất giá rẻ, nội thất phòng làm việc, văn phòng phẩm, thiết kế nội thất văn phòng, khay đựng ghim kẹp"> 
@endif
@if ($name_cate_room[0]->room->id == 5)
<title>Nội thất phòng tắm - Nội thất Fudo</title>
<meta name="description" content="Nội Thất Fudo cung cấp các sản phẩm nội thất phòng tắm như rèm, khăn tắm, gương, thảm chân đẹp và chất lượng cao">
<meta name="keywords" content="fudo, nội thất, nội thất fudo, nội thất giá rẻ, trang trí nội thất phòng tắm, thảm chân, khăn tắm cloudy"> 
@endif

<link rel="canonical" href="https://noithatfudo.vn/living_room"/>

<style>
    .product-img {
        width: 100%;
        object-fit: cover;
    }

    @media (min-width: 740px) {

        /* .product-img {
            width: 270px;
            height: 270px;
        } */
    }
</style>
@endsection
@section('content')
<!-- main -->
<div class="main">
    <div class="nav-room">
        <p class="direction">
            <a href="/home"><i>Trang chủ</i></a> / <i>{{ $name_cate_room[0]->room->name }}</i>
        </p>
    </div>
    <div class="slider">
        <h1 class="text-center">{{ $name_cate_room[0]->room->name }}</h1>
        <img src="/front/images/image_products/{{ $name_cate_room[0]->room->image }}" alt="">
    </div>

    <div class="filter">
        <div class="main-filter">
            <div class="filter-block price-js">
                <div class="filter-item lim-ch price-filter">
                    <span class="title-filter">
                        Giá
                        <i class="ti-plus"></i>
                    </span>
                    <ul class="price-choice choice">
                        <li>
                            <a href="{{ request()->fullUrlWithQuery(['price'=>0]) }}">All</a>
                        </li>
                        <li>
                            <a href="{{ request()->fullUrlWithQuery(['price'=>1]) }}">Dưới 1 triệu</a>
                        </li>
                        <li>
                            <a href="{{ request()->fullUrlWithQuery(['price'=>2]) }}">Từ 1 - 2 triệu</a>
                        </li>
                        <li>
                            <a href="{{ request()->fullUrlWithQuery(['price'=>3]) }}">Từ 2 - 3 triệu</a>
                        </li>
                        <li>
                            <a href="{{ request()->fullUrlWithQuery(['price'=>4]) }}">Từ 3 - 5 triệu</a>
                        </li>
                        <li>
                            <a href="{{ request()->fullUrlWithQuery(['price'=>5]) }}">Lớn hơn 5 triệu</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <!-- grid items -->
    <div class="grid-container">
        @foreach($products as $product)

        <div class="grid-item">
            <a href="/{{ $room }}/{{ $product->product_category_id }}/{{ $product->id }}"><img class="product-img"
                    src="/front/images/image_products/{{ $product->product_images[0]->path }}" alt="{{ $product->name }} - Sản phẩm {{ $product->product_category->name }} {{ $product->room->name }} của Nội thất Fudo"></a>
            <div class="text-items">
                <a href="#">
                    <h3 class="name-item">{{ $product->name }}</h3>
                </a>
                <p class="desc-item">{{ $product->product_category->name }}</p>
                <p class="price-item">{{ number_format($product->price) }}đ</p>
            </div>
        </div>
        @endforeach




    </div>
</div>
<div class="shop-content-bottom">
    <div class="pages">
        {{$products->links()}}
    </div>

</div>
<!-- chia sẻ khoảnh khắc -->
<div class="container-fluid chiasekhoanhkhac">
    <div class="row">

        <div class="main-share scol-xs-12 col-sm-9 col-md-9 col-lg-9">
            <div class="image-slider-2">
                <div class="image-item-2 col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <div class="image-2">
                        <img src="/front/images/img_home/chiasekhoanhkhac/anh1.webp" alt="">
                    </div>
                </div><!--end anh-->
                <div class="image-item-2 col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <div class="image-2">
                        <img src="/front/images/img_home/chiasekhoanhkhac/anh2.webp" alt="">
                    </div>
                </div>
                <div class="image-item-2 col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <div class="image-2">
                        <img src="/front/images/img_home/chiasekhoanhkhac/anh3.webp" alt="">
                    </div>
                </div>
                <div class="image-item-2 col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <div class="image-2">
                        <img src="/front/images/img_home/chiasekhoanhkhac/anh4.webp" alt="">
                    </div>
                </div>
                <div class="image-item-2 col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <div class="image-2">
                        <img src="/front/images/img_home/chiasekhoanhkhac/anh5.webp" alt="">
                    </div>
                </div>
                <div class="image-item-2 col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <div class="image-2">
                        <img src="/front/images/img_home/chiasekhoanhkhac/anh6.webp" alt="">
                    </div>
                </div>
                <div class="image-item-2 col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <div class="image-2">
                        <img src="/front/images/img_home/chiasekhoanhkhac/anh7.webp" alt="">
                    </div>
                </div>
                <div class="image-item-2 col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <div class="image-2">
                        <img src="/front/images/img_home/chiasekhoanhkhac/anh8.webp" alt="">
                    </div>
                </div>
            </div>
        </div> <!-- END 9 COT -->
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 share-title">
            <h3>Chia sẻ khoảnh khắc</h3>
        </div>
    </div>
</div>



<!-- modal -->




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script  src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script src="/front/javascript/page_rooms.js"></script>

@endsection
