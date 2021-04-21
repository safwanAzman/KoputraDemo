@extends('layouts.app')

@section('content')
<style>
    html {
        scroll-behavior: smooth;
    }
</style>
<body class="bg-gray-900 antialiased font-sans">
    <header class="relative lg:overflow-hidden">
        <div class="inset-0 h-screen">
            <video src="{{asset('vid/test.mp4')}}" autoplay muted loop class="object-cover w-full h-full opacity-50"></video>
        </div>
        <div class="absolute inset-0">
            <nav class="md:p-3 py-2 px-3 z-40 bg-gray-100">
                <div class="container mx-auto md:flex block flex-wrap items-center justify-start">
                    <div class="flex-1 flex items-center justify-between">
                        <a href="#">
                            <img src="{{asset('img/logo.png')}}" alt="#" class="w-auto h-8">
                        </a>
                        <button data-menu-toggle class="focus:outline-none md:hidden block pr-1">
                            <svg class="fill-current text-blue-800 w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="20"
                                height="20" viewBox="0 0 20 20">
                                <title>menu</title>
                                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                            </svg>
                        </button>
                    </div>
                    <ul data-menu class="md:flex hidden flex-wrap items-center justify-start">
                        <li class="md:px-6 py-2">
                            <a href="#" class="text-blue-800 hover:text-blue-600">Home</a>
                        </li>
                        <li class="text-blue-800 hover:text-blue-600 md:px-6 py-2">
                            <a href="#about">About Us</a>
                        </li>
                        <li class="text-blue-800 hover:text-blue-600 md:px-6 py-2">
                            <a href="#contactus">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <div data-aos="zoom-out-up" class="mx-auto mt-56 lg:mt-40 lg:px-16 px-4 py-4 flex justify-center items-center">
                <div class="md:pl-8 " x-data="{ 
                    text: '',
                    textArray : ['CREATIVE SYSTEM CONSULTANT'],
                    textIndex: 0,
                    charIndex: 0,
                    typeSpeed: 150,
                    }"
                    x-init="setInterval(function(){
                    let current = $data.textArray[ $data.textIndex ];
                    $data.text = current.substring(0, $data.charIndex);
                    $data.charIndex += 1;
                    }, $data.typeSpeed);"
                    >
                    <h1 class="text-white md:text-6xl text-2xl font-bold font-sans m-0 leading-tight text-center md:max-w-4xl " x-text="text">
                    </h1>
                    <p class="text-white my-4 text-center text-sm md:w-full md:text-2xl">Your IT Solution Provider</p>
                    <div class="flex justify-center">
                        <a href="{{route('login')}}" class="mt-5 font-semibold flex items-center  px-8 py-3 border border-transparent text-base rounded-lg text-white bg-blue-800 hover:bg-blue-600 md:py-4 md:text-lg md:px-10">
                            Sign in
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- About us -->
    <div class="py-24 px-12" id="about">
        <div class="container mx-auto flex flex-wrap">
            <div data-aos="flip-left" class="w-full md:w-1/2 md:pr-4 flex flex-wrap mb-12 md:mb-0">
                <div class="p-2 w-1/2">
                    <img src="https://miro.medium.com/max/11060/1*-Az7OcxNpaO8S4RtM-yozg.jpeg"
                        class="w-full h-64 object-cover" />
                </div>
                <div class="p-2 w-1/2">
                    <img src="https://m.economictimes.com/thumb/msid-77724666,width-1200,height-900,resizemode-4,imgsize-123509/untitled-11.jpg"
                        class="w-full h-64 object-cover" />
                </div>
                <div class="p-2 w-full">
                    <img src=https://images.theconversation.com/files/282796/original/file-20190705-51288-11bmkqz.jpg?ixlib=rb-1.1.0&q=45&auto=format&w=496&fit=clip"
                        class="w-full h-64 object-cover" />
                </div>
            </div>
            <div data-aos="fade-left" class="w-full md:w-1/2 md:pl-4">
                <h2 class="text-4xl mb-10 text-blue-800 font-semibold">About Us</h2>
                <div class="max-w-lg">
                    <p class="mb-6 text-gray-200">CSC was incorporated on May 1999 as a software, software development, 
                        research center, systems integration and IT consultancy company.</p>
                    <p class="mb-6 text-gray-200">CSC was founded and managed by individuals experienced in finance/banking and information technology, 
                        IT consultancy, client server system development and corporate management.</p>
                    <p class="mb-10 text-gray-200">A fully Malaysian / Bumiputra-owned company; 
                        the company was started with a handful of IT/technical staff knowledgeable in system management with financial and banking businesses.</p>
                    <p class="mb-10 text-gray-200">CSC helps organizations maximizing value from investments in information technology by supplying consultancy, 
                        software and systems integration to the highest professional standard.</p>
                </div>
            </div>
        </div>

    </div>

    <!-- Contact Us -->
    <div class="w-full -mt-6 pt-32 pb-24 px-12 text-center bg-blue-800 text-white" id="contactus">
        <div data-aos="fade-up">
            <h2 class="text-4xl mb-6">Subscribe to join us</h2>
            <p class="font-sans text-sm mx-auto max-w-xl leading-loose mb-4">Lorem ipsum dolor sit amet, consectetur
                adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
            </p>
            <p class="font-sans text-sm mx-auto max-w-xl leading-loose">Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore. </p>
            <form action="" method="POST">
                <div class="pt-10 mb-6 flex justify-center items-end text-left">
                    <div class="p-4">
                        <input type="text" name="" placeholder="First name"
                            class="font-sans text-sm px-2 h-10 bg-transparent border-b-2" />
                    </div>
                    <div class="p-4">
                        <input type="email" name="" placeholder="Email address"
                            class="font-sans text-sm px-2 h-10 bg-transparent border-b-2" />
                    </div>
                </div>
                <button
                    class="mx-auto bg-gray-800 text-white px-6 py-3 flex items-center justify-center text-sm hover:bg-gray-700">Subscribe
                </button>
            </form>
        </div>
    </div>

    <div class="text-white text-center text-sm py-12">
        <p>Copyright &copy; 2020 heheehe</p>
    </div> 
</body>
<script>
    const menuTarget = document.querySelector('[data-menu-toggle]')
    const menu = document.querySelector('[data-menu]')

    menuTarget.addEventListener('click', event => {
    event.preventDefault()
    menuTarget.lastElementChild.classList.toggle('text-brand')
    menu.classList.toggle('hidden')
})
</script>
</html>

@endsection