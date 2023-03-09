@extends('components.layout')
@section('head')
    <meta name="description" content="Cập nhật những xu hướng mới nhất về thiết kế nội thất và chia sẻ kinh nghiệm trong việc trang trí không gian sống tại Blog của chúng tôi. Khám phá ngay!">
    <meta name="keywords" content="nội thất, thiết kế nội thất, trang trí nội thất, blog nội thất">
    <meta name="author" content="Nội thất Fudo">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/front/css/footer.css">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css">
    <link rel="stylesheet" href="/front/css/page_blog.css">
    <link rel="stylesheet" href="/front/css/page_home/vendor/bootstrap.css">
    <script src="/front/css/page_home/vendor/bootstrap.js"></script>
    
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <title>Blog</title>
    <style>
        img{
            width: 100%;
        }
        .logo img{
            height: 64;
        }
        .h-16{
            height: 4rem !important;
        }
        .link img{
            height: 50px !important;
        }
        .header {
            padding: 0 0 !important;
        }
    </style>
@endsection
@section('content')
<div>
    <div class="container-fluid">
            <div class="container">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd5 blog-breadcrumb ">
                    <ol>
                        <li itemprop="itemListElement"><a href="/">Trang chủ</a></li>
                        <li itemprop="itemListElement"><a href="/blog">Blog</a></li>
                    </ol>
                </div>
            </div>
        </div>
    <div class="container khung">
        <div class="row">
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 khung news-lastest">
                <h2>BÀI VIẾT MỚI NHẤT</h2>
                <div class="item-article row">
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                        <img src="https://i.pinimg.com/736x/40/2e/fb/402efb447e81660e3973a6af5d3a9e87.jpg" alt="">
                    </div>
                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                        <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3> 
                    </div>
                </div>
                <div class="item-article row">
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                        <img src="https://i.pinimg.com/736x/40/2e/fb/402efb447e81660e3973a6af5d3a9e87.jpg" alt="">
                    </div>
                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                        <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3> 
                    </div>
                </div>
                <div class="item-article row">
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                        <img src="https://i.pinimg.com/736x/40/2e/fb/402efb447e81660e3973a6af5d3a9e87.jpg" alt="">
                    </div>
                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                        <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3> 
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 content-container khung">
                <h1 class="khung">Blog</h1>
                <div class="blog-posts">
                    <div class="blog-post row khung">
                    
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <img src="https://file.hstatic.net/200000065946/article/noi-that-moho-khai-truong-cua-hang-vinhomes-smart-city-7_0b2c19660d5c4f1aa45f15ad6eb32bba_large.jpg" alt="">
                        </div>
                    
                        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                            <a>Toàn cảnh Nội Thất MOHO khai trương cửa hàng đầu tiên tại Hà Nội</a>
                            <p>Vào thứ 7 ngày 22/10/2022 vừa qua, Nội Thất MOHO chính thức khai trương cửa hàng đầu tiên tại Hà Nội ở S3.03-Sh15 phân khu...</p>
                        </div>
                    
                    </div>
                    <div class="blog-post row khung">
                    
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <img src="https://file.hstatic.net/200000065946/article/noi-that-moho-khai-truong-cua-hang-vinhomes-smart-city-7_0b2c19660d5c4f1aa45f15ad6eb32bba_large.jpg" alt="">
                    </div>
                    
                    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                        <a>Toàn cảnh Nội Thất MOHO khai trương cửa hàng đầu tiên tại Hà Nội</a>
                        <p>Vào thứ 7 ngày 22/10/2022 vừa qua, Nội Thất MOHO chính thức khai trương cửa hàng đầu tiên tại Hà Nội ở S3.03-Sh15 phân khu...</p>
                    </div>
                    
                </div>
                <div class="blog-post row khung">
                    
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <img src="https://file.hstatic.net/200000065946/article/noi-that-moho-khai-truong-cua-hang-vinhomes-smart-city-7_0b2c19660d5c4f1aa45f15ad6eb32bba_large.jpg" alt="">
                    </div>
                    
                    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                        <a>Toàn cảnh Nội Thất MOHO khai trương cửa hàng đầu tiên tại Hà Nội</a>
                        <p>Vào thứ 7 ngày 22/10/2022 vừa qua, Nội Thất MOHO chính thức khai trương cửa hàng đầu tiên tại Hà Nội ở S3.03-Sh15 phân khu...</p>
                    </div>
                    
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection