<li class="px-2 py-1 text-white transition-colors duration-150">
    <div class="px-1 hover:text-pink-800 hover:bg-gray-100 rounded-lg @if(Route::current()->uri == $uri)  text-pink-800  bg-gray-100 @endif">
        <div class="flex items-center py-1 px-1">
            {{$icon}}
            <a class="w-full ml-2  text-xs font-semibold" {{ $attributes }}>{{$title}}</a>
        </div>
    </div>
</li>
