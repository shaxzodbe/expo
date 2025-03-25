<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Eventics')</title>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/splide/splide.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/slim-select/slimselect.css') }}">

    <link href="{{ asset('src/output.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>
<body>

@include('partials.overlay')
@include('partials.sidebar')
@include('partials.header')

<main>
    @yield('content')
</main>

@include('partials.footer')

<!-- JS Files -->
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/splide/splide.min.js') }}"></script>
<script src="{{ asset('assets/vendor/slim-select/slimselect.min.js') }}"></script>
<script src="{{ asset('assets/vendor/fslightbox/fslightbox.js') }}"></script>
<script src="{{ asset('assets/vendor/splide/splide-extension-auto-scroll.min.js') }}"></script>
<script src="{{ asset('assets/vendor/lenis/lenis.min.js') }}"></script>
<script src="{{ asset('assets/vendor/splittype/index.min.js') }}"></script>
<script src="{{ asset('assets/vendor/gsap/gsap.min.js') }}"></script>
<script src="{{ asset('assets/vendor/gsap/gsap-scroll-trigger.min.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="{{ asset('assets/js/countdown.js') }}"></script>

</body>
</html>
