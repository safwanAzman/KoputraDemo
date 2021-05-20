<div>
    <div class="relative z-20 px-0 mx-auto my-1 text-lg font-medium leading-6 text-cool-gray-900">
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
                        <x-tab2.nav-tab2 name="4" livewire="">
                            <div class="flex text-sm font-medium">
                                <x-heroicon-o-truck class="w-6 h-6 mr-2"/>
                                Services
                        </x-tab2.nav-tab2>
                    </div>
                </div>
                <div class="px-5 py-5 mt-2 bg-white rounded-lg shadow-xl">
                    <x-tab2.nav-content2 name="0">
                        <x-page.member.dashboard-grid>
                            <x-page.member.dashboard-product-card type="homestay" title="APARTMENT WHITE ROSE, CAMERON HIGHLAND" description="400" description2="350" img="white_rose_cameron.jpg" route="{{ route('nonmembers.product.homestay.cameron.booking') }}" routeDetails="{{ route('nonmembers.product.homestay.cameron') }}"/>
                            <x-page.member.dashboard-product-card type="trading" title="BANANA ROYALE" description="15.00" img="banana_royale.jpg"/>
                            <x-page.member.dashboard-product-card type="homestay" title="HOMESTAY LARKIN" description="400" description2="320" img="homestay_larkin.jpg"/>
                            <x-page.member.dashboard-product-card type="homestay" title="HOMESTAY WHITE ROSE, SERI KEMBANGAN" description="250" description2="150" img="white_rose_seri_kembangan.jpg"/>
                            <x-page.member.dashboard-product-card type="trading" title="KEREPEK" description="20.00" img="kerepek.jpg"/>
                            <x-page.member.dashboard-product-card type="trading" title="KURMA ABYAR" description="9.50" img="kurma.jpg"/>
                            <x-page.member.dashboard-product-card type="trading" title="KUIH BANGKIT CHEESE" description="18.99" img="bangkit_cheese.jpg"/>
                            <x-page.member.dashboard-product-card type="trading" title="KUIH TART" description="23.00" img="tart.jpg"/>
                            <x-page.member.dashboard-product-card type="trading" title="MAKANAN SEDIA DIHIDANG" description="8.50" img="masakan_segera.jpg" route="{{ route('nonmembers.product.trading.makananTersedia.buy') }}" routeDetails="{{ route('nonmembers.product.trading.makananTersedia') }}"/>
                            <x-page.member.dashboard-product-card type="financing" title="PEMBIAYAAN BERCAGARKAN EMAS" description="5.00% p.a" img="emas.png"/>
                            <x-page.member.dashboard-product-card type="financing" title="PEMBIAYAAN CASH-i PLUS" description="5.00% p.a" img="cash-i.png"/>
                            <x-page.member.dashboard-product-card type="financing" title="PEMBIAYAAN KENDERAAN (PERODUA)" description="3.90% p.a" img="kereta_perodua.png"/>
                            <x-page.member.dashboard-product-card type="financing" title="PEMBIAYAAN KENDERAAN (PROTON)" description="4.90% p.a" img="kereta_proton.png"/>
                            <x-page.member.dashboard-product-card type="homestay" title="THE HERITAGE, SERI KEMBANGAN" description="350" description2="300" img="the_heritage.jpg"/>
                        </x-page.member.dashboard-grid>
                    </x-tab2.nav-content2>

                    <x-tab2.nav-content2 name="1">
                        <x-page.member.dashboard-grid>
                            <x-page.member.dashboard-product-card type="financing" title="PEMBIAYAAN CASH-i PLUS"  description="5.00% p.a" img="cash-i.png"/>
                            <x-page.member.dashboard-product-card type="financing" title="PEMBIAYAAN KENDERAAN (PERODUA)" description="3.90% p.a" img="kereta_perodua.png"/>
                            <x-page.member.dashboard-product-card type="financing" title="PEMBIAYAAN KENDERAAN (PROTON)" description="4.90% p.a" img="kereta_proton.png"/>
                            <x-page.member.dashboard-product-card type="financing" title="PEMBIAYAAN BERCAGARKAN EMAS" description="5.00% p.a" img="emas.png"/>
                        </x-page.member.dashboard-grid>
                    </x-tab2.nav-content2>

                    <x-tab2.nav-content2 name="2">
                        <x-page.member.dashboard-grid>
                            <x-page.member.dashboard-product-card type="trading" title="MAKANAN SEDIA DIHIDANG" description="8.50" img="masakan_segera.jpg" route="{{ route('nonmembers.product.trading.makananTersedia.buy') }}" routeDetails="{{ route('nonmembers.product.trading.makananTersedia') }}"/>
                            <x-page.member.dashboard-product-card type="trading" title="KURMA ABYAR" description="9.50" img="kurma.jpg"/>
                            <x-page.member.dashboard-product-card type="trading" title="KUIH BANGKIT CHEESE" description="18.99" img="bangkit_cheese.jpg"/>
                            <x-page.member.dashboard-product-card type="trading" title="KUIH TART" description="23.00" img="tart.jpg"/>
                            <x-page.member.dashboard-product-card type="trading" title="BANANA ROYALE" description="15.00" img="banana_royale.jpg"/>
                            <x-page.member.dashboard-product-card type="trading" title="KEREPEK" description="20.00" img="kerepek.jpg"/>
                        </x-page.member.dashboard-grid>
                    </x-tab2.nav-content2>

                    <x-tab2.nav-content2 name="3">
                        <x-page.member.dashboard-grid>
                            <x-page.member.dashboard-product-card type="homestay" title="APARTMENT WHITE ROSE, CAMERON HIGHLAND" description="400" description2="350" img="white_rose_cameron.jpg" route="{{ route('nonmembers.product.homestay.cameron.booking') }}" routeDetails="{{ route('members.product.homestay.cameron') }}"/>
                            <x-page.member.dashboard-product-card type="homestay" title="HOMESTAY WHITE ROSE, SERI KEMBANGAN" description="250" description2="150" img="white_rose_seri_kembangan.jpg"/>
                            <x-page.member.dashboard-product-card type="homestay" title="THE HERITAGE, SERI KEMBANGAN" description="350" description2="300" img="the_heritage.jpg"/>
                            <x-page.member.dashboard-product-card type="homestay" title="HOMESTAY LARKIN" description="400" description2="320" img="homestay_larkin.jpg"/>
                        </x-page.member.dashboard-grid>
                    </x-tab2.nav-content2>

                    <x-tab2.nav-content2 name="4">
                        <x-page.member.dashboard-grid>
                            <x-page.member.dashboard-product-card type="services" title="CUCIAN RUMAH DAN BAGUNAN" description="200" img="kpc2.jpg" route="{{route('nonservicesBooking')}}" routeDetails="#"/>
                            <x-page.member.dashboard-product-card type="services" title="Sanitasi dalaman dan luaran bangunan" description="200" img="kpc1.jpg" route="#" routeDetails="#"/>
                            <x-page.member.dashboard-product-card type="services" title="Perkhidmatan Pembasmian Virus" description="499" img="kpc3.jpg" route="#" routeDetails="#"/> 
                        </x-page.member.dashboard-grid>
                    </x-tab2.nav-content2>
                </div>
            </div>
        </x-general.grid>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    </div>

    <!-- header -->
    <div class="absolute top-0 left-0 right-0 z-0">
        <header>
            <div class="w-full bg-center bg-cover" style="height:30rem; background-image: url();">
                <div class="w-full h-full px-8 py-4 bg-indigo-600 bg-opacity-100 ">
                    <!-- Main content header -->
                    <div class="">
                        <h1 class="text-4xl font-bold text-white uppercase whitespace-nowrap">Dashboard</h1>
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

    save10(){

        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Something went wrong!',
        })
    }
</script>

@endpush