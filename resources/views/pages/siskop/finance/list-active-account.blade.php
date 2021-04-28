<x-general.grid mobile="1" gap="5" sm="1" md="1" lg="1" xl="1" class="col-span-6">
    <!-- Start: Financing List-->
    <div class="">
        <x-general.card class="bg-white shadow-lg p-4">
            <div class="flex justify-between mb-4">
                <h1 class="font-semibold text-indigo-500">List Financing Facilities
                </h1>
                <div class="flex " x-data="{ open: false }">
                    {{-- <x-general.button.icon href="{{ route('user.finance.create_account', 1) }}" target=""
                        label="Create New Account" class="mr-3" color="indigo" livewire="">
                        <x-heroicon-o-plus-circle class="-ml-0.5 mr-2 h-4 w-4" />
                    </x-general.button.icon> --}}
                    {{-- <x-general.button.icon href="accountMaster" target="" label="Customer"
                        color="indigo" livewire="">
                        <x-heroicon-o-currency-dollar class="-ml-0.5 mr-2 h-4 w-4" />
                    </x-general.button.icon> --}}

                    {{-- Start finance calculator--}}
                    {{-- @include('pages.finance.finance-calculator') --}}
                    {{-- End finance calculator--}}
                </div>
            </div>

            <x-general.table>
                <x-slot name="thead">
                    <x-general.table-header class="text-center" value="Account No" sort="" livewire="" />
                    <x-general.table-header class="text-center" value="Status" sort="" livewire="" />
                    <x-general.table-header class="text-center" value="Approved Amount" sort="" livewire="" />
                    <x-general.table-header class="text-center" value="Selling Price" sort="" livewire="" />
                    <x-general.table-header class="text-center" value="Disbursed Amount" sort="" livewire="" />
                    {{-- <x-general.table-header class="text-center" value="UEI Outstanding" sort="" livewire="" /> --}}
                    {{-- <x-general.table-header class="text-center" value="Provision Amount" sort="" livewire="" /> --}}
                    <x-general.table-header class="text-center" value="Action" sort="" livewire="" />
                </x-slot>
                <x-slot name="tbody">
                    <tr>
                        <x-general.table-body colspan="" class="text-center font-medium text-gray-900">
                            <p>1001026199</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-center font-medium text-gray-900">
                            <p>ACTIVE</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-center font-medium text-gray-900">
                            <p>10,000.00</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-center font-medium text-gray-900">
                            <p>15,750.00</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-center font-medium text-gray-900">
                            <p>10,000.00</p>
                        </x-general.table-body>
                        {{--  --}}
                        <x-general.table-body colspan="" class="text-center font-medium text-gray-900">
                            <x-general.button.icon href="{{route('siskop.finance.show',1)}}" target="" label="View"
                                color="indigo" livewire="">
                                <x-heroicon-o-eye class="-ml-0.5 mr-2 h-4 w-4" />
                            </x-general.button.icon>
                        </x-general.table-body>
                    </tr>
                    <tr>
                        <x-general.table-body colspan="" class="text-center font-medium text-gray-900">
                            <p>1001026203</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-center font-medium text-gray-900">
                            <p>ACTIVE</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-center font-medium text-gray-900">
                            <p>88,000.00</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-center font-medium text-gray-900">
                            <p>112,578.40</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-center font-medium text-gray-900">
                            <p>0.00</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-center font-medium text-gray-900">
                            <x-general.button.icon href="{{route('siskop.finance.show',2)}}" target="" label="View"
                                color="indigo" livewire="">
                                <x-heroicon-o-eye class="-ml-0.5 mr-2 h-4 w-4" />
                            </x-general.button.icon>
                        </x-general.table-body>
                    </tr>
                    <tr>
                        <x-general.table-body colspan="2" class="text-center font-medium text-gray-900">
                            <p>TOTAL</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-center font-medium text-gray-900">
                            <p>98,000.00</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-center font-medium text-gray-900">
                            <p>128,328.4</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-center font-medium text-gray-900">
                            <p>10,000.00</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-center font-medium text-gray-900">
                        </x-general.table-body>
                    </tr>
                </x-slot>
            </x-general.table>
        </x-general.card>
    </div>
    <!-- End: Financing List-->
</x-general.grid>
