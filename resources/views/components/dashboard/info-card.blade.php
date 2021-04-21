
<a  href="{{ $cardRoute }}" class="transition-shadow rounded-lg shadow-sm hover:shadow-lg bg-white">
    <div class="flex items-start justify-between p-4">
        <div class="flex flex-col space-y-1">
            <span class="text-gray-400 text-sm mb-2">{{ $title }}</span>
            <span class="text-3xl font-semibold">{{ $value }}</span>
        </div>
        <div class="p-4 bg-{{$iconbg}}-400 rounded-full shadow-lg text-white">
            {{ $svg }}
        </div>
    </div>
    <div class="flex justify-between mt-4 bg-{{$iconbg}}-400 rounded-b-lg p-2">
        <p class="text-white text-sm">{{$percentage}}</p> 
        <p class="text-white text-sm">{{$footerTitle}}</p> 
    </div>
</a>
