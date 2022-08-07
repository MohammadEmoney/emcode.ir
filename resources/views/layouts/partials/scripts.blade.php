<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="{{ asset('front/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('front/assets/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('front/assets/js/jquery.slicknav.min.js') }}"></script>
<script src="{{ asset('front/assets/js/jquery.countTo.min.js') }}"></script>
<script src="{{ asset('front/assets/js/jquery.shuffle.min.js') }}"></script>
<script src="{{ asset('front/assets/js/aos.js') }}"></script>
<script src="{{ asset('front/assets/js/jquery.fancy-scroll.min.js') }}"></script>
<script src="{{ asset('front/assets/js/script.js') }}"></script>

<script>
    AOS.init();

    $(window).fancy_scroll({
        animation: "bounce" // Options available are bounce (like on iOS), or glow (like on Android 4.0+)
    });
</script>

@yield('scripts')
