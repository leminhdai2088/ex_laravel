@extends('components.layout')
@section('head')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{$blog_detail[0]->short_description}}">
    <meta name="keywords" content="{{$blog_detail[0]->keywords}}">
    <link rel="stylesheet" href="/front/css/footer.css">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@1.0/dist/tailwind.min.css">
    <link rel="stylesheet" href="/front/css/page_blog.css">
    <link rel="stylesheet" href="/front/css/page_home/vendor/bootstrap.css">
    <script src="/front/css/page_home/vendor/bootstrap.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
    <script type="application/ld+json">
{
  "@context": "https://schema.org/", 
  "@type": "HowTo", 
  "name": "Làm thế nào để sắp xếp phòng khách thông minh?",
  "description": "Các gợi ý về cách sắp xếp phòng khách để tối ưu hóa không gian và tạo cảm giác thoải mái và dễ chịu cho người dùng.",
  "image": "http://noithatfudo.vn/front/images/image_blog/tai-sao-phai-tim-cach-sap-xep-phong-khach-nho.jpg",
  "estimatedCost": {
    "@type": "MonetaryAmount",
    "currency": "",
    "value": ""
  },
  "step": [{
    "@type": "HowToStep",
    "text": "Chọn bộ bàn ghế phù hợp với diện tích phòng khách",
    "name": "Bố trí bộ bàn ghế",
    "url": "http://noithatfudo.vn/blog/5-cach-sap-xep-phong-khach-thong-minh"
  },{
    "@type": "HowToStep",
    "text": "Sử dụng đèn chiếu sáng để tạo ra không gian sáng hơn",
    "name": "Sử dụng đèn chiếu sáng",
    "url": "http://noithatfudo.vn/blog/5-cach-sap-xep-phong-khach-thong-minh"
  },{
    "@type": "HowToStep",
    "text": "Tiết kiệm không gian và đa dạng hóa",
    "name": "Sử dụng nội thất thông minh",
    "url": "http://noithatfudo.vn/blog/5-cach-sap-xep-phong-khach-thong-minh"
  },{
    "@type": "HowToStep",
    "text": "Tạo ra sự tươi mới và phong phú",
    "name": "Đa dạng hoá vật dụng trang trí",
    "url": "http://noithatfudo.vn/blog/5-cach-sap-xep-phong-khach-thong-minh"
  },{
    "@type": "HowToStep",
    "text": "Sắp xếp đồ đạc một cách hợp lý để không gian trở nên gọn gàng và dễ chịu hơn",
    "name": "Sắp xếp hợp lý",
    "url": "http://noithatfudo.vn/blog/5-cach-sap-xep-phong-khach-thong-minh"
  }]    
}
</script>
    <title>{{ $blog_detail[0]->title }} - Nội thất Fudo</title>
    <style>
        img{
            width: 100%;
        }
        .logo img{
            height: 64px !important;
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
        .row{
          margin-bottom: 32px;
        }
        .content-container .content-main a{
          text-decoration: underline;
          color: #6565e3;
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
                        <a href="/blog/{{$blog_new->link}}"><img src="/front/images/image_blog/{{ $blog_new->image }}" alt="{{$blog_new->title}}"></a>
                    </div>
                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                        <a href="/blog/{{$blog_new->link}}">
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
                    <p>Được đăng{{ $blog_detail[0]->created_at }} bởi {{ $blog_detail[0]->author }}</p>
                    <p>Từ khóa: {{ $blog_detail[0]->keywords }}</p>
                </div>
                <div class="content-main">
                    <p>{{ $blog_detail[0]->short_description }}</p>
                    
                    <?php
                    $content = $blog_detail[0]->content;
                    $content .="
                    Xem thêm tại nội thất Fudo: <a href='https://noithatfudo.vn'>https://noithatfudo.vn</a>";
                    $content = nl2br($content);
                    ?>
                    <div>{!! $content !!}</div>
                </div>
              <div class="danhgiabaiviet">
                <div class="container">
                  
                  <div class="col-xs-8 col-sm-9 col-md-10 col-lg-10">
                    
                  </div>
                  
                  <div class="col-xs-4 col-sm-3 col-md-2 col-lg-2">
                    <h4>Đánh giá bài viết</h4>
                    <div class="total-rate" id="total-rate"></div>
                  </div>
                </div>
              </div>
              @if(auth()->user())
              <div class="rating-content">
                <form action="/blog/{{ $blog_detail[0]->link }}" method="POST">
                  <input type="hidden" name="_token" value="{{csrf_token()}}">
                  <div class="container">

                    <div class="col-xs-3 col-sm-2 col-md-1 col-lg-1">
                      <img src="https://static2.yan.vn/YanNews/2167221/202102/facebook-cap-nhat-avatar-doi-voi-tai-khoan-khong-su-dung-anh-dai-dien-e4abd14d.jpg" alt="">
                    </div>
                    <div class="col-xs-9 col-sm-10 col-md-11 col-lg-11">
                      <p class="user_name_comment">{{ auth()->user()->name }}</p>
                      <input type="textarea" name="messages" class="comment-area" placeholder="Viết bình luận..." required>
                      <div id="rateYo"></div>
                      <input type="hidden" name="stars" id="user-comment-rating">
                      <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                      <input type="hidden" name="email" value="{{ auth()->user()->email }}">
                      <input type="hidden" name="name" value="{{ auth()->user()->name }}">
                      <input type="hidden" name="blog_id" value="{{ $blog_detail[0]->id }}">
                      <button type="submit" style="background-color: #616bef; margin-top: 6px;" name="submit" class="btn btn-primary" id="submit">Gửi</button>
                    </div>
                  </div>
                </form>
              </div>
              @else 
              <div class="container forcelogin">
                <div class="row">
                  
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <a href="/sign_in">Đăng nhập để viết bình luận</a>
                  </div>
                  
                </div>
              </div>
              @endif
              <div class="blog-comment">
                <h3 class="comment-header">Bình luận</h3>
                <div class="container">
                  @foreach($blog_rating as $index)
                  <div class="row comment-item">
                    <div class="col-xs-3 col-sm-2 col-md-1 col-lg-1">
                    <img src="https://static2.yan.vn/YanNews/2167221/202102/facebook-cap-nhat-avatar-doi-voi-tai-khoan-khong-su-dung-anh-dai-dien-e4abd14d.jpg" alt="">
                    </div>
                    <div class="col-xs-9 col-sm-10 col-md-11 col-lg-11">
                      <p class="user_name_comment">{{ $index->name }}</p>
                      <p>{{ $index->messages }}</p>
                      <div id="rateResult{{ $index->id }}"></div>
                      <script>
                        $(function () {
                          $("#rateResult{{ $index->id }}").rateYo({
                              starWidth: "20px",
                              rating: "{{ $index->stars }}",
                              readOnly: true
                            });
                        });
                      </script>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
            </div>
        </div>
    </div>
    </div>
    <script>
      $(function () {
          $("#rateYo").rateYo({
            starWidth: "20px",
            rating: 0
          }).on("rateyo.set", function (e, data) {
              $('#user-comment-rating').val(data.rating);

              if(!$('#user-comment-rating').val())
                $('#user-comment-rating').val(0);
                
              alert("Số sao bạn muốn đánh giá là " + data.rating + "?");
            });
        });
      $(function () {
        $("#total-rate").rateYo({
            starWidth: "20px",
            rating: "{{$blog_star}}",
            readOnly: true
          });
      });
    </script>
@endsection