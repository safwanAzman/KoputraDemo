<x-general.grid mobile="1" gap="5" sm="1" md="1" lg="1" xl="1" class="col-span-6">
    <div class="px-5 py-3">
        <div>
            <div wire:loading >
                <div class="flex items-center text-white absolute  bg-teal-700 p-4 rounded" style="left: 38%; top:55%">
                    <x-heroicon-o-cog class="-ml-0.5 mr-2 h-8 w-8 animate-spin"/>
                    <p class="text-sm">Please waiting<span class="animate-ping">...</span></p>
                </div>
            </div>
            <div class="flex justify-between">
                <div class="mt-6">
                    <h1 class="font-semibold text-indigo-500">Financing Statements</h1>
                </div>
                <div class="flex space-x-4 pr-6">
                    <x-form.input label="Total Paid" value="262.50" livewire=""/>
                    <x-form.input label="Balance Outstanding" value="15,487.50" livewire=""/>
                </div>
            </div>
        <br>
            <x-general.table>
                <x-slot name="thead">
                    <x-general.table-header class="text-left" value="Transaction Date" sort="" livewire=""/>
                    <x-general.table-header class="text-left" value="Doc No." sort="" livewire=""/>
                    <x-general.table-header class="text-left" value="Detail" sort="" livewire=""/>
                    <x-general.table-header class="text-left" value="Amount" sort="" livewire=""/>
                    <x-general.table-header class="text-left" value="Bal Outs" sort="" livewire=""/>
                    {{-- <x-general.table-header class="text-left" value="Principal" sort="" livewire=""/>
                    <x-general.table-header class="text-left" value="Principal Outs" sort="" livewire=""/>
                    <x-general.table-header class="text-left" value="Profit" sort="" livewire=""/>
                    <x-general.table-header class="text-left" value="UEI Outs" sort="" livewire=""/> --}}
                    <x-general.table-header class="text-left" value="Adv Payment" sort="" livewire=""/>
                    {{-- <x-general.table-header class="text-left" value="Sec. Dep." sort="" livewire=""/> --}}

                </x-slot>
                <x-slot name="tbody">
                    @forelse ($statements as $item)
                    <tr>
                        <x-general.table-body colspan="" class="font-medium text-gray-900">
                            <p>{{$item['txn_date']}}</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="font-medium text-gray-900">
                            <p>{{$item['doc_no']}}</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="font-medium text-gray-900">
                            <p>{{$item['txn_details']}}</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="font-medium text-gray-900 text-right">
                            <p>{{number_format($item['txn_amount'],2,'.',',')}}</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="font-medium text-gray-900 text-right">
                            <p>{{number_format($item['stmt_balance'],2,'.',',')}}</p>
                        </x-general.table-body>
                        {{-- <x-general.table-body colspan="" class="font-medium text-gray-900">
                            <p>{{number_format($item['cost'],2,'.',',')}}</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="font-medium text-gray-900">
                            <p>{{number_format($item['princp_outs'],2,'.',',')}}</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="font-medium text-gray-900">
                            <p>{{number_format($item['profit'],2,'.',',')}}</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="font-medium text-gray-900">
                            <p>{{number_format($item['unearned_outs'],2,'.',',')}}</p>
                        </x-general.table-body> --}}
                        <x-general.table-body colspan="" class="font-medium text-gray-900 text-right">
                            <p>{{number_format($item['advance_payment'],2,'.',',')}}</p>
                        </x-general.table-body>
                        {{-- <x-general.table-body colspan="" class="font-medium text-gray-900">
                            <p>{{$item['sec_dep}}</p>
                        </x-general.table-body> --}}
                    </tr>
                    @empty
                    <x-general.table-body colspan="10" class="text-center font-medium text-gray-900">
                        <p>No Data</p>
                    </x-general.table-body>
                    @endforelse
                </x-slot>

                {{-- {{ $list->links('pagination::tailwind') }} --}}
            </x-general.table>
        </div>
    </div>
</x-general.grid>

