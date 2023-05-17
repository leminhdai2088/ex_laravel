@extends('components.layout')
@section('head')

  <link rel="stylesheet" href="/front/css/page_home/page_home.css">
  <link rel="stylesheet" href="/front/css/page_home/vendor/bootstrap.css">
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
  <!-- nivo slider -->
  <link rel="stylesheet" href="/front/css/page_home/nivo-slider/themes/default/default.css" type="text/css"
    media="screen">
  <title>Nội thất Fudo - UIT | Cửa hàng nội thất uy tín, chất lượng</title>
  <meta name="description" content="Nội thất Fudo cung cấp đa dạng các sản phẩm nội thất cao cấp từ ghế sofa, giường ngủ đến bàn ăn, tủ quần áo với giá cả cạnh tranh. Hãy truy cập ngay để chọn lựa sản phẩm phù hợp cho không gian sống của bạn. Miễn phí vận chuyển và lắp ráp nhanh chóng.">
  <meta name="keywords" content="nội thất, nội thất Fudo, nội thất giá rẻ, nội thất hiện đại, sofa, bàn ăn, giường ngủ, tủ quần áo, đèn, trang trí, mua sắm nội thất, nội thất thông minh">
  <link rel="stylesheet" href="/front/css/page_home/nivo-slider/nivo-slider.css" type="text/css" media="screen">
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "url": "https://noithatfudo.vn/",
      "logo": "https://noithatfudo.vn/front/images/Alone%20Dolphin.png"
    }
    </script>
  <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FurnitureStore",
  "name": "Nội thất Fudo",
  "image": "https://noithatfudo.vn/",
  "@id": "",
  "url": "https://noithatfudo.vn/",
  "telephone": "0972389257",
  "priceRange": "300.000đ - 20.000.000đ",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Trường đại học Công nghệ Thông tin, Phường Linh Trung, Quận Thủ Đức",
    "addressLocality": "Hồ Chí Minh",
    "postalCode": "720400",
    "addressCountry": "VN"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 10.8700089,
    "longitude": 106.8030541
  },
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday",
      "Saturday",
      "Sunday"
    ],
    "opens": "00:00",
    "closes": "23:59"
  }
}
</script>
<script type="application/ld+json">
    {
      "@context":"https://schema.org",
      "@type":"ItemList",
      "itemListElement":[
        {
          "@type":"ListItem",
          "position":1,
          "url":"https://noithatfudo.vn/living_room"
        },
        {
          "@type":"ListItem",
          "position":2,
          "url":"https://noithatfudo.vn/bed_room"
        },
        {
          "@type":"ListItem",
          "position":3,
          "url":"https://noithatfudo.vn/kitchen_room"
        },
        {
          "@type":"ListItem",
          "position":4,
          "url":"https://noithatfudo.vn/home_office"
        },
        {
          "@type":"ListItem",
          "position":5,
          "url":"https://noithatfudo.vn/bath_room"
        }
      ]
    }
    </script>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "name": "Sản phẩm",
        "item": "https://noithatfudo.vn"
      },{
        "@type": "ListItem",
        "position": 2,
        "name": "Phòng khách",
        "item": "https://noithatfudo.vn/living_room"
      },{
        "@type": "ListItem",
        "position": 3,
        "name": "Sofa"
      }]
    }
    </script>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "name": "Sản phẩm",
        "item": "https://noithatfudo.vn"
      },{
        "@type": "ListItem",
        "position": 2,
        "name": "Phòng khách",
        "item": "https://noithatfudo.vn/living_room"
      },{
        "@type": "ListItem",
        "position": 3,
        "name": "Ghế"
      }]
    }
    </script>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "name": "Sản phẩm",
        "item": "https://noithatfudo.vn"
      },{
        "@type": "ListItem",
        "position": 2,
        "name": "Phòng khách",
        "item": "https://noithatfudo.vn/living_room"
      },{
        "@type": "ListItem",
        "position": 3,
        "name": "Kệ, tủ tivi"
      }]
    }
    </script>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "name": "Sản phẩm",
        "item": "https://noithatfudo.vn"
      },{
        "@type": "ListItem",
        "position": 2,
        "name": "Phòng khách",
        "item": "https://noithatfudo.vn/living_room"
      },{
        "@type": "ListItem",
        "position": 3,
        "name": "Đồng hồ"
      }]
    }
    </script>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "name": "Sản phẩm",
        "item": "https://noithatfudo.vn"
      },{
        "@type": "ListItem",
        "position": 2,
        "name": "Phòng khách",
        "item": "https://noithatfudo.vn/living_room"
      },{
        "@type": "ListItem",
        "position": 3,
        "name": "Tranh ảnh"
      }]
    }
    </script>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "name": "Sản phẩm",
        "item": "https://noithatfudo.vn"
      },{
        "@type": "ListItem",
        "position": 2,
        "name": "Phòng khách",
        "item": "https://noithatfudo.vn/living_room"
      },{
        "@type": "ListItem",
        "position": 3,
        "name": "Gối trang trí"
      }]
    }
    </script>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "name": "Sản phẩm",
        "item": "https://noithatfudo.vn"
      },{
        "@type": "ListItem",
        "position": 2,
        "name": "Phòng khách",
        "item": "https://noithatfudo.vn/living_room"
      },{
        "@type": "ListItem",
        "position": 3,
        "name": "Đèn sàn"
      }]
    }
    </script>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "name": "Sản phẩm",
        "item": "https://noithatfudo.vn"
      },{
        "@type": "ListItem",
        "position": 2,
        "name": "Phòng khách",
        "item": "https://noithatfudo.vn/living_room"
      },{
        "@type": "ListItem",
        "position": 3,
        "name": "Kệ, tủ giày"
      }]
    }
    </script>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "name": "Sản phẩm",
        "item": "https://noithatfudo.vn"
      },{
        "@type": "ListItem",
        "position": 2,
        "name": "Phòng ngủ",
        "item": "https://noithatfudo.vn/bed_room"
      },{
        "@type": "ListItem",
        "position": 3,
        "name": "Giường"
      }]
    }
    </script>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "name": "Sản phẩm",
        "item": "https://noithatfudo.vn"
      },{
        "@type": "ListItem",
        "position": 2,
        "name": "Phòng ngủ",
        "item": "https://noithatfudo.vn/bed_room"
      },{
        "@type": "ListItem",
        "position": 3,
        "name": "Kệ/tủ quần áo"
      }]
    }
    </script>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "name": "Sản phẩm",
        "item": "https://noithatfudo.vn"
      },{
        "@type": "ListItem",
        "position": 2,
        "name": "Phòng ngủ",
        "item": "https://noithatfudo.vn/bed_room"
      },{
        "@type": "ListItem",
        "position": 3,
        "name": "Đèn sàn"
      }]
    }
    </script>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "name": "Sản phẩm",
        "item": "https://noithatfudo.vn"
      },{
        "@type": "ListItem",
        "position": 2,
        "name": "Phòng ngủ",
        "item": "https://noithatfudo.vn/bed_room"
      },{
        "@type": "ListItem",
        "position": 3,
        "name": "Bàn trang điểm"
      }]
    }
    </script>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "name": "Sản phẩm",
        "item": "https://noithatfudo.vn"
      },{
        "@type": "ListItem",
        "position": 2,
        "name": "Phòng ngủ",
        "item": "https://noithatfudo.vn/bed_room"
      },{
        "@type": "ListItem",
        "position": 3,
        "name": "Đèn bàn"
      }]
    }
    </script>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "name": "Sản phẩm",
        "item": "https://noithatfudo.vn"
      },{
        "@type": "ListItem",
        "position": 2,
        "name": "Phòng ngủ",
        "item": "https://noithatfudo.vn/bed_room"
      },{
        "@type": "ListItem",
        "position": 3,
        "name": "Đèn trang trí"
      }]
    }
    </script>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "name": "Sản phẩm",
        "item": "https://noithatfudo.vn"
      },{
        "@type": "ListItem",
        "position": 2,
        "name": "Phòng ngủ",
        "item": "https://noithatfudo.vn/bed_room"
      },{
        "@type": "ListItem",
        "position": 3,
        "name": "Tủ lưu trữ"
      }]
    }
    </script>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "name": "Sản phẩm",
        "item": "https://noithatfudo.vn"
      },{
        "@type": "ListItem",
        "position": 2,
        "name": "Phòng ngủ",
        "item": "https://noithatfudo.vn/bed_room"
      },{
        "@type": "ListItem",
        "position": 3,
        "name": "Kệ/tủ giày"
      }]
    }
    </script>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "name": "Sản phẩm",
        "item": "https://noithatfudo.vn"
      },{
        "@type": "ListItem",
        "position": 2,
        "name": "Phòng ngủ",
        "item": "https://noithatfudo.vn/bed_room"
      },{
        "@type": "ListItem",
        "position": 3,
        "name": "Giá/kệ treo trang trí"
      }]
    }
    </script>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "name": "Sản phẩm",
        "item": "https://noithatfudo.vn"
      },{
        "@type": "ListItem",
        "position": 2,
        "name": "Phòng ngủ",
        "item": "https://noithatfudo.vn/bed_room"
      },{
        "@type": "ListItem",
        "position": 3,
        "name": "Gương"
      }]
    }
    </script>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "name": "Sản phẩm",
        "item": "https://noithatfudo.vn"
      },{
        "@type": "ListItem",
        "position": 2,
        "name": "Bếp & Phòng ăn",
        "item": "https://noithatfudo.vn/kitchen_room"
      },{
        "@type": "ListItem",
        "position": 3,
        "name": "Bộ bàn ăn"
      }]
    }
    </script>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "name": "Sản phẩm",
        "item": "https://noithatfudo.vn"
      },{
        "@type": "ListItem",
        "position": 2,
        "name": "Bếp & Phòng ăn",
        "item": "https://noithatfudo.vn/kitchen_room"
      },{
        "@type": "ListItem",
        "position": 3,
        "name": "Bàn ăn"
      }]
    }
    </script>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "name": "Sản phẩm",
        "item": "https://noithatfudo.vn"
      },{
        "@type": "ListItem",
        "position": 2,
        "name": "Bếp & Phòng ăn",
        "item": "https://noithatfudo.vn/kitchen_room"
      },{
        "@type": "ListItem",
        "position": 3,
        "name": "Ghế ăn"
      }]
    }
    </script>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "name": "Sản phẩm",
        "item": "https://noithatfudo.vn"
      },{
        "@type": "ListItem",
        "position": 2,
        "name": "Bếp & Phòng ăn",
        "item": "https://noithatfudo.vn/kitchen_room"
      },{
        "@type": "ListItem",
        "position": 3,
        "name": "Thảm bếp"
      }]
    }
    </script>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "name": "Sản phẩm",
        "item": "https://noithatfudo.vn"
      },{
        "@type": "ListItem",
        "position": 2,
        "name": "Bếp & Phòng ăn",
        "item": "https://noithatfudo.vn/kitchen_room"
      },{
        "@type": "ListItem",
        "position": 3,
        "name": "Kệ bếp"
      }]
    }
    </script>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "name": "Sản phẩm",
        "item": "https://noithatfudo.vn"
      },{
        "@type": "ListItem",
        "position": 2,
        "name": "Bếp & Phòng ăn",
        "item": "https://noithatfudo.vn/kitchen_room"
      },{
        "@type": "ListItem",
        "position": 3,
        "name": "Khăn bếp"
      }]
    }
    </script>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "name": "Sản phẩm",
        "item": "https://noithatfudo.vn"
      },{
        "@type": "ListItem",
        "position": 2,
        "name": "Phòng làm việc",
        "item": "https://noithatfudo.vn/home_office"
      },{
        "@type": "ListItem",
        "position": 3,
        "name": "Bàn"
      }]
    }
    </script>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "name": "Sản phẩm",
        "item": "https://noithatfudo.vn"
      },{
        "@type": "ListItem",
        "position": 2,
        "name": "Phòng làm việc",
        "item": "https://noithatfudo.vn/home_office"
      },{
        "@type": "ListItem",
        "position": 3,
        "name": "Ghế"
      }]
    }
    </script>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "name": "Sản phẩm",
        "item": "https://noithatfudo.vn"
      },{
        "@type": "ListItem",
        "position": 2,
        "name": "Phòng làm việc",
        "item": "https://noithatfudo.vn/home_office"
      },{
        "@type": "ListItem",
        "position": 3,
        "name": "Đèn bàn"
      }]
    }
    </script>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "name": "Sản phẩm",
        "item": "https://noithatfudo.vn"
      },{
        "@type": "ListItem",
        "position": 2,
        "name": "Phòng làm việc",
        "item": "https://noithatfudo.vn/home_office"
      },{
        "@type": "ListItem",
        "position": 3,
        "name": "Đồng hồ"
      }]
    }
    </script>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "name": "Sản phẩm",
        "item": "https://noithatfudo.vn"
      },{
        "@type": "ListItem",
        "position": 2,
        "name": "Phòng làm việc",
        "item": "https://noithatfudo.vn/home_office"
      },{
        "@type": "ListItem",
        "position": 3,
        "name": "Văn phòng phẩm"
      }]
    }
    </script>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "name": "Sản phẩm",
        "item": "https://noithatfudo.vn"
      },{
        "@type": "ListItem",
        "position": 2,
        "name": "Phòng làm việc",
        "item": "https://noithatfudo.vn/home_office"
      },{
        "@type": "ListItem",
        "position": 3,
        "name": "Bảng trang trí"
      }]
    }
    </script>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "name": "Sản phẩm",
        "item": "https://noithatfudo.vn"
      },{
        "@type": "ListItem",
        "position": 2,
        "name": "Phòng làm việc",
        "item": "https://noithatfudo.vn/home_office"
      },{
        "@type": "ListItem",
        "position": 3,
        "name": "Kệ/tủ lưu trữ"
      }]
    }
    </script>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "name": "Sản phẩm",
        "item": "https://noithatfudo.vn"
      },{
        "@type": "ListItem",
        "position": 2,
        "name": "Phòng tắm",
        "item": "https://noithatfudo.vn/bath_room"
      },{
        "@type": "ListItem",
        "position": 3,
        "name": "Rèm"
      }]
    }
    </script>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "name": "Sản phẩm",
        "item": "https://noithatfudo.vn"
      },{
        "@type": "ListItem",
        "position": 2,
        "name": "Phòng tắm",
        "item": "https://noithatfudo.vn/bath_room"
      },{
        "@type": "ListItem",
        "position": 3,
        "name": "Khăn tắm"
      }]
    }
    </script>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "name": "Sản phẩm",
        "item": "https://noithatfudo.vn"
      },{
        "@type": "ListItem",
        "position": 2,
        "name": "Phòng tắm",
        "item": "https://noithatfudo.vn/bath_room"
      },{
        "@type": "ListItem",
        "position": 3,
        "name": "Gương"
      }]
    }
    </script>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "name": "Sản phẩm",
        "item": "https://noithatfudo.vn"
      },{
        "@type": "ListItem",
        "position": 2,
        "name": "Phòng tắm",
        "item": "https://noithatfudo.vn/bath_room"
      },{
        "@type": "ListItem",
        "position": 3,
        "name": "Thảm chân"
      }]
    }
    </script>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "name": "Sản phẩm",
        "item": "https://noithatfudo.vn"
      },{
        "@type": "ListItem",
        "position": 2,
        "name": "Phòng tắm",
        "item": "https://noithatfudo.vn/bath_room"
      },{
        "@type": "ListItem",
        "position": 3,
        "name": "Giá, kệ, tủ treo"
      }]
    }
    </script>
  <link rel="canonical" href="https://noithatfudo.vn/">
  <style>
    /* .w-full {
    width: 100% !important;
  }
  .slick-slide {
    
    height: auto !important;
}
  .w-\[1200px\]{
    width: auto !important;
    padding: 0 10rem !important;
  } */
  </style>

