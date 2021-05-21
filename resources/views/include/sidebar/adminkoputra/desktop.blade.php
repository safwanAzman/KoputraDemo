
    <div class="animate">
        <div class="text-indigo-600">
            <div class="flex p-2">
                <div class="flex py-3 px-2">
                    <p class="ml-2 font-semibold italic">ADMIN KOPUTRA</p>
                </div>
            </div>
            <div>
                <ul class="mt-6 leading-10">
                    
                    <!-- AdminKoputra nav item Start -->
                    <x-sidebar.nav-item title="Permohonan" route="{{route('permohonan')}}" uri="">
                        <x-heroicon-o-home class="w-7 h-7" />
                    </x-sidebar.nav-item>

                    <x-sidebar.nav-item title="Kemas Kini Produk" route="{{route('adminkoputra')}}" uri="">
                        <x-heroicon-o-archive class="w-7 h-7" />
                    </x-sidebar.nav-item>

                    <x-sidebar.nav-item title="Gen. Setup" route="{{route('cifadmin')}}" uri="">
                        <x-heroicon-o-library class="w-7 h-7" />
                    </x-sidebar.nav-item>

                    <x-sidebar.nav-item title="Tetapan" route="{{route('tetapan')}}" uri="">
                        <x-heroicon-o-cog class="w-7 h-7" />
                    </x-sidebar.nav-item>

                        {{-- <x-sidebar.nav-item title="Senarai Keahlian" route="{{route('adminkoputra-members')}}" uri="">
                            <x-heroicon-o-user-group class="w-7 h-7" />
                        </x-sidebar.nav-item> --}}
                    <!-- AdminKoputra nav item End -->
                </ul>
            </div>
        </div>
        
        <div class="absolute bottom-6 left-10">
            <img src="{{asset('img/koputra.png')}}" class="w-auto "/>
        </div>
    </div>