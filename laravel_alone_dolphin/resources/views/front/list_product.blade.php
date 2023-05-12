@extends('components.layout')
@section('head')
<link rel="stylesheet" href="/front/css/footer.css">
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<link href="/front/css/page_rooms.css" rel="stylesheet">
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
<link rel="stylesheet" href="https://unpkg.com/tailwindcss@1.0/dist/tailwind.min.css">
<meta name="description" content="{{$product_cate[0]->meta_description}}">
<meta name="keywords" content="fudo, nội thất, nội thất fudo, sofa, bàn ăn, giường ngủ, tủ quần áo, đèn, trang trí, mua sắm nội thất, nội thất giá rẻ, nội thất phòng ngủ, nội thất phòng khách, nội thất phòng bếp, nội thất phòng làm việc, nội thất phòng tắm"> 
<link rel="canonical" href="https://noithatfudo.vn/living_room/1"/>
<title>{{ $name_cate_room[0]->product_category->name }}</title>
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
<div class="main" style="margin-left: 1rem; margin-right: 1rem;">
    <div class="nav-room">
        <p class="direction">
            <a href="/home"><i>Trang chủ</i></a> / <i>{{ $name_cate_room[0]->room->name }}</i> / <i>{{
                $name_cate_room[0]->product_category->name }}</i>
        </p>
    </div>
    <div class="slider">
        <h1 class="text-center"> {{ $name_cate_room[0]->product_category->name }}</h1>
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
            <a href="/{{ $room }}/{{ $loai }}/{{ $product->id }}"><img class="product-img"
                    src="/front/images/image_products/{{ $product->product_images[0]->path }}" alt="{{ $product->name }} - Sản phẩm {{ $product->product_category->name }} {{ $product->room->name }} của Nội thất Fudo"></a>
            <div class="text-items">
                <a href="#">
                    <h3 class="name-item">{{ $product->name}}</h3>
                </a>
                {{-- <p class="desc-item">{{ $product->product_details->size}}</p> --}}
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



<!-- modal -->




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script  src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script src="/front/javascript/page_rooms.js"></script>
@endsection
