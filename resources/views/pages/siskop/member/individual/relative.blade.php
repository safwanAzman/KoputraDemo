<x-form.basic-form action="saveFamily">
    <x-slot name="content">
        <x-general.grid mobile="1" gap="5" sm="1" md="1" lg="1" xl="1" class="col-span-6">
            <x-general.card class="bg-white shadow-lg p-4">
                <x-general.button.icon href="#" target="" label="Add New" color="indigo" livewire="wire:click=newFamily()">
                    <x-heroicon-o-plus class="-ml-0.5 mr-2 h-4 w-4" />
                </x-general.button.icon>
                <x-general.grid mobile="1" gap="5" sm="1" md="1" lg="1" xl="2" class="mt-5">
                    @forelse ($families as $key => $family)
                    <div>
                        <div class="flex justify-between">
                            <div>
                                <h1 class="font-semibold text-yellow-400">Family Information
                                    {{ $loop->iteration }}
                                </h1>
                            </div>
                            <div>
                                <x-general.button.icon href="#" target="" label="Delete" color="red" livewire="" onclick="deleteFamily({{$key}})" class="">
                                    <x-heroicon-o-trash class="-ml-0.5 mr-2 h-4 w-4" />
                                </x-general.button.icon>
                            </div>
                        </div>
                        <div class="mt-3">
                            <x-form.input label="Name" value="" livewire="wire:model=families.{{$key}}.name" />
                        </div>
                        <div class="mt-3 grid gap-2 lg:grid-cols-2 sm:grid-cols-1">
                            <div class="">
                                <x-form.input label="Identity Type" value="{{$customer['identity_type_id']}}" />
                            </div>
                            <div class="">
                                <x-form.input label="Identity No." value=""
                                    livewire="wire:model=families.{{$key}}.identity_no" />
                            </div>
                            <div class="">
                                <x-form.dropdown label="Race" value="families.{{$key}}.race_id" default='no'>
                                    <option value="1">MALAY</option>
                                    <option value="2">CHINESE</option>
                                    <option value="3">INDIA</option>
                                </x-form.dropdown>
                            </div>
                            <div class="">
                                <x-form.dropdown label="Religion" value="families.{{$key}}.religion_id" default='no'>
                                    <option value="1">ISLAM</option>
                                    <option value="2">CHRISTIAN</option>
                                    <option value="3">BUDDHA</option>
                                    <option value="3">HINDU</option>
                                </x-form.dropdown>
                            </div>
                            <div class="">
                                <x-form.dropdown label="Relation" value="families.{{$key}}.relation_id" default='no'>
                                    <option value="1">HUSBAND</option>
                                    <option value="2">WIFE</option>
                                    <option value="3">SON</option>
                                    <option value="3">DAUGTHER</option>
                                    <option value="3">FATHER</option>
                                    <option value="3">MOTHER</option>
                                    <option value="3">BROTHER</option>
                                    <option value="3">SISTER</option>
                                </x-form.dropdown>
                            </div>
                        </div>
                    </div>
                    @empty @endforelse
                </x-general.grid>
            </x-general.card>
            <!-- End: Address Iformation 1-->
        </x-general.grid>
    </x-slot>
    <x-form.submit-cancel-button class="pt-5 mt-8 border-t border-gray-200" cancel="Cancel" submit="Save" cancelpage="{{route('siskop.member.index')}}"/>
</x-form.basic-form>

@push('js')
<script>
    function deleteFamily(key){
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                @this.deleteFamily(key)
            }
        })
    }
</script>
@endpush
