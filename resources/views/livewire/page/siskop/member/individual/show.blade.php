<div>
    <div class="z-20 relative mx-auto px-0 my-3 text-lg leading-6 font-medium text-cool-gray-900">
        <x-general.grid mobile="1" gap="5" sm="1" md="2" lg="1" xl="1" class="col-span-6 items-center mt-8">

        </x-general.grid>
    </div>
    <div class="absolute top-0 left-0 right-0 z-0">
        {{-- header --}}
        <x-general.header bgimg=""  title="Dealer" height="8rem"/>
        {{-- body --}}
        <div class="mx-auto px-0 my-3 text-lg leading-6 font-medium text-cool-gray-900 sm:px-6 lg:px-8">
            <div class="bg-white sm:rounded-lg shadow px-5 py-3">
                <div class="grid grid-cols-12 gap-6" x-data="{ active: 0 }">
                    <div class="flex flex-col-reverse col-span-12 lg:col-span-12 xxl:col-span-12 lg:block">
                        <x-general.card class="bg-white shadow-lg p-3">
                            <div class="border-b border-gray-200 text-base font-semibold mb-4">
                                <div class="flex-col lg:flex-row flex justify-between text-sm font-semibold my-2">
                                    <div>
                                        <p class="py-2 text-base">Category</p>
                                    </div>
                                    <div class="flex space-x-3 bg-pink-600 text-white py-2 px-4 rounded-lg">
                                        <p>Name: <span>{{ $customer->name }}</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex overflow-x-auto">
                                <x-hovertab.title name="0">
                                    <x-heroicon-o-user-circle class="w-6 h-6 mr-2"/>
                                    <span class="text-sm tooltip-text bg-indigo-500 border rounded border-indigo-500 text-white -mt-14">Details</span>
                                </x-hovertab.title>
                                <x-hovertab.title name="1">
                                    <x-heroicon-o-home class="w-6 h-6 mr-2"/>
                                    <span class="text-sm tooltip-text bg-indigo-500 border rounded border-indigo-500 text-white -mt-14">Address</span>
                                </x-hovertab.title>
                                <x-hovertab.title name="2">
                                    <x-heroicon-o-user-group class="w-6 h-6 mr-2"/>
                                    <span class="text-sm tooltip-text bg-indigo-500 border rounded border-indigo-500 text-white -mt-14">Family</span>
                                </x-hovertab.title>
                                <x-hovertab.title name="3">
                                    <x-heroicon-o-cash class="w-6 h-6 mr-2"/>
                                    <span class="text-sm tooltip-text bg-indigo-500 border rounded border-indigo-500 text-white -mt-14">Sales Transactions</span>
                                </x-hovertab.title>
                                <x-hovertab.title name="4">
                                    <x-heroicon-o-presentation-chart-line class="w-6 h-6 mr-2"/>
                                    <span class="text-sm tooltip-text bg-indigo-500 border rounded border-indigo-500 text-white -mt-14">Commission Statements</span>
                                </x-hovertab.title>
                                {{-- <x-hovertab.title name="7">
                                    <x-heroicon-o-currency-dollar class="w-6 h-6 mr-2"/>
                                    <span class="text-sm tooltip-text bg-indigo-500 border rounded border-indigo-500 text-white -mt-14">Finance</span>
                                </x-hovertab.title> --}}
                                <x-hovertab.title name="8">
                                    <x-heroicon-o-shield-check class="w-6 h-6 mr-2"/>
                                    <span class="text-sm tooltip-text bg-indigo-500 border rounded border-indigo-500 text-white -mt-14">Customer Orders</span>
                                </x-hovertab.title>
                                {{-- <x-tab.title name="3"><x-heroicon-o-user-group class="w-6 h-6 mr-2"/>Welfare</x-tab.title> --}}
                            </div>
                        </x-general.card>
                    </div>
                    <div class="col-span-12 lg:col-span-12 xxl:col-span-12">
                        <x-hovertab.content name="0">@include('pages.siskop.member.individual.details')</x-hovertab.content>
                        <x-hovertab.content name="1">@include('pages.siskop.member.individual.address')</x-hovertab.content>
                        <x-hovertab.content name="2">@include('pages.siskop.member.individual.relative')</x-hovertab.content>
                        <x-hovertab.content name="3">@include('pages.siskop.member.individual.contribution')</x-hovertab.content>
                        <x-hovertab.content name="4">@include('pages.siskop.member.individual.share')</x-hovertab.content>
                        {{-- <x-hovertab.content name="7">@include('pages.siskop.finance.list-active-account')</x-hovertab.content> --}}
                        <x-hovertab.content name="8">@include('pages.siskop.member.individual.guarantee')</x-hovertab.content>
                        {{-- <x-tab.content name="3">@include('pages.siskop.member.individual.welfare')</x-tab.content> --}}
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

@if(session()->has('createCustomer'))
<script>
    Swal.fire({
            title               : 'Created!',
            text                : 'The member have been created!.',
            icon                : 'success',
            showConfirmButton   : false,
            timer               : 1500,
        })
</script>
@endif
@endpush

