<!-- Desktop sidebar -->
<aside
    x-show="isSideMenuOpenDesktop"
    x-transition:enter="transition ease-in-out duration-300"
    x-transition:enter-start="opacity-0 transform -translate-x-20"
    x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in-out duration-150"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0 transform -translate-x-20"
    @keydown.escape="closeSideMenuDesktop"
    class="z-20 flex-shrink-0 hidden w-60 overflow-y-auto bg-white md:block">
    <div class="animate">
        <div class="text-indigo-600">
            <div class="flex p-2">
                <div class="flex py-3 px-2">
                    <p class="ml-2 font-semibold italic">SISKOP</p>
                </div>
            </div>
            <div>
                <ul class="mt-6 leading-10">

                    <!-- Siskop nav item Start -->
                        <x-sidebar.nav-item title="Siskop" route="{{route('siskop.index')}}" uri="">
                            <x-heroicon-o-chart-square-bar class="w-7 h-7" />
                        </x-sidebar.nav-item>

                        <x-sidebar.nav-item title="Dealer" route="{{route('siskop.member.index')}}" uri="">
                            <x-heroicon-o-user-group class="w-7 h-7" />
                        </x-sidebar.nav-item>

                        {{-- <x-sidebar.nav-item title="Finance" route="{{route('siskop.finance.index')}}" uri="">
                            <x-heroicon-o-calculator class="w-7 h-7" />
                        </x-sidebar.nav-item>

                        <x-sidebar.nav-item title="Teller" route="{{route('siskop.teller.index')}}" uri="">
                            <x-heroicon-o-currency-dollar  class="w-7 h-7" />
                        </x-sidebar.nav-item>

                        <x-sidebar.nav-item title="Firasat" route="{{route('siskop.firasat.index')}}" uri="">
                            <x-heroicon-o-desktop-computer class="w-7 h-7" />
                        </x-sidebar.nav-item> --}}

                        <x-sidebar.nav-item title="Report" route="{{route('siskop.report.index')}}" uri="">
                            <x-heroicon-o-document-text class="w-7 h-7" />
                        </x-sidebar.nav-item>
                    <!-- Siskop nav item End -->

                </ul>
            </div>
        </div>
    </div>
</aside>
