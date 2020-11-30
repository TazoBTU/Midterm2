<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>QUIZ</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"><script>
        (function(w, d, s, l, i) {
                    w[l] = w[l] || [];
                    w[l].push({
                        'gtm.start': new Date().getTime(),
                        event: 'gtm.js'
                    });
                    var f = d.getElementsByTagName(s)[0],
                        j = d.createElement(s),
                        dl = l != 'dataLayer' ? '&l=' + l : '';
                    j.async = true;
                    j.src =
                        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                    f.parentNode.insertBefore(j, f);
                })(window, document, 'script', 'dataLayer', 'GTM-5WDZC3T');
    </script>
    <!-- End Google Tag Manager -->


    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">

    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#e74e0f">
    <meta name="theme-color" content="#ffffff">
    <link rel="shortcut icon" href="/favicon.ico?v=QEMNQY32MA">

    <meta charset="utf-8" />


  
    <link rel="stylesheet"
        href="https://static.popsport.com/sites/default/files/css/css_2wbtCDSIwii-L5KQ1IV_iTq6wd0WXVSAmI80QhSn3-k.css?qk24s1"
        media="all" />
    <link rel="stylesheet"
        href="https://static.popsport.com/sites/default/files/css/css_bVsrJvDXOXsXNKv917ON_xUbxkx9AGCA6yKSny3AfJY.css?qk24s1"
        media="all" />


      
</head>
<body>
    <div id="app">
  
            @yield('content')
        {{-- </main> --}}
     
    </div>
    
    
{{--     
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/toggle.js"></script> --}}
</body>
</html>
