    <!-- BEGIN LOADER -->
    {{-- <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div> --}}
    <!--  END LOADER -->

    <style>
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
