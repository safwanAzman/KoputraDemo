<div>  
    <div class="z-20 relative mx-auto px-0 my-3 text-lg leading-6 font-medium text-cool-gray-900 mt-8">
        <div class="bg-white sm:rounded-lg shadow px-3 py-3 mt-3" x-data="{ active: 15 }">
            <div class="grid grid-cols-12 gap-1">
                <div class="flex flex-col-reverse col-span-12 lg:col-span-12 xxl:col-span-12 lg:block">
                    <div class="bg-white shadow-lg p-4">
                        <div class="flex space-x-2">
                            <x-hovertab.title name="0" livewire="wire:click=chooseCategory('C0')">
                                <x-heroicon-o-cash class="w-6 h-6 ml-2" />
                                <span class="tooltip-text bg-indigo-500 border rounded border-indigo-500 text-white -mt-14">Disbusrsement</span>
                            </x-hovertab.title>

                            <x-hovertab.title name="1" livewire="wire:click=chooseCategory('L0')">
                                <x-heroicon-o-currency-dollar class="w-6 h-6 ml-2" />
                                <span class="tooltip-text bg-indigo-500 border rounded border-indigo-500 text-white -mt-14">Repayment</span>
                            </x-hovertab.title>

                            <x-hovertab.title name="2" livewire="wire:click=chooseCategory('S0')">
                                <x-heroicon-o-credit-card class="w-6 h-6 ml-2" />
                                <span class="tooltip-text bg-indigo-500 border rounded border-indigo-500 text-white -mt-14">Contribution - Payment</span>
                            </x-hovertab.title>

                            <x-hovertab.title name="3" livewire="wire:click=chooseCategory('P0')">
                                <x-heroicon-o-archive class="w-6 h-6 ml-2" />
                                <span class="tooltip-text bg-indigo-500 border rounded border-indigo-500 text-white -mt-14">Contribution - Withdraw</span>
                            </x-hovertab.title>

                            <x-hovertab.title name="4" livewire="wire:click=chooseCategory('CA')">
                                <x-heroicon-o-shopping-cart class="w-6 h-6 ml-2" />
                                <span class="tooltip-text bg-indigo-500 border rounded border-indigo-500 text-white -mt-14"> Share - Purchase</span>
                            </x-hovertab.title>

                            <x-hovertab.title name="5" livewire="wire:click=chooseCategory('KM')">
                                <x-heroicon-o-shopping-bag class="w-6 h-6 ml-2" />
                                <span class="tooltip-text bg-indigo-500 border rounded border-indigo-500 text-white -mt-14">Share - Selling</span>
                            </x-hovertab.title>

                            <x-hovertab.title name="6" livewire="">
                                <div x-data="{ modal: false }">
                                    <x-heroicon-o-inbox-in class="w-6 h-6 ml-2" @click="modal = true"/>
                                    <span class="tooltip-text bg-indigo-500 border rounded border-indigo-500 text-white -mt-14">Bulk Process</span>
                                    <x-general.modal2 modalActive="modal" title="Bulk Process" modalSize="sm" closeBtn="yes">
                                        <x-general.card class="bg-white shadow-lg  p-4 mt-4 overflow-y-auto">
                                            <div class="flex justify-center">
                                                <div>
                                                    <p class="text-xl font-semibold ">SD0421.txt</p>
                                                    <button  onclick="bulkprocess()"
                                                        class="mt-6 text-white flex items-center 
                                                        bg-indigo-600 hover:bg-indigo-700  
                                                        font-semibold py-4 px-4 rounded flex transition duration-150 ">
                                                        <span class="text-base">Process</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </x-general.card>
                                    </x-general.modal2>
                                </div>
                            </x-hovertab.title>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-12 gap-1">
                {{-- start search rujukan --}}
                <div class="flex flex-col-reverse col-span-12 lg:col-span-6 xxl:col-span-6 lg:block">
                    <div class="">
                        <div class="bg-white shadow-lg p-2 mt-5 ">
                            <div class="my-4 flex justify-between">
                                <div class="flex items-center w-full">
                                    <div class="flex">
                                        <span class="mr-2 mt-4 text-base text-gray-500">Ref.Number </span>
                                        <x-form.input livewire="wire:model=search" type="text" label="" value="" :editable=true/>
                                        <a href="#" class="mt-3 ml-2" wire:click="refresh()">
                                            <x-heroicon-o-refresh class="w-6 h-6  text-gray-500 hover:text-indigo-500" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-2">
                                <x-table2.table>
                                    <x-slot name="thead">
                                        <x-table2.table-header class="text-left" value="business" sort="" livewire="" />
                                        <x-table2.table-header class="text-left" value="ref.number" sort="" livewire="" />
                                        <x-table2.table-header class="text-right" value="total number" sort="" livewire="" />
                                        <x-table2.table-header class="text-right" value="paid amount" sort="" livewire="" />
                                        <x-table2.table-header class="text-center" value="Action" sort="" livewire="" />
                                    </x-slot>
                                    <x-slot name="tbody">
                                        @forelse ($invoice_search as $item1)
                                        <tr>
                                            <x-table2.table-body colspan="" class="text-sm text-gray-500 uppercase">
                                                <p>{{ $item1->business_type }}</p>
                                            </x-table2.table-body>
                                            <x-table2.table-body colspan="" class="text-sm text-gray-500 uppercase">
                                                <p>{{ $item1->bil_no }}</p>
                                            </x-table2.table-body>
                                            <x-table2.table-body colspan="" class="text-sm text-right text-gray-500 uppercase">
                                                <p>{{ number_format($item1->total_bil_amount, 2) }}</p>
                                            </x-table2.table-body>
                                            <x-table2.table-body colspan="" class="text-sm text-right text-gray-500 uppercase">
                                                <p>{{ number_format($item1->total_paid_amount, 2) }}</p>
                                            </x-table2.table-body>

                                            <x-table2.table-body colspan="" class="text-sm text-gray-500 uppercase">
                                                <div class="flex justify-center">
                                                    <div class="bg-indigo-500 hover:bg-grey text-indigo-500-darkest font-bold py-2 px-2 rounded-full flex cursor-pointer"
                                                        wire:click="showInvoice({{$item1->id}})">
                                                        <svg xmlns="" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                            class="w-4 h-4 text-white text-center">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                        </svg>
                                                    </div>

                                                    <div class="bg-green-500 hover:bg-grey text-indigo-500-darkest font-bold py-2 px-2 rounded-full flex cursor-pointer ml-2"
                                                        wire:click="addInvoice({{$item1->id}})">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                            stroke="currentColor" class="w-4 h-4 text-white text-center">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </x-table2.table-body>
                                        </tr>
                                        @empty @endforelse

                                        @forelse ($invoice_process as $item2)
                                        <tr>
                                            <x-table2.table-body colspan="" class="text-sm text-gray-500 uppercase">
                                                <p>{{ $item2->business_type }}</p>
                                            </x-table2.table-body>
                                            <x-table2.table-body colspan="" class="text-sm text-gray-500 uppercase">
                                                <p>{{ $item2->bil_no }}</p>
                                            </x-table2.table-body>
                                            <x-table2.table-body colspan="" class="text-sm text-right text-gray-500 uppercase">
                                                <p>{{ number_format($item2->total_bil_amount, 2) }}</p>
                                            </x-table2.table-body>
                                            <x-table2.table-body colspan="" class="text-sm text-right text-gray-500 uppercase">
                                                <p>{{ number_format($item2->total_paid_amount, 2) }}</p>
                                            </x-table2.table-body>

                                            <x-table2.table-body colspan="" class="text-sm text-gray-500 uppercase">
                                                <div class="flex justify-center">
                                                    <div class="bg-indigo-500 hover:bg-grey text-indigo-500-darkest font-bold py-2 px-2 rounded-full flex cursor-pointer"
                                                        wire:click="showInvoice({{$item2->id}})">
                                                        <svg xmlns="" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                            class="w-4 h-4 text-white text-center">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                        </svg>
                                                    </div>

                                                    <div class="bg-red-500 hover:bg-grey text-indigo-500-darkest font-bold py-2 px-2 rounded-full flex cursor-pointer ml-2"
                                                        wire:click="deleteInvoice({{$item2->id}})">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                            stroke="currentColor" class="w-4 h-4 text-white text-center">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </x-table2.table-body>
                                        </tr>
                                        @empty @endforelse

                                        <tr class="bg-orange-100">
                                            <x-table2.table-body colspan="3" class="text-sm text-gray-500 uppercase">

                                            </x-table2.table-body>
                                            <x-table2.table-body colspan="" class="text-gray-500 uppercase">
                                                <p class="font-semibold text-xs">Total number: <span
                                                        class="font-semibold">{{ $invoice_process->count() }}</span></p>
                                            </x-table2.table-body>
                                            <x-table2.table-body colspan="" class="text-sm text-gray-500 uppercase">
                                                <p class="font-semibold text-xs">Total amount payable : <span
                                                        class="font-semibold">RM
                                                        {{ number_format($invoice_process->sum('total_paid_amount'), 2) }}</span>
                                                </p>
                                            </x-table2.table-body>
                                        </tr>
                                    </x-slot>

                                    {{-- {{ $list->links('pagination::tailwind') }} --}}
                                </x-table2.table>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- End search rujukan --}}

                <div class="col-span-12 lg:col-span-6 xxl:col-span-6">
                    @if(isset($invoice_show))
                    {{--Start View Maklumat --}}
                    <div class="bg-white shadow-lg mt-5 p-4">
                        <div class="pt-4">
                            <h1 class="text-indigo-500 font-semibold text-xl">Maklumat {{ $invoice_show->business_type }}</h1>
                            <div class="pt-2 leading-7">
                                <p>No Rujukan : <span class="font-semibold">{{ $invoice_show->bil_no }}</span></p>
                                <p>Nama : <span class="font-semibold">{{ $invoice_show->customer_name }}</span></p>
                                <p>IC : <span class="font-semibold">{{ $invoice_show->customer_ic }}</span></p>
                                <p>Alamat : <span
                                        class="font-semibold">{{ isset($invoice_show->customer_address1) ? $invoice_show->customer_address1.',' : '' }}
                                        {{ isset($invoice_show->customer_address2) ? $invoice_show->customer_address2.',' : '' }}
                                        {{ isset($invoice_show->customer_address3) ? $invoice_show->customer_address3.',' : '' }}
                                        {{ isset($invoice_show->customer_postcode) ? $invoice_show->customer_postcode : '' }}
                                        {{ isset($invoice_show->customer_town) ? $invoice_show->customer_town.',' : '' }}
                                        {{ isset($invoice_show->customer_state) ? $invoice_show->customer_state : '' }}
                                    </span></p>
                            </div>
                        </div>
                        <div class="pt-4">
                            <x-table2.table>
                                <x-slot name="thead">
                                    <x-table2.table-header class="text-left" value="Kod Hasil" sort="" livewire="" />
                                    <x-table2.table-header class="text-left" value="Keterangan Transaksi" sort=""
                                        livewire="" />
                                    <x-table2.table-header class="text-left" value="" sort="" livewire="" />
                                    <x-table2.table-header class="text-right" value="Amaun (RM)" sort="" livewire="" />
                                </x-slot>
                                <x-slot name="tbody">
                                    @forelse ($invoice_show->detail as $item3)
                                    <tr>
                                        <x-table2.table-body colspan="" class="text-sm text-gray-500 uppercase">
                                            <p>{{ $item3->hasil_code }}</p>
                                        </x-table2.table-body>
                                        <x-table2.table-body colspan="" class="text-sm text-gray-500 uppercase">
                                            <p>{{ $item3->compound_status }}</p>
                                        </x-table2.table-body>
                                        <x-table2.table-body colspan="" class="text-sm text-gray-500 uppercase">
                                            <p></p>
                                        </x-table2.table-body>
                                        <x-table2.table-body colspan="" class="text-sm text-right text-gray-500 uppercase">
                                            <p>{{ number_format($item3->amount, 2) }}</p>
                                        </x-table2.table-body>
                                    </tr>
                                    @empty @endforelse
                                    <tr class="bg-orange-100">
                                        <x-table2.table-body colspan="3" class="text-sm text-gray-500 uppercase">
                                        </x-table2.table-body>
                                        <x-table2.table-body colspan="" class="text-sm text-right text-gray-500 uppercase">
                                            <p class="font-semibold">Jumlah (RM)
                                                {{ number_format($invoice_show->total_paid_amount, 2) }}</p>
                                        </x-table2.table-body>
                                    </tr>

                                </x-slot>

                                {{-- {{ $list->links('pagination::tailwind') }} --}}
                            </x-table2.table>
                        </div>
                    </div>
                    {{--End View Maklumat --}}
                    @endif

                    {{-- Start Mod Bayaran --}}
                    <div class="bg-white shadow-lg p-2 mt-5">
                        <div class="pt-2">
                            <div class="w-full mb-8 overflow-hidden  shadow-xs">
                                <div class="bg-indigo-500 p-4">
                                    <div class="flex justify-between">
                                        <h1 class="text-white text-base font-semibold">Payment Mode</h1>
                                        <div class="flex">
                                            @include('pages.siskop.teller.kutipan.tunai-modal')

                                            @include('pages.siskop.teller.kutipan.cek-modal')

                                            <button
                                                class="bg-white hover:bg-grey text-indigo-500-darkest font-semibold py-1 px-4 rounded flex ml-2 transition duration-150"
                                                wire:click="setPaymentMode('KAD KREDIT')">
                                                <span class="text-indigo-500 text-xs">Credit Card</span>
                                            </button>

                                            <button
                                                class="bg-white hover:bg-grey text-indigo-500-darkest font-semibold py-1 px-4 rounded flex ml-2 transition duration-150"
                                                wire:click="setPaymentMode('KAD KREDIT')">
                                                <span class="text-indigo-500 text-xs">EFT</span>
                                            </button>

                                            @include('pages.siskop.teller.kutipan.po-modal')
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    {{-- End Mod Bayaran --}}

                    {{-- Start Payment --}}
                    <div class="bg-white shadow-lg p-2 mt-5">
                        <div class="pt-2">
                            <div class="w-full overflow-hidden shadow-xs">
                                <div class="bg-indigo-500 p-4">
                                    <div class="flex justify-between">
                                        <h1 class="text-white text-base font-semibold">Current Collection : <span
                                                class="font-semibold">{{ number_format($confirm_paid_amount, 2) }}</span></h1>
                                        <button
                                            class="bg-white hover:bg-grey text-indigo-500-darkest font-bold py-2 px-4 rounded flex cursor-pointer items-center"
                                            onclick="payment_process()">
                                            <x-heroicon-o-shopping-cart class="w-4 h-4 text-indigo-500 mr-2" />
                                            <span class="text-indigo-500 text-xs flex items-center">Pay</span>
                                        </button>
                                    </div>

                                </div>
                            </div>
                            <div class="bg-gray-100 p-4">
                                <div class=" flex justify-between">
                                    <p class="font-semibold text-lg">Balance Outstanding</p>
                                    <div class="border px-6">
                                        <p class="text-right font-semibold text-xl">
                                            {{ number_format($invoice_process->sum('total_paid_amount'), 2) }}</p>
                                    </div>
                                </div>
                                <div class="flex justify-between pt-3">
                                    <p class="font-semibold text-lg">Refund</p>
                                    <div class="border px-6">
                                        <p class="text-right font-semibold text-xl">{{ number_format($balance_amount, 2) }}</p>
                                    </div>
                                </div>
                                <div class="flex justify-end">

                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- End Payment --}}
                </div>

                <!-- Start Table Taksiran -->
                @if( isset($transaction_details) )
                <div class="col-span-12 lg:col-span-12 xxl:col-span-12 mt-5">
                    <div class="flex justify-between mb-3">
                        <div class="text-indigo-500 font-semibold text-lg ">
                            <h1>Last Transaction Info</h1>
                        </div>
                    </div>
                    <x-table2.table>
                        <x-slot name="thead">
                            <x-table2.table-header class="text-center bg-green-100" value="No" sort="" livewire="" />
                            <x-table2.table-header class="text-center bg-green-100" value="Receipt No" sort="" livewire="" />
                            <x-table2.table-header class="text-center bg-green-100" value="Transaction Date" sort="" livewire="" />
                            <x-table2.table-header class="text-center bg-green-100" value="Ref Number" sort="" livewire="" />
                            <x-table2.table-header class="text-center bg-green-100" value="BUSINESS" sort="" livewire="" />
                            <x-table2.table-header class="text-right bg-green-100" value="PAID AMOUNT" sort="" livewire="" />
                            <x-table2.table-header class="text-center bg-green-100" value="Action" sort="" livewire="" />
                        </x-slot>
                        <x-slot name="tbody">
                            @forelse ($transaction_details as $detail)
                            <tr>
                                <x-table2.table-body colspan="" class="text-sm text-center text-gray-500 uppercase">
                                    <p>{{ $loop->iteration }}.</p>
                                </x-table2.table-body>
                                <x-table2.table-body colspan="" class="text-sm text-center text-gray-500 uppercase">
                                    <p>{{ $detail->receipt_no }}</p>
                                </x-table2.table-body>
                                <x-table2.table-body colspan="" class="text-sm text-center text-gray-500 uppercase">
                                    <p>{{ date('d/m/Y', strtotime($detail->invoice->bil_date)) }}</p>
                                </x-table2.table-body>
                                <x-table2.table-body colspan="" class="text-sm text-center text-gray-500 uppercase">
                                    <p>{{ $detail->invoice->bil_no }}</p>
                                </x-table2.table-body>
                                <x-table2.table-body colspan="" class="text-sm text-center text-gray-500 uppercase">
                                    <p>{{ $detail->invoice->business_type }}</p>
                                </x-table2.table-body>
                                <x-table2.table-body colspan="" class="text-sm text-right text-gray-500 uppercase">
                                    <p>{{ number_format($detail->invoice->total_paid_amount, 2) }}</p>
                                </x-table2.table-body>
                                <x-table2.table-body colspan="" class="text-sm text-center text-gray-500 uppercase">
                                    <div class="flex justify-center">
                                        <a class="bg-indigo-500 hover:bg-grey text-indigo-500-darkest font-bold py-2 px-2 rounded-full flex cursor-pointer"
                                            target="blank"
                                            href="{{ $detail->invoice->business_type == 'Lesen' ? route('taxInvoice',['id' => $detail->invoice->id]) : route('resitPDF',['id' => $detail->invoice->id]) }}">
                                            <svg xmlns="" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                class="w-4 h-4 text-white text-center">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z" />
                                            </svg>
                                        </a>
                                    </div>
                                </x-table2.table-body>
                            </tr>
                            @empty @endforelse
                        </x-slot>
                    </x-table2.table>
                </div>
                @endif
                <!-- End Table Taksiran -->

                {{-- Start Bil Footer --}}
                <div class="col-span-12 lg:col-span-12 xxl:col-span-12">
                    <div
                        class="mt-10 flex items-center justify-between p-2 text-sm font-semibold text-indigo-100 bg-black rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple">
                        <p class="text-center">Receipt No<br> <span
                                class="text-center">{{ number_format($receipts->count()) }}</span></p>
                        <p class="text-center">Cash <br> <span
                                class="text-center">{{ number_format($receipts->where('payment_mod', 'TUNAI')->sum('total_amount'), 2) }}</span>
                        </p>
                        <p class="text-center">Cheque <br> <span
                                class="text-center">{{ number_format($receipts->where('payment_mod', 'CEK')->sum('total_amount'), 2) }}</span>
                        </p>
                        <p class="text-center">MO/PO <br> <span
                                class="text-center">{{ number_format($receipts->where('payment_mod', 'MO/PO')->sum('total_amount'), 2) }}</span>
                        </p>
                        <p class="text-center">Credit Card <br> <span
                                class="text-center">{{ number_format($receipts->where('payment_mod', 'KAD KREDIT')->sum('total_amount'), 2) }}</span>
                        </p>
                        <p class="text-center">Total <br> <span
                                class="text-center">{{ number_format($receipts->sum('total_amount'), 2) }}</span></p>
                    </div>
                </div>
                {{-- End Bil Footer --}}
            </div>
        </div>
    </div>

    <!-- header -->
    <div class="absolute top-0 left-0 right-0 z-0">
        <x-general.header bgimg="" title="Teller" />
    </div>
</div>

<script>
    function payment_process() {
        Swal.fire({
            title: 'You want continue transaction?',
            showDenyButton: true,
            showCancelButton: false,
            confirmButtonText: `Yes`,
            denyButtonText: `Cancel`,
        }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                @this.payment()
            } else if (result.isDenied) {
                Swal.fire('Changes are not saved', '', 'info')
            }
        })
    }
    window.addEventListener('swal', function(e) {
        Swal.fire(
        'Successful Transaction',
        '',
        'success'
        )
    });
</script>

<script>
    function bulkprocess() {
    Swal.fire(
        'Process Complete',
        '',
        'success'
        )
    }
    
</script>