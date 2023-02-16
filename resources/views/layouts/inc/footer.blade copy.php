<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<style>
    .textCustom {
        color: white !important;
    }

    .team-social a {
        display: inline-block;
        width: 47px;
        height: 26px;
        margin-right: 2px;
        padding: 9px 0 10px 0;
        font-size: 10px;
        line-height: 5px;
        text-align: center;
        color: #ffffff;
        transition: all .3s;
        list-style: circle;
    }

    .footer {
        font-family: "El Messiri SemiBold";
    }

        @media only screen and (min-width:1200px) {
            .col--1of6 {

                flex-basis: 14%;
                max-width: 14%;
            }
        }

        .How_it_Works {
            background-color: #05223D
        }

        .footer {
            background-color: #001325
        }

        .featured_categories {
            background-color: #05223D
        }

        /* b style */
        .hero {
            --font-default: "El Messiri SemiBold";
            --font-primary: "Inter", sans-serif;
            --font-secondary: "Poppins", sans-serif;
        }

        /* Colors */
        .hero {
            --color-default: #0a0d13;
            --color-primary: #0d42ff;
            --color-secondary: #0e1d34;
        }

        /* Smooth scroll behavior */
        .hero {
            scroll-behavior: smooth;
        }


        .hero {
            font-family: var(--font-default);
            color: var(--color-default);
        }

        .hero {
            width: 100%;
            min-height: 50vh;
            background-color: var(--color-secondary);
            background-image: url("");
            background-size: cover;
            background-position: center;
            position: relative;
            padding: 30px 0 70px 0;
            color: rgba(255, 255, 255, 0.8);
            background-color: #05223D;
        }

        .hero h2 {
            margin-bottom: 20px;
            padding: 0;
            font-size: 48px;
            font-weight: 700;
            color: #fff;
        }

        @media (max-width: 575px) {
            .hero h2 {
                font-size: 30px;
            }
        }

        .hero p {
            font-size: 15px;
            font-weight: 400;
            margin-bottom: 40px;
        }

        .hero form {
            background: #fff;
            padding: 10px;
            border-radius: 10px;
        }

        .hero form .form-control {
            padding-top: 18px;
            padding-bottom: 18px;
            padding-left: 20px;
            padding-right: 20px;
            border: none;
            margin-right: 10px;
            border: none !important;
            background: none !important;
        }

        .hero form .form-control:hover,
        .hero form .form-control:focus {
            outline: none;
            box-shadow: none;
        }

        .hero form .btn-primary {
            background-color: var(--color-primary);
            padding: 15px 30px;
        }

        .hero form .btn-primary:hover {
            background-color: #2756ff;
        }

        .hero .stats-item {
            padding: 30px;
            width: 100%;
        }

        .hero .stats-item span {
            font-size: 32px;
            display: block;
            font-weight: 700;
            margin-bottom: 15px;
            padding-bottom: 15px;
            position: relative;
        }

        .hero .stats-item span:after {
            content: "";
            position: absolute;
            display: block;
            width: 20px;
            height: 3px;
            background: var(--color-primary);
            left: 0;
            right: 0;
            bottom: 0;
            margin: auto;
        }

        .hero .stats-item p {
            padding: 0;
            margin: 0;
            font-family: var(--font-primary);
            font-size: 15px;
            font-weight: 600;
        }

        .waviy {
            position: relative;
        }

        .waviy span {
            position: relative;
            display: inline-block;
            font-size: 40px;
            color: #fff;
            text-transform: uppercase;
            animation: flip 2s infinite;
            animation-delay: calc(.2s * var(--i))
        }

        @keyframes flip {

            0%,
            80% {
                transform: rotateY(360deg)
            }
        }

        /* [1] The container */
        .img-hover-zoom {
            height: 300px;
            /* [1.1] Set it as per your need */
            overflow: hidden;
            /* [1.2] Hide the overflowing of child elements */
        }

        /* [2] Transition property for smooth transformation of images */
        .img-hover-zoom img {
            transition: transform .5s ease;
        }

        /* [3] Finally, transforming the image when container gets hovered */
        .img-hover-zoom:hover img {
            transform: scale(1.5);
        }

        /* top cat */


        .column {
            position: relative;
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 50%;
        }

        @media (min-width: 576px) {
            .column {
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%;
            }
        }

        @media (min-width: 768px) {
            .column {
                -ms-flex: 0 0 33.333333%;
                flex: 0 0 33.333333%;
                max-width: 33.333333%;
            }
        }

        @media (min-width: 992px) {
            .column {
                -ms-flex: 0 0 25%;
                flex: 0 0 25%;
                max-width: 18%;
            }
        }

        .section-title {
            width: 100%;
            text-align: center;
            padding: 45px 0 30px 0;
        }

        .section-title::after {
            position: absolute;
            content: "";
            width: 50px;
            height: 5px;
            left: calc(50% - 25px);
            background: #353535;
        }

        .section-title h1 {
            color: #353535;
            font-size: 50px;
            letter-spacing: 5px;
            margin-bottom: 5px;
        }

        @media(max-width: 767.98px) {
            .section-title h1 {
                font-size: 40px;
                letter-spacing: 3px;
            }
        }

        @media(max-width: 567.98px) {
            .section-title h1 {
                font-size: 30px;
                letter-spacing: 2px;
            }
        }

        .team-1 {
            margin-bottom: 30px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        }

        .team-1 .team-img {
            overflow: hidden;
        }

        .team-1 .team-img img {
            width: 100%;
            height: auto;
            transition: all .3s;
        }

        .team-1:hover .team-img img {
            transform: scale(1.2);
        }

        .team-1 .team-content {
            padding: 20px;
        }

        .team-1 .team-content h2 {
            font-size: 25px;
            font-weight: 400;
            letter-spacing: 2px;
        }

        .team-1 .team-content h3 {
            font-size: 16px;
            font-weight: 300;
        }

        .team-1 .team-content h4 {
            font-size: 16px;
            font-weight: 300;
            font-style: italic;
            letter-spacing: 1px;
            margin-bottom: 25px;
        }

        .team-1 .team-content p {
            font-size: 16px;
            font-weight: 400;
            line-height: 22px;
        }

        .team-1 .team-social {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            font-size: 0;
        }

        .team-1 .team-social a {
            display: inline-block;
            width: 40px;
            height: 40px;
            margin-right: 5px;
            padding: 11px 0 10px 0;
            font-size: 16px;
            line-height: 16px;
            text-align: center;
            color: #ffffff;
            transition: all .3s;
        }

        .team-1 .team-social a.social-tw {
            background: #00acee;
        }

        .team-1 .team-social a.social-fb {
            background: #3b5998;
        }

        .team-1 .team-social a.social-li {
            background: #0e76a8;
        }

        .team-1 .team-social a.social-in {
            background: #3f729b;
        }

        .team-1 .team-social a.social-yt {
            background: #c4302b;
        }

        .team-1 .team-social a:last-child {
            margin-right: 0;
        }

        .team-1 .team-social a:hover {
            background: #222222;
        }

        /*** Footer ***/


        /*** Footer ***/
        .footer .btn.btn-social {
            margin-right: 5px;
            width: 35px;
            height: 35px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--light);
            border: 1px solid rgba(255, 255, 255, 0.5);
            border-radius: 2px;
            transition: .3s;
        }

        .footer .btn.btn-social:hover {
            color: var(--primary);
            border-color: var(--light);
        }

        .footer .btn.btn-link {
            display: block;
            margin-bottom: 5px;
            padding: 0;
            text-align: left;
            font-size: 15px;
            font-weight: normal;
            text-transform: capitalize;
            transition: .3s;
        }

        .footer .btn.btn-link::before {
            position: relative;
            content: "\f105";
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
            margin-right: 10px;
        }

        .footer .btn.btn-link:hover {
            letter-spacing: 1px;
            box-shadow: none;
        }

        .footer .form-control {
            border-color: rgba(255, 255, 255, 0.5);
        }

        .footer .copyright {
            padding: 25px 0;
            font-size: 15px;
            border-top: 1px solid rgba(256, 256, 256, .1);
        }

        .footer .copyright a {
            color: var(--light);
        }

        .footer .footer-menu a {
            margin-right: 15px;
            padding-right: 15px;
            border-right: 1px solid rgba(255, 255, 255, .1);
        }

        .footer .footer-menu a:last-child {
            margin-right: 0;
            padding-right: 0;
            border-right: none;
        }

        .team-social {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            font-size: 0;
        }

        .team-social a {
            display: inline-block;
            width: 40px;
            height: 40px;
            margin-right: 5px;
            padding: 11px 0 10px 0;
            font-size: 16px;
            line-height: 16px;
            text-align: center;
            color: #ffffff;
            transition: all .3s;
        }

        .team-social a.social-tw {
            background: #00acee;
        }

        .team-social a.social-fb {
            background: #3b5998;
        }

        .team-social a.social-li {
            background: #0e76a8;
        }

        .team-social a.social-in {
            background: #3f729b;
        }

        .team-social a.social-yt {
            background: #c4302b;
        }

        .team-social a:last-child {
            margin-right: 0;
        }

        .team-social a:hover {
            background: #222222;
        }

        .search-by .carousel {
            margin-top: 50px;
            position: relative;
        }

        .search-by .carousel .carousel-item .card-item {
            padding: 10px;
        }

        .search-by .carousel .carousel-item .photo {
            text-align: center;
            margin-bottom: 10px;
        }

        .search-by .carousel .carousel-item .photo .hover {
            display: none;
        }


        .search-by .carousel .card-item:hover .main-state {
            display: none;
        }

        .search-by .carousel .card-item:hover .hover {
            display: inline-block;
        }

        .search-by .carousel .carousel-item .card-item {
            padding: 30px 10px 20px 10px;
            display: inline-block;
            border: 1px solid #e7e7e7;
            border-radius: 12px;
            width: 120px;
            height: 160px;
            margin: 10px;
        }

        .search-by .carousel .carousel-item .photo {
            margin-bottom: 60px;
        }

        .search-by .carousel .carousel-item .photo img {
            height: 50px;

        }

        .search-by .carousel .carousel-item p {
            font-size: 1em;
        }

        .search-by .carousel .carousel-item .card-item {
            padding: 48px 18px 30px 20px;
            width: 143px;
            height: 151px;
            margin: 13px;
        }
    </style>

