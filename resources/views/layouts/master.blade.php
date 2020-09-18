
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tinno - HTML5 Chat App Template</title>

    <!-- Favicon -->
    <link rel="icon" href="dist\media\img\favicon.png" type="image/png">

<!-- Google Nunito font -->
<link href="css2.css?family=Nunito:wght@200;300;400;600;700&display=swap" rel="stylesheet">

<!-- Themify icons -->
<link href="dist\icons\themify\themify-icons.css" rel="stylesheet">

<!-- Material design icons -->
<link href="dist\icons\materialicons\css\materialdesignicons.min.css" rel="stylesheet">

<!-- Bundle styles -->
<link rel="stylesheet" href="dist\vendor\bundle.css">

<!-- Slick -->
<link rel="stylesheet" href="dist\vendor\slick\slick-theme.css">
<link rel="stylesheet" href="dist\vendor\slick\slick.css">

<!-- Fancybox -->
<link rel="stylesheet" href="dist\vendor\fancybox\jquery.fancybox.min.css" type="text/css">

<!-- Intro js -->
<link rel="stylesheet" href="dist\vendor\introjs\introjs.css" type="text/css">

<!-- App styles -->
<link rel="stylesheet" href="dist\css\app.min.css">
</head>
<body>
{{--
<!-- preloader -->
<div class="preloader">
    <img src="dist\media\img\logo-2x.png" alt="logo">
    <p class="lead font-weight-bold text-muted my-5">Loading Tinno Chat App ...</p>
    <div class="spinner-border" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div> --}}
<!-- ./ preloader -->


@yield('content')


<!-- ./ edit profile modal -->

<!-- Bundle scripts -->
<script src="dist\vendor\bundle.js"></script>

<!-- Feather icons -->
<script src="dist\icons\feather\feather.min.js"></script>

<!-- Slick -->
<script src="dist\vendor\slick\slick.min.js"></script>

<!-- Fancybox -->
<script src="dist\vendor\fancybox\jquery.fancybox.min.js"></script>

<!-- Intro js -->
<script src="dist\vendor\introjs\intro.js"></script>

<!-- Jquery Stopwatch -->
<script src="dist\vendor\jquery.stopwatch.js"></script>

<!-- Sweetalert2 -->
<script src="dist\vendor\sweetalert2.js"></script>

<!-- App scripts -->
<script src="dist\js\app.min.js"></script>

<!-- Examples -->
<script src="dist\js\examples.min.js"></script>

<!-- Theme customizer scripts -->
<script src="dist\js\theme-customizer.min.js"></script>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
