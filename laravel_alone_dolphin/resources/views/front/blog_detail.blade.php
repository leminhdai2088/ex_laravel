@extends('components.layout')
@section('head')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    "url": "http://noithatfudo.vn/blog/2"
  },{
    "@type": "HowToStep",
    "text": "Sử dụng đèn chiếu sáng để tạo ra không gian sáng hơn",
    "name": "Sử dụng đèn chiếu sáng",
    "url": "http://noithatfudo.vn/blog/2"
  },{
    "@type": "HowToStep",
    "text": "Tiết kiệm không gian và đa dạng hóa",
    "name": "Sử dụng nội thất thông minh",
    "url": "http://noithatfudo.vn/blog/2"
  },{
    "@type": "HowToStep",
    "text": "Tạo ra sự tươi mới và phong phú",
    "name": "Đa dạng hoá vật dụng trang trí",
    "url": "http://noithatfudo.vn/blog/2"
  },{
    "@type": "HowToStep",
    "text": "Sắp xếp đồ đạc một cách hợp lý để không gian trở nên gọn gàng và dễ chịu hơn",
    "name": "Sắp xếp hợp lý",
    "url": "http://noithatfudo.vn/blog/2"
  }]    
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org/", 
  "@type": "HowTo", 
  "name": "Làm sao để sắp xếp nội thất phòng ăn đẹp và thông thoáng?",
  "description": "Các xu hướng thiết kế nội thất đang được ưa chuộng trong năm 2023 và cách áp dụng chúng vào không gian sống của bạn",
  "image": "http://noithatfudo.vn/front/images/image_blog/thiet-ke-phong-an-va-bep.png",
  "step": [{
    "@type": "HowToStep",
    "text": "Lựa chọn bộ bàn ghế phù hợp với diện tích phòng ăn và phong cách thiết kế của căn nhà",
    "name": "Lựa chọn bộ bàn ghế phù hợp",
    "url": "http://noithatfudo.vn/blog/4"
  },{
    "@type": "HowToStep",
    "text": "Chọn các món đồ nội thất phù hợp với phong cách thiết kế của căn nhà",
    "name": "Chọn nội thất phù hợp với phong cách thiết kế của căn nhà",
    "url": "http://noithatfudo.vn/blog/4"
  },{
    "@type": "HowToStep",
    "text": "Bạn nên chọn tủ kệ có nhiều ngăn để tiện lợi cho việc lưu trữ",
    "name": "Lưu trữ đồ dùng ăn uống",
    "url": "http://noithatfudo.vn/blog/4"
  },{
    "@type": "HowToStep",
    "text": "Nội thất thông minh là một giải pháp tối ưu cho phòng ăn nhỏ",
    "name": "Sử dụng nội thất thông minh",
    "url": "http://noithatfudo.vn/blog/4"
  },{
    "@type": "HowToStep",
    "text": "Bố trí bàn ăn và ghế là một yếu tố quan trọng trong sự thoải mái của phòng ăn",
    "name": "Bố trí bàn ăn và ghế sao cho hợp lý",
    "url": "http://noithatfudo.vn/blog/4"
  },{
    "@type": "HowToStep",
    "text": "Bạn nên tận dụng tối đa không gian trống bằng cách chọn bộ bàn ghế nhỏ, hình vuông hoặc tròn",
    "name": "Tận dụng không gian trống",
    "url": "http://noithatfudo.vn/blog/4"
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
                    
                    <?php
                    $content = $blog_detail[0]->content;
                    $content .="
                    Xem thêm tại nội thất Fudo: https://noithatfudo.vn";
                    $content = nl2br($content);
                    
                    $formatted_content = preg_replace("/(https?:\/\/[^\s]+)/", '<a href="$1">$1</a>', $content);
                    echo '<div>'.$formatted_content.'</div>';
                    ?>
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
              <div class="rating-content">
                <form action="" method="POST">
                  <div class="container">

                    <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                      <img src="https://static2.yan.vn/YanNews/2167221/202102/facebook-cap-nhat-avatar-doi-voi-tai-khoan-khong-su-dung-anh-dai-dien-e4abd14d.jpg" alt="">
                    </div>
                    <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
                      <p>Nguyễn Tuấn Kha</p>
                      <input type="textarea" name="comment-rating" class="comment-area" placeholder="Viết bình luận...">
                      <div id="rateYo"></div>
                      <input type="hidden" name="star-rating" id="user-comment-rating" value="">
                      <button type="submit" name="submit" class="btn btn-primary" id="submit">Gửi</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
        </div>
    </div>
    </div>
    <script>
      $(function () {
          $("#rateYo").rateYo({
            starWidth: "20px",
            rating: 3.6
          }).on("rateyo.set", function (e, data) {
              $('#user-comment-rating').val(data.rating);
              alert("The rating is set to " + data.rating + "!");
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