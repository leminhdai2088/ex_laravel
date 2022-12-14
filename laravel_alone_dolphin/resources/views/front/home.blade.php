@extends('components.layout')
@section('head')
<head>
  <link rel="stylesheet" href="/front/css/page_home/page_home.css">
  <link rel="stylesheet" href="/front/css/page_home/vendor/bootstrap.css">
  <script src="/front/css/page_home/vendor/bootstrap.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <!-- nivo slider -->
  <link rel="stylesheet" href="/front/css/page_home/nivo-slider/themes/default/default.css" type="text/css"
    media="screen" />
  <link rel="stylesheet" href="/front/css/page_home/nivo-slider/nivo-slider.css" type="text/css" media="screen" />
  <style>
    .w-full {
    width: 100% !important;
  }
  .slick-slide {
    
    height: auto !important;
}
  .w-\[1200px\]{
    width: auto !important;
    padding: 0 10rem !important;
  }
  </style>
</head>
@endsection
@section('content')
<!-- Slideshow container -->
<div id="slider" class="nivoSlider">
  <img src="/front/images/img_home/bg1.png" data-thumb="images/toystory.jpg" alt="" />
  <img src="/front/images/img_home/bg2.png" data-thumb="images/up.jpg" alt="" />
  <img src="/front/images/img_home/img_slider_2.jpg" data-thumb="images/walle.jpg" alt=""
    data-transition="slideInLeft" />
  <img src="/front/images/img_home/img_slider_5.jpg" data-thumb="images/nemo.jpg" alt="" />
</div>




<div class="slideshow-content-1 container-fluid">
  <div class="image-slider-0 row">
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
      <div class="image-0">
        <img src="/front/images/img_home/depkeusa.png" alt="">
      </div>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 danhmucsanpham">

      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
        <h3 style="font-size: 24px;">Danh mục sản phẩm</h3>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <img src="/front/images/img_home/sofa.png" alt="">
        <p>SOFA - sofas</p>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <img src="/front/images/img_home/bàn.png" alt="">
        <p>BÀN - tables</p>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <img src="/front/images/img_home/ghế.png" alt="">
        <p>GHẾ - chairs</p>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <img src="/front/images/img_home/tủ.png" alt="">
        <p>BỘ SƯU TẬP - collections</p>
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 danhmuc2">
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <img src="/front/images/img_home/product/guong.png" alt="">
        <p>GƯƠNG - mirrors</p>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <img src="/front/images/img_home/product/den.png" alt="">
        <p>ĐÈN - lamps</p>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <img src="/front/images/img_home/product/giuong.png" alt="">
        <p>GIƯỜNG - beds</p>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <img src="/front/images/img_home/product/ketu.png" alt="">
        <p>KỆ TỦ - shelf units, cabinets</p>
      </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 danhmuc2">

      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <img src="/front/images/img_home/product/changagoi.png" alt="">
        <p>CHĂN, GA, GỐI - Bedding</p>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <img src="/front/images/img_home/product/trangtri.png" alt="">
        <p>TRANG TRÍ - decorations</p>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <img src="/front/images/img_home/product/dogiadung.png" alt="">
        <p>ĐỒ GIA DỤNG - household goods</p>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <img src="/front/images/img_home/product/sanphamdetmay.png" alt="">
        <p>SẢN PHẨM DỆT MAY - home textile</p>
      </div>
    </div>
  </div>
</div>
<!-- end slideshow content -->



<!-- content body 2 -->
<div class="container content-body-23">
  <div class="row">

    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 content-body-2">
      <h3 class="first">M-Concept - Giải pháp nội thất toàn diện</h3>
      <p>Concept là gói sản phẩm nội thất và cải tạo không gian toàn diện theo thiết kế có sẵn từ thương hiệu Make My
        Home</p>

      <p>Concept by Make My Home sẽ mang đến những giải pháp nội thất tối giản với độ ứng dụng cao, phù hợp với nhiều
        phong cách khác nhau,
        tạo ra không gian sống tiện nghi, thoải mái và giúp bạn thực sự thư giãn mỗi khi trở về nhà.</p>
    </div>

    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-sm-push-1 col-md-push-1 col-lg-push-1 content-body-3">
      <h3>TRẢI NGHIỆM GIẢI PHÁP KHÔNG GIAN SỐNG MỚI CÙNG M-CONCEPT</h3>
      <h4>TIẾT KIỆM THỜI GIAN</h4>
      <h4>TỐI ƯU HOÁ NGÂN SÁCH</h4>
      <h4>ĐỊNH HÌNH THẨM MỸ CAO</h4>
    </div>

  </div>
