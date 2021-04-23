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
                    <p class="ml-2 font-semibold italic">ALK</p>
                </div>
            </div>
            <div>
                <ul class="mt-6 leading-10">

                    <!-- Alk nav item Start -->
                        <x-sidebar.nav-item title="ALk" route="{{route('alk')}}" uri="alk">
                            <x-heroicon-o-chart-pie class="w-7 h-7" />
                        </x-sidebar.nav-item>
                    <!-- Alk nav item End -->

                </ul>
            </div>
        </div>
    </div>
</aside>