@endsection
@section('content')
<!-- Slideshow container -->
<div id="slider" class="nivoSlider">
  <img src="/front/images/img_home/bg1.webp" data-thumb="images/toystory.jpg" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng" />
  <img src="/front/images/img_home/bg2.webp" data-thumb="images/up.jpg" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng" />
  <img src="/front/images/img_home/img_slider_2.webp" data-thumb="images/walle.jpg" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng"
    data-transition="slideInLeft" />
  <img src="/front/images/img_home/img_slider_5.webp" data-thumb="images/nemo.jpg" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng" />
</div>




<div class="slideshow-content-1 container-fluid">
  <div class="image-slider-0 row">
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
      <div class="image-0">
        <img src="/front/images/img_home/depkeusa.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
      </div>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 danhmucsanpham">

      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
        <h3 style="font-size: 24px;">Danh mục sản phẩm</h3>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <img src="/front/images/img_home/sofa.webp" alt="Nội thất Fudo - Danh mục sản phẩm sofa">
        <p>SOFA - sofas</p>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <img src="/front/images/img_home/ban.webp" alt="Nội thất Fudo - Danh mục sản phẩm bàn">
        <p>BÀN - tables</p>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <img src="/front/images/img_home/ghe.webp" alt="Nội thất Fudo - Danh mục sản phẩm ghế">
        <p>GHẾ - chairs</p>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <img src="/front/images/img_home/tu.webp" alt="Nội thất Fudo - Danh mục bộ sưu tập sản phẩm">
        <p>BỘ SƯU TẬP - collections</p>
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 danhmuc2">
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <img src="/front/images/img_home/product/guong.webp" alt="Nội thất Fudo - Danh mục sản phẩm gương">
        <p>GƯƠNG - mirrors</p>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <img src="/front/images/img_home/product/den.webp" alt="Nội thất Fudo - Danh mục sản phẩm đèn">
        <p>ĐÈN - lamps</p>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <img src="/front/images/img_home/product/giuong.webp" alt="Nội thất Fudo - Danh mục sản phẩm giường">
        <p>GIƯỜNG - beds</p>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <img src="/front/images/img_home/product/ketu.webp" alt="Nội thất Fudo - Danh mục sản phẩm kệ tủ">
        <p>KỆ TỦ - shelf units, cabinets</p>
      </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 danhmuc2">

      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <img src="/front/images/img_home/product/changagoi.webp" alt="Nội thất Fudo - Danh mục sản phẩm chăn, ga, gối">
        <p>CHĂN, GA, GỐI - Bedding</p>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <img src="/front/images/img_home/product/trangtri.webp" alt="Nội thất Fudo - Danh mục sản phẩm trang trí">
        <p>TRANG TRÍ - decorations</p>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <img src="/front/images/img_home/product/dogiadung.webp" alt="Nội thất Fudo - Danh mục sản phẩm đồ gia dụng">
        <p>ĐỒ GIA DỤNG - household goods</p>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <img src="/front/images/img_home/product/sanphamdetmay.webp" alt="Nội thất Fudo - Danh mục sản phẩm dệt may">
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
      <h3 class="first">F-Concept - Giải pháp nội thất toàn diện</h3>
      <p>Concept là gói sản phẩm nội thất và cải tạo không gian toàn diện theo thiết kế có sẵn từ thương hiệu Fudo</p>

      <p>Concept by Fudo sẽ mang đến những giải pháp nội thất tối giản với độ ứng dụng cao, phù hợp với nhiều
        phong cách khác nhau,
        tạo ra không gian sống tiện nghi, thoải mái và giúp bạn thực sự thư giãn mỗi khi trở về nhà.</p>
    </div>

    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-sm-push-1 col-md-push-1 col-lg-push-1 content-body-3">
      <h3>TRẢI NGHIỆM GIẢI PHÁP KHÔNG GIAN SỐNG MỚI CÙNG F-CONCEPT</h3>
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
        <img src="/front/images/img_home/dalat.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng" width="">
      </div>
      <h4>DALAT GRACE Concept</h4>
    </div>
    <div class="image-item-1 col-xs-12 col-sm-6 col-md-6 col-lg-6">
      <div class="image-1">
        <img src="/front/images/img_home/EZ.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng" width="">
      </div>
      <h4>EZ Concept</h4>
    </div>
    <div class="image-item-1 col-xs-12 col-sm-6 col-md-6 col-lg-6">
      <div class="image-1">
        <img src="/front/images/img_home/EZ-TINY.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng" width="">
      </div>
      <h4>EZ TINY Concept</h4>
    </div>
    <div class="image-item-1 col-xs-12 col-sm-6 col-md-6 col-lg-6">
      <div class="image-1">
        <img src="/front/images/img_home/QUADA.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng" width="">
      </div>
      <h4>QUADA Concept</h4>
    </div>
    <div class="image-item-1 col-xs-12 col-sm-6 col-md-6 col-lg-6">
      <div class="image-1">
        <img src="/front/images/img_home/SAGO.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng" width="">
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
        <img src="/front/images/img_home/canho.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 image-items-2">
        <img src="/front/images/img_home/nhapho.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 image-items-2">
        <img src="/front/images/img_home/congcong.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
      </div>

    </div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 image-items-2">
      <img src="/front/images/img_home/inspiration.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
    </div>
  </div>
