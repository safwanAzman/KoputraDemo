<div>
    <div class="z-20 relative mx-auto px-0 my-3 text-lg leading-6 font-medium text-cool-gray-900">
        <x-general.grid mobile="1" gap="5" sm="1" md="2" lg="1" xl="1" class="col-span-6 items-center mt-8">
            <div class="">
                <x-general.card class="bg-white shadow-lg px-5 py-3">
                    <div class="flex justify-between mb-4">
                        <div class="flex flex-col sm:flex-row mb-4">
                            <div class="flex items-center">
                                <x-form.input name="search" label="Start Date" value="" livewire="" :editable=false />
                            </div>
                            <div class="flex items-center ml-0 sm:ml-4">
                                <x-form.input name="search" label="End Date" value="" livewire="" :editable=false />
                            </div>
                        </div>
                        <div class="mt-4">
                            <x-general.button.icon href="#" target="" label="Excel" color="indigo" livewire="">
                                <x-heroicon-o-document-text class="-ml-0.5 mr-2 h-4 w-4" />
                            </x-general.button.icon>

                            <x-general.button.icon href="#" target="_blank" label="PDF" color="indigo" livewire="">
                                <x-heroicon-o-document-report class="-ml-0.5 mr-2 h-4 w-4" />
                            </x-general.button.icon>
                        </div>
                    </div>
                    <x-general.table>
                        <x-slot name="thead">
                            <x-general.table-header class="text-center" value="Membership. No" sort="yes" />
                            <x-general.table-header class="text-left" value="Name" sort="yes" />
                            <x-general.table-header class="text-center" value="Type" sort="yes" />
                            <x-general.table-header class="text-center" value="Status" sort="yes" />
                            <x-general.table-header class="text-center" value="Last Payment Date" sort="yes" />
                            <x-general.table-header class="text-right" value="Last Payment Amount" sort="yes" />
                            <x-general.table-header class="text-center" value="Last Withdraw Date" sort="yes" />
                            <x-general.table-header class="text-right" value="Last Withdraw Amount" sort="yes" />
                            <x-general.table-header class="text-right" value="Total" sort="yes" />
                        </x-slot>

                        <x-slot name="tbody">

                            <tr>
                                <x-general.table-body colspan="" class="text-center font-medium text-gray-900">
                                    <p class="text-xs"></p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-left font-medium text-gray-900">
                                    <p class="text-xs"></p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-center font-medium text-gray-900">
                                    <p class="text-xs"></p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-center font-medium text-gray-900">
                                    <p class="text-xs"></p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-center font-medium text-gray-900">
                                    <p class="text-xs"></p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-right font-medium text-gray-900">
                                    <p class="text-xs"></p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-center font-medium text-gray-900">
                                    <p class="text-xs"></p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-right font-medium text-gray-900">
                                    <p class="text-xs"></p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-right font-medium text-gray-900">
                                    <p class="text-xs"></p>
                                </x-general.table-body>
                            </tr>

                        </x-slot>
                    </x-general.table>
                    <br>

                </x-general.card>
            </div>
        </x-general.grid>
    </div>

    <!-- header -->
    <div class="absolute top-0 left-0 right-0 z-0">
        <x-general.header bgimg="" title="LIST OF CURRENT POSITION CONTRIBUTION" />
    </div>

</div>