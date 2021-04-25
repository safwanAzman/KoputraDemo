<li class="flex flex-col col-span-1 text-center bg-white divide-y divide-gray-200 rounded-lg shadow">
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
            <div class="flex flex-1 w-0 rounded-bl-lg hover:bg-green-400 group">
                <a href="{{ $routeBuy }}" class="relative inline-flex items-center justify-center flex-1 w-0 py-4 -mr-px text-sm font-medium text-gray-700 border border-transparent rounded-bl-lg cursor-pointer hover:text-gray-500">
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
            </div>
            @if ($type == 'trading')
                <div class="flex flex-1 w-0 hover:bg-yellow-400 group">
                    <div class="relative inline-flex items-center justify-center flex-1 w-0 py-4 -mr-px text-sm font-medium text-gray-700 border border-transparent rounded-bl-lg cursor-pointer hover:text-gray-500">
                        <x-heroicon-s-shopping-cart class="w-5 h-5 text-gray-400 group-hover:text-white"/>
                        <span class="ml-3 group-hover:text-white">Add to Cart</span>
                    </div>
                </div>
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