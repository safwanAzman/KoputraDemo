<li class="flex flex-col col-span-1 text-center bg-white divide-y divide-gray-200 rounded-lg shadow" x-data="{ cartOpen: false  }">
    <div class="flex flex-col flex-1 p-8">
        <img class="flex-shrink-0 w-64 h-64 mx-auto bg-black rounded-full" src="{{ url('/img/member/'.$img) }}" alt="">
        <h3 class="mt-6 text-xl font-bold text-gray-900 uppercase">{{ $title }}</h3>
        <dl class="flex flex-col justify-between flex-grow mt-1">

            @if ($type == 'financing')
                <div class="flex justify-center">
                    <x-heroicon-s-trending-up class="w-6 h-6 mr-2 text-red-700"/>
                    <div class="font-semibold text-red-700 text-md">{{ $description }}</div>
                </div>
            @elseif ($type == 'trading')
                <div class="flex justify-center">
                    <div class="font-semibold text-red-700 text-md">RM {{ $description }}</div>
                </div>
            @elseif ($type == 'services')
                <div class="flex justify-center">
                    <div class="font-semibold text-red-700 text-md">RM {{ $description }}</div>
                </div>
            @elseif ($type == 'homestay')
                <div>
                    <div class="font-semibold text-red-700 text-md">Orang Awam - RM {{ $description }}</div>
                    <div class="font-semibold text-red-700 text-md">Anggota KOPUTRA - RM {{ $description2 }}</div>
                </div>
            @endif

            @if ($type == 'financing')
                <div class="mt-3">
                    <div class="text-gray-500 text-md">Kadar keuntungan terendah</div>
                </div>
            @endif
        </dl>
    </div>
    <div>
        <div class="flex -mt-px divide-x divide-gray-200 " >
            <div class="flex flex-1 w-0 rounded-bl-lg hover:bg-green-400 group" x-data="{Open : false}" >
                <a x-on:click="Open = {{Route::current()->uri == "nonmembers" || \Request::is("nonmembers/*")  ? false : true }}" href="{{ $route }}" 
                class="relative inline-flex items-center 
                        justify-center flex-1 w-0 py-4 -mr-px 
                        text-sm font-medium text-gray-700 
                        border border-transparent rounded-bl-lg 
                        cursor-pointer hover:text-gray-500"
                        @if($type == 'financing' && Route::current()->uri == "nonmembers" || \Request::is("nonmembers/*"))
                            onclick=save10()
                        @endif
                        >
                    @if ($type == 'financing')
                        <x-heroicon-s-pencil-alt class="w-5 h-5 text-gray-400 group-hover:text-white" />
                        <span class="ml-3 group-hover:text-white">Apply Now</span>
                    @elseif  ($type == 'trading')
                        <x-heroicon-s-shopping-bag class="w-5 h-5 text-gray-400 group-hover:text-white"/>
                        <span class="ml-3 group-hover:text-white">Buy Now</span>
                    @elseif  ($type == 'homestay')
                        <x-heroicon-s-key class="w-5 h-5 text-gray-400 group-hover:text-white"/>
                        <span class="ml-3 group-hover:text-white">Book Now</span>
                    @elseif  ($type == 'services')
                        <x-heroicon-s-key class="w-5 h-5 text-gray-400 group-hover:text-white"/>
                        <span class="ml-3 group-hover:text-white">Book Now</span>
                    @endif
                </a>
                @if ($type == 'financing')
                    @include('pages.member.financing.apply')
                @endif
            </div>
                @if ($type == 'trading')
                    <div class="flex flex-1 w-0 hover:bg-yellow-400 group" @click="cartOpen = !cartOpen">
                        <div class="relative inline-flex items-center justify-center flex-1 w-0 py-4 -mr-px text-sm font-medium text-gray-700 border border-transparent rounded-bl-lg cursor-pointer hover:text-gray-500">
                            <x-heroicon-s-shopping-cart class="w-5 h-5 text-gray-400 group-hover:text-white"/>
                            <span class="ml-3 group-hover:text-white">Add to Cart</span>
                        </div>
                    </div>
                    <!--cart slider-->
                    <div :class="cartOpen ? 'translate-x-0 ease-out' : 'translate-x-full ease-in'" class="fixed top-0 right-0 z-50 w-full h-full max-w-xs px-6 py-4 overflow-y-auto transition duration-300 transform bg-white border-l-2 border-gray-300">
                        <div class="flex items-center justify-between">
                            <h3 class="text-2xl font-medium text-gray-700">Your cart</h3>
                            <button @click="cartOpen = !cartOpen" class="text-gray-600 focus:outline-none">
                                <svg class="w-5 h-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M6 18L18 6M6 6l12 12"></path></svg>
                            </button>
                        </div>
                        <hr class="my-3">
                        <div class="mt-6">
                            <div class="flex">
                                <img class="object-cover w-20 h-20 rounded"
                                    src="{{ url('/img/member/'.$img) }}"
                                    alt="">
                                <div class="mx-3">
                                    <h3 class="text-sm font-semibold text-left">{{ $title }}</h3>
                                    <h4 class="font-semibold text-left text-red-600">RM {{ $description }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--cart slider End-->
                @endif
            <div class="flex flex-1 w-0 -ml-px rounded-br-lg hover:bg-blue-400 group">
                <a href="{{ $routeDetails }}" class="relative inline-flex items-center justify-center flex-1 w-0 py-4 text-sm font-medium text-gray-700 border border-transparent rounded-br-lg cursor-pointer hover:text-gray-500">
                    <x-heroicon-s-information-circle class="w-5 h-5 text-gray-400 group-hover:text-white"/>
                    <span class="ml-3 group-hover:text-white">Details</span>
                </a>
            </div>
        </div>
    </div>
</li>
<script>
    function save10(){

        Swal.fire({
            icon: 'error',
            title: 'MAAF!',
            showConfirmButton: false,
            html:`
            <div class="flex justify-center mb-4">
                <p>Kemudahan Hanya Untuk Anggota KOPUTRA Berdaftar. Sila Mohon Keahlian Anda Sekarang.</p>
            </div>
            <div class="flex justify-center">
                <a href="{{route('mohon')}}" class="bg-blue-400 py-2 px-4 flex items-center rounded-lg  text-white font-semibold hover:bg-blue-500">
                    OK
                </a>
            </div>
            `
        })
    }
</script>