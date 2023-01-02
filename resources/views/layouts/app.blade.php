@php
    if(Session::has('locale')){
        $locale = Session::get('locale', Config::get('app.locale'));
    }
    else{
        $locale = env('DEFAULT_LANGUAGE');
    }
    $lang = \App\Models\Language::where('code', $locale)->first();
@endphp
<!DOCTYPE html>
@if($lang != null && $lang->rtl == 1)
<html dir="rtl" lang="en">
@else
<html lang="en">
@endif
@include('layouts.inc.head')
@yield('css')

<body class="layout-boxed">
    <!-- BEGIN Dark and Light -->
    <div id="load_screen"></div>
    <!--  END Dark and Light -->
    @include('layouts.inc.navbar')
    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container " id="container">
        <div class="overlay show"></div>
        <div class="search-overlay"></div>
        <!--  BEGIN SIDEBAR  -->
        @if(Auth::check())
            @include('layouts.inc.sidebar')
        @endif
        <!--  END SIDEBAR  -->
        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            @yield('content')
            @include('layouts.inc.footer')
        </div>
        <!--  END CONTENT AREA  -->
    </div>


    @if (get_setting('show_website_popup') == 'on')
        <div class="modal website-popup removable-session d-none" data-key="website-popup" data-value="removed">
            <div class="absolute-full bg-black opacity-60"></div>
            <div class="modal-dialog modal-dialog-centered modal-dialog-zoom modal-md">
                <div class="modal-content position-relative border-0 rounded-0">
                    <div class="aiz-editor-data">
                        {!! get_setting('website_popup_content') !!}
                    </div>
                    @if (get_setting('show_subscribe_form') == 'on')
                        <div class="pb-5 pt-4 px-5">
                            <form class="" method="POST" action="{{ route('subscribers.store') }}">
                                @csrf
                                <div class="form-group mb-0">
                                    <input type="email" class="form-control" placeholder="{{ translate('Your Email Address') }}" name="email" required>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block mt-3">
                                    {{ translate('Subscribe Now') }}
                                </button>
                            </form>
                        </div>
                    @endif
                    <button class="absolute-top-right bg-white shadow-lg btn btn-circle btn-icon mr-n3 mt-n3 set-session" data-key="website-popup" data-value="removed" data-toggle="remove-parent" data-parent=".website-popup">
                        <i class="la la-close fs-20"></i>
                    </button>
                </div>
            </div>
        </div>
    @endif

    @yield('modal')
    @if (get_setting('facebook_chat_activation_checkbox') == 1)
    <script type="text/javascript">
        window.fbAsyncInit = function() {
            FB.init({
              xfbml            : true,
              version          : 'v3.3'
            });
          };

          (function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <div id="fb-root"></div>
    <!-- Your customer chat code -->
    <div class="fb-customerchat"
      attribution=setup_tool
      page_id="{{ env('FACEBOOK_PAGE_ID') }}">
    </div>
@endif
    <!-- END MAIN CONTAINER -->
    @include('layouts.inc.js')
    @yield('script')
</body>

</html>
