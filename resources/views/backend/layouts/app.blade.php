<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Evara Dashboard</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('backend') }}/assets/imgs/theme/favicon.svg">
    <!-- Template CSS -->
    <link href="{{ asset('backend') }}/assets/css/main.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <main>
        <section class="content-main mt-80 mb-80">
            @yield('content')
        </section>
        {{-- <footer class="main-footer text-center">
            <p class="font-xs">
                <script>
                document.write(new Date().getFullYear())
                </script> ©, Evara - HTML Ecommerce Template .
            </p>
            <p class="font-xs mb-30">All rights reserved</p>
        </footer> --}}
    </main>
    <script src="{{ asset('backend') }}/assets/js/vendors/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('backend') }}/assets/js/vendors/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('backend') }}/assets/js/vendors/jquery.fullscreen.min.js"></script>
    <!-- Main Script -->
    <script src="{{ asset('backend') }}/assets/js/main.js" type="text/javascript"></script>
</body>
</html>