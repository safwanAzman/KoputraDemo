<x-form.basic-form action="saveAddress">
    <x-slot name="content">
        <!-- Start: Address Information-->
        <div class="">
            <x-general.card class="bg-white shadow-lg p-4">
                <div class="flex">
                    <x-btn.icon href="#" target="" label="Add New" color="indigo" livewire="wire:click=newAddress()" >
                        <x-heroicon-o-plus class="-ml-0.5 mr-2 h-4 w-4"/>
                    </x-btn.icon>
                </div>
                <x-general.grid mobile="1" gap="5" sm="1" md="1" lg="1" xl="2" class="mt-5">
                    @forelse ($addresses as $key => $address)
                    <x-form.address-input
                        :key="$key"
                        :editable="true"
                        postcodes=""
                        :states="$states"
                        :countries="$countries"
                        >
                        <div>
                            <div class="flex justify-between w-full">
                                <h1 class="inline-block align-middle font-semibold text-indigo-500">Address Detail {{ $loop->iteration }}</h1>
                                <div class="float-right align-middle">
                                    <x-btn.icon href="#" target="" label="Delete" color="red" livewire="" onclick="deleteAddress({{ $key }})" class="">
                                        <x-heroicon-o-trash class="-ml-0.5 mr-2 h-4 w-4"/>
                                    </x-btn.icon>
                                </div>
                            </div>
                        </div>
                    </x-form.address-input>
                    @empty @endforelse
                </x-general.grid>
            </x-general.card>
        </div>
        <!-- End: Address Information-->
    </x-slot>
    <x-form.submit-cancel-button class="pt-5 mt-8 border-t border-gray-200" cancel="Cancel" submit="Save" cancelpage="{{route('siskop.member.index')}}"/>
</x-form.basic-form>

@push('js')
<script>
    function deleteAddress(key){
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                @this.deleteAddress(key)
            }
        })
    }
</script>
@endpush
