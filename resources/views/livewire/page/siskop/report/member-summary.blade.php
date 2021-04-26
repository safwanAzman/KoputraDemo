<div>
    <div class="z-20 relative mx-auto px-0 my-3 text-lg leading-6 font-medium text-cool-gray-900">
        <div class="">
            <x-general.card class="bg-white shadow-lg px-5 py-3 mt-8">

                <div class="mb-4 border-2 rounded-lg py-2 px-3 grid gap-2 lg:grid-cols-4 sm:grid-cols-4">

                    <x-form.dropdown label="Member Summary" value=""  default="no" disabled>
                        <option value="1">Status</option>
                        <option value="2">Nationality</option>
                        <option value="3">Type</option>
                        <option value="4">Gender</option>
                        <option value="4">Material Status</option>
                        <option value="4">Race</option>
                        <option value="4">Religion</option>
                        <option value="4">Title</option>
                    </x-form.dropdown>

                    <x-form.dropdown label="Type" value="" default="no" disabled>
                        <option value="1" selected>Chart</option>
                        <option value="2">Table</option>
                    </x-form.dropdown>

                    <x-form.dropdown label="Data" value=""  default="no" disabled>
                        <option value="1"selected>Please choose</option>
                        <option value="2">Contribution</option>
                        <option value="2">Share</option>
                    </x-form.dropdown>
                </div>
                <div class="flex justify-between printHide">
                    <x-general.button.icon href="#" target="" label="Generate" livewire="" color="indigo">
                        <x-heroicon-o-cog class="-ml-0.5 mr-2 h-4 w-4" />
                    </x-general.button.icon>

                    <x-general.button.icon href="#" target="" label="Print" livewire="" color="indigo" >
                        <x-heroicon-o-printer class="-ml-0.5 mr-2 h-4 w-4" />
                    </x-general.button.icon>
                </div>
                <div class="p-4 h-auto z-0 flex justify-center">
                    <img src="{{asset('img/summary.png')}}" class="w-auto"/>
                </div>
            </x-general.card>
        </div>
    </div>

    <!-- header -->
    <div class="absolute top-0 left-0 right-0 z-0">
        <x-general.header bgimg="" title="Contribution & Share Projection" />
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