
{{-- <li class="relative px-2 py-1 ">
    <a class="inline-flex items-center w-full text-sm font-semibold   cursor-pointer 
        @if(Route::current()->uri == $uri)
        bg-indigo-600 p-1 rounded-lg text-white
        @else
        transform  hover:scale-105 transition duration-300 
        text-gray-500 hover:text-indigo-600
        @endif" href="{{$route}}">
        {{$slot}}
        <span class="ml-4">{{$title}}</span>
    </a>
</li> --}}

<li class="relative px-2 py-1 ">
    <a class="inline-flex items-center w-full text-sm font-semibold   cursor-pointer 
        @if(Route::current()->uri == $uri)
        bg-yellow-400 p-1 rounded-lg text-white
        @else
        transform  hover:scale-105 transition duration-300 
        text-gray-500 hover:text-yellow-400
        @endif" href="{{$route}}">
        {{$slot}}
        <span class="ml-4">{{$title}}</span>
    </a>
</li>