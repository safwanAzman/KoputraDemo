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
            {{-- <div class="flex justify-center">
                <div class="">
                    <img class="hidden h-12 w-12 rounded-full sm:block object-cover mr-2 border-4 border-green-400" 
                    src="https://image.flaticon.com/icons/png/512/149/149071.png" alt="">
                    <p class="font-bold text-base  text-gray-400 pt-2 text-center w-12">Safwan</p>
                </div>
            </div> --}}
            <div>
                <ul class="mt-6 leading-10">

                    <x-sidebar.nav-item title="DASHBOARD" route="#" uri="/">
                        <x-heroicon-o-chart-pie class="w-7 h-7" />
                    </x-sidebar.nav-item>
                    
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
                    </x-sidebar.dropdown-nav-item>
                </ul>
            </div>
        </div>
    </div>
</aside>