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
</style>

<div id="footer" class="footer">
    <div class="container">
        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <div class="row g-5">

                <div class="col-lg-3 col-md-6">
                    <label class="logo" id="logo">
                        <a href="{{ Route('home') }}">
                            <img src="{{ asset('templete') }}/src/assets/img/zerop.png" alt="ZeroPlus" class="zeropimg"
                                style="height: 150px; width:auto" /></a>

                        <div class="team-social">
                            <a class="social-tw" href="https://twitter.com/zeropluslegal"><i
                                    class="fab fa-twitter"></i></a>
                            <a class="social-fb" href="https://www.facebook.com/ZeroPlusLegal"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="social-li" href="https://www.linkedin.com/in/zeroplus-legal-897964220/"><i
                                    class="fab fa-linkedin-in"></i></a>
                            {{-- <a class="social-in" href=""><i class="fab fa-instagram"></i></a> --}}
                            <a class="social-yt" href="https://www.youtube.com/channel/UCANLYx-i_3U5l8jAuTr572A"><i
                                    class="fab fa-youtube"></i></a>
                        </div>

                    </label>

                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Contact</h5>
                    <hr>
                    <p class="mb-2"></i><a href="tel:+880-222-224-5592" class="textCustom"> <i
                                class="fa-solid fa-tty"></i>+880-222-224-5592 </a></p>
                    <p class="mb-2"></i><a href="tel:+880-1844-674589" class="textCustom"> <i
                                class="fas fa-phone-square"></i>
                            +880-1844-674589 </a></p>
                    <p class="mb-2"><a href="mailto:hello@zeroplus.world" class="textCustom"><i
                                class="fas fa-paper-plane"></i>
                            hello@zeroplus.world</a></p>
                    <p class="mb-2"><a href="https://goo.gl/maps/S5ud7QqvEyWxUxDn6" class="textCustom"><i
                                class='bx bxs-edit-location'></i>
                            Location</a></p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Services</h5>
                    <hr>
                    <p class="mb-2"></i><a href="#" class="textCustom"> <i
                                class="fas fa-balance-scale"></i>ZeroPlus DigiOffice </a></p>
                    <p class="mb-2"></i><a href="#" class="textCustom"> <i class="fas fa-balance-scale"></i>
                            ZeroPlus Legal </a></p>
                    <p class="mb-2"><a href="#" class="textCustom"><i class='bx bxs-heart'></i>
                            ZeroPlus DigiHealth</a></p>
                    <p class="mb-2"><a href="https://www.digitalstudyroom.com/" class="textCustom"><i
                                class='bx bxs-book-bookmark'></i>
                            ZeroPlus EduCare</a></p>
                    <p class="mb-2"><a href="#" class="textCustom"><i class='bx bx-mobile'></i></i>
                            ZeroPlus IT</a></p>
                    <p class="mb-2"><a href="#" class="textCustom"><i class='bx bxs-bank'></i>
                            ZeroPlus EcoFin</a></p>
                    <p class="mb-2"><a href="#" class="textCustom"><i class='bx bxs-business'></i>
                            ZeroPlus Consultancy</a></p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Popular Links</h5>
                    <hr>
                    <p class="mb-2"></i><a href="http://www.lawjusticediv.gov.bd/" class="textCustom"> <i
                                class="fas fa-balance-scale"></i>Law
                            & Justice Ministry </a></p>
                    <p class="mb-2"></i><a href="http://supremecourt.gov.bd/web/?page=calendar.php&menu=00"
                            class="textCustom"> <i class="fas fa-balance-scale"></i>
                            Supreme Court Calender </a></p>
                    <p class="mb-2"><a href="http://www.barcouncil.gov.bd/" class="textCustom"><i
                                class='fas fa-balance-scale'></i>
                            Bangladesh Bar Council</a></p>
                    <p class="mb-2"><a href="http://bdlaws.minlaw.gov.bd/" class="textCustom"><i
                                class='fas fa-balance-scale'></i>
                            Laws of Bangladesh</a></p>

                </div>


            </div>
        </div>
        <hr>
        <!-- copyright -->
        <div class="pt-4 pb-1 position-relative">
            <div class="container">
                <p class="text-white text-center text-md-left mt-0">
                    <span class="text-success">ZeroPlus</span> &copy; {{ date('Y') }} All Right Reserved
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Footer End -->
