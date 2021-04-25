
<nav class="flex flex-col sm:flex-row">
    <div class="bg-white shadow-lg py-2 px-6 block focus:outline-none cursor-pointer" x-on:click.prevent="active = {{ $name }}" x-bind:class="{'bg-indigo-600 rounded-lg text-white ': active === {{ $name }} }"
    {{ $livewire }}
    >
        <div class="">
            {{ $slot }}
        </div>
    </div>
</nav>


