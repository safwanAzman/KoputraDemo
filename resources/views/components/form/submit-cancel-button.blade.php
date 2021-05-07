<div {{ $attributes }}>
    <div class="flex justify-end">
        <span class="inline-flex rounded-md shadow-sm">
            <a href="{{ $cancelpage }}" class="py-2 px-4 bg-white border border-gray-300 rounded-md text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800 transition duration-150 ease-in-out">
                {{ $cancel }}
            </a>
        </span>
        <span class="ml-3 inline-flex rounded-md shadow-sm">
            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-yellow-500 hover:bg-yellow-400 focus:outline-none focus:border-yellow-600 focus:shadow-outline-yellow active:bg-yellow-600 transition duration-150 ease-in-out" wire:loading.class.remove="bg-yellow-500" wire:loading.class="bg-yellow-400" wire:target="submit">
                {{ $submit }}
                <img class="ml-2 h-5 w-5" src="{{ asset('img/spin_loading.gif') }}" wire:loading wire:target="submit">
            </button>
        </span>
    </div>
</div>
