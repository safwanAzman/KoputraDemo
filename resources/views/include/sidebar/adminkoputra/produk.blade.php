
    <div class="animate">
        <div class="text-indigo-600">
            <div class="flex p-2">
                <div class="flex py-3 px-2">
                    <p class="ml-2 font-semibold italic">ADMIN KOPUTRA</p>
                </div>
            </div>
            <div>
                <ul class="mt-6 leading-10">
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
                    <div class="border-t-2 border-gray-300 my-2"></div>
                    <x-sidebar.nav-item title="Permohonan/Konfigurasi" route="{{route('permohonan')}}" uri="">
                        <x-heroicon-o-presentation-chart-line class="w-7 h-7 text-green-500" />
                    </x-sidebar.nav-item>

                </ul>
            </div>
        </div>
        

    </div>