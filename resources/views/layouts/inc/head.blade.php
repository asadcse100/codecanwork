<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="app-url" content="{{ env('APP_URL') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>@yield('meta_title', get_setting('website_name') . ' | ' . get_setting('site_motto'))</title>
    {{-- <link rel="icon" href="{{ custom_asset(get_setting('site_icon')) }}"> --}}
    <link rel="icon" href="{{ asset('meta_imgs/' . get_setting('site_icon')) }}">
    <meta name="description" content="@yield('meta_description', get_setting('meta_description'))" />
    <meta name="keywords" content="@yield('meta_keywords', get_setting('meta_keywords'))">
    @yield('meta')

    @if (!isset($page))
        <!-- Schema.org markup for Google+ -->
        <meta itemprop="name" content="{{ config('app.name', env('APP_NAME')) }}">
        <meta itemprop="description" content="{{ get_setting('meta_description') }}">
        <meta itemprop="image" content="{{ asset('meta_imgs/' . get_setting('meta_image')) }}">

        <!-- Twitter Card data -->
        <meta name="twitter:card" content="product">
        <meta name="twitter:site" content="@publisher_handle">
        <meta name="twitter:title" content="{{ config('app.name', env('APP_NAME')) }}">
        <meta name="twitter:description" content="{{ get_setting('meta_description') }}">
        <meta name="twitter:creator" content="@author_handle">
    <meta name="twitter:image" content="{{ asset('meta_imgs/' . get_setting('meta_image')) }}">

    <!-- Open Graph data -->
    <meta property="og:title" content="{{ config('app.name', env('APP_NAME')) }}" />
    <meta property="og:type" content="Business Site" />
    <meta property="og:url" content="{{ env('APP_URL') }}" />
    {{-- <meta property="og:image" content="{{ custom_asset(get_setting('meta_image')) }}" /> --}}
    <meta property="og:image" content="{{ asset('meta_imgs/' . get_setting('meta_image')) }}" />
    <meta property="og:description" content="{{ get_setting('meta_description') }}" />
    <meta property="og:site_name" content="{{ get_setting('website_name') }}" />
    @endif

    {{-- <link href="{{ asset('templete') }}/layouts/vertical-dark-menu/css/light/loader.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('templete') }}/layouts/vertical-dark-menu/css/dark/loader.css" rel="stylesheet"
        type="text/css" />
    <script src="{{ asset('templete') }}/layouts/vertical-dark-menu/loader.js"></script> --}}

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{ asset('templete') }}/src/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('templete') }}/layouts/vertical-dark-menu/css/light/plugins.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('templete') }}/layouts/vertical-dark-menu/css/dark/plugins.css" rel="stylesheet" type="text/css" />

    <!-- END GLOBAL MANDATORY STYLES -->

    <link rel="stylesheet" type="text/css" href="{{ asset('templete') }}/src/plugins/src/table/datatable/datatables.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('templete') }}/src/plugins/css/light/table/datatable/dt-global_style.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('templete') }}/src/plugins/css/light/table/datatable/custom_dt_miscellaneous.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('templete') }}/src/plugins/css/dark/table/datatable/dt-global_style.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('templete') }}/src/plugins/css/dark/table/datatable/custom_dt_miscellaneous.css">
    <link href="{{ asset('templete') }}/src/assets/css/dark/custom.css" rel="stylesheet" type="text/css" />

    @if (get_setting('google_analytics_activation_checkbox') == 1)
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id={{ env('GOOGLE_ANALYTICS_TRACKING_ID') }}"></script>

        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
          gtag('config', '{{ env('GOOGLE_ANALYTICS_TRACKING_ID') }}');
        </script>
    @endif

    @if (get_setting('fb_pixel_activation_checkbox') == 1)
        <!-- Facebook Pixel Code -->
        <script>
          !function(f,b,e,v,n,t,s)
          {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
          n.callMethod.apply(n,arguments):n.queue.push(arguments)};
          if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
          n.queue=[];t=b.createElement(e);t.async=!0;
          t.src=v;s=b.getElementsByTagName(e)[0];
          s.parentNode.insertBefore(t,s)}(window, document,'script',
          'https://connect.facebook.net/en_US/fbevents.js');
          fbq('init', {{ env('FACEBOOK_PIXEL_ID') }});
          fbq('track', 'PageView');
        </script>
        <noscript>
          <img height="1" width="1" style="display:none"
               src="https://www.facebook.com/tr?id={{ env('FACEBOOK_PIXEL_ID') }}/&ev=PageView&noscript=1"/>
        </noscript>
        <!-- End Facebook Pixel Code --> @endif


</head>
