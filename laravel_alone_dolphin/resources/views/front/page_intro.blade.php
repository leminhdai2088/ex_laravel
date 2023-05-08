{{-- @extends('front.header') --}}
@extends('components.layout')
@section('head')

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Chào mừng đến với trang giới thiệu của chúng tôi! Chúng tôi là một cửa hàng bán nội thất chất lượng cao với đầy đủ các sản phẩm từ sofa, bàn ăn, giường ngủ, tủ quần áo, đèn, tấm trang trí và rất nhiều sản phẩm nội thất khác. Với chất lượng hàng đầu và giá cả hợp lý, chúng tôi cam kết mang đến cho khách hàng trải nghiệm mua sắm nội thất tốt nhất." />
    <meta name="keywords" content="nội thất, nội thất Fudo, nội thất giá rẻ, sofa, bàn ăn, giường ngủ, tủ quần áo, đèn, trang trí, mua sắm" />
    <meta name="author" content="Fudo" />
    <title>Giới thiệu - Nội thất Fudo</title>
    {{-- <link rel="stylesheet" href="/front/css/footer.css"> --}}
    <link rel="stylesheet" href="/front/css/page_intro.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <script src="https://kit.fontawesome.com/fb8327464e.js" crossorigin="anonymous"></script>
    <style>
        .w-full.md\:w-\[95vw\].desktop\:w-\[1200px\].mx-auto.mt-16.md\:mt-16.mb-10.min-h-\[80vh\]{
            width: 100% !important;
        }
    </style>
