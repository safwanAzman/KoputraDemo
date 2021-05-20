
<div class="animate">
    <div class="text-indigo-600">
        <div class="flex p-2">
            <div class="flex py-3 px-2">
                <x-logo class="w-8 h-8 " /> 
                <p class="ml-2 font-semibold italic">MEMBER</p>
            </div>
        </div>
        <div>
            <ul class="mt-6 leading-10">

                <!-- members nav item Start -->

                    <x-sidebar.nav-item title="Dashboard" route="{{route('members-produk')}}" uri="">
                        <x-heroicon-o-chart-pie class="w-7 h-7" />
                    </x-sidebar.nav-item> 

                    <x-sidebar.nav-item title="Maklumat Keahlian" route="{{route('members-create')}}" uri="">
                        <x-heroicon-o-user-group class="w-7 h-7" />
                    </x-sidebar.nav-item>

                    <x-sidebar.nav-item title="Yuran" route="{{route('members-yuran')}}" uri="">
                        <x-heroicon-o-cash class="w-7 h-7" />
                    </x-sidebar.nav-item>

                    <x-sidebar.nav-item title="Saham" route="{{route('members-saham')}}" uri="">
                        <x-heroicon-o-presentation-chart-line class="w-7 h-7" />
                    </x-sidebar.nav-item>

                    <x-sidebar.nav-item title="Rekod Pembiayaan" route="{{route('members-pembiayaan')}}" uri="">
                        <x-heroicon-o-currency-dollar class="w-7 h-7" />
                    </x-sidebar.nav-item>

                    <x-sidebar.nav-item title="Jaminan" route="{{route('members-jaminan')}}" uri="">
                        <x-heroicon-o-shield-check class="w-7 h-7" />
                    </x-sidebar.nav-item>

                    <x-sidebar.nav-item title="Firasat" route="{{route('members-firasat')}}" uri="">
                        <x-heroicon-o-desktop-computer class="w-7 h-7" />
                    </x-sidebar.nav-item>

{{--                     
                    @if(Route::current()->uri == "adminkoputra" || \Request::is("adminkoputra/*") )
                        <x-sidebar.nav-item title="Permohonan/Konfigurasi" route="{{route('permohonan')}}" uri="">
                            <x-heroicon-o-presentation-chart-line class="w-7 h-7 text-green-500" />
                        </x-sidebar.nav-item>
                    @elseif(Route::current()->uri == "alk" || \Request::is("alk/*") )
                        <x-sidebar.nav-item title="Meluluskan Permohonan" route="{{route('alk')}}" uri="">
                            <x-heroicon-o-chart-square-bar class="w-7 h-7 text-yellow-500" />
                        </x-sidebar.nav-item>
                    @elseif(substr(Route::current()->uri,0,6) == "siskop")
                        <x-sidebar.nav-item title="Siskop" route="{{route('siskop.index')}}" uri="">
                            <x-heroicon-o-chart-bar class="w-7 h-7 text-pink-500" />
                        </x-sidebar.nav-item>
                    @endif --}}

                    {{-- <x-sidebar.dropdown-nav-item active="open" title="Permohonan/Konfigurasi" uri="stock/*">
                        <x-slot name="icon">
                            <x-heroicon-o-archive class="w-7 h-7" />
                        </x-slot>
                        <div class="leading-5">
                            <x-sidebar.dropdown-item title="PRESTASI KESELURUHAN" href="#" uri="#">
                                <x-slot name="icon">
                                    <x-heroicon-o-cube class="w-5 h-5" />
                                </x-slot>
                            </x-sidebar.dropdown-item>
                    </x-sidebar.dropdown-nav-item> --}}

                <!-- members nav item End -->

            </ul>
        </div>
    </div>
</div>