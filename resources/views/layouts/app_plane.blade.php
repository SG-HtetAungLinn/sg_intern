<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Softguide Software House</title>
    <link rel="shortcut icon" href="./img/logo.jpg" type="image/x-icon" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet" />
    <!-- Swipper -->
    <link rel="stylesheet" href="{{ asset('./css/swipper.min.css') }}" />
    <!-- Animate -->
    <link rel="stylesheet" href="{{ asset('./css/animate.css') }}" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('./css/styles.css') }}" />
    @yield('css')
</head>

<body style="background-color: #eff7ff;">
    <div class="container">
        <div class="login-container">
            <div class="row">
                {{-- content start --}}
                @yield('content')
                {{-- content end --}}
            </div>
        </div>
    </div>
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
