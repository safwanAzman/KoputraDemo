<div>
    <div class="z-20 relative mx-auto px-0 my-3 text-lg leading-6 font-medium text-cool-gray-900">
        <div class="">
            <x-general.card class="bg-white shadow-lg px-5 py-3 mt-8">

                <div class="mb-4 border-2 rounded-lg py-2 px-3 grid gap-2 lg:grid-cols-4 sm:grid-cols-4">

                    <x-form.dropdown label="Dealers Summary" value="table"  default="no">
                        <option value="1">Status</option>
                    </x-form.dropdown>

                    <x-form.dropdown label="Type" value="type" default="no">
                        <option value="chart" selected>Chart</option>
                        <option value="table" >Table</option>
                    </x-form.dropdown>
                    <div class="{{$type == 'table' ? 'hidden' : '' }}">
                        <x-form.dropdown label="Data" value="data"  default="no">
                            <option value="Contribution">Sales Transactions</option>
                            <option value="Share">Commission Rewards</option>
                        </x-form.dropdown>
                    </div>
                </div>
                <div class="flex justify-end printHide">
                    <x-general.button.icon href="#" target="" label="Print" livewire="" color="yellow" >
                        <x-heroicon-o-printer class="-ml-0.5 mr-2 h-4 w-4" />
                    </x-general.button.icon>
                </div>
                <div class="my-6  {{$type == 'table' ? '' : 'hidden' }}">
                    <x-general.table>
                        <x-slot name="thead">
                            <x-general.table-header class="text-left" value="Description" sort="" livewire="" />
                            <x-general.table-header class="text-right" value="Total Member" sort="" livewire="" />
                            <x-general.table-header class="text-right" value="Total Sales Transactions (RM)" sort="" livewire="" />
                            <x-general.table-header class="text-right" value="Total Commission Rewards (RM)" sort="" livewire="" />
                        </x-slot>

                        <x-slot name="tbody">

                            <tr>
                                <x-general.table-body colspan="" class="text-left font-medium text-gray-900">
                                    <p class="text-xs">Active</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-right font-medium text-gray-900">
                                    <p class="text-xs">2,566</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-right font-medium text-gray-900">
                                    <p class="text-xs">25,885,928.61</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-right font-medium text-gray-900">
                                    <p class="text-xs">4,772,061.68</p>
                                </x-general.table-body>
                            </tr>
                            <tr>
                                <x-general.table-body colspan="" class="text-left font-medium text-gray-900">
                                    <p class="text-xs">Stop</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-right font-medium text-gray-900">
                                    <p class="text-xs">1,474</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-right font-medium text-gray-900">
                                    <p class="text-xs">205,279.49</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-right font-medium text-gray-900">
                                    <p class="text-xs">55,441.91</p>
                                </x-general.table-body>
                            </tr>
                            <tr>
                                <x-general.table-body colspan="" class="text-left font-medium text-gray-900">
                                    <p class="text-xs">TOTAL</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-right font-medium text-gray-900">
                                    <p class="text-xs">4,017</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-right font-medium text-gray-900">
                                    <p class="text-xs">26,091,208.10</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-right font-medium text-gray-900">
                                    <p class="text-xs">4,827,503.59</p>
                                </x-general.table-body>
                            </tr>
                        </x-slot>
                    </x-general.table>
                </div>
                <div class="p-4 h-auto z-0 flex justify-center {{$type == 'chart' ? '' : 'hidden' }}">
                    @if($data == '')
                    <img src="{{asset('img/summary.png')}}" class="w-auto"/>
                    @elseif($data == 'Contribution')
                    <img src="{{asset('img/summaryC.png')}}" class="w-auto"/>
                    @elseif($data == 'Share')
                    <img src="{{asset('img/summaryS.png')}}" class="w-auto"/>
                    @endif
                </div>
            </div>
            </x-general.card>
        </div>
    </div>

    <!-- header -->
    <div class="absolute top-0 left-0 right-0 z-0">
        <x-general.header bgimg="" title="Dealers Summary" />
    </div>

</div>
@push('js')
<script>
    const chart = new Chartisan({
        el: '#chart',
        url: "@chart('sample_chart')",
    });
    </script>
@endpush
