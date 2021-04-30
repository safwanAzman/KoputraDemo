<div class="p-4 h-96 overflow-y-auto overflow-x-hidden">
    <x-general.table>
        <x-slot name="thead">
            <x-general.table-header class="text-left" value="Instalment No." sort="" livewire=""/>
            <x-general.table-header class="text-left" value="Amount" sort="" livewire=""/>
            <x-general.table-header class="text-left" value="Balance Outs" sort="" livewire=""/>
            <x-general.table-header class="text-left" value="Principal" sort="" livewire=""/>
            <x-general.table-header class="text-left" value="Principal Outs" sort="" livewire=""/>
            <x-general.table-header class="text-left" value="Profit" sort="" livewire=""/>
            <x-general.table-header class="text-left" value="UEI Outs" sort="" livewire=""/>
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
            </tr>
            @empty
            @endforelse
        </x-slot>
        {{-- {{ $list->links('pagination::tailwind') }} --}}
    </x-general.table>
</div>
