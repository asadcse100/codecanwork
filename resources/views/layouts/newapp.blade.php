<!DOCTYPE html>
<html lang="en">
@include('layouts.inc.head')
@yield('css')

<body class="layout-boxed">
    <!-- BEGIN Dark and Light -->
    {{-- <div id="load_screen"></div> --}}
    <!--  END Dark and Light -->
    {{-- @include('layouts.inc.navbar') --}}
    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container " id="container">
        <div class="overlay show"></div>
        <div class="search-overlay"></div>
        <!--  BEGIN SIDEBAR  -->
        {{-- @include('layouts.inc.sidebar') --}}
        <!--  END SIDEBAR  -->
        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            @yield('content')
           {{--  @include('layouts.inc.footer') --}}
        </div>
        <!--  END CONTENT AREA  -->
    </div>
    @yield('modal')
    <!-- END MAIN CONTAINER -->
    @include('layouts.inc.js')
    @yield('script')
</body>

</html>
