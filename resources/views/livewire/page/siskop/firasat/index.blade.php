<div x-data="{Open : false}">
    <div class="z-20 relative mx-auto px-0 my-3 text-lg leading-6 font-medium text-cool-gray-900">
        <x-general.grid mobile="1" gap="5" sm="1" md="2" lg="1" xl="1" class="col-span-6 items-center mt-8">

        </x-general.grid>
    </div>
    <div class="absolute top-0 left-0 right-0 z-0">
        {{-- header --}}
        <x-general.header bgimg=""  title="Firasat" height="8rem"/>
        {{-- body --}}
        <div class="mx-auto px-0 my-3 text-lg leading-6 font-medium text-cool-gray-900 sm:px-6 lg:px-8">
            <x-general.card class="bg-white shadow-lg px-5 py-3">
                <div class="flex-col lg:flex-row flex justify-end pt-4 border-b-2  py-4 px-4">
                    <div class="flex space-x-2 lg:mt-0" >
                        <a  x-on:click="Open = true"  href="#" class="bg-indigo-500 hover:bg-indigo-700 text-white text-sm py-1 px-4 rounded  flex items-center {{$show_schedule?'':'hidden'}}">
                            Schedule
                        </a>
                        <a href="#" class="bg-indigo-500 hover:bg-indigo-700 text-white text-sm py-1 px-4 rounded  flex items-center"
                            wire:click="calculate()">
                            Calculate
                        </a>
                    </div>
                </div>
                <div class="w-full">
                    <div class="grid grid-cols-12 gap-6">
                        <div class="flex flex-col-reverse col-span-12 lg:col-span-6 xxl:col-span-6 lg:block">
                            <x-general.card class="bg-white shadow-lg p-4">
                                {{-- Start Financing Calculator --}}
                                <div class="pt-2">
                                    <div x-data="{ isOpen2: true}">
                                        <button
                                            class="text-indigo-500 flex items-center justify-between w-full py-3 font-semibold border-b border-gray-400 focus:outline-none"
                                            @click="isOpen2 = !isOpen2">
                                            <h1 class="font-semibold">Financing Calculator</h1>
                                            <svg x-show="!isOpen2" class="fill-current" viewBox="0 0 24 24" width="24" height="24" x-cloak>
                                                <path class="heroicon-ui"
                                                    d="M12 22a10 10 0 110-20 10 10 0 010 20zm0-2a8 8 0 100-16 8 8 0 000 16zm1-9h2a1 1 0 010 2h-2v2a1 1 0 01-2 0v-2H9a1 1 0 010-2h2V9a1 1 0 012 0v2z" />
                                            </svg>
                                            <svg x-show="isOpen2" class="fill-current" viewBox="0 0 24 24" width="24" height="24" x-cloak>
                                                <path class="heroicon-ui"
                                                    d="M12 22a10 10 0 110-20 10 10 0 010 20zm0-2a8 8 0 100-16 8 8 0 000 16zm4-8a1 1 0 01-1 1H9a1 1 0 010-2h6a1 1 0 011 1z" />
                                            </svg>
                                        </button>
                                        <div class="mt-2 text-sm text-gray-700" x-show="isOpen2">
                                            <div class="p-3">
                                                <x-form.basic-form action="">
                                                    <x-slot name="content">
                                                        <div class="grid gap-2 lg:grid-cols-2 sm:grid-cols-2">
                                                            <x-form.input label="Financing Amount"  value="" livewire="wire:model=financing_amount"/>
                                                            <x-form.input label="Profit Rate"       value="" livewire="wire:model=profit_rate"/>
                                                            <x-form.input label="Duration (Months)" value="" livewire="wire:model=duration"/>
                                                            {{-- <x-form.input label="Grace period (Months)" value="" livewire="" /> --}}
                                                            <x-form.dropdown label="Profit Calculation Mode" value="calculation_method">
                                                                <option value="Flat Rate">Flat Rate</option>
                                                                {{-- <option value="Reducing Balance">Reducing Balance</option> --}}
                                                            </x-form.dropdown>
                                                            {{-- <x-form.dropdown label="Instalment Mode" value="">
                                                                <option value=""></option>
                                                            </x-form.dropdown> --}}
                                                            {{-- <label class="pt-7">
                                                                <span class="text-sm font-semibold leading-5 text-gray-700 mr-6">
                                                                    Profit Servicing During Grace period
                                                                </span>
                                                                <input class="mr-1 leading-tight" type="checkbox">
                                                            </label> --}}
                                                            <x-form.input label="Selling Price" value="" livewire="wire:model=selling_price" />
                                                            <x-form.input label="Total Profit Amount" value="" livewire="wire:model=total_profit_amount" />
                                                            <x-form.input label="Instalment Amount" value="" livewire="wire:model=instal_amount" />
                                                        </div>
                                                    </x-slot>
                                                </x-form.basic-form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- End Financing Calculator  --}}

                                {{-- Start Include Sinking Fund --}}
                                <div class="pt-2">
                                    <div x-data="{ isOpen3: true}">
                                        <button
                                            class="text-indigo-500 flex items-center justify-between w-full py-3 font-semibold border-b border-gray-400 focus:outline-none"
                                            @click="isOpen3 = !isOpen3">
                                            <h1 class="font-semibold">Include Sinking Fund</h1>
                                            <svg x-show="!isOpen3" class="fill-current" viewBox="0 0 24 24" width="24" height="24" x-cloak>
                                                <path class="heroicon-ui"
                                                    d="M12 22a10 10 0 110-20 10 10 0 010 20zm0-2a8 8 0 100-16 8 8 0 000 16zm1-9h2a1 1 0 010 2h-2v2a1 1 0 01-2 0v-2H9a1 1 0 010-2h2V9a1 1 0 012 0v2z" />
                                            </svg>
                                            <svg x-show="isOpen3" class="fill-current" viewBox="0 0 24 24" width="24" height="24" x-cloak>
                                                <path class="heroicon-ui"
                                                    d="M12 22a10 10 0 110-20 10 10 0 010 20zm0-2a8 8 0 100-16 8 8 0 000 16zm4-8a1 1 0 01-1 1H9a1 1 0 010-2h6a1 1 0 011 1z" />
                                            </svg>
                                        </button>
                                        <div class="mt-2 text-sm text-gray-700" x-show="isOpen3">
                                            <div class="p-3">
                                                <x-form.basic-form action="">
                                                    <x-slot name="content">
                                                        <div class="grid gap-2 lg:grid-cols-2 sm:grid-cols-2">
                                                            <x-form.input label="Sinking Fund Rate" value="" livewire="" />
                                                            <x-form.input label="Grace Period" value="" livewire="" />
                                                            <x-form.input label="Monthly Payment" value="" livewire="" />
                                                            <x-form.input label="Total Amount" value="" livewire="" />
                                                            <x-form.input label="Total Instalment Amount" value="" livewire="" />
                                                        </div>
                                                    </x-slot>
                                                </x-form.basic-form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- End Include Sinking Fund  --}}
                            </x-general.card>
                        </div>


                        <div class="col-span-12 lg:col-span-6 xxl:col-span-6">
                            {{-- Start Step-Up Instalment  --}}
                            <div class="">
                                <x-general.card class="bg-white shadow-lg p-4">
                                    <div class="flex justify-between">
                                        <div>
                                        <h1 class="font-semibold text-indigo-500">Step-Up Instalment</h1>
                                        </div>
                                        <div class="flex">
                                            <span class="mr-2 mt-2 text-base text-gray-500">End Month : </span>
                                            <x-form.input label="" value="" livewire="" />
                                        </div>
                                    </div>
                                </x-general.card>
                            </div>
                            {{-- End Step-Up Instalment  --}}

                            {{-- Start Multiple Step-Up/Down Installment  --}}
                            <div class="mt-4">
                                <x-general.card class="bg-white shadow-lg p-4">
                                    <div class="flex justify-between">
                                        <h1 class="font-semibold text-indigo-500">Multiple Step-Up/Down Installment</h1>
                                        <div class="flex">
                                            <span class="mr-2 mt-2 text-base text-gray-500">No.of Step : </span>
                                            <x-form.dropdown label="" value="">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                            </x-form.dropdown>
                                        </div>
                                    </div>
                                    <div class="pt-4">
                                        <x-general.table>
                                            <x-slot name="thead">
                                                <x-general.table-header class="text-left" value="" sort="" livewire="" />
                                                <x-general.table-header class="text-left" value="Start Month" sort="" livewire="" />
                                                <x-general.table-header class="text-left" value="End Month" sort="" livewire="" />
                                                <x-general.table-header class="text-left" value="Instalmnet Amount" sort=""
                                                    livewire="" />
                                            </x-slot>
                                            <x-slot name="tbody">
                                                <tr>
                                                    <x-general.table-body colspan="" class="font-medium text-gray-900">
                                                        <p class="text-base font-semibold text-gray-500">Step #1</p>
                                                    </x-general.table-body>
                                                    <x-general.table-body colspan="" class="font-medium text-gray-900">
                                                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="" type="text" readonly>
                                                    </x-general.table-body>
                                                    <x-general.table-body colspan="" class="font-medium text-gray-900">
                                                        <input
                                                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline "
                                                            id="" type="text">
                                                    </x-general.table-body>
                                                    <x-general.table-body colspan="" class="font-medium text-gray-900">
                                                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="" type="text" readonly>
                                                    </x-general.table-body>
                                                </tr>
                                                <tr>
                                                    <x-general.table-body colspan="" class="font-medium text-gray-900">
                                                        <p class="text-base font-semibold text-gray-500">Step #2</p>
                                                    </x-general.table-body>
                                                    <x-general.table-body colspan="" class="font-medium text-gray-900">
                                                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="" type="text" readonly>
                                                    </x-general.table-body>
                                                    <x-general.table-body colspan="" class="font-medium text-gray-900">
                                                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="" type="text" readonly>
                                                    </x-general.table-body>
                                                    <x-general.table-body colspan="" class="font-medium text-gray-900">
                                                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="" type="text" readonly>
                                                    </x-general.table-body>
                                                </tr>
                                                <tr>
                                                    <x-general.table-body colspan="" class="font-medium text-gray-900">
                                                        <p class="text-base font-semibold text-gray-500">Step #3</p>
                                                    </x-general.table-body>
                                                    <x-general.table-body colspan="" class="font-medium text-gray-900">
                                                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="" type="text" readonly>
                                                    </x-general.table-body>
                                                    <x-general.table-body colspan="" class="font-medium text-gray-900">
                                                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="" type="text" readonly>
                                                    </x-general.table-body>
                                                    <x-general.table-body colspan="" class="font-medium text-gray-900">
                                                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="" type="text" readonly>
                                                    </x-general.table-body>
                                                </tr>
                                                <tr>
                                                    <x-general.table-body colspan="" class="font-medium text-gray-900">
                                                        <p class="text-base font-semibold text-gray-500">Step #4</p>
                                                    </x-general.table-body>
                                                    <x-general.table-body colspan="" class="font-medium text-gray-900">
                                                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="" type="text" readonly>
                                                    </x-general.table-body>
                                                    <x-general.table-body colspan="" class="font-medium text-gray-900">
                                                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="" type="text" readonly>
                                                    </x-general.table-body>
                                                    <x-general.table-body colspan="" class="font-medium text-gray-900">
                                                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="" type="text" readonly>
                                                    </x-general.table-body>
                                                </tr>
                                                <tr>
                                                    <x-general.table-body colspan="" class="font-medium text-gray-900">
                                                        <p class="text-base font-semibold text-gray-500">Step #5</p>
                                                    </x-general.table-body>
                                                    <x-general.table-body colspan="" class="font-medium text-gray-900">
                                                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="" type="text" readonly>
                                                    </x-general.table-body>
                                                    <x-general.table-body colspan="" class="font-medium text-gray-900">
                                                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="" type="text" readonly>
                                                    </x-general.table-body>
                                                    <x-general.table-body colspan="" class="font-medium text-gray-900">
                                                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="" type="text" readonly>
                                                    </x-general.table-body>
                                                </tr>
                                                <tr>
                                                    <x-general.table-body colspan="" class="font-medium text-gray-900">
                                                        <p class="text-base font-semibold text-gray-500">Step #6</p>
                                                    </x-general.table-body>
                                                    <x-general.table-body colspan="" class="font-medium text-gray-900">
                                                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="" type="text" readonly>
                                                    </x-general.table-body>
                                                    <x-general.table-body colspan="" class="font-medium text-gray-900">
                                                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="" type="text" readonly>
                                                    </x-general.table-body>
                                                    <x-general.table-body colspan="" class="font-medium text-gray-900">
                                                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="" type="text" readonly>
                                                    </x-general.table-body>
                                                </tr>
                                            </x-slot>
                                        </x-general.table>
                                    </div>
                                </x-general.card>
                            </div>
                            {{-- End Multiple Step-Up/Down Installment  --}}
                        </div>
                    </div>
                </div>
                @if($show_schedule)
                <x-general.modal modalActive="Open" title="Repayment Schedule" modalSize="4xl">
                        @include('pages.siskop.firasat.schedule')
                </x-general.modal>
                @endif
            </x-general.card>
        </div>
    </div>
</div>

@push('js')
<script>
    window.addEventListener('swal',function(e){Swal.fire(e.detail);});
</script>
@endpush


