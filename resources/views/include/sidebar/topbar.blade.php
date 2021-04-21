<header class="z-30 py-4 bg-indigo-600 ">
    <div class="flex items-center justify-between h-8 px-6 mx-auto">
            <!-- Mobile hamburger -->
            <button class="p-1 mr-5 -ml-1 rounded-md md:hidden focus:outline-none focus:shadow-outline-purple"
                @click="toggleSideMenu" aria-label="Menu">
                <x-heroicon-o-menu class="w-6 h-6 text-white" />
            </button>
            <!-- Desktop hamburger -->
            <div class="hidden sm:block">
                <div class="flex justify-center lg:mr-32 ">
                    <button class="p-1 mr-5 -ml-1 rounded-md   focus:outline-none focus:shadow-outline-purple"
                        @click="toggleSideMenuDesktop" aria-label="Menu">
                        <x-heroicon-o-menu class="w-6 h-6 text-white " />
                    </button>
                </div>
            </div>

            <ul class="flex items-center flex-shrink-0 space-x-6">

                <!-- Notifications menu -->
                <li class="relative">
                    <button class="p-2 bg-white text-indigo-600 align-middle shadow-xl rounded-full  focus:outline-none "
                        @click="toggleNotificationsMenu" @keydown.escape="closeNotificationsMenu"
                        aria-label="Notifications" aria-haspopup="true">
                        <div class="flex">
                            <x-heroicon-o-bell class="w-6 h-6" />
                        </div>
                        <!-- Notification badge -->
                        <span aria-hidden="true"
                            class="absolute top-0 right-0 inline-block w-3 h-3 transform translate-x-1 -translate-y-1 bg-red-600 border-2 border-white rounded-full dark:border-gray-800"></span>
                    </button>
                    <template x-if="isNotificationsMenuOpen">
                        <ul x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100"
                            x-transition:leave-end="opacity-0" @click.away="closeNotificationsMenu"
                            @keydown.escape="closeNotificationsMenu"
                            class="absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white rounded-md shadow-md">
                            <li class="flex">
                                <a class="text-gray-500 inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md "
                                    href="#">
                                    <span>Messages</span>
                                    <span
                                        class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-600 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-600">
                                        13
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </template>
                </li>

                <!-- Profile menu -->
                <li class="relative">
                    <button
                        class="p-2 bg-white text-indigo-600 align-middle shadow-xl rounded-full focus:outline-none "
                        @click="toggleProfileMenu" @keydown.escape="closeProfileMenu" aria-label="Account"
                        aria-haspopup="true">
                        <div class="flex">
                            <x-heroicon-o-cog class="w-6 h-6" />
                        </div>
                    </button>
                    <template x-if="isProfileMenuOpen">
                        <ul x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100"
                            x-transition:leave-end="opacity-0" @click.away="closeProfileMenu"
                            @keydown.escape="closeProfileMenu"
                            class="absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border rounded-md shadow-md"
                            aria-label="submenu">
                            <li class="flex">
                                <a class=" text-gray-500 inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100"
                                    href="#">
                                    <x-heroicon-o-user class="w-5 h-5 mr-2" />
                                    <span>Profile</span>
                                </a>
                            </li>
                            <li class="flex">
                                <a class="text-gray-500 inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100"
                                    href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <x-heroicon-o-login class="w-5 h-5 mr-2" />
                                    <span>Log out</span>
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </template>
                </li>
            </ul>
        
    </div>
</header>