</div>
<!-- End body 4 anh -->

<!-- About Us -->
<div class="container-fluid about-us">
  <div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 about-us-content">
      <h3>Về chúng tôi</h3>
      <br>
      <div class="about-content" style="margin-bottom: 3rem;">
        <p style="line-height: 34px;">Tại nội thất Fudo, tất cả sản phẩm trang trí nội thất & giải pháp không gian sống không
          chỉ đơn thuần tuân thủ theo ngôn
          ngữ giản lược của Minimalism, mà còn cân bằng được tính năng và độ thẩm mỹ cần có.</p>
        <p style="line-height: 34px;">
          “Ít tức là nhiều", nhưng mỗi chi tiết xuất hiện trên thiết kế đều là một sự chăm chút kỹ lưỡng
          và hoàn hảo. Và đó cũng chính là tôn chỉ hoạt động của Fudo. Với tinh thần cầu tiến luôn cố gắng hết
          mình để cung cấp những sản phẩm chất lượng cộng với dịch vụ thân thiện cho khách hàng, chúng tôi hy vọng có
          thể chia sẻ một niềm tin cố hữu với tất cả mọi người:
          “Cuộc sống sẽ trở nên tốt đẹp hơn khi không gian sống được quan tâm và đầu tư đúng mực.
        </p>
      </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 about-us-img">
      <img src="/front/images/img_home/about-us.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
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
            <img src="/front/images/img_home/chiasekhoanhkhac/anh1.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
          </div>
        </div><!--end anh-->
        <div class="image-item-2 col-xs-3 col-sm-3 col-md-3 col-lg-3">
          <div class="image-2">
            <img src="/front/images/img_home/chiasekhoanhkhac/anh2.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
          </div>
        </div>
        <div class="image-item-2 col-xs-3 col-sm-3 col-md-3 col-lg-3">
          <div class="image-2">
            <img src="/front/images/img_home/chiasekhoanhkhac/anh3.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
          </div>
        </div>
        <div class="image-item-2 col-xs-3 col-sm-3 col-md-3 col-lg-3">
          <div class="image-2">
            <img src="/front/images/img_home/chiasekhoanhkhac/anh4.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
          </div>
        </div>
        <div class="image-item-2 col-xs-3 col-sm-3 col-md-3 col-lg-3">
          <div class="image-2">
            <img src="/front/images/img_home/chiasekhoanhkhac/anh5.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
          </div>
        </div>
        <div class="image-item-2 col-xs-3 col-sm-3 col-md-3 col-lg-3">
          <div class="image-2">
            <img src="/front/images/img_home/chiasekhoanhkhac/anh6.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
          </div>
        </div>
        <div class="image-item-2 col-xs-3 col-sm-3 col-md-3 col-lg-3">
          <div class="image-2">
            <img src="/front/images/img_home/chiasekhoanhkhac/anh7.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
          </div>
        </div>
        <div class="image-item-2 col-xs-3 col-sm-3 col-md-3 col-lg-3">
          <div class="image-2">
            <img src="/front/images/img_home/chiasekhoanhkhac/anh8.webp" alt="Nội thất Fudo - Nội thất thông minh hiện đại cho mọi không gian phòng">
          </div>
        </div>
      </div>
    </div> <!-- END 9 COT -->
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 share-title">
      <h3>Chia sẻ khoảnh khắc</h3>
    </div>

  </div>
</div>

<script  src="https://code.jquery.com/jquery-1.11.0.min.js"></script>

<script  src="/front/css/page_home/nivo-slider/jquery.nivo.slider.js"></script>
<script  src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script  src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script src="/front/javascript/page_home.js"></script>
@endsection
