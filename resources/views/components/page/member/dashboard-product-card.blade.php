<li class="flex flex-col col-span-1 text-center bg-white divide-y divide-gray-200 rounded-lg shadow" x-data="{ cartOpen: false  }">
    <div class="flex flex-col flex-1 p-8">
        <img class="flex-shrink-0 w-64 h-64 mx-auto bg-black rounded-full" src="{{ url('/img/member/'.$img) }}" alt="">
        <h3 class="mt-6 text-xl font-bold text-gray-900">{{ $title }}</h3>
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
        <div class="flex -mt-px divide-x divide-gray-200 ">
            <div class="flex flex-1 w-0 rounded-bl-lg hover:bg-green-400 group" x-data="{Open : false}">
                <a x-on:click="Open = true" href="{{ $routeBuy }}" class="relative inline-flex items-center justify-center flex-1 w-0 py-4 -mr-px text-sm font-medium text-gray-700 border border-transparent rounded-bl-lg cursor-pointer hover:text-gray-500">
                    @if ($type == 'financing')
                        <x-heroicon-s-pencil-alt class="w-5 h-5 text-gray-400 group-hover:text-white"/>
                        <span class="ml-3 group-hover:text-white">Apply Now</span>
                    @elseif  ($type == 'trading')
                        <x-heroicon-s-shopping-bag class="w-5 h-5 text-gray-400 group-hover:text-white"/>
                        <span class="ml-3 group-hover:text-white">Buy Now</span>
                    @elseif  ($type == 'homestay')
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
                    <div :class="cartOpen ? 'translate-x-0 ease-out' : 'translate-x-full ease-in'" class="z-50 fixed right-0 top-0 max-w-xs w-full h-full px-6 py-4 transition duration-300 transform overflow-y-auto bg-white border-l-2 border-gray-300">
                        <div class="flex items-center justify-between">
                            <h3 class="text-2xl font-medium text-gray-700">Your cart</h3>
                            <button @click="cartOpen = !cartOpen" class="text-gray-600 focus:outline-none">
                                <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M6 18L18 6M6 6l12 12"></path></svg>
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
                                    <h4 class="font-semibold text-red-600 text-left">RM {{ $description }}</h4>
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