<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" >
    <link rel="stylesheet" href="/front/css/main.css" >
    <link href="/front/css/output.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/front/images/icon/themify-icons-font/themify-icons/themify-icons.css">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel="stylesheet" href="/front/css/header.css">
    <link rel="icon" href="/front/images/fudo.png" type="image/x-icon" >
    <!-- Start VWO Async SmartCode -->
    <script type='text/javascript' id='vwoCode'>
    window._vwo_code=window._vwo_code || (function() {
    var account_id=700451,
    version = 1.5,
    settings_tolerance=2000,
    library_tolerance=2500,
    use_existing_jquery=false,
    is_spa=1,
    hide_element='body',
    hide_element_style = 'opacity:0 !important;filter:alpha(opacity=0) !important;background:none !important',
/* DO NOT EDIT BELOW THIS LINE */
f=false,d=document,vwoCodeEl=d.querySelector('#vwoCode'),code={use_existing_jquery:function(){return use_existing_jquery},library_tolerance:function(){return library_tolerance},hide_element_style:function(){return'{'+hide_element_style+'}'},finish:function(){if(!f){f=true;var e=d.getElementById('_vis_opt_path_hides');if(e)e.parentNode.removeChild(e)}},finished:function(){return f},load:function(e){var t=d.createElement('script');t.fetchPriority='high';t.src=e;t.type='text/javascript';t.innerText;t.onerror=function(){_vwo_code.finish()};d.getElementsByTagName('head')[0].appendChild(t)},getVersion:function(){return version},getMatchedCookies:function(e){var t=[];if(document.cookie){t=document.cookie.match(e)||[]}return t},getCombinationCookie:function(){var e=code.getMatchedCookies(/(?:^|;)\s?(_vis_opt_exp_\d+_combi=[^;$]*)/gi);e=e.map(function(e){try{var t=decodeURIComponent(e);if(!/_vis_opt_exp_\d+_combi=(?:\d+,?)+\s*$/.test(t)){return''}return t}catch(e){return''}});var i=[];e.forEach(function(e){var t=e.match(/([\d,]+)/g);t&&i.push(t.join('-'))});return i.join('|')},init:function(){if(d.URL.indexOf('__vwo_disable__')>-1)return;window.settings_timer=setTimeout(function(){_vwo_code.finish()},settings_tolerance);var e=d.createElement('style'),t=hide_element?hide_element+'{'+hide_element_style+'}':'',i=d.getElementsByTagName('head')[0];e.setAttribute('id','_vis_opt_path_hides');vwoCodeEl&&e.setAttribute('nonce',vwoCodeEl.nonce);e.setAttribute('type','text/css');if(e.styleSheet)e.styleSheet.cssText=t;else e.appendChild(d.createTextNode(t));i.appendChild(e);var n=this.getCombinationCookie();this.load('https://dev.visualwebsiteoptimizer.com/j.php?a='+account_id+'&u='+encodeURIComponent(d.URL)+'&f='+ +is_spa+'&vn='+version+(n?'&c='+n:''));return settings_timer}};window._vwo_settings_timer = code.init();return code;}());
</script>
<!-- End VWO Async SmartCode -->
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-LHYNYQQZFK"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-LHYNYQQZFK');
    </script>
    @vite('resources/css/app.css')
    @yield('head')
</head>

<body>
    <x-header :rooms_header="$rooms_header" :categories_header="$categories_header" />
    <div class="w-full md:w-[95vw] desktop:w-[1200px] mx-auto mt-16 md:mt-16 mb-10 min-h-[80vh]">
        @yield('content')
    </div>
    <x-footer />
</body>

</html>
