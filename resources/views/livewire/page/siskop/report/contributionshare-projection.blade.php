<div>
    <div class="z-20 relative mx-auto px-0 my-3 text-lg leading-6 font-medium text-cool-gray-900">
        <div class="">
            <x-general.card class="bg-white shadow-lg px-5 py-3 mt-8">
                <div class="mb-4 border-2 rounded-lg py-2 px-3 grid gap-2 lg:grid-cols-4 sm:grid-cols-4">
                    <x-form.input label="New Dealers" type="text" value="{{$rate}}"  readonly/>

                    <x-form.dropdown label="Year" value="" default="no">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5" selected>5</option>
                    </x-form.dropdown>

                    <x-form.dropdown label="Projection Type" value="linear" default="no">
                        <option value="l">Fixed Projection</option>
                        <option value="e">Growth Projection</option>
                    </x-form.dropdown>

                    <x-form.dropdown label="Graph Type" value="graph_type"  default="no">
                        <option value="bar">Bar</option>
                        <option value="line">Line</option>
                    </x-form.dropdown>
                </div>
                <div class="flex justify-end printHide">
                    <x-general.button.icon href="#" target="" label="Print" livewire="" color="yellow" >
                        <x-heroicon-o-printer class="-ml-0.5 mr-2 h-4 w-4" />
                    </x-general.button.icon>
                </div>
                <div class="p-4 h-auto z-0 flex justify-center">
                    @if($graph_type == 'bar')
                    <img src="{{asset('img/contributionbar.png')}}" class="w-auto"/>
                    @elseif($graph_type == 'line')
                    <img src="{{asset('img/contributionline.png')}}" class="w-auto"/>
                    @endif
                </div>
            </x-general.card>
        </div>
    </div>

    <!-- header -->
    <div class="absolute top-0 left-0 right-0 z-0">
        <x-general.header bgimg="" title="Sales Transactions & Commission Rewards Projection" />
    </div>

</div>
