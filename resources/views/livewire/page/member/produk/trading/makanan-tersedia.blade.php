<div>
    <div class="z-20 relative mx-auto px-0 my-3 text-lg leading-6 font-medium text-cool-gray-900">
        <div class="py-6 my-10 bg-white rounded-lg shadow">
            <div class="w-full px-4 mt-1 sm:px-6 lg:px-8">
                <div class="px-1 mb-8">
                    <div class="flex justify-between">
                        <div class="font-semibold text-gray-700 md:text-2xl">
                            Product Detail
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
                        <div x-data="{imageUrl: '{{ url('/img/member/masakan_segera.jpg')}}'}" x-cloak>
                            <div class="h-64 mb-4 bg-gray-100 rounded-lg md:h-80">
                                <div class="flex items-center justify-center h-64 mb-4 bg-gray-100 rounded-lg md:h-80">
                                    <img id="main" :src="imageUrl" class="w-full h-full bg-cover" />
                                </div>
                            </div>
                            <div class="grid grid-cols-4 gap-6 mt-6 sm:grid-cols-4 lg:grid-cols-4 xl:grid-cols-4">
                                <button class="flex items-center justify-center w-full h-24 bg-gray-100 rounded-lg focus:outline-none md:h-32">
                                    <img src="{{ url('/img/member/masakan_segera.jpg')}}" class="w-full h-full bg-cover" @click="imageUrl = '{{ url('/img/member/masakan_segera.jpg') }}'" />
                                </button>
                                <button
                                    class="flex items-center justify-center w-full h-24 bg-gray-100 rounded-lg focus:outline-none md:h-32">
                                    <img src="{{ url('/img/member/masakan_segera2.jpg') }}" class="w-full h-full bg-cover" @click="imageUrl = '{{ url('/img/member/masakan_segera2.jpg') }}'" />
                                </button>
                                <button
                                    class="flex items-center justify-center w-full h-24 bg-gray-100 rounded-lg focus:outline-none md:h-32">
                                    <img src="{{ url('/img/member/masakan_segera3.jpg') }}" class="w-full h-full bg-cover" @click="imageUrl = '{{ url('/img/member/masakan_segera3.jpg') }}'" />
                                </button>
                                <button
                                    class="flex items-center justify-center w-full h-24 bg-gray-100 rounded-lg focus:outline-none md:h-32">
                                    <img src="{{ url('/img/member/masakan_segera4.jpg') }}" class="w-full h-full bg-cover" @click="imageUrl = '{{ url('/img/member/masakan_segera4.jpg') }}'" />
                                </button>
                            </div>
                        </div>
                    </div>
                    <!--End detail of image -->

                    <!--Start detail for buying -->
                    <div class="px-4 mt-8 lg:flex-1 md:mt-0">
                        <h2 class="mb-2 text-2xl font-bold leading-tight tracking-tight text-gray-800 md:text-3xl">Retort Food, Makanan Sedia Dihidang, Lauk Tapau Sambal</h2>
                        <p class="text-sm text-gray-500">By
                            <span class="text-yellow-400">KOPUTRA</span>
                        </p>
                        <div class="flex items-center my-4 space-x-4">
                            <div>
                                <div class="flex px-3 py-2 bg-gray-100 rounded-lg">
                                    <span class="text-xl font-bold text-yellow-400">RM 8.50</span>
                                </div>
                            </div>
                            <div class="flex-1">
                                <p class="text-xl font-semibold text-green-500">Save 12%</p>
                                <p class="text-sm text-gray-400">Inclusive of all Taxes.</p>
                            </div>
                        </div>
                        {{-- <p class="text-gray-500">{{$info->prod_desc}}</p> --}}
                        <x-form.basic-form wire:submit.prevent="buy">
                            <x-slot name="content">
                                <div class="flex py-4 space-x-4">
                                    <div class="relative">
                                        <div>
                                            <select value="prod_qty" wire:model="prod_qty" default="yes"
                                                class="flex items-end pt-5 pb-1 pl-4 pr-8 border border-gray-200 appearance-none cursor-pointer rounded-xl h-14">
                                                <option value="1">1</option>
                                            </select>
                                        </div>
                                        <div class="absolute top-0 block px-4 py-1 text-xs font-semibold tracking-wide text-center text-gray-400 uppercase">
                                            Qty
                                        </div>
                                    </div>

                                    <div class="flex">
                                        <a href="{{ route('members.product.trading.makananTersedia.buy') }}" class="items-center px-6 py-4 font-semibold text-white bg-green-400 cursor-pointer rounded-xl hover:bg-green-300 focus:outline-none">
                                            Buy Now
                                        </a>
                                        <a href="#" class="items-center px-6 py-4 ml-2 font-semibold text-white bg-yellow-400 cursor-pointer rounded-xl hover:bg-yellow-300 focus:outline-none">
                                            Add to Cart
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
        <x-general.header bgimg=""  title="Product Detail" height="8rem"/>
    </div>
</div>