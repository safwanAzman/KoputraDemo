<div>
    <div class="relative z-20 px-0 mx-auto my-3 text-lg font-medium leading-6 text-cool-gray-900">
        <div class="py-6 my-10 bg-white rounded-lg shadow">
            <div class="w-full px-4 mt-1 sm:px-6 lg:px-8">
                <div class="px-1 mb-8">
                    <div class="flex justify-between">
                        <div class="font-semibold text-gray-700 md:text-2xl">
                            Booking Detail
                        </div>
                        <div>
                            <a href="{{ route('members-produk') }}" class="flex items-center px-4 py-1 text-sm font-bold text-white bg-indigo-400 rounded cursor-pointer focus:outline-none hover:bg-indigo-300">
                                <x-heroicon-o-arrow-circle-left class="w-5 h-5 mr-2 text-white" />
                                Product List
                            </a>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col -mx-4 md:flex-row">
                    <!-Start detail of image -->
                    <div class="px-4 md:flex-1">
                        <div x-data="{imageUrl: '{{ url('/img/member/white_rose_cameron.jpg')}}'}" x-cloak>
                            <div class="h-64 mb-4 bg-gray-100 rounded-lg md:h-80">
                                <div class="flex items-center justify-center h-64 mb-4 bg-gray-100 rounded-lg md:h-80">
                                    <img id="main" :src="imageUrl" class="w-full h-full bg-cover" />
                                </div>
                            </div>
                            <div class="grid grid-cols-4 gap-6 mt-6 sm:grid-cols-4 lg:grid-cols-4 xl:grid-cols-4">
                                <button class="flex items-center justify-center w-full h-24 bg-gray-100 rounded-lg focus:outline-none md:h-32">
                                    <img src="{{ url('/img/member/white_rose_cameron.jpg')}}" class="w-full h-full bg-cover" @click="imageUrl = '{{ url('/img/member/white_rose_cameron.jpg') }}'" />
                                </button>
                                <button
                                    class="flex items-center justify-center w-full h-24 bg-gray-100 rounded-lg focus:outline-none md:h-32">
                                    <img src="{{ url('/img/member/white_rose_cameron2.jpg') }}" class="w-full h-full bg-cover" @click="imageUrl = '{{ url('/img/member/white_rose_cameron2.jpg') }}'" />
                                </button>
                                {{-- <button
                                    class="flex items-center justify-center w-full h-24 bg-gray-100 rounded-lg focus:outline-none md:h-32">
                                    <img src="{{ url('/img/member/masakan_segera3.jpg') }}" class="w-full h-full bg-cover" @click="imageUrl = '{{ url('/img/member/masakan_segera3.jpg') }}'" />
                                </button>
                                <button
                                    class="flex items-center justify-center w-full h-24 bg-gray-100 rounded-lg focus:outline-none md:h-32">
                                    <img src="{{ url('/img/member/masakan_segera4.jpg') }}" class="w-full h-full bg-cover" @click="imageUrl = '{{ url('/img/member/masakan_segera4.jpg') }}'" />
                                </button> --}}
                            </div>
                        </div>
                    </div>
                    <!--End detail of image -->

                    <!--Start detail for buying -->
                    <div class="px-4 mt-8 lg:flex-1 md:mt-0">
                        <h2 class="mb-2 text-2xl font-bold leading-tight tracking-tight text-gray-800 md:text-3xl">APARTMENT WHITE ROSE, CAMERON HIGHLAND</h2>
                        <p class="text-sm text-gray-500">By
                            <span class="text-yellow-400">KOPUTRA</span>
                        </p>
                        <div class="my-4">
                            <div class="text-sm ">Menginaplah di Apartment White Rose, Cameron Highlands sambil menikmati suasana tenang jauh dari kesesakan ibukota.</div>
                            <div class="text-sm ">Kami menawarkan apartment dilengkapi 3 bilik tidur beserta kemudahan penyediaan makanan sendiri dan wifi percuma! Bertempat di Tanah Rata, apartment ini juga hanya 700 meter daripada perkampungan Orang Asli. Kemudahan meletak kenderaan percuma juga di sediakan di kawasan yang berhampiran.</div>
                            <div class="mt-2 text-sm">Ladang strawberi dan ladang teh hanya mengambil masa 10 minit daripada apartment kami manakala Taman Rama-rama juga hanya 20 minit sahaja!</div>
                            <div class="mt-2 text-sm">Setiap apartment dilengkapi dengan balkoni, ruang tamu dan ruang makan dan juga dapur! TV dan juga bilik mandi peribadi disediakan buat anda!</div>
                            <div class="mt-2 text-sm">Tempahlah percutian anda sekarang dengan menghubungi kami!</div>
                        </div>
                        {{-- <p class="text-gray-500">{{$info->prod_desc}}</p> --}}
                        <x-form.basic-form wire:submit.prevent="buy">
                            <x-slot name="content">
                                <div class="flex py-4 space-x-4">
                                    <div class="flex">
                                        <a href="{{ route('members.product.homestay.cameron.booking') }}" class="items-center px-6 py-4 font-semibold text-white bg-green-400 cursor-pointer rounded-xl hover:bg-green-300 focus:outline-none">
                                            Book Now
                                        </a>
                                    </div>
                                </div>
                            </x-slot>
                        </x-form.basic-form>
                    </div>
                    <!--End detail for buying -->

                </div>
            </div>
        </div>
    </div>

    <!-- header -->
    <div class="absolute top-0 left-0 right-0 z-0">
        <x-general.header bgimg=""  title="Booking Detail"/>
    </div>
</div>