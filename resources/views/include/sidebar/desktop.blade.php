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
                    <x-logo class="w-8 h-8 " /> 
                    <p class="ml-2 font-semibold italic">KOPUTRA DEMO</p>
                </div>
            </div>
            <div>
                <ul class="mt-6 leading-10">

                    <!-- members nav item Start -->
                        <x-sidebar.nav-item title="members" route="#" uri="">
                            <x-heroicon-o-chart-pie class="w-7 h-7" />
                        </x-sidebar.nav-item>
                    <!-- members nav item End -->

                    <!-- Akk nav item Start -->
                        <x-sidebar.nav-item title="Akk" route="#" uri="">
                            <x-heroicon-o-chart-pie class="w-7 h-7" />
                        </x-sidebar.nav-item>
                    <!-- Akk nav item End -->

                    <!-- Siskop nav item Start -->
                        <x-sidebar.nav-item title="Siskop" route="#" uri="">
                            <x-heroicon-o-chart-pie class="w-7 h-7" />
                        </x-sidebar.nav-item>
                    <!-- Siskop nav item End -->


                    <!-- AdminKoputra nav item Start -->
                        <x-sidebar.nav-item title="AdminKoputra" route="#" uri="">
                            <x-heroicon-o-chart-pie class="w-7 h-7" />
                        </x-sidebar.nav-item>
                    <!-- AdminKoputra nav item End -->



                    {{--                     
                    <x-sidebar.dropdown-nav-item active="open" title="PERFORMANCE" uri="stock/*">
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
                    
                </ul>
            </div>
        </div>
    </div>
</aside>