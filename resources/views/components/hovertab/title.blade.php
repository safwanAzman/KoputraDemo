
<style>
.tooltip .tooltip-text {
    visibility: hidden;
    text-align: center;
    padding: 2px 6px;
    position: absolute;
    z-index: 100;
    }
    .tooltip:hover .tooltip-text {
    visibility: visible;
    }
</style>

    <nav class="flex flex-col sm:flex-row tooltip">
        <div class="text-gray-600 py-4 px-6 block hover:text-yellow-400 focus:outline-none text-yellow-400 cursor-pointer" x-on:click.prevent="active = {{ $name }}" x-bind:class="{'text-yellow-400 border-b-4 font-medium border-yellow-400 ': active === {{ $name }} }"
        {{ $livewire }}
        >
            <div class="">
                {{ $slot }}
            </div>
        </div>
    </nav>
