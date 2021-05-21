<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @hasSection('title')

    <title>@yield('title') - {{ config('app.name') }}</title>
    @else
    <title>{{ config('app.name') }}</title>
    @endif

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ url(asset('favicon.ico')) }}">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ url(mix('css/app.css')) }}">
    @livewireStyles

    <!-- Scripts -->
    <script src="{{ url(mix('js/app.js')) }}" defer></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

</head>

<body>

    <div>
        <section class="flex flex-col md:flex-row h-screen items-center">
            <div class="bg-indigo-800 hidden lg:block w-full md:w-1/2 xl:w-3/5 h-screen">
                <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fcdn.hipwallpaper.com%2Fi%2F97%2F61%2FxbhlqG.jpg&f=1&nofb=1" alt="" class="w-full h-full object-cover">
            </div>
            <div
                class="bg-white w-full md:max-w-md lg:max-w-full md:mx-auto md:w-1/2 xl:w-2/5 h-screen px-6 lg:px-16 xl:px-12 flex items-center justify-center">
                <div class="w-full h-100">

                    <a href="/">
                        <div class="flex justify-center">
                            <img src="{{asset('img/koputra.png')}}" class="w-auto " />
                        </div>
                    </a>
                    <div class="flex justify-center">
                        <h1 class="text-xl md:text-2xl font-bold leading-tight mt-4">Daftar Akaun</h1>
                    </div>
                    <form class="mt-6">
                        <div>
                            <div class="mt-1 rounded-md shadow-sm">
                                <input id="email" name="email" type="email" placeholder="Nama" required autofocus
                                    class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-indigo-800 focus:bg-white focus:outline-none " />
                            </div>
                        </div>

                        <div class="mt-6">
                            <div class="mt-1 rounded-md shadow-sm">
                                <input type="text" placeholder="No Tel Bimbit" required
                                    class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-indigo-800 focus:bg-white focus:outline-none " />
                            </div>
                        </div>

                        <div class="mt-6">
                            <div class="mt-1 rounded-md shadow-sm">
                                <input type="text" placeholder="Alamat Emel" required
                                    class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-indigo-800 focus:bg-white focus:outline-none " />
                            </div>
                        </div>

                        <div class="flex items-center justify-between mt-6">
                            <div class="flex items-center">
                                <input id="remember" type="checkbox"
                                    class="form-checkbox w-4 h-4 text-indigo-800 transition duration-150 ease-in-out" />
                                <label for="remember" class="block ml-2 text-sm text-gray-900 leading-5">
                                    Saya bersetuju dengan Terma & Syarat
                                </label>
                            </div>
                        </div>

                        <div class="mt-6">
                            <span class="block w-full rounded-md shadow-sm">
                                <a href="{{route('wellcome')}}"
                                    class="relative text-center w-full block bg-indigo-800  focus:bg-indigo-800 text-white font-semibold rounded-lg px-4 py-3 mt-6">
                                        Hantar Kod Pengesahan
                                </a>
                            </span>
                        </div>
                    </form>

                </div>
            </div>
        </section>
    </div>
    @livewireScripts
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 400,
            duration: 1000
        });
    </script>
</body>

</html>