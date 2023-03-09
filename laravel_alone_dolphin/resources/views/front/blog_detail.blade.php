@extends('components.layout')
@section('head')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/front/css/footer.css">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css">
    <link rel="stylesheet" href="/front/css/page_blog.css">
    <link rel="stylesheet" href="/front/css/page_home/vendor/bootstrap.css">
    <script src="/front/css/page_home/vendor/bootstrap.js"></script>
    <title>Document</title>
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
                        <li itemprop="itemListElement">Tên bài Blog</li>
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
                <img src="https://file.hstatic.net/200000065946/article/noi-that-moho-tham-du-trien-lam-vifa-expo-2023_95dd80a26a324776b967737e4deac9ee_1024x1024.jpg" alt="">
                <h1>Nội Thất MOHO tham gia triển lãm đồ gỗ VIFA EXPO 2023</h1>
                <p>Ngày đăng: 12/12/2022</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam fugiat facilis, reiciendis inventore fugit praesentium eius magnam porro aspernatur similique pariatur eaque sapiente aut mollitia nesciunt ad cum rerum perferendis.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam fugiat facilis, reiciendis inventore fugit praesentium eius magnam porro aspernatur similique pariatur eaque sapiente aut mollitia nesciunt ad cum rerum perferendis.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam fugiat facilis, reiciendis inventore fugit praesentium eius magnam porro aspernatur similique pariatur eaque sapiente aut mollitia nesciunt ad cum rerum perferendis.</p>

            </div>
        </div>
    </div>
    </div>
@endsection