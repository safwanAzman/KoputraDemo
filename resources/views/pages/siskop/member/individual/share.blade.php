<div class="">
    <!-- Start: Share Statements-->
    <x-general.card class="bg-white shadow-lg p-4">
            <div class="flex justify-between mb-4">
                <div>
                    <h1 class="font-semibold text-indigo-500">Commission Statements</h1>
                </div>
                <div>
                    {{-- <x-general.button.icon href="{{route('user.cif.individual.shareExcel',$customer->uuid)}}" target="" label="Excel" color="indigo" livewire="">
                        <x-heroicon-o-document-text class="-ml-0.5 mr-2 h-4 w-4"/>
                    </x-general.button.icon>

                    <x-general.button.icon href="{{route('user.cif.individual.sharePDF',$customer->uuid)}}" target="_blank" label="PDF" color="indigo" livewire="">
                        <x-heroicon-o-document-report class="-ml-0.5 mr-2 h-4 w-4"/>
                    </x-general.button.icon> --}}
                </div>

            </div>
            <x-general.table>
                <x-slot name="thead">
                    <x-general.table-header class="text-left" value="Date" sort="" livewire="" />
                    <x-general.table-header class="text-left" value="Details" sort="" livewire="" />
                    <x-general.table-header class="text-right" value="Amount" sort="" livewire="" />
                    <x-general.table-header class="text-right" value="Total" sort="" livewire="" />
                </x-slot>

                <x-slot name="tbody">
                    {{-- <tr class="bg-gray-200">
                        <x-general.table-body colspan="3" class="text-left font-medium text-gray-900">
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-right font-medium text-gray-900">
                            <div class="flex space-x-4 justify-end">
                                <p> Total Fee (RM) :</p>
                                <p> 6,820.52</p>
                            </div>
                        </x-general.table-body>
                    </tr> --}}
                    <tr>
                        <x-general.table-body colspan="" class="text-left font-medium text-gray-900">
                            <p>25/01/2020</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-left font-medium text-gray-900">
                            <p>Introducer Commission</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-right font-medium text-gray-900">
                            <p>30.00</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-right font-medium text-gray-900">
                            <p>30.00</p>
                        </x-general.table-body>
                    </tr>
                    <tr>
                        <x-general.table-body colspan="" class="text-left font-medium text-gray-900">
                            <p>25/02/2020</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-left font-medium text-gray-900">
                            <p>Introducer Commission</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-right font-medium text-gray-900">
                            <p>30.00</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-right font-medium text-gray-900">
                            <p>60.00</p>
                        </x-general.table-body>
                    </tr>
                    <tr>
                        <x-general.table-body colspan="" class="text-left font-medium text-gray-900">
                            <p>25/03/2020</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-left font-medium text-gray-900">
                            <p>Introducer Commission</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-right font-medium text-gray-900">
                            <p>30.00</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-right font-medium text-gray-900">
                            <p>90.00</p>
                        </x-general.table-body>
                    </tr>
                    <tr>
                        <x-general.table-body colspan="" class="text-left font-medium text-gray-900">
                            <p>25/04/2020</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-left font-medium text-gray-900">
                            <p>Introducer Commission</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-right font-medium text-gray-900">
                            <p>30.00</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-right font-medium text-gray-900">
                            <p>120.00</p>
                        </x-general.table-body>
                    </tr>
                    <tr>
                        <x-general.table-body colspan="" class="text-left font-medium text-gray-900">
                            <p>25/05/2020</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-left font-medium text-gray-900">
                            <p>Introducer Commission</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-right font-medium text-gray-900">
                            <p>30.00</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-right font-medium text-gray-900">
                            <p>150.00</p>
                        </x-general.table-body>
                    </tr>
                    <tr>
                        <x-general.table-body colspan="" class="text-left font-medium text-gray-900">
                            <p>25/06/2020</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-left font-medium text-gray-900">
                            <p>Introducer Commission</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-right font-medium text-gray-900">
                            <p>30.00</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-right font-medium text-gray-900">
                            <p>180.00</p>
                        </x-general.table-body>
                    </tr>
                    <tr>
                        <x-general.table-body colspan="" class="text-left font-medium text-gray-900">
                            <p>25/07/2020</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-left font-medium text-gray-900">
                            <p>Introducer Commission</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-right font-medium text-gray-900">
                            <p>30.00</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-right font-medium text-gray-900">
                            <p>210.00</p>
                        </x-general.table-body>
                    </tr>
                    <tr>
                        <x-general.table-body colspan="" class="text-left font-medium text-gray-900">
                            <p>25/08/2020</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-left font-medium text-gray-900">
                            <p>Introducer Commission</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-right font-medium text-gray-900">
                            <p>30.00</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-right font-medium text-gray-900">
                            <p>240.00</p>
                        </x-general.table-body>
                    </tr>
                    <tr>
                        <x-general.table-body colspan="" class="text-left font-medium text-gray-900">
                            <p>25/09/2020</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-left font-medium text-gray-900">
                            <p>Introducer Commission</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-right font-medium text-gray-900">
                            <p>30.00</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-right font-medium text-gray-900">
                            <p>270.00</p>
                        </x-general.table-body>
                    </tr>
                    <tr>
                        <x-general.table-body colspan="" class="text-left font-medium text-gray-900">
                            <p>25/10/2020</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-left font-medium text-gray-900">
                            <p>Introducer Commission</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-right font-medium text-gray-900">
                            <p>30.00</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-right font-medium text-gray-900">
                            <p>300.00</p>
                        </x-general.table-body>
                    </tr>
                    <tr>
                        <x-general.table-body colspan="" class="text-left font-medium text-gray-900">
                            <p>25/11/2020</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-left font-medium text-gray-900">
                            <p>Introducer Commission</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-right font-medium text-gray-900">
                            <p>30.00</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-right font-medium text-gray-900">
                            <p>330.00</p>
                        </x-general.table-body>
                    </tr>
                    <tr>
                        <x-general.table-body colspan="" class="text-left font-medium text-gray-900">
                            <p>25/12/2020</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-left font-medium text-gray-900">
                            <p>Introducer Commission</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-right font-medium text-gray-900">
                            <p>30.00</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-right font-medium text-gray-900">
                            <p>360.00</p>
                        </x-general.table-body>
                    </tr>
                    <tr>
                        <x-general.table-body colspan="" class="text-left font-medium text-gray-900">
                            <p>25/12/2020</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-left font-medium text-gray-900">
                            <p>Gold Bar (0.25g) 999.9</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-right font-medium text-gray-900">
                            <p>7.47</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-right font-medium text-gray-900">
                            <p>367.47</p>
                        </x-general.table-body>
                    </tr>
                    <tr>
                        <x-general.table-body colspan="" class="text-left font-medium text-gray-900">
                            <p>25/01/2021</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-left font-medium text-gray-900">
                            <p>Introducer Commission</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-right font-medium text-gray-900">
                            <p>30.00</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-right font-medium text-gray-900">
                            <p>397.47</p>
                        </x-general.table-body>
                    </tr>
                    <tr>
                        <x-general.table-body colspan="" class="text-left font-medium text-gray-900">
                            <p>25/02/2021</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-left font-medium text-gray-900">
                            <p>Introducer Commission</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-right font-medium text-gray-900">
                            <p>30.00</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-right font-medium text-gray-900">
                            <p>427.47</p>
                        </x-general.table-body>
                    </tr>
                    <tr>
                        <x-general.table-body colspan="" class="text-left font-medium text-gray-900">
                            <p>25/03/2021</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-left font-medium text-gray-900">
                            <p>Introducer Commission</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-right font-medium text-gray-900">
                            <p>30.00</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-right font-medium text-gray-900">
                            <p>457.47</p>
                        </x-general.table-body>
                    </tr>
                </x-slot>
            </x-general.table>
            {{-- Pagination --}}
            {{-- {{ $customers->links('pagination::tailwind') }} --}}
    </x-general.card>
</div>
