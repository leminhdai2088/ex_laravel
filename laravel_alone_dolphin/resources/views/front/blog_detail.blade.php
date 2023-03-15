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
    <title>{{ $blog_detail[0]->title }} - Nội thất Fudo</title>
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
                        <li itemprop="itemListElement">{{$blog_detail[0]->title}}</li>
                    </ol>
                </div>
            </div>
        </div>
    <div class="container khung">
        <div class="row">
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 khung news-lastest">
                <h2>BÀI VIẾT MỚI NHẤT</h2>
                @foreach($blog_news as $blog_new)
                <div class="item-article row">
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                        <a href="/blog/{{$blog_new->id}}"><img src="/front/images/image_blog/{{ $blog_new->image }}" alt="{{$blog_new->title}}"></a>
                    </div>
                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                        <a href="/blog/{{$blog_new->id}}">
                            <h3>{{$blog_new->title}}</h3>
                        </a> 
                    </div>
                </div>
                @endforeach
            </div>
            <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 content-container khung">
                <img src="/front/images/image_blog/{{ $blog_detail[0]->image }}" alt="{{ $blog_detail[0]->title }}">
                <div class="content-header">
                    <h1>{{ $blog_detail[0]->title }}</h1>
                    <p>Được đăng ngày {{ $blog_detail[0]->created_at }} by {{ $blog_detail[0]->author }}</p>
                    <p>Từ khóa: {{ $blog_detail[0]->keywords }}</p>
                </div>
                <div class="content-main">
                    <p>{{ $blog_detail[0]->short_description }}</p>
                    <p>{{ $blog_detail[0]->content }}</p>
                </div>

            </div>
        </div>
    </div>
    </div>
@endsection