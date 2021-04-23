
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
                    <x-sidebar.nav-item title="members" route="{{route('members')}}" uri="members">
                        <x-heroicon-o-chart-pie class="w-7 h-7" />
                    </x-sidebar.nav-item>
                <!-- members nav item End -->

            </ul>
        </div>
    </div>
</div>