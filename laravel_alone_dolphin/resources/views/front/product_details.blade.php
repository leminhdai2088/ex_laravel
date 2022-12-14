@extends('components.layout')
@section('head')
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
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
                <img src="/front/images/image_products/{{ $product->product_images[$i]->path }}" alt="">
                @endfor
        </div>
        <div class="relative w-[95vw] laptop:w-[500px]">
            <div class="gallery-slide">
                @for($i = 0; $i < count($product->product_images); $i++)
                    <img src="/front/images/image_products/{{ $product->product_images[$i]->path }}" alt="">
                    @endfor

            </div>
            <i
                class="arrow fi fi-rr-angle-left prev absolute -left-3 top-10 md:top-16 laptop:top-10 cursor-pointer"></i>
            <i
                class="arrow fi fi-rr-angle-right next absolute -right-3 top-10 md:top-16 laptop:top-10 cursor-pointer"></i>
        </div>
    </div>
    <div class="md:mt-5">
        <h1 class="uppercase text-gray-700 text-2xl font-bold">{{ $product->name }}</h1>
        <div>{{ $product->product_category->name }}</div>
        <div class="text-3xl">
            {{ number_format($product->price)}}??
        </div>
        <div class="product-description">
            <p><strong>K??ch th?????c: </strong><span>{{ $product->product_details->size }}</span></p>
            <p><strong>Ch???t li???u: </strong><span>{{ $product->material }}</span></p>
            
            @if($product->weight)
            <p><strong>C??n n???ng: </strong><span>{{ $product->weight }}kg</span></p>
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
        <a class="cursor-pointer px-5 py-2 bg-yellow-400" href="/cart/add/{{ $product->id }}">Th??m v??o gi???</a>
        @else
        <a class="cursor-pointer px-5 py-2 bg-blue-400 my-5" href="/admin/edit/{{ $product->id }}">S???a th??ng tin</a>
        <form action="/admin/delete_product/{{ $product->id }}" method="POST">
            @method('DELETE')
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <button type="submit" class="cursor-pointer px-5 py-2 bg-red-400 my-5"
                onclick="return confirm('X??c nh???n x??a s???n ph???m?')">X??a s???n ph???m</button>
        </form>
        @endif
        @else
        <a class="cursor-pointer px-5 py-2 bg-yellow-400 my-5" href="/cart/add/{{ $product->id }}">Th??m v??o
            gi???</a>
        @endif


        <div class="text-xs p-5 border rounded-md mt-10 text-gray-700">
            <h2 class="text-lg font-semibold">B???o qu???n v?? b???o h??nh</h2>
            <h3 class="text-base font-semibold">B???o qu???n:</h3>

            <p>D??ng kh??n ???m v???i n?????c s???ch ho???c dung d???ch t???y r???a nh??? ????? l??m s???ch s???n ph???m. Sau ????, lau kh?? s???n ph???m b???ng
                kh??n
                m???m.</p>

            <p>Kh??ng ????? s???n ph???m ti???p x??c v???i n?????c ho???c ngu???n nhi???t ????? cao trong th???i gian d??i.</p>

            <p>Kh??ng d??ng c??c v???t s???c nh???n, th?? c???ng, s???n s??i ch?? x??t s???n ph???m.</p>

            <h3 class="text-base font-semibold">B???o h??nh:</h3>

            <p>Th???i h???n b???o h??nh: N???m 12 th??ng, khung 24 th??ng</p>

            <p>B???o h??nh cho c??c s???n ph???m c?? l???i nguy??n v???t li???u hay l???i t??? nh?? s???n xu???t (nh?? m??p, m??o, cong v??nh c??c chi
                ti???t
                s???n ph???m, bong tr??c s??n,...). Ho???c c??c s???n ph???m b??? b??? v???/ tr???y x?????c/ bi???n d???ng trong qu?? tr??nh v???n
                chuy???n.</p>

            <p>Kh??ng b???o h??nh cho c??c s???n ph???m h?? h???ng trong qu?? tr??nh qu?? kh??ch s??? d???ng do s??? d???ng kh??ng c???n th???n, b???o
                qu???n v??
                v??? sinh kh??ng ????ng c??ch. C??ng nh?? s???n ph???m b??? c??c hao m??n th??ng th?????ng (nh?? phai m???, r??? s??t do tr???y
                x?????c, l???ng
                ???c v??t sau m???t kho???ng th???i gian...).</p>
        </div>
    </div>
</div>

<!-- <div class="flex gap-5 border-t">
    {{-- <div class="tab-button active" onclick="openTab('tab1', event)">M?? t??? s???n ph???m</div> --}}
    <div style="font-weight: bold;">H?????ng d???n b???o qu???n</div>
    {{-- <div class="tab-button " onclick="openTab('tab3', event)">Ph?? giao h??ng v?? l???p ?????t</div> --}}
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