<div>
    <div class="z-20 relative mx-auto px-0 my-3 text-lg leading-6 font-medium text-cool-gray-900">
        <x-general.grid mobile="1" gap="5" sm="1" md="2" lg="1" xl="1" class="col-span-6 items-center mt-8">

        </x-general.grid>
    </div>
    <div class="absolute top-0 left-0 right-0 z-0">
        {{-- header --}}
        @if(Route::current()->uri == "members" || \Request::is("members/*") )
            <x-general.header bgimg=""  title="PEMBIAYAAN" height="8rem"/>
        @else
            <x-general.header bgimg=""  title="Finance" height="8rem"/>
        @endif
        {{-- body --}}
        <div class="mx-auto px-0 my-3 text-lg leading-6 font-medium text-cool-gray-900 sm:px-6 lg:px-8">
            <div class="bg-white sm:rounded-lg shadow px-5 py-3">
                <div class="grid grid-cols-12 gap-6" x-data="{ active: 0 }">
                    <div class="flex flex-col-reverse col-span-12 lg:col-span-12 xxl:col-span-12 lg:block">
                        <x-general.card class="bg-white shadow-lg p-4">
                            <div class="border-b border-gray-200 text-base font-semibold mb-4">
                                <div class="flex-col lg:flex-row flex justify-between text-sm font-semibold my-2">
                                    <div>
                                        <p class="py-2 text-base">Category</p>
                                    </div>
                                    <div class="flex">
                                        <div class="flex space-x-3 bg-pink-600 text-white py-2 px-4 rounded-lg">
                                            <p>Name: <span>MOHD AIZUDDIN BIN MOHD YUSOFF</span></p>
                                            <p>Account: <span>{{$account_no}}</span></p>
                                        </div>
                                        {{-- <a href="{{route('siskop.member.individual.show', 1)}}" >
                                            <div class="printHide rounded-full  flex items-center py-2 px-2  text-bold justify-center bg-white">
                                                <x-heroicon-o-arrow-left class="h-4 w-4 text-indigo-700"/>
                                            </div>
                                        </a> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="flex overflow-x-auto">
                                {{-- <x-hovertab.title name="0"><x-heroicon-o-clipboard-list class="w-6 h-6 mr-2"/>
                                    <span class="text-sm tooltip-text bg-indigo-500 border rounded border-indigo-500 text-white -mt-14">Account Master</span>
                                </x-hovertab.title>
                                <x-hovertab.title name="1"><x-heroicon-o-device-mobile class="w-6 h-6 mr-2"/>
                                    <span class="text-sm tooltip-text bg-indigo-500 border rounded border-indigo-500 text-white -mt-14">Account Position</span>
                                </x-hovertab.title>
                                <x-hovertab.title name="5"><x-heroicon-o-play class="w-6 h-6 mr-2"/>
                                    <span class="text-sm tooltip-text bg-indigo-500 border rounded border-indigo-500 text-white -mt-14">Repayment Schedule</span>
                                </x-hovertab.title> --}}
                                <x-hovertab.title name="0"><x-heroicon-o-play class="w-6 h-6 mr-2"/>
                                    <span class="text-sm tooltip-text bg-indigo-500 border rounded border-indigo-500 text-white -mt-14">Statements</span>
                                </x-hovertab.title>
                            </div>
                        </x-general.card>
                    </div>
                    <div class="col-span-12 lg:col-span-12 xxl:col-span-12">
                        {{-- <x-hovertab.content name="0">@livewire('page.siskop.finance.master', ['uuid' => $uuid])</x-hovertab.content>
                        <x-hovertab.content name="1">@livewire('page.siskop.finance.position', ['uuid' => $uuid])</x-hovertab.content>
                        <x-hovertab.content name="5">@livewire('page.siskop.finance.repayment-schedule', ['uuid' => $uuid])</x-hovertab.content> --}}
                        <x-hovertab.content name="0">@livewire('page.siskop.finance.statements',['uuid' => $uuid])</x-hovertab.content>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('js')
<script>
    window.addEventListener('swal',function(e){Swal.fire(e.detail);});
</script>
@endpush