</div>
</div>
<!-- SLIDER 2 ẢNH -->
<div class="share-moment">
  <div class="image-slider-1">
    <div class="image-item-1 col-xs-12 col-sm-6 col-md-6 col-lg-6">
      <div class="image-1">
        <img src="/front/images/img_home/dalat.png" alt="" width="">
      </div>
      <h4>DALAT GRACE Concept</h4>
    </div>
    <div class="image-item-1 col-xs-12 col-sm-6 col-md-6 col-lg-6">
      <div class="image-1">
        <img src="/front/images/img_home/EZ.png" alt="" width="">
      </div>
      <h4>EZ Concept</h4>
    </div>
    <div class="image-item-1 col-xs-12 col-sm-6 col-md-6 col-lg-6">
      <div class="image-1">
        <img src="/front/images/img_home/EZ-TINY.png" alt="" width="">
      </div>
      <h4>EZ TINY Concept</h4>
    </div>
    <div class="image-item-1 col-xs-12 col-sm-6 col-md-6 col-lg-6">
      <div class="image-1">
        <img src="/front/images/img_home/QUADA.png" alt="" width="">
      </div>
      <h4>QUADA Concept</h4>
    </div>
    <div class="image-item-1 col-xs-12 col-sm-6 col-md-6 col-lg-6">
      <div class="image-1">
        <img src="/front/images/img_home/SAGO.png" alt="" width="">
      </div>
      <h4>SAGO Concept</h4>
    </div>
  </div>
</div>

<!-- 4 Ảnh -->

<div class="container-fluid body-4-anh">
  <div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 image-items-2">

      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 image-items-2">
        <img src="/front/images/img_home/canho.png" alt="">
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 image-items-2">
        <img src="/front/images/img_home/nhapho.png" alt="">
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 image-items-2">
        <img src="/front/images/img_home/congcong.png" alt="">
      </div>

    </div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 image-items-2">
      <img src="/front/images/img_home/inspiration.png" alt="">
    </div>
  </div>
</div>
<!-- End body 4 anh -->

<!-- About Us -->
<div class="container-fluid about-us">
  <div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 about-us-content">
      <h3>About Us</h3>
      <br>
      <div class="about-content" style="margin-bottom: 3rem;">
        <p style="line-height: 34px;">Tại ALONE DOLPHINS, tất cả sản phẩm trang trí nội thất & giải pháp không gian sống không
          chỉ đơn thuần tuân thủ theo ngôn
          ngữ giản lược của Minimalism, mà còn cân bằng được tính năng và độ thẩm mỹ cần có.</p>
        <p style="line-height: 34px;">
          “Ít tức là nhiều", nhưng mỗi chi tiết xuất hiện trên thiết kế đều là một sự chăm chút kỹ lưỡng
          và hoàn hảo. Và đó cũng chính là tôn chỉ hoạt động của ALONE DOLPHINS. Với tinh thần cầu tiến luôn cố gắng hết
          mình để cung cấp những sản phẩm chất lượng cộng với dịch vụ thân thiện cho khách hàng, chúng tôi hy vọng có
          thể chia sẻ một niềm tin cố hữu với tất cả mọi người:
          “Cuộc sống sẽ trở nên tốt đẹp hơn khi không gian sống được quan tâm và đầu tư đúng mực.
        </p>
      </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 about-us-img">
      <img src="/front/images/img_home/about-us.png" alt="">
    </div>
  </div>
</div>
<!-- end about us -->

<!-- chia se khoanh khac -->
<div class="container-fluid chiasekhoanhkhac">
  <div class="row">

    <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
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

<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/front/css/page_home/nivo-slider/jquery.nivo.slider.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script src="/front/javascript/page_home.js"></script>
@endsection
