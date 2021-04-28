<div class="mx-auto px-0 my-3 text-lg leading-6 font-medium text-cool-gray-900 sm:px-6 lg:px-8">
    <x-general.page-title class="mb-0" title="Member list"/>
    <div class="bg-white sm:rounded-lg shadow px-5 py-3">
        <x-general.grid mobile="1" gap="5" sm="1" md="1" lg="1" xl="1" class="col-span-6">
            <!-- Start: Customer list-->
            <div class="">
                <div>
                    <div class="my-4 flex justify-between">
                        <div class="flex items-center">
                            <span class="mr-2 text-base text-gray-500">Search : </span>
                            <x-form.input name="search" label="" value=""  livewire="wire:model=search"/>
                        </div>
                        <div class="float-right align-middle">
                            <x-general.button.icon href="{{ route('user.cif.individual.create') }}" target="" label="Create" color="indigo" livewire="">
                                <x-heroicon-o-user-add class="-ml-0.5 mr-2 h-4 w-4"/>
                            </x-general.button.icon>
                        </div>
                    </div>

                    <div wire:loading >
                        <div class="flex items-center text-white absolute  bg-indigo-700 p-4 rounded" style="left: 38%; top:55%">
                            <x-heroicon-o-cog class="-ml-0.5 mr-2 h-8 w-8 animate-spin"/>
                            <p class="text-sm">Please waiting<span class="animate-ping">...</span></p>
                        </div>
                    </div>

                    <x-general.table>
                        <x-slot name="thead">
                            <x-general.table-header class="text-center" value="Identity No" sort="" livewire=""/>
                            <x-general.table-header class="text-left" value="Name" sort="" livewire=""/>
                            <x-general.table-header class="text-center" value="Created At" sort="" livewire=""/>
                            <x-general.table-header class="text-center" value="Updated At" sort="" livewire=""/>
                            <x-general.table-header class="text-center" value="Action" sort="" livewire=""/>

                        </x-slot>
                        <x-slot name="tbody">
                            @forelse ($customers as $item)
                            <tr>
                                <x-general.table-body colspan="" class="text-center font-medium text-gray-900">
                                    <p>{{$item->identity_no}}</p>
                                </x-general.table-body>
                                <x-general.table-body colspan="" class="text-left text-gray-500">
                                    <p>{{$item->name}}</p>
                                </x-general.table-body>
                                <x-general.table-body colspan="" class="text-center text-gray-500">
                                    <p>{{date('d/m/Y', strtotime($item->created_at))}}</p>
                                </x-general.table-body>
                                <x-general.table-body colspan="" class="text-center text-gray-500">
                                    <p>{{date('d/m/Y', strtotime($item->updated_at))}}</p>
                                </x-general.table-body>
                                <x-general.table-body colspan="" class="text-center text-gray-500">
                                    <x-general.button.icon href="{{ route('user.cif.individual.show', $item->uuid) }}" target="" label="View" color="indigo" livewire="">
                                        <x-heroicon-o-eye class="-ml-0.5 mr-2 h-4 w-4"/>
                                    </x-general.button.icon>
                                </x-general.table-body>
                            </tr>
                            @empty
                            <x-general.table-body colspan="3" class="font-medium text-gray-900">
                                <p><center>No data</center></p>
                            </x-general.table-body>
                            @endforelse
                        </x-slot>
                    </x-general.table>
                </div>
            </div>
            {{-- {{ $customers->links() }} --}}
            {{ $customers->links('pagination::tailwind') }}
            <!-- End: Customer list-->
        </x-general.grid>
    </div>
</div>
@push('js')
<script>
    window.addEventListener('swal',function(e){Swal.fire(e.detail);});
</script>
@endpush
