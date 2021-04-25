<div>
    <div class="relative z-20 px-0 mx-auto my-1 text-lg font-medium leading-6 text-cool-gray-900">
        <x-general.grid mobile="1" gap="5" sm="1" md="1" lg="2" xl="2" class="col-span-6" >

            <div class="px-4 py-4 bg-white rounded-lg">
                <div class="flex items-center space-x-2">
                    <span class="px-2 py-2 bg-green-400 rounded-full">
                        <x-heroicon-o-information-circle class="text-white w-7 h-7" />
                    </span>
                    <p class="text-2xl text-gray-400">Status Terkini</p>
                </div>
                <x-general.grid mobile="1" gap="5" sm="2" md="2" lg="2" xl="2" class="items-center col-span-6 mt-4">
                    <div>
                        <p class="text-lg">NAMA KOPERASI</p>
                        <p class="text-lg text-gray-400 uppercase">KOPERASI KOSWIP MALAYSIA BERHAD</p>
                    </div>
                    <div>
                        <p class="text-lg">NO. PERMOHONAN</p>
                        <p class="text-lg text-gray-400 uppercase">002002210069</p>
                    </div>
                    <div>
                        <p class="text-lg">STATUS PERMOHONAN</p>
                        <p class="text-lg text-gray-400 uppercase">SEDANG DIPOHON</p>
                    </div>
                    <div>
                        <p class="text-lg">TARIKH PERMOHONAN</p>
                        <p class="text-lg text-gray-400 uppercase">23-04-2021</p>
                    </div>
                </x-general.grid>
                <div class="flex mt-4 space-x-2">
                    <a href="#" class="flex px-4 py-1 text-sm font-bold text-white bg-green-400 rounded hover:bg-green-500">
                        <div class="flex items-center space-x-2 text-xs">
                            <p>Sambung Permohonan</p>
                        </div>
                    </a>

                    <a href="#" class="flex px-4 py-1 text-sm font-bold text-white bg-red-500 rounded hover:bg-red-600">
                        <div class="flex items-center space-x-2 text-xs">
                            <p>Batal Permohonan</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="px-4 py-6 bg-white rounded-lg">
                <div class="flex items-center space-x-2">
                    <span class="px-2 py-2 bg-blue-500 rounded-full">
                        <x-heroicon-o-document-text class="text-white w-7 h-7" />
                    </span>
                    <p class="text-2xl text-gray-400">INFO KELAYAKAN</p>
                </div>
                <x-general.grid mobile="1" gap="5" sm="2" md="2" lg="2" xl="2" class="items-center col-span-6 ">
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
                        <p class="text-xs text-gray-400">* Anggaran ini berdasarkan tempoh maksimum 10 tahun</p>
                        <p class="text-xs text-gray-400">** Anggaran DSR berdasarkan Slip Gaji Terkini</p>
                    </div>
                    <div class="flex mt-4 space-x-2">
                        <a href="#" class="flex px-4 py-1 text-sm font-bold text-white bg-indigo-600 rounded hover:bg-indigo-700">
                            <div class="flex items-center space-x-2 text-xs">
                                <p>Bantuan untuk memilih produk</p>
                            </div>
                        </a>
                    </div>
            </div>
        </x-general.grid>

        <x-general.grid mobile="1" gap="5" sm="1" md="1" lg="1" xl="1" class="items-center col-span-6 mt-8" x-data="{ active: 0 }">
            <div class="px-4 py-4 bg-white rounded-lg">
                <div class="px-2 py-2 bg-white rounded-lg shadow-xl">
                    <div class="flex space-x-2">
                        <x-tab2.nav-tab2 name="0" livewire="">
                            <div class="flex text-sm font-medium">
                                <x-heroicon-o-clipboard-list class="w-6 h-6 mr-2"/>All
                            </div>
                        </x-tab2.nav-tab2>
                        <x-tab2.nav-tab2 name="1" livewire="">
                            <div class="flex text-sm font-medium">
                                <x-heroicon-o-currency-dollar class="w-6 h-6 mr-2"/>Financing
                            </div>
                        </x-tab2.nav-tab2>
                        <x-tab2.nav-tab2 name="2" livewire="">
                            <div class="flex text-sm font-medium">
                                <x-heroicon-o-chart-square-bar class="w-6 h-6 mr-2"/>
                                Trading
                        </x-tab2.nav-tab2>
                        <x-tab2.nav-tab2 name="3" livewire="">
                            <div class="flex text-sm font-medium">
                                <x-heroicon-o-home class="w-6 h-6 mr-2"/>
                                Homestay
                        </x-tab2.nav-tab2>
                    </div>
                </div>
                <div class="px-5 py-5 mt-2 bg-white rounded-lg shadow-xl">
                    <x-tab2.nav-content2 name="0">
                        <x-page.member.dashboard-grid>
                            <x-page.member.dashboard-product-card type="homestay" title="APARTMENT WHITE ROSE, CAMERON HIGHLAND" description="400" description2="350" img="white_rose_cameron.jpg"/>
                            <x-page.member.dashboard-product-card type="trading" title="BANANA ROYALE" description="15.00" img="banana_royale.jpg"/>
                            <x-page.member.dashboard-product-card type="homestay" title="HOMESTAY LARKIN" description="400" description2="320" img="homestay_larkin.jpg"/>
                            <x-page.member.dashboard-product-card type="homestay" title="HOMESTAY WHITE ROSE, SERI KEMBANGAN" description="250" description2="150" img="white_rose_seri_kembangan.jpg"/>
                            <x-page.member.dashboard-product-card type="trading" title="KEREPEK" description="20.00" img="kerepek.jpg"/>
                            <x-page.member.dashboard-product-card type="trading" title="KURMA ABYAR" description="9.50" img="kurma.jpg"/>
                            <x-page.member.dashboard-product-card type="trading" title="KUIH BANGKIT CHEESE" description="18.99" img="bangkit_cheese.jpg"/>
                            <x-page.member.dashboard-product-card type="trading" title="KUIH TART" description="23.00" img="tart.jpg"/>
                            <x-page.member.dashboard-product-card type="trading" title="MAKANAN SEDIA DIHIDANG" description="8.50" img="masakan_segera.jpg"/>
                            <x-page.member.dashboard-product-card type="financing" title="PEMBIAYAAN BERCAGARKAN EMAS" description="5.00% p.a" img="emas.png"/>
                            <x-page.member.dashboard-product-card type="financing" title="PEMBIAYAAN CASH-i PLUS" description="5.00% p.a" img="cash-i.png"/>
                            <x-page.member.dashboard-product-card type="financing" title="PEMBIAYAAN KENDERAAN (PERODUA)" description="3.90% p.a" img="kereta_perodua.png"/>
                            <x-page.member.dashboard-product-card type="financing" title="PEMBIAYAAN KENDERAAN (PROTON)" description="4.90% p.a" img="kereta_proton.png"/>
                            <x-page.member.dashboard-product-card type="homestay" title="THE HERITAGE, SERI KEMBANGAN" description="350" description2="300" img="the_heritage.jpg"/>
                        </x-page.member.dashboard-grid>
                    </x-tab2.nav-content2>

                    <x-tab2.nav-content2 name="1">
                        <x-page.member.dashboard-grid>
                            <x-page.member.dashboard-product-card type="financing" title="PEMBIAYAAN CASH-i PLUS" description="5.00% p.a" img="cash-i.png"/>
                            <x-page.member.dashboard-product-card type="financing" title="PEMBIAYAAN KENDERAAN (PERODUA)" description="3.90% p.a" img="kereta_perodua.png"/>
                            <x-page.member.dashboard-product-card type="financing" title="PEMBIAYAAN KENDERAAN (PROTON)" description="4.90% p.a" img="kereta_proton.png"/>
                            <x-page.member.dashboard-product-card type="financing" title="PEMBIAYAAN BERCAGARKAN EMAS" description="5.00% p.a" img="emas.png"/>
                        </x-page.member.dashboard-grid>
                    </x-tab2.nav-content2>

                    <x-tab2.nav-content2 name="2">
                        <x-page.member.dashboard-grid>
                            <x-page.member.dashboard-product-card type="trading" title="MAKANAN SEDIA DIHIDANG" description="8.50" img="masakan_segera.jpg"/>
                            <x-page.member.dashboard-product-card type="trading" title="KURMA ABYAR" description="9.50" img="kurma.jpg"/>
                            <x-page.member.dashboard-product-card type="trading" title="KUIH BANGKIT CHEESE" description="18.99" img="bangkit_cheese.jpg"/>
                            <x-page.member.dashboard-product-card type="trading" title="KUIH TART" description="23.00" img="tart.jpg"/>
                            <x-page.member.dashboard-product-card type="trading" title="BANANA ROYALE" description="15.00" img="banana_royale.jpg"/>
                            <x-page.member.dashboard-product-card type="trading" title="KEREPEK" description="20.00" img="kerepek.jpg"/>
                        </x-page.member.dashboard-grid>
                    </x-tab2.nav-content2>

                    <x-tab2.nav-content2 name="3">
                        <x-page.member.dashboard-grid>
                            <x-page.member.dashboard-product-card type="homestay" title="APARTMENT WHITE ROSE, CAMERON HIGHLAND" description="400" description2="350" img="white_rose_cameron.jpg"/>
                            <x-page.member.dashboard-product-card type="homestay" title="HOMESTAY WHITE ROSE, SERI KEMBANGAN" description="250" description2="150" img="white_rose_seri_kembangan.jpg"/>
                            <x-page.member.dashboard-product-card type="homestay" title="THE HERITAGE, SERI KEMBANGAN" description="350" description2="300" img="the_heritage.jpg"/>
                            <x-page.member.dashboard-product-card type="homestay" title="HOMESTAY LARKIN" description="400" description2="320" img="homestay_larkin.jpg"/>
                        </x-page.member.dashboard-grid>
                    </x-tab2.nav-content2>
                </div>
            </div>
        </x-general.grid>
    </div>

    <!-- header -->
    <div class="absolute top-0 left-0 right-0 z-0">
        <header>
            <div class="w-full bg-center bg-cover" style="height:30rem; background-image: url();">
                <div class="w-full h-full px-8 py-4 bg-indigo-600 bg-opacity-100 ">
                    <!-- Main content header -->
                    <div class="">
                        <h1 class="text-4xl font-bold text-white uppercase whitespace-nowrap"></h1>
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