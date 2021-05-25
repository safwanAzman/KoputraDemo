<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @hasSection('title')

    <title>@yield('title') - {{ config('app.name') }}</title>
    @else
    <title>Koputra</title>
    @endif

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('img/koputra.png')}}">

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
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.4/dist/sweetalert2.min.css">

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

                    <a href="#">
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

                        <div class="mt-6"  x-data="{ modal2: false }">
                            <span class="block w-full rounded-md shadow-sm">
                                <a href="#" @click="modal2 = true"
                                    class="relative text-center w-full block bg-indigo-800  focus:bg-indigo-800 text-white font-semibold rounded-lg px-4 py-3 mt-6">
                                        Hantar Kod Pengesahan
                                </a>
                            </span>
                            <x-general.modal2 modalActive="modal2" title="KOD PENGESAHAN" modalSize="sm" closeBtn="yes">
                                <div class="py-4 px-4">
                                    <p class="text-center">
                                        Kod OTP telah dihantar ke Nombor Telfon bimbit anda. 
                                        Sila Masukan kod OTP untuk pengesahan.
                                    </p>
                                    <div class="mt-6 flex justify-center">
                                        <div class="flex mt-1 mb-2 rounded-md shadow-sm">
                                            <input
                                            type="text"  value=""
                                            class="w-64 form-input block transition duration-150 ease-in-out sm:text-sm sm:leading-5 "
                                            >
                                        </div>
                                    </div>
                                    <div class="flex justify-center mt-4">
                                        <div class="w-52 flex justify-center items-center border-2 border-red-400 py-4 px-4">

                                            <span id="timer" class="text-red-400"></span>
                                        </div>
                                    </div>
                                    <div class="flex justify-center mt-4">
                                        <a href="{{route('wellcome')}}" class="bg-blue-400 py-2 px-4 flex items-center rounded-lg  text-white font-semibold hover:bg-blue-500">
                                            Sahkan
                                        </a>
                                    </div>
                                </div>
                            </x-general.modal2>
                        </div>
                        
                    </form>

                </div>
            </div>
        </section>
    </div>
    @livewireScripts
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.4/dist/sweetalert2.all.min.js"></script>
    <script>
        AOS.init({
            offset: 400,
            duration: 1000
        });
    </script>
    <script>
        let timerOn = true;

        function timer(remaining) {
            var m = Math.floor(remaining / 60);
            var s = remaining % 60;
            
            m = m < 10 ? '0' + m : m;
            s = s < 10 ? '0' + s : s;
            document.getElementById('timer').innerHTML = m + ':' + s;
            remaining -= 1;
            
            if(remaining >= 0 && timerOn) {
                setTimeout(function() {
                    timer(remaining);
                }, 1000);
                return;
            }

            if(!timerOn) {
                // Do validate stuff here
                return;
            }
            
            // Do timeout stuff here
            alert('Timeout for otp');
            }

            timer(120);
    </script>
</body>

</html>