<div id="footer" class="footer">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <label class="logo" id="logo">
                        <div class="aiz-front-widget mb-5">
                            <img src="{{ asset(get_setting('footer_logo')) }}" height="40" class="mb-4">
                            <div class="fs-14 text-soft-info-light">
                                @php
                                    echo get_setting('about_description_footer');
                                @endphp
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-6 col-sm-6">
                                <div class="aiz-front-widget d-inline-block d-md-block mb-4">
                                    <h4 class="title">{{ translate('Subscription') }}</h4>
                                    <form class="form-inline" method="POST" action="{{ route('subscribers.store') }}">
                                        @csrf
                                        <div class="form-group mb-0">
                                            <input type="email" class="form-control" placeholder="{{ translate('Your Email Address') }}" name="email" required>
                                        </div>
                                        <button type="submit" class="btn btn-primary">
                                            {{ translate('Subscribe') }}
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6">
                                <div class="aiz-front-widget mb-5">
                                    <h4 class="title">{{ get_setting('social_widget_title') }}</h4>
                                    <ul class="list-inline social">
                                        @if (!empty(get_setting('facebook_link')))
                                            <li class="list-inline-item">
                                                <a href="{{ get_setting('facebook_link') }}" target="_blank"
                                                    class="facebook"><i class="lab la-facebook-f"></i></a>
                                            </li>
                                        @endif
                                        @if (!empty(get_setting('twitter_link')))
                                            <li class="list-inline-item">
                                                <a href="{{ get_setting('twitter_link') }}" target="_blank"
                                                    class="twitter"><i class="lab la-twitter"></i></a>
                                            </li>
                                        @endif
                                        @if (!empty(get_setting('instagram_link')))
                                            <li class="list-inline-item">
                                                <a href="{{ get_setting('instagram_link') }}" target="_blank"
                                                    class="instagram"><i class="lab la-instagram"></i></a>
                                            </li>
                                        @endif
                                        @if (!empty(get_setting('youtube_link')))
                                            <li class="list-inline-item">
                                                <a href="{{ get_setting('youtube_link') }}" target="_blank"
                                                    class="youtube"><i class="lab la-youtube"></i></a>
                                            </li>
                                        @endif
                                        @if (!empty(get_setting('linkedin_link')))
                                            <li class="list-inline-item">
                                                <a href="{{ get_setting('linkedin_link') }}" target="_blank"
                                                    class="linkedin"><i class="lab la-linkedin-in"></i></a>
                                            </li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                            @if (get_setting('app_link_section_show') == 'on')
                            <div class="col-xl-3 col-sm-6">
                                <div class="aiz-front-widget mb-5">
                                    <h4 class="title">{{ translate('Mobile Apps') }}</h4>
                                    <ul class="list-inline apps">
                                        @if (!empty(get_setting('app_link_android')))
                                            <li class="list-inline-item">
                                                <a href="{{ get_setting('app_link_android') }}" target="_blank"
                                                    class="facebook"><i class="lab la-android"></i></a>
                                            </li>
                                        @endif
                                        @if (!empty(get_setting('app_link_apple')))
                                            <li class="list-inline-item">
                                                <a href="{{ get_setting('app_link_apple') }}" target="_blank"
                                                    class="twitter"><i class="lab la-apple"></i></a>
                                            </li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                            @endif
                        </div>

                    </label>

                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="row">
                        <div class="col-xl-3 col-sm-6">
                            <div class="aiz-front-widget mb-5">
                                <h4 class="title">{{ get_setting('widget_one') }}</h4>
                                <ul class="menu">
                                    @if (!empty(get_setting('widget_one_labels')))
                                        @foreach (json_decode(get_setting('widget_one_labels'), true) as $key => $value)
                                            <li>
                                                <a href="{{ json_decode(get_setting('widget_one_links'), true)[$key] }}">{{ $value }}</a>
                                            </li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6">
                            <div class="aiz-front-widget mb-5">
                                <h4 class="title">{{ get_setting('widget_two') }}</h4>
                                <ul class="menu">
                                    @if (!empty(get_setting('widget_two_labels')))
                                        @foreach (json_decode(get_setting('widget_two_labels'), true) as $key => $value)
                                            <li>
                                                <a href="{{ json_decode(get_setting('widget_two_links'), true)[$key] }}">{{ $value }}</a>
                                            </li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6">
                            <div class="aiz-front-widget mb-5">
                                <h4 class="title">{{ get_setting('widget_three') }}</h4>
                                <ul class="menu">
                                    @if (!empty(get_setting('widget_three_labels')))
                                        @foreach (json_decode(get_setting('widget_three_labels'), true) as $key => $value)
                                            <li>
                                                <a href="{{ json_decode(get_setting('widget_three_links'), true)[$key] }}">{{ $value }}</a>
                                            </li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6">
                            <div class="aiz-front-widget mb-5">
                                <h4 class="title">{{ get_setting('widget_four') }}</h4>
                                <ul class="menu">
                                    @if (!empty(get_setting('widget_four_labels')))
                                        @foreach (json_decode(get_setting('widget_four_labels'), true) as $key => $value)
                                            <li>
                                                <a
                                                    href="{{ json_decode(get_setting('widget_four_links'), true)[$key] }}">{{ $value }}</a>
                                            </li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-around align-items-center">
                    <a href="{{ route('home') }}" class="text-reset flex-grow-1 pb-2 pt-3 text-center">
                        <i class="las la-home fs-20 {{ areActiveRoutes(['home'], 'opacity-100 text-primary') }} opacity-60"></i>
                        <span
                            class="d-block fs-10 fw-600 {{ areActiveRoutes(['home'], 'opacity-100 fw-600') }} opacity-60">{{ translate('Home') }}</span>
                    </a>
                    <a href="{{ route('frontend.notifications') }}" class="text-reset flex-grow-1 pb-2 pt-3 text-center">
                        <span class="d-inline-block position-relative px-2">
                            <i
                                class="las la-bell fs-20 {{ areActiveRoutes(['frontend.notifications'], 'opacity-100 text-primary') }} opacity-60"></i>
                            @php $noti_num = \App\Utility\NotificationUtility::get_my_notifications(10,true,true); @endphp
                            @if ($noti_num > 0)
                                <span
                                    class="badge badge-circle badge-primary position-absolute absolute-top-right">{{ $noti_num }}</span>
                            @endif
                        </span>
                        <span
                            class="d-block fs-10 fw-600 {{ areActiveRoutes(['frontend.notifications'], 'opacity-100 fw-600') }} opacity-60">{{ translate('Notifications') }}</span>
                    </a>
                    <a href="{{ route('all.messages') }}" class="text-reset flex-grow-1 pb-2 pt-3 text-center">
                        <span class="d-inline-block position-relative px-2">
                            <i
                                class="las la-comment-dots fs-20 {{ areActiveRoutes(['all.messages'], 'opacity-100 text-primary') }} opacity-60"></i>
                            @php
                                $unseen_chat_threads = chat_threads();
                                $unseen_chat_thread_count = count($unseen_chat_threads);
                            @endphp
                            @if ($unseen_chat_thread_count > 0)
                                <span
                                    class="badge badge-circle badge-primary position-absolute absolute-top-right">{{ $unseen_chat_thread_count }}</span>
                            @endif
                        </span>
                        <span
                            class="d-block fs-10 fw-600 {{ areActiveRoutes(['all.messages'], 'opacity-100 fw-600') }} opacity-60">{{ translate('Messages') }}</span>
                    </a>
                    @if (Auth::check())
                        @if (isClient() || isExpert())
                            <a href="javascript:void(0)" class="text-reset flex-grow-1 mobile-side-nav-thumb pb-2 pt-3 text-center"
                                data-toggle="class-toggle" data-target=".aiz-mobile-side-nav">
                                <span class="d-block mx-auto">
                                    @if (Auth::user()->photo != null)
                                        <img src="{{ custom_asset(Auth::user()->photo) }}" class="rounded-circle size-20px">
                                    @else
                                        <img src="{{ my_asset('assets/frontend/default/img/avatar-place.png') }}"
                                            class="rounded-circle size-20px">
                                    @endif
                                    @if (Cache::has('user-is-online-' . Auth::user()->id))
                                        <span class="badge badge-dot badge-success badge-circle badge-status"></span>
                                    @else
                                        <span class="badge badge-dot badge-secondary badge-circle badge-status"></span>
                                    @endif
                                </span>
                                <span class="d-block fs-10 fw-600 opacity-60">{{ translate('Account') }}</span>
                            </a>
                        @else
                            <a href="{{ route('admin.dashboard') }}" class="text-reset flex-grow-1 pb-2 pt-3 text-center">
                                <span class="d-block mx-auto">
                                    @if (Auth::user()->photo != null)
                                        <img src="{{ custom_asset(Auth::user()->photo) }}" class="rounded-circle size-20px">
                                    @else
                                        <img src="{{ my_asset('assets/frontend/default/img/avatar-place.png') }}"
                                            class="rounded-circle size-20px">
                                    @endif
                                </span>
                                <span class="d-block fs-10 fw-600 opacity-60">{{ translate('Account') }}</span>
                            </a>
                        @endif
                    @else
                        <a href="{{ route('login') }}" class="text-reset flex-grow-1 pb-2 pt-3 text-center">
                            <span class="d-block mx-auto">
                                <img src="{{ my_asset('assets/frontend/default/img/avatar-place.png') }}"
                                    class="rounded-circle size-20px">
                            </span>
                            <span class="d-block fs-10 fw-600 opacity-60">{{ translate('Account') }}</span>
                        </a>
                    @endif
                </div>

            </div>
        <hr>
        <!-- copyright -->
        <div class="aiz-footer-copyright fs-12 pb-xl-4 pt-4 pb-7">
                <div class="row align-items-center">

                    @if (get_setting('language_switcher') == 'on')
                        <div class="col-6 text-secondary">
                            {!!  get_setting('copyright_text') !!}
                        </div>
                        <div class="col-6 text-right">
                            <div class="dropdown dropup d-inline-block ml-auto">
                                @php
                                    if (Session::has('locale')) {
                                        $locale = Session::get('locale', Config::get('app.locale'));
                                    } else {
                                        $locale = env('DEFAULT_LANGUAGE');
                                    }
                                    $lang = \App\Models\Language::where('code', $locale)->first();
                                @endphp
                                @if ($lang != null)
                                    <a class="dropdown-toggle text-secondary no-arrow py-2" data-toggle="dropdown"
                                        href="javascript:void(0);" role="button" aria-haspopup="false"
                                        aria-expanded="false">
                                        <img src="{{ my_asset('assets/frontend/default/img/flags/' . $lang->code . '.png') }}"
                                            height="11">
                                        <span class="ml-2">{{ $lang->name }}</span>
                                    </a>
                                @endif
                                <div class="dropdown-menu" style="">
                                    @foreach (\App\Models\Language::where('enable', 1)->get() as $key => $language)
                                        <a href="{{ route('language.change', $language->code) }}" class="dropdown-item">
                                            <img src="{{ my_asset('assets/frontend/default/img/flags/' . $language->code . '.png') }}"
                                                height="11">
                                            <span class="ml-2">{{ $language->name }}</span>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="col text-secondary">
                           {!!  get_setting('copyright_text') !!}
                        </div>
                    @endif
                </div>
        </div>
</div>

<!-- Footer End -->
