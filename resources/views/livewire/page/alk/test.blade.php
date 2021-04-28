
<div x-data="{Open : false}">
    <a href="#" class="flex items-center space-x-1" x-on:click="Open = true">
        <x-heroicon-s-information-circle
            class="h-5 w-5 text-indigo-700 tooltipbtn focus:outline-none"
            data-title="Maklumat Permohonan" data-placement="top" />
        <p>009011210063</p>
    </a>

    <x-general.modal modalActive="Open" title="Informasi" modalSize="4xl">
        {{-- <div class="px-6 py-4 ">
            <h1 class="text-indigo-700 text-xl font-semibold border-b-4 border-indigo-500">MAKLUMAT PEBIAYAAN DIPOHON</h1>
        </div> --}}
        <x-general.grid mobile="1" gap="4" sm="1" md="1" lg="1" xl="1"
            class="col-span-6">
            <div class="h-96 overflow-y-auto mt-4 pl-4">
                <img src="{{asset('img/test.png')}}" class="w-auto" />
            </div>
        </x-general.grid>
    </x-general.modal>
</div>

<div x-data="{Open : false}">
    <x-general.modal-button 
    modalActive="Open" 
    title="Tolak Permohonan" 
    description="Adakah anda pasti untuk menolak permohonan pinjaman ini?" 
    iconColour="red" 
    draw="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
    colour="red"
    lButton="Batal" 
    rButton="Tolak">

    </x-general.modal-button>
</div>
