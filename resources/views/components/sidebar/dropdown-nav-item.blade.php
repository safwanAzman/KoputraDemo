<li class="relative px-2 py-1" x-data="{ {{$active}}:  @if(\Request::is($uri)) true @else false @endif }">
    <div class="inline-flex items-center justify-between w-full text-base font-semibold  cursor-pointer text-gray-500 transform  hover:scale-105 transition duration-300 "
        x-on:click="{{$active}} = !{{$active}}">
        <span class="inline-flex items-center  text-sm font-semibold">
            {{ $icon }}
            <span class="ml-4">{{$title}}</span>
        </span>

        <x-heroicon-o-chevron-left x-show="!{{$active}}" class="ml-1  w-4 h-4"  style="display: none;"/>
        <x-heroicon-o-chevron-down x-show="{{$active}}" class="ml-1  w-4 h-4"  style="display: none;"/>

    </div>

    <div x-show.transition="{{$active}}" x-cloak>
        <ul x-transition:enter="transition-all ease-in-out duration-300" x-transition:enter-start="opacity-25 max-h-0"
            x-transition:enter-end="opacity-100 max-h-xl" x-transition:leave="transition-all ease-in-out duration-300"
            x-transition:leave-start="opacity-100 max-h-xl" x-transition:leave-end="opacity-0 max-h-0"
            class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium  rounded-md shadow-inner  bg-indigo-600"
            aria-label="submenu">

            {{$slot}}
            

        </ul>
    </div>
</li>