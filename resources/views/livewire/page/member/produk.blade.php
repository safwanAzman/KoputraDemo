<div>
    <div class="z-20 relative mx-auto px-0 my-1 text-lg leading-6 font-medium text-cool-gray-900">
        <x-general.grid mobile="1" gap="5" sm="1" md="1" lg="2" xl="2" class="col-span-6" >
            
            <div class="bg-white py-4 px-4 rounded-lg">
                <div class="flex items-center space-x-2">
                    <span class="rounded-full py-2 px-2 bg-green-400">
                        <x-heroicon-o-information-circle class="w-7 h-7 text-white" />
                    </span>
                    <p class="text-2xl text-gray-400">Status Terkini</p>
                </div>
                <x-general.grid mobile="1" gap="5" sm="2" md="2" lg="2" xl="2" class="col-span-6 items-center mt-4">
                    <div>
                        <p class="text-lg">NAMA KOPERASI</p>
                        <p class="text-lg  text-gray-400 uppercase">KOPERASI KOSWIP MALAYSIA BERHAD</p>
                    </div>
                    <div>
                        <p class="text-lg">NO. PERMOHONAN</p>
                        <p class="text-lg  text-gray-400 uppercase">002002210069</p>
                    </div>
                    <div>
                        <p class="text-lg">STATUS PERMOHONAN</p>
                        <p class="text-lg  text-gray-400 uppercase">SEDANG DIPOHON</p>
                    </div>
                    <div>
                        <p class="text-lg">TARIKH PERMOHONAN</p>
                        <p class="text-lg  text-gray-400 uppercase">23-04-2021</p>
                    </div>
                </x-general.grid>
                <div class="flex space-x-2 mt-4">
                    <a href="#" class="flex px-4 py-1 text-sm font-bold text-white bg-green-400  hover:bg-green-500 rounded">
                        <div class="flex items-center space-x-2 text-xs">
                            <p>Sambung Permohonan</p>
                        </div>
                    </a>

                    <a href="#" class="flex px-4 py-1 text-sm font-bold text-white bg-red-500  hover:bg-red-600 rounded">
                        <div class="flex items-center space-x-2 text-xs">
                            <p>Batal Permohonan</p>
                        </div>
                    </a>
                </div>
            </div>
            
            <div class="bg-white py-6 px-4 rounded-lg">
                <div class="flex items-center space-x-2">
                    <span class="rounded-full py-2 px-2 bg-blue-500">
                        <x-heroicon-o-document-text class="w-7 h-7 text-white" />
                    </span>
                    <p class="text-2xl text-gray-400">INFO KELAYAKAN</p>
                </div>
                <x-general.grid mobile="1" gap="5" sm="2" md="2" lg="2" xl="2" class="col-span-6 items-center ">
                    <div>
                        <div>
                            <p class="text-lg text-gray-400 ">Anggaran Pembiayaan Maksimum</p>
                            <p class="text-lg font-semibold uppercase">RM 141,000.00</p>
                        </div>
                        <div class="mt-4">
                            <p class="text-lg text-gray-400 ">Anggaran Ansuran Bulanan</p>
                            <p class="text-lg font-semibold uppercase">RM 1,820.03</p>
                        </div>
                    </div>
                    <div class="flex justify-center w-full">
                        <div>
                            <div id="gauge"></div>
                            <div class="flex justify-center">
                                <b class="text-sm">DSR Terkini **</b>
                            </div>    
                        </div>
                    </div>

                </x-general.grid>
                    <div class="mt-2">
                        <p class="text-gray-400 text-xs">* Anggaran ini berdasarkan tempoh maksimum 10 tahun</p>
                        <p class="text-gray-400 text-xs">** Anggaran DSR berdasarkan Slip Gaji Terkini</p>
                    </div>
                    <div class="flex space-x-2 mt-4">
                        <a href="#" class="flex px-4 py-1 text-sm font-bold text-white bg-indigo-600  hover:bg-indigo-700 rounded">
                            <div class="flex items-center space-x-2 text-xs">
                                <p>Bantuan untuk memilih produk</p>
                            </div>
                        </a>
                    </div>
            </div>
        </x-general.grid>

        <x-general.grid mobile="1" gap="5" sm="1" md="1" lg="1" xl="1" class="col-span-6 items-center mt-8" x-data="{ active: 0 }">
            <div class="bg-white rounded-lg py-4 px-4">
                <div class="bg-white shadow-xl rounded-lg py-2 px-2">
                    <div class="flex space-x-2">
                        <x-tab2.nav-tab2 name="0" livewire="">
                            <div class="flex font-medium text-sm">
                                <x-heroicon-o-clipboard-list class="w-6 h-6 mr-2"/>All
                            </div>
                        </x-tab2.nav-tab2>
                        <x-tab2.nav-tab2 name="1" livewire="">
                            <div class="flex font-medium text-sm">
                                <x-heroicon-o-currency-dollar class="w-6 h-6 mr-2"/>Financing
                            </div>
                        </x-tab2.nav-tab2>
                        <x-tab2.nav-tab2 name="2" livewire="">
                            <div class="flex font-medium text-sm">
                                <x-heroicon-o-chart-square-bar class="w-6 h-6 mr-2"/>
                                Trading
                        </x-tab2.nav-tab2>
                        <x-tab2.nav-tab2 name="3" livewire="">
                            <div class="flex font-medium text-sm">
                                <x-heroicon-o-home class="w-6 h-6 mr-2"/>
                                Homestay
                        </x-tab2.nav-tab2>
                    </div>
                </div>
                <div class="bg-white shadow-xl rounded-lg py-2 px-10 mt-2">
                    <x-tab2.nav-content2 name="0">
                        <x-general.grid mobile="1" gap="5" sm="1" md="1" lg="4" xl="4" class="col-span-6" >
                        </x-general.grid>
                    </x-tab2.nav-content2>

                    <x-tab2.nav-content2 name="1">
                        2
                    </x-tab2.nav-content2>

                    <x-tab2.nav-content2 name="2">
                        3
                    </x-tab2.nav-content2>

                    <x-tab2.nav-content2 name="3">
                        4
                    </x-tab2.nav-content2>
                </div>
            </div>
        </x-general.grid>
    </div>

    <!-- header -->
    <div class="absolute top-0 left-0 right-0 z-0">
        <header>
            <div class="w-full bg-cover bg-center" style="height:30rem; background-image: url();">
                <div class=" px-8 py-4 h-full w-full bg-indigo-600 bg-opacity-100">
                    <!-- Main content header -->
                    <div class="">
                        <h1 class="text-4xl font-bold whitespace-nowrap text-white uppercase"></h1>
                    </div>
                </div>
            </div>
        </header>
    </div>

</div>
@push('js')
<script src="{{ asset('chart') }}/raphael.min.js"></script>
<script src="{{ asset('chart') }}/justgage.js"></script>

<script>
var gauge =new JustGage({

    
    id: "gauge",
    value:20,
    label: "%",
    min: 0,
    max: 100,
    height:1


});

</script>
    
@endpush