@endsection
@section('content')
    <!-- main -->
    <main class="main-content">
        <div class="background-image-heading">
            <div class="header-background-info">
                <h2>Giới thiệu</h2>
            </div>
        </div>
        <div class="noidung">
            <div class="col-md-8">
                <div class="_about">
                    <h3>Hack your space - Hack your life</h3>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>“Less is More" là một ngụ ý trong tư duy và thiết kế về sự đúng đắn trong việc tối giản hoá mọi thứ.
                        Triết lý này trở nên nổi tiếng và lan toả mạnh mẽ vào những năm đầu thế kỷ 20, khi song hành cùng vị
                        kiến trúc sư huyền thoại Ludwig Mies Van Der Rohe của trường phái Minimalism – Chủ nghĩa tối giản.
                    </p>
                    <p>&nbsp;</p>
                    <p>Kế thừa tư duy đó và một mong muốn tạo dựng những không gian sống mang tính chuẩn mực và hiện đại,
                        những người trẻ chúng tôi đã cùng nhau cho ra đời NỘI THẤT FUDO. Câu chuyện được bắt đầu từ cuối năm
                        2022 bởi một kiến trúc sư trẻ tuổi, NỘI THẤT FUDO bước đầu nhận được khá nhiều sự ủng hộ của các bạn
                        trẻ và vẫn đang tiếp tục những chương mới. Tại NỘI THẤT FUDO, tất cả sản phẩm trang trí nội thất &
                        giải pháp không gian sống không chỉ đơn thuần tuân thủ theo ngôn ngữ giản lược của Minimalism, mà
                        còn cân bằng được tính năng và độ thẩm mỹ cần có.</p>
                    <p>&nbsp;</p>
                    <p>“Ít tức là nhiều", nhưng mỗi chi tiết xuất hiện trên thiết kế đều là một sự chăm chút kỹ lưỡng và
                        hoàn hảo. Và đó cũng chính là tôn chỉ hoạt động của NỘI THẤT FUDO. Với tinh thần cầu tiến luôn cố
                        gắng hết mình để cung cấp những sản phẩm chất lượng cộng với dịch vụ thân thiện cho khách hàng,
                        chúng tôi hy vọng có thể chia sẻ một niềm tin cố hữu với tất cả mọi người: “Cuộc sống sẽ trở nên tốt
                        đẹp hơn khi không gian sống được quan tâm và đầu tư đúng mực.”</p>
                </div>
            </div>
            <div class="col-md-4">
                <img src="/front/images/noithatfudo.png" alt="Nội thất Fudo">
            </div>
        </div>
        <div class="parallax"></div>
        <div class="iconbox">
            <div class="iconbox-title">
                <span class="icon"><img src="/front/images/img_page_intro/icon_about_1.webp" alt="icon1"></span>
                <h3>TRUYỀN CẢM HỨNG</h3>
                <p>Chúng tôi tin rằng: Không gian sống đẹp có thể làm thay đổi chất lượng cuộc sống của bạn. Và chúng tôi
                    mong mỏi truyền tải niềm tin đó đến cho mọi người để ai cũng có một nơi đáng sống.</p>
            </div>
            <div class="iconbox-title">
                <span class="icon"><img src="/front/images/img_page_intro/icon_about_2.webp" alt="icon2"></span>
                <h3>ĐỊNH HƯỚNG THẨM MỸ</h3>
                <p>Chúng tôi không chỉ cung cấp sản phẩm nội thất, chúng tôi mang cho bạn phong cách sống. “Less is more” -
                    Một sự đơn giản nhất định nhưng tinh tế trong không gian sống sẽ giúp bạn dễ dàng cân bằng hơn trong
                    cuộc sống.</p>
            </div>
            <div class="iconbox-title">
                <span class="icon"><img src="/front/images/img_page_intro/icon_about_3.webp" alt="icon3"></span>
                <h3>XÂY DỰNG GIÁ TRỊ VIỆT</h3>
                <p>Ứng dụng và phát triển những giá trị truyền thống vào không gian sống hiện đại là một trong những đặc
                    điểm để khẳng định và làm cho chúng tôi trở nên khác biệt. Chúng tôi muốn trở thành một thương hiệu Việt
                    vì người Việt.</p>
            </div>
        </div>
        <div class="nr_line"></div>

        <div class="title-ourteam">
            <h1>Giá trị cốt lõi</h1>
        </div>
        <div class="ourteam">
            <div class="nr-ourteams">
                <figure>
                    <img src="/front/images/img_page_intro/about_s4_item1.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                </figure>
                <div class="ourteams-text">
                    <h4>KẾT NỐI</h4>
                    <p>Mọi hoạt động sẽ chỉ diễn ra khi có sự kết nối. NỘI THẤT FUDO luôn cố gắng vun đắp cho những mối quan
                        hệ thiết yếu: Người tiêu dùng - Thương hiệu; Nhân viên - Thương hiệu; Người tiêu dùng - Nhân viên.
                    </p>
                </div>
            </div>
            <div class="nr-ourteams">
                <figure>
                    <img src="/front/images/img_page_intro/about_s4_item2.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                </figure>
                <div class="img_overlay"></div>
                <div class="ourteams-text">
                    <h4>THÂN THIỆN</h4>
                    <p>NỘI THẤT FUDO xây dựng một thương hiệu thân thiện thông qua cách chúng tôi làm sản phẩm và đem sản
                        phẩm đó đến tay của bạn. Một sản phẩm thân thiện được cung cấp bởi một dịch vụ thân thiện chính là
                        Kim chỉ nam để thành công của chúng tôi.</p>
                </div>
            </div>
            <div class="nr-ourteams">
                <figure>
                    <img src="/front/images/img_page_intro/about_s4_item3.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                </figure>
                <div class="ourteams-text">
                    <h4>CHỦ ĐỘNG</h4>
                    <p>NỘI THẤT FUDO chủ động thay đổi để không ngừng phát triển. Ngoài ra, khách hàng, bằng những sản phẩm
                        của chúng tôi, có thể chủ động trong việc tạo nên phong cách sống riêng biệt trong không gian của
                        mỗi người.</p>
                </div>
            </div>
        </div>
        <div class="nr_line"></div>
        <div class="section-iconboxes-contact">
            <div class="contact-info">
                <div class="contact-address">
                    <h4>Thông tin liên hệ</h4>
                    <div class="ts-address">
                        <ul class="list-info">
                            <li>
                                <strong>Công ty TNHH Kiến trúc và Nội thất NỘI THẤT FUDO </strong>
                            </li>
                            <li>
                                <strong>Số điện thoại: </strong>0902928426
                            </li>
                            <li>
                                <strong>Email: </strong> <a href="mailto: 20521427@gm.uit.edu.vn">noithatfudo@gmail.com</a>
                            </li>
                            <li>
                                <strong>Địa chỉ: </strong>Trường Đại Học Công Nghệ Thông Tin
                            </li>
                        </ul>
                    </div>
                    <p>&nbsp;</p>
                </div>

                <div class="contact-time">
                    <h4>Giờ làm việc</h4>
                    <div class="ts-time">
                        <ul class="list-info">
                            <li>
                                <strong>Văn phòng: </strong>Thứ 2 – Thứ 7; 9:00 – 18:00
                            </li>
                            <li>
                                <strong>Cửa hàng: </strong>Thứ 2 – Chủ Nhật; 9:00 – 21:00
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="contact-map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.2368227197717!2d106.8020961196638!3d10.869583787997934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317527587e9ad5bf%3A0xafa66f9c8be3c91!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBDw7RuZyBuZ2jhu4cgVGjDtG5nIHRpbiAtIMSQSFFHIFRQLkhDTQ!5e0!3m2!1svi!2s!4v1667025500659!5m2!1svi!2s"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="share-you-moment">
            <div class="col-xs-12 col-sm-9">
                <div class="owl-stage-outer">
                    <div class="img-container">
                        <div class="no-scrollbar image-slider-2">
                            <!-- add image -->
                            <img src="/front/images/img_page_intro/imgslide1.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                        </div>
                        <div class="no-scrollbar image-slider-2">
                            <!-- add image -->
                            <img src="/front/images/img_page_intro/imgslide2.jpg" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                        </div>
                        <div class="no-scrollbar image-slider-2">
                            <!-- add image -->
                            <img src="/front/images/img_page_intro/imgslide3.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                        </div>
                        <div class="no-scrollbar image-slider-2">
                            <!-- add image -->
                            <img src="/front/images/img_page_intro/imgslide4.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                        </div>
                        <div class="no-scrollbar image-slider-2">
                            <!-- add image -->
                            <img src="/front/images/img_page_intro/imgslide5.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                        </div>
                        <div class="no-scrollbar image-slider-2">
                            <!-- add image -->
                            <img src="/front/images/img_page_intro/imgslide6.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                        </div>
                        <div class="no-scrollbar image-slider-2">
                            <!-- add image -->
                            <img src="/front/images/img_page_intro/imgslide7.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                        </div>
                        <div class="no-scrollbar image-slider-2">
                            <!-- add image -->
                            <img src="/front/images/img_page_intro/imgslide8.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                        </div>
                        <div class="no-scrollbar image-slider-2">
                            <!-- add image -->
                            <img src="/front/images/img_page_intro/imgslide9.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                        </div>
                        <div class="no-scrollbar image-slider-2">
                            <!-- add image -->
                            <img src="/front/images/img_page_intro/imgslide10.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                        </div>
                        <div class="no-scrollbar image-slider-2">
                            <!-- add image -->
                            <img src="/front/images/img_page_intro/imgslide11.jpg" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                        </div>
                        <div class="no-scrollbar image-slider-2">
                            <!-- add image -->
                            <img src="/front/images/img_page_intro/imgslide12.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                        </div>
                        <div class="no-scrollbar image-slider-2">
                            <!-- add image -->
                            <img src="/front/images/img_page_intro/imgslide13.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                        </div>
                        <div class="no-scrollbar image-slider-2">
                            <!-- add image -->
                            <img src="/front/images/img_page_intro/imgslide14.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                        </div>
                        <div class="no-scrollbar image-slider-2">
                            <!-- add image -->
                            <img src="/front/images/img_page_intro/imgslide15.jpg" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                        </div>
                        <div class="no-scrollbar image-slider-2">
                            <!-- add image -->
                            <img src="/front/images/img_page_intro/imgslide16.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                        </div>
                        <div class="no-scrollbar image-slider-2">
                            <!-- add image -->
                            <img src="/front/images/img_page_intro/imgslide17.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                        </div>
                        <div class="no-scrollbar image-slider-2">
                            <!-- add image -->
                            <img src="/front/images/img_page_intro/imgslide18.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                        </div>
                        <div class="no-scrollbar image-slider-2">
                            <!-- add image -->
                            <img src="/front/images/img_page_intro/imgslide19.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                        </div>
                        <div class="no-scrollbar image-slider-2">
                            <!-- add image -->
                            <img src="/front/images/img_page_intro/imgslide20.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                        </div>
                        <div class="no-scrollbar image-slider-2">
                            <!-- add image -->
                            <img src="/front/images/img_page_intro/imgslide21.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                        </div>
                        <div class="no-scrollbar image-slider-2">
                            <!-- add image -->
                            <img src="/front/images/img_page_intro/imgslide22.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                        </div>
                        <div class="no-scrollbar image-slider-2">
                            <!-- add image -->
                            <img src="/front/images/img_page_intro/imgslide23.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                        </div>
                        <div class="no-scrollbar image-slider-2">
                            <!-- add image -->
                            <img src="/front/images/img_page_intro/imgslide24.jpg" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                        </div>
                        <div class="no-scrollbar image-slider-2">
                            <!-- add image -->
                            <img src="/front/images/img_page_intro/imgslide25.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                        </div>
                        <div class="no-scrollbar image-slider-2">
                            <!-- add image -->
                            <img src="/front/images/img_page_intro/imgslide26.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                        </div>
                        <div class="no-scrollbar image-slider-2">
                            <!-- add image -->
                            <img src="/front/images/img_page_intro/imgslide27.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                        </div>
                        <div class="no-scrollbar image-slider-2">
                            <!-- add image -->
                            <img src="/front/images/img_page_intro/imgslide28.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                        </div>
                        <div class="no-scrollbar image-slider-2">
                            <!-- add image -->
                            <img src="/front/images/img_page_intro/imgslide29.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                        </div>
                        <div class="no-scrollbar image-slider-2">
                            <!-- add image -->
                            <img src="/front/images/img_page_intro/imgslide30.jpg" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                        </div>
                        <div class="no-scrollbar image-slider-2">
                            <!-- add image -->
                            <img src="/front/images/img_page_intro/imgslide31.jpg" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                        </div>
                        <div class="no-scrollbar image-slider-2">
                            <!-- add image -->
                            <img src="/front/images/img_page_intro/imgslide32.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                        </div>
                        <div class="no-scrollbar image-slider-2">
                            <!-- add image -->
                            <img src="/front/images/img_page_intro/imgslide33.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                        </div>
                        <div class="no-scrollbar image-slider-2">
                            <!-- add image -->
                            <img src="/front/images/img_page_intro/imgslide34.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                        </div>
                        <div class="no-scrollbar image-slider-2">
                            <!-- add image -->
                            <img src="/front/images/img_page_intro/imgslide35.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                        </div>
                        <div class="no-scrollbar image-slider-2">
                            <!-- add image -->
                            <img src="/front/images/img_page_intro/imgslide36.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                        </div>
                        <div class="no-scrollbar image-slider-2">
                            <!-- add image -->
                            <img src="/front/images/img_page_intro/imgslide37.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                        </div>
                        <div class="no-scrollbar image-slider-2">
                            <!-- add image -->
                            <img src="/front/images/img_page_intro/imgslide38.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                        </div>
                        <div class="no-scrollbar image-slider-2">
                            <!-- add image -->
                            <img src="/front/images/img_page_intro/imgslide39.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                        </div>
                        <div class="no-scrollbar image-slider-2">
                            <!-- add image -->
                            <img src="/front/images/img_page_intro/imgslide40.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                        </div>
                        <div class="no-scrollbar image-slider-2">
                            <!-- add image -->
                            <img src="/front/images/img_page_intro/imgslide41.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                        </div>
                        <div class="no-scrollbar image-slider-2">
                            <!-- add image -->
                            <img src="/front/images/img_page_intro/imgslide42.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                        </div>
                        <div class="no-scrollbar image-slider-2">
                            <!-- add image -->
                            <img src="/front/images/img_page_intro/imgslide43.jpg" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                        </div>
                        <div class="no-scrollbar image-slider-2">
                            <!-- add image -->
                            <img src="/front/images/img_page_intro/imgslide44.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                        </div>
                        <div class="no-scrollbar image-slider-2">
                            <!-- add image -->
                            <img src="/front/images/img_page_intro/imgslide45.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                        </div>
                        <div class="no-scrollbar image-slider-2">
                            <!-- add image -->
                            <img src="/front/images/img_page_intro/imgslide46.jpg" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                        </div>
                        <div class="no-scrollbar image-slider-2">
                            <!-- add image -->
                            <img src="/front/images/img_page_intro/imgslide47.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                        </div>
                        <div class="no-scrollbar image-slider-2">
                            <!-- add image -->
                            <img src="/front/images/img_page_intro/imgslide48.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                        </div>
                        <div class="no-scrollbar image-slider-2">
                            <!-- add image -->
                            <img src="/front/images/img_page_intro/imgslide49.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                        </div>
                        <div class="no-scrollbar image-slider-2">
                            <!-- add image -->
                            <img src="/front/images/img_page_intro/imgslide50.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                        </div>
                        <div class="no-scrollbar image-slider-2">
                            <!-- add image -->
                            <img src="/front/images/img_page_intro/imgslide51.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                        </div>
                        <div class="no-scrollbar image-slider-2">
                            <!-- add image -->
                            <img src="/front/images/img_page_intro/imgslide52.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                        </div>
                        <div class="no-scrollbar image-slider-2">
                            <!-- add image -->
                            <img src="/front/images/img_page_intro/imgslide53.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                        </div>
                        <div class="no-scrollbar image-slider-2">
                            <!-- add image -->
                            <img src="/front/images/img_page_intro/imgslide54.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                        </div>
                        <div class="no-scrollbar image-slider-2">
                            <!-- add image -->
                            <img src="/front/images/img_page_intro/imgslide55.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                        </div>
                        <div class="no-scrollbar image-slider-2">
                            <!-- add image -->
                            <img src="/front/images/img_page_intro/imgslide56.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                        </div>
                        <div class="no-scrollbar image-slider-2">
                            <!-- add image -->
                            <img src="/front/images/img_page_intro/imgslide57.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                        </div>
                        <div class="no-scrollbar image-slider-2">
                            <!-- add image -->
                            <img src="/front/images/img_page_intro/imgslide58.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                        </div>
                        <div class="no-scrollbar image-slider-2">
                            <!-- add image -->
                            <img src="/front/images/img_page_intro/imgslide59.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                        </div>
                        <div class="no-scrollbar image-slider-2">
                            <!-- add image -->
                            <img src="/front/images/img_page_intro/imgslide60.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                        </div>
                        <div class="no-scrollbar image-slider-2">
                            <!-- add image -->
                            <img src="/front/images/img_page_intro/imgslide61.jpg" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                        </div>
                        <div class="no-scrollbar image-slider-2">
                            <!-- add image -->
                            <img src="/front/images/img_page_intro/imgslide62.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                        </div>
                        <div class="no-scrollbar image-slider-2">
                            <!-- add image -->
                            <img src="/front/images/img_page_intro/imgslide63.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                        </div>
                        <div class="no-scrollbar image-slider-2">
                            <!-- add image -->
                            <img src="/front/images/img_page_intro/imgslide64.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                        </div>
                        <div class="no-scrollbar image-slider-2">
                            <!-- add image -->
                            <img src="/front/images/img_page_intro/imgslide65.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                        </div>
                        <div class="no-scrollbar image-slider-2">
                            <!-- add image -->
                            <img src="/front/images/img_page_intro/imgslide66.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                        </div>
                        <div class="no-scrollbar image-slider-2">
                            <!-- add image -->
                            <img src="/front/images/img_page_intro/imgslide67.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                        </div>
                        <div class="no-scrollbar image-slider-2">
                            <!-- add image -->
                            <img src="/front/images/img_page_intro/imgslide68.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                        </div>
                        <div class="no-scrollbar image-slider-2">
                            <!-- add image -->
                            <img src="/front/images/img_page_intro/imgslide69.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                        </div>
                        <div class="no-scrollbar image-slider-2">
                            <!-- add image -->
                            <img src="/front/images/img_page_intro/imgslide70.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                        </div>
                        <div class="no-scrollbar image-slider-2">
                            <!-- add image -->
                            <img src="/front/images/img_page_intro/imgslide71.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                        </div>
                        <div class="no-scrollbar image-slider-2">
                            <!-- add image -->
                            <img src="/front/images/img_page_intro/imgslide72.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                        </div>
                        <div class="no-scrollbar image-slider-2">
                            <!-- add image -->
                            <img src="/front/images/img_page_intro/imgslide73.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                        </div>
                        <div class="no-scrollbar image-slider-2">
                            <!-- add image -->
                            <img src="/front/images/img_page_intro/imgslide74.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                        </div>
                        <div class="no-scrollbar image-slider-2">
                            <!-- add image -->
                            <img src="/front/images/img_page_intro/imgslide75.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                        </div>
                        <div class="no-scrollbar image-slider-2">
                            <!-- add image -->
                            <img src="/front/images/img_page_intro/imgslide76.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                        </div>
                        <div class="no-scrollbar image-slider-2">
                            <!-- add image -->
                            <img src="/front/images/img_page_intro/imgslide77.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                        </div>
                        <div class="no-scrollbar image-slider-2">
                            <!-- add image -->
                            <img src="/front/images/img_page_intro/imgslide78.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                        </div>
                        <div class="no-scrollbar image-slider-2">
                            <!-- add image -->
                            <img src="/front/images/img_page_intro/imgslide79.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                        </div>
                        <div class="no-scrollbar image-slider-2">
                            <!-- add image -->
                            <img src="/front/images/img_page_intro/imgslide80.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3">
                <a href="##">
                    <h3>Chia sẻ khoảnh khắc</h3>
                </a>
            </div>
        </div>
    </main>
    
    <!-- footer -->
    {{-- <div class="footer h-fit pb-46">
        <div class="m-auto grid grid-cols-3">
            <div class="footer-item">
                <div class="head-footer font-medium my-2">Về chúng tôi</div>
                <div class="text-gray-700 text-sm">
                    <div class="footer-text"><a href="#">Project này</a></div>
                    <div class="footer-text"><a href="#">Thành viên</a></div>
                </div>

            </div>
            <div class="footer-item">
                <div class="head-footer font-medium my-2">Sản phẩm</div>
                <div class="text-gray-700 text-sm">
                    <div class="footer-text"><a href="#">Giường</a></div>
                    <div class="footer-text"><a href="#">Bàn</a></div>
                    <div class="footer-text"><a href="#">Ghế</a></div>
                    <div class="footer-text"><a href="#">Chăn ga gối</a></div>
                </div>
            </div>
            <div class="footer-item">
                <div class="head-footer font-medium my-2">Liên hệ</div>
                <div class="text-gray-700 text-sm">
                    <div class="footer-text">Sđt: 090292xxxx</div>
                    <div class="footer-text">Email: 2052xxxx@gm.uit.edu.vn</div>
                    <div class="footer-text">Địa chỉ: trường đại học Công nghệ Thông tin</div>
                    <div class="link flex gap-5 mt-2">
                        <a href="#"><img src="/front/images/icon/facebook.svg" alt="Nội thất Fudo - Facebook" height="30"
                                width="30"></a>
                        <a href="#"><img src="/front/images/icon/youtube.svg" alt="Nội thất Fudo - Youtube" height="30"
                                width="30"></a>
                        <a href="#"><img src="/front/images/icon/behance.svg" alt="Nội thất Fudo - Behance" height="30"
                                width="30"></a>
                        <a href="#"><img src="/front/images/icon/wordpress.svg" alt="Nội thất Fudo - Wordpress" height="30"
                                width="30"></a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="/front/javascript/page_intro.js"></script>
@endsection
