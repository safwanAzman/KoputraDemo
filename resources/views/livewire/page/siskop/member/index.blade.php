<div>
    <div class="z-20 relative mx-auto px-0 my-3 text-lg leading-6 font-medium text-cool-gray-900">
        <x-general.grid mobile="1" gap="5" sm="1" md="2" lg="1" xl="1" class="col-span-6 items-center mt-8">

        </x-general.grid>
    </div>
    <div class="absolute top-0 left-0 right-0 z-0">
        {{-- header --}}
        <x-general.header bgimg=""  title="Member List" height="8rem"/>
        {{-- body --}}
        <div class="mx-auto px-0 my-3 text-lg leading-6 font-medium text-cool-gray-900 sm:px-6 lg:px-8">
            <div class="bg-white sm:rounded-lg shadow px-5 py-3">
                <x-general.grid mobile="1" gap="5" sm="1" md="1" lg="1" xl="1" class="col-span-6">
                    <div class="">
                        <div>
                            <div class="my-4 flex justify-between flex-col md:flex-row">
                                <div class="flex items-center space-x-4">
                                    <span class="text-base text-gray-500">Search :</span>
                                    <x-form.dropdown label="" value="search_by" default="no">
                                        <option value="ref_no">Membership No</option>
                                        <option value="name">Name</option>
                                        <option value="identity_no">Identity No.</option>
                                        {{-- <option value="account_no">Account No.</option> --}}
                                    </x-form.dropdown>
                                    <x-form.input name="search" label="" value=""  livewire="wire:model=search"/>
                                </div>
                                <div class="float-right align-middle">
                                    <x-btn.icon href="" target="" label="Create" color="indigo" livewire="">
                                        <x-heroicon-o-user-add class="-ml-0.5 mr-2 h-4 w-4"/>
                                    </x-btn.icon>
                                </div>
                            </div>
                            {{-- <div wire:loading wire:target="search">
                                @include('misc.loading')
                            </div> --}}
                            <x-table.table>
                                <x-slot name="thead">
                                    <x-table.table-header sort="true" value="Identity No" />
                                    <x-table.table-header sort="yes" value="Name" />
                                    <x-table.table-header sort="yes" value="Created At" />
                                    <x-table.table-header sort="yes" value="Updated At" />
                                    <x-table.table-header sort="" value="Action" />
                                </x-slot>
                                <x-slot name="tbody">
                                    <tr>
                                        <x-table.table-body colspan="" class="text-left text-gray-500">
                                            <p>850409-03-5147</p>
                                        </x-table.table-body>
                                        <x-table.table-body colspan="" class="text-left text-gray-500">
                                            <p>MOHD AIZUDDIN BIN MOHD YUSOFF </p>
                                        </x-table.table-body>
                                        <x-table.table-body colspan="" class="text-left text-gray-500">
                                            <p>01/03/2021</p>
                                        </x-table.table-body>
                                        <x-table.table-body colspan="" class="text-left text-gray-500">
                                            <p>15/03/2021</p>
                                        </x-table.table-body>
                                        <x-table.table-body colspan="" class="text-center text-gray-500">
                                            <x-btn.icon href="{{ route('siskop.member.individual.show', 1) }}" target="" label="View" color="indigo" livewire="">
                                                <x-heroicon-o-eye class="-ml-0.5 mr-2 h-4 w-4"/>
                                            </x-btn.icon>
                                        </x-table.table-body>
                                    </tr>
                                </x-slot>
                            </x-table.table>
                        </div>
                    </div>
                    {{-- {{ $customers->links('pagination::tailwind') }} --}}
                </x-general.grid>
            </div>
        </div>
    </div>
</div>

@push('js')
<script>
    window.addEventListener('swal',function(e){Swal.fire(e.detail);});
</script>
@endpush
