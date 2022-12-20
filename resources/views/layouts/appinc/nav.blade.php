<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
<style>
    #navbars {
        background-color: #05223D;
        width: 100%;
        overflow: hidden;
    }

    .logo {
        float: left;
        color: white;
        font-weight: bold;
        justify-content: center;
        padding-left: 30px;
        padding-top: 10px
    }

    #navbars ul {
        float: right;
        margin-right: 60px;
        margin-top: 13px;
    }

    #navbars ul li {

        display: inline-block;
        line-height: 35px;
        margin: 0 5px;
        margin: 0px 15px;
    }

    #navbars ul li a {
        color: white;
        font-size: 20px;
        /* padding: 7px 13px; */
        /* border-radius: 3px; */
    }

    #navbars ul li a:hover {
        /* color: rgb(26, 45, 96); */
        /* background-color: white; */
        font-size: 20px;
        /* padding: 7px 13px; */
        /* border-radius: 3px; */
        transition: 0.3s;
        background-color: #05223D;
        color: aliceblue;
    }

    .checkbtn {
        font-size: 20px;
        color: rgb(255, 255, 255);
        float: right;
        margin-top: 22px;
        /* line-height: 60px; */
        margin-right: 40px;
        cursor: pointer;
        display: none;
    }

    #check {
        display: none;
    }

    /* torab start*/
    .my-drpdown-menu {
        width: 200px;

        position: absolute;
        right: 220px;
        background-color: aliceblue;

        display: none;
        z-index: 9999;
        border-radius: 3px;
        padding: 10px 0px;

    }

    .service-drpdown:hover .my-drpdown-menu {
        display: block;
    }

    .service-drpdown {
        color: aliceblue;
        font-size: 20px;
        /* padding-top: 7px ; */
        border-radius: 3px;
        font-size: "20px";
    }

    .service-drpdown:hover {
        cursor: pointer;
        font-size: "20px";
    }

    .my-drpdown-item {
        display: block;
        color: black !important;
        /* padding: 0px 13px !important; */
        font-size: 20px;
    }

    .my-drpdown-item-a {
        display: inline-block !important;
        width: 100%;
        padding: 2px 13px;
    }

    .my-drpdown-item-a:hover {
        box-shadow: inset 2px 2px 5px #2F9ACF;
        color: white !important;
    }

    .my-drpdown-item a {
        color: black !important;
    }

    #navbars {
        overflow: unset;
        font-family: "El Messiri SemiBold";
        font-size: "20px";
    }

    .sub-menu {
        position: absolute !important;
        left: 150px;
        width: 250px;
        height: 300px;
        background-color: #193549 !important;
        /* background-color: aliceblue; */
        overflow: scroll;
        display: none;
        z-index: 9999;
        border-radius: 3px;
        padding: 10px 0px;

        /* margin-right:0px !important; */
        /* padding: 0px 13px !important; */
    }


    .my-drpdown-item:hover .sub-menu {
        display: inline-block !important;
    }

    .sub-menu a {
        color: white !important;
        font-size: 16px !important;

        display: inline-block !important;
        color: aliceblue;
        padding: 2px 13px;
    }

    .sub-menu a:hover {
        background-color: white !important;
        color: black !important;
    }

    .sub-menu-li {
        display: block;
        width: 100%;
        text-align: left;
    }

    /* .sub-menu-li a {

    } */

    .sub-menu-a {}

    /* torab end*/

    @media (max-width: 952px) {
        #navbars {
            display: block;
        }

        .logo {
            font-size: 30px;
            padding-left: 20px;
        }

        /* #navbars ul li a {
            font-size: 16px;
        } */
    }

    /* torab */
    @media (max-width: 857px) {
        .my-drpdown-menu {
            left: 100px !important;
        }

        .service-drpdown {
            font-size: 18px;
        }

        .my-drpdown-item {
            font-size: 15px !important;
        }

        .sub-menu {
            left: 200px !important;
            width: 130px;
            margin-left: -50px !important;

        }

        .my-drpdown-item a {
            font-size: 18px !important;
        }



    }

    @media (max-width: 858px) {
        .checkbtn {
            font-size: 30px;
            color: white;
            float: right;
            /* line-height: 80px; */
            margin-right: 40px;
            cursor: pointer;
            display: block;
        }



        ul {
            position: fixed;
            width: 50%;
            /* height: 100vh; */
            background: #05223D;
            top: 80px;
            left: -100%;
            text-align: center;
            transition: all .5s;
            border-radius: 5px;
            z-index: 999;
        }

        #navbars ul li {
            display: block;
            /* float: left; */
            /*  margin-left: 0px; */
            /* margin: 30px 0; */
            /* line-height: 20px; */
        }

        #navbars ul li a {
            font-size: 17px;
        }

        #check:checked~ul {
            left: 0;
        }
    }

    @media (max-width: 490px) {
        .my-drpdown-menu {
            right: 0px !important;
        }

        .my-drpdown-menu {
            left: 100px !important;
        }
    }

    #uldesign {
        z-index: 999;

    }

    #navbars ul {
        text-align: left;
    }

    #navbars.fixed {
        position: fixed;

        box-shadow: 5px 5px 19px 0px rgba(0, 0, 0, 0.5);
        background-color: aliceblue;
        z-index: 999;
    }

    #navbars.fixed ul {

        background-color: aliceblue;
        font-size: 14px;
        color: black;

    }

    #navbars.fixed ul li a {
        transition: 0.5s;
        font-size: 20px;
        color: black;

    }

    #navbars.fixed ul li a:hover {
        color: black;

    }

    #navbars.fixed .service-drpdown {
        color: black;
    }

    #navbars.fixed .logo {
        padding-left: 5px;
        padding-top: 1px;
        transition: 0.5s
    }
</style>


<nav id="navbars">
    <input type="checkbox" id="check" style="display: none">
    <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
    </label>
    <label class="logo" id="logo">
        <a href="{{ Route('home') }}">
            <img src="{{ asset('templete') }}/src/assets/img/zerop.png" alt="ZeroPlus"
                class="zeropimg" />{{-- <span class="green h2">ZeroPlus</span> --}}</a>
    </label>
    <ul id="uldesign">
        <li> <a href="{{ Route('home') }}">Home</a></li>

        @guest
            <li>
                <a href="{{ Route('register') }}">Register</a>
            </li>
            <li>
                <a href="{{ Route('user.login') }}">Login</a>
            </li>
        @else
            <li>
                <a href="{{ Route('dashboard') }}">Dashboard</a>
            </li>
        @endguest

    </ul>
</nav>

<script>
    const nav = document.querySelector('#navbars');
    let navTop = nav.offsetTop;

    function fixedNav() {
        if (document.body.scrollTop > 80 ||
            document.documentElement.scrollTop > 80) {
            nav.classList.add('fixed');
        } else {
            nav.classList.remove('fixed');
        }
    }
    window.addEventListener('scroll', fixedNav);
</script>
