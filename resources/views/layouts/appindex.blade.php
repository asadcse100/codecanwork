<!DOCTYPE html>
<html lang="en">
@include('layouts.appinc.head')
@yield('css')
<body class="layout-boxed">

    @include('layouts.appinc.css')
    <div class="nav">
        @include('layouts.appinc.nav')
    </div>

    <div class="main-content">

        @yield('content')

        @include('layouts.appinc.footer')

        <!--  END CONTENT AREA  -->
    </div>
    @include('layouts.appinc.js')
    @yield('script')
</body>

</html>
