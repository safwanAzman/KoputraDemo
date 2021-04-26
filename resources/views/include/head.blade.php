<!DOCTYPE html>
<html x-data="data()" lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
    
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

    @livewireStyles
</head>
<body class="bg-gray-100 ">
    <div class="flex h-screen  " :class="{ 'overflow-hidden': isSideMenuOpen }">
        @include('include.sidebar.desktop')

        {{-- @include('include.sidebar.mobile') --}}
        

        <div class="flex flex-col flex-1 w-full overflow-y-auto">
            @include('include.sidebar.topbar')
            <main class="relative z-0 flex-1 pb-8 px-8 bg-gray-100 sm:h-full">
                <div class="grid pb-10  mt-10">
                    {{-- content --}}
                    @yield('content')
                </div>
            </main>
        </div>
    </div>
    @livewireScripts

    <script src="{{ url(mix('js/app.js')) }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.4/dist/sweetalert2.all.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
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
    @stack('js')
</body>
</html>
