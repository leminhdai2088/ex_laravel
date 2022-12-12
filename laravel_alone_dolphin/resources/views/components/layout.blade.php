<html>

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="/front/css/main.css" />
    <link href="/front/css/output.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/front/images/icon/themify-icons-font/themify-icons/themify-icons.css">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel="stylesheet" href="/front/css/header.css">
    @vite('resources/css/app.css')
    @yield('head')
</head>

<body>
    <x-header :rooms_header="$rooms_header" :categories_header="$categories_header" />
    <div class="w-full md:w-[1200px] mx-auto mt-16 md:mt-20 mb-10">
        @yield('content')
    </div>
    <x-footer />
</body>

</html>
