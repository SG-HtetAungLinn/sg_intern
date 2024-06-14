<footer class="footer">
    <div class="row">

        <div class="col-md-3 mb-3">
            <div class="footer_logo">
                <h1><span>Softguide</span></h1>
                <p class="footer_logo">Software House</p>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <h3 class="footer_sub-title">Information</h3>

        </div>
        <div class="col-md-3 mb-3">
            <h3 class="footer_sub-title">Our Services</h3>

        </div>
        <div class="col-md-3 mb-3">
            <h3 class="footer_sub-title ">Contact Us</h3>
            <p class="row"><i class="fa-solid fa-phone-volume col-1 text-primary"></i> <span
                    class="col-9">01-229264, 01-382180</span></p>
            <p class="row"><i class="fa-solid fa-envelope col-1 text-primary"></i> <span
                    class="col-9">admin@softguidecomputer.com</span></p>
            <p class="row"><i class="fa-solid fa-location-dot col-1 text-primary"></i> <span class="col-9">Yangon,
                    Kamayut, Hledan,<br> Pyay Road, 575B</span> </p>
        </div>

        <div class="col-12 text-center copyright">
            &copy; Copyright 2024 Softguide
        </div>
    </div>
</footer>
</body>
<!-- Jquery -->
<script type="text/javascript" src="{{ asset('./js/jquery.js') }}"></script>
<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<!-- Swipper -->
<script type="text/javascript" src="{{ asset('./js/swipper.js') }}"></script>
<!-- wow -->
<script type="text/javascript" src="{{ asset('./js/wow.js') }}"></script>
{{-- laravel js validation --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="{{ asset('vendor/jsvalidation/js/jsvalidation.js') }}"></script>
<!-- custom JS -->
<script type="text/javascript" src="{{ asset('./js/scripts.js') }}"></script>
@yield('script')

</html>
