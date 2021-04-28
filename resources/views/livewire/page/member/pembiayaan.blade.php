<div>
    <div class="z-20 relative mx-auto px-0 my-3 text-lg leading-6 font-medium text-cool-gray-900">
        <x-general.grid mobile="1" gap="5" sm="1" md="2" lg="1" xl="1" class="col-span-6 items-center mt-8">
            <div class="px-4 py-4 bg-white rounded-lg">
                <x-general.table>
                <x-slot name="thead">
                    <x-general.table-header class="text-center" value="No.Akaun" sort="" livewire="" />
                    <x-general.table-header class="text-center" value="Status" sort="" livewire="" />
                    <x-general.table-header class="text-center" value="Amaun Diluluskan" sort="" livewire="" />
                    <x-general.table-header class="text-center" value="Harga Jualan" sort="" livewire="" />
                    <x-general.table-header class="text-center" value="Amaun Dikeluarkan" sort="" livewire="" />
                    {{-- <x-general.table-header class="text-center" value="UEI Outstanding" sort="" livewire="" /> --}}
                    {{-- <x-general.table-header class="text-center" value="Provision Amount" sort="" livewire="" /> --}}
                    <x-general.table-header class="text-center" value="Tindakan" sort="" livewire="" />
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
                            <x-general.button.icon href="#" target="" label="View"
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
                            <x-general.button.icon href="#" target="" label="View"
                                color="indigo" livewire="">
                                <x-heroicon-o-eye class="-ml-0.5 mr-2 h-4 w-4" />
                            </x-general.button.icon>
                        </x-general.table-body>
                    </tr>
                    <tr>
                        <x-general.table-body colspan="2" class="text-center font-medium text-gray-900">
                            <p>Jumlah</p>
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
            </div>
        </x-general.grid>
    </div>

    <!-- header -->
    <div class="absolute top-0 left-0 right-0 z-0">
        <x-general.header bgimg=""  title="PEMBIAYAAN"/>
    </div>

</div>