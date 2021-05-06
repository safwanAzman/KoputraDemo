<div>
    <!-- Start: Address Information-->
    <div class="">
        <h1 class="font-semibold text-indigo-500">Customer Orders
        </h1>
        <x-general.card class="bg-white shadow-lg p-4">
            <x-general.grid mobile="1" gap="5" sm="1" md="1" lg="1" xl="1" class="mt-5">
                <x-general.table>
                    <x-slot name="thead">
                        <x-general.table-header class="text-center" value="No" sort="" livewire="" />
                        <x-general.table-header class="text-center" value="Dealer No" sort="" livewire="" />
                        <x-general.table-header class="text-left" value="Name" sort="" livewire="" />
                        <x-general.table-header class="text-center" value="Order No" sort="" livewire="" />
                        <x-general.table-header class="text-right" value="Amount Orders (RM)" sort="" livewire="" />
                    </x-slot>

                    <x-slot name="tbody">
                        @forelse ($guarantee_accounts as $item)
                        <tr>
                            <x-general.table-body colspan="" class="text-center font-medium text-gray-900">
                                <p>{{$loop->iteration}}.</p>
                            </x-general.table-body>
                            <x-general.table-body colspan="" class="text-center font-medium text-gray-900">
                                <p>{{$item->member->ref_no}}</p>
                            </x-general.table-body>
                            <x-general.table-body colspan="" class="text-left font-medium text-gray-900">
                                <p>{{$item->member->name}}</p>
                            </x-general.table-body>
                            <x-general.table-body colspan="" class="text-center font-medium text-gray-900">
                                <p>{{$item->account_no}}</p>
                            </x-general.table-body>
                            <x-general.table-body colspan="" class="text-right font-medium text-gray-900">
                                <p>{{number_format($item->purchase_price,2,'.',',')}}</p>
                            </x-general.table-body>
                        </tr>
                        @empty @endforelse
                        <tr class="bg-gray-200">
                            <x-general.table-body colspan="4" class="text-right font-medium text-gray-900">
                                <p>Total Orders (RM)</p>
                            </x-general.table-body>
                            <x-general.table-body colspan="" class="text-right font-medium text-gray-900">
                                <p>{{number_format($guarantee_accounts->sum('purchase_price'),2,'.',',')}}</p>
                            </x-general.table-body>
                        </tr>
                    </x-slot>
                </x-general.table>
            </x-general.grid>
        </x-general.card>
    </div>
    <!-- End: Address Information-->
</div>




