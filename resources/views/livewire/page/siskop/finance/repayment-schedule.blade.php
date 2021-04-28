<x-general.grid mobile="1" gap="5" sm="1" md="1" lg="1" xl="1" class="col-span-6">
    <div class="px-5 py-3">
        <div>
            <div wire:loading >
                <div class="flex items-center text-white absolute  flex items-center bg-teal-700 p-4 rounded" style="left: 38%; top:55%">
                    <x-heroicon-o-cog class="-ml-0.5 mr-2 h-8 w-8 animate-spin"/>
                    <p class="text-sm">Please waiting<span class="animate-ping">...</span></p>
                </div>
            </div>
            <h1 class="font-semibold text-indigo-500">Repayment Schedule</h1>
            <br>
            <x-general.table>
                <x-slot name="thead">
                    <x-general.table-header class="text-left" value="Instalment No." sort="" livewire=""/>
                    <x-general.table-header class="text-left" value="Amount" sort="" livewire=""/>
                    <x-general.table-header class="text-left" value="Date" sort="" livewire=""/>
                    <x-general.table-header class="text-left" value="Balance Outs" sort="" livewire=""/>
                    <x-general.table-header class="text-left" value="Principal" sort="" livewire=""/>
                    <x-general.table-header class="text-left" value="Principal Outs" sort="" livewire=""/>
                    <x-general.table-header class="text-left" value="Profit" sort="" livewire=""/>
                    <x-general.table-header class="text-left" value="UEI Outs" sort="" livewire=""/>
                    {{-- <x-general.table-header class="text-left" value="Sinking Fund" sort="" livewire=""/>
                    <x-general.table-header class="text-left" value="Total Instalment" sort="" livewire=""/> --}}

                </x-slot>
                <x-slot name="tbody">
                    @forelse ($schedules as $item)
                    <tr>
                        <x-general.table-body colspan="" class="font-medium text-gray-900">
                            <p>{{$item['instalment_no']}}</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="font-medium text-gray-900">
                            <p>{{number_format($item['instal_amt'],2,'.',',')}}</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="font-medium text-gray-900">
                            <p>{{$item['instal_date']}}</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="font-medium text-gray-900">
                            <p>{{number_format($item['bal_outstanding'],2,'.',',')}}</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="font-medium text-gray-900">
                            <p>{{number_format($item['prin_amt'],2,'.',',')}}</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="font-medium text-gray-900">
                            <p>{{number_format($item['prin_outstanding'],2,'.',',')}}</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="font-medium text-gray-900">
                            <p>{{number_format($item['profit_amt'],2,'.',',')}}</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="font-medium text-gray-900">
                            <p>{{number_format($item['uei_outstanding'],2,'.',',')}}</p>
                        </x-general.table-body>
                        {{-- <x-general.table-body colspan="" class="font-medium text-gray-900">
                            <p>0.00</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="font-medium text-gray-900">
                            <p>0.00</p>
                        </x-general.table-body> --}}
                    </tr>
                    @empty

                    @endforelse
                </x-slot>

                {{-- {{ $list->links('pagination::tailwind') }} --}}
            </x-general.table>
        </div>
    </div>
</x-general.grid>

