<!DOCTYPE html>
<html x-data="data()" lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Koputra</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
    <link rel="shortcut icon" href="{{asset('img/koputra.png')}}">
    <!-- Favicon -->

    <link rel="stylesheet" href="{{ asset('css/app.css')}}" />

    <link rel="stylesheet" href="{{ asset('dist/apexcharts.css')}}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.4/dist/sweetalert2.min.css">
    <script src="{{ asset('dist/apexcharts.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="{{ asset('js/init-alpine.js')}}"></script>

    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://unpkg.com/tippy.js@6"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    @livewireStyles
</head>
<style>
    .swiper-container {
        width: 100%;
        padding-top: 50px;
        padding-bottom: 50px;
    }

    .swiper-slide {
        background-position: center;
        background-size: cover;
        width: 40%;
        height: 40%;
    }
</style>
<body class="bg-gray-200 ">
    <div class="flex h-screen  " :class="{ 'overflow-hidden': isSideMenuOpen }">
        @include('include.sidebar.desktop')

        {{-- @include('include.sidebar.mobile') --}}
        

        <div class="flex flex-col flex-1 w-full overflow-y-auto">
            @include('include.sidebar.topbar')
            <main class="relative z-0 flex-1 pb-8 px-8 bg-gray-200 sm:h-full">
                <div class="grid pb-10  mt-10">
                    {{-- content --}}
                    @yield('content')
                </div>
            </main>
        </div>
    </div>
    @livewireScripts

    <script src="{{ url(mix('js/app.js')) }}"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.4/dist/sweetalert2.all.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://unpkg.com/echarts/dist/echarts.min.js"></script>
    <script src="https://unpkg.com/@chartisan/echarts/dist/chartisan_echarts.js"></script>
    <script>
        tippy('.tooltipbtn', {
            content:(reference)=>reference.getAttribute('data-title'),
            onMount(instance) {
                instance.popperInstance.setOptions({
                placement :instance.reference.getAttribute('data-placement')
                });
            },
            allowHTML: true,
        });
    </script>
    <script>
        AOS.init({
            offset:400,
            duration :1000
        });
    </script>
    <script type="module">
        import Swiper from 'https://unpkg.com/swiper/swiper-bundle.esm.browser.min.js'

        var swiper = new Swiper('.swiper-container', {
            effect: 'coverflow',
            grabCursor: true,
            centeredSlides: false,
            slidesPerView: 'auto',
            coverflowEffect: {
                rotate: 1,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: false,
            },
            pagination: {
                el: '.swiper-pagination',
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
    @stack('js')
</body>
</html>
