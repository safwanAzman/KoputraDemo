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

        @if(Route::current()->uri == "members" || \Request::is("members/*") )
            @include('include.sidebar.member.desktop')
        @endif

        @if(Route::current()->uri == "alk" || \Request::is("alk/*") )
            @include('include.sidebar.alk.desktop')
        @endif

        @if(Route::current()->uri == "alk1/produk" || \Request::is("alk1/produk/*") )
            @include('include.sidebar.alk.produk')
        @endif

        @if(substr(Route::current()->uri,0,6) == "siskop")
            @include('include.sidebar.siskop.desktop')
        @endif

        @if(Route::current()->uri == "cscorp/produk" || \Request::is("cscorp/produk/*") )
            @include('include.sidebar.siskop.produk')
        @endif

        @if(Route::current()->uri == "adminkoputra" || \Request::is("adminkoputra/*") )
            @include('include.sidebar.adminkoputra.desktop')
        @endif

        @if(Route::current()->uri == "adminkoputra1/produk" || \Request::is("adminkoputra1/produk/*") )
            @include('include.sidebar.adminkoputra.produk')
        @endif

        @if(Route::current()->uri == "nonmembers" || \Request::is("nonmembers/*") )
            @include('include.sidebar.nonmember.desktop')
        @endif

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
</aside>
