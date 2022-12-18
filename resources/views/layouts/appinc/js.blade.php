<script>
    // navbar
    let bar = document.querySelector('.mob-box');
    let mobLinks = document.querySelector('.link-box')
    // bar.onclick = () => {
    //     mobLinks.classList.toggle('active');
    // }
    //navbar end

    /* Sticky nav start */

    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
            document.getElementById("navbar").style.padding = "5px 5px";
            document.getElementById("logo").style.fontSize = "20px";
        } else {
            document.getElementById("navbar").style.padding = "20px 10px";
            document.getElementById("logo").style.fontSize = "35px";
        }
    }
</script>


<!-- BEGIN GLOBAL MANDATORY STYLES -->
{{-- <script src="{{ asset('templete') }}/src/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('templete') }}/src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="{{ asset('templete') }}/src/plugins/src/mousetrap/mousetrap.min.js"></script>
    <script src="{{ asset('templete') }}/layouts/vertical-dark-menu/app.js"></script> --}}
<!-- END GLOBAL MANDATORY STYLES -->

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
{{-- <script src="{{ asset('templete') }}/src/plugins/src/autocomplete/autoComplete.min.js"></script>
    <script src="{{ asset('templete') }}/src/assets/js/pages/knowledge-base.js"></script> --}}
<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
{{-- <script src="{{ asset('templete') }}/src/assets/js/js/main.js"></script> --}}
<!-- Vendor JS Files -->
{{-- <script src="{{ asset('templete') }}/src/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('templete') }}/src/assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="{{ asset('templete') }}/src/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ asset('templete') }}/src/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('templete') }}/src/assets/vendor/aos/aos.js"></script>
    <script src="{{ asset('templete') }}/src/assets/vendor/php-email-form/validate.js"></script> --}}


<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="{{ asset('templete') }}/src/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->
