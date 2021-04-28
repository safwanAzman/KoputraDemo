<div class="mx-auto px-0 my-3 text-lg leading-6 font-medium text-cool-gray-900 sm:px-6 lg:px-8">
    <div class="relative">
        <x-general.page-title class="mb-0" title="Create Member" />
        <a href="{{route("user.cif.index")}}" class="flex items-center mb-4 absolute right-0 top-0 my-3 mx-2">
            <div class="rounded-full  flex items-center py-2 px-2  text-bold justify-center bg-white">
                <x-heroicon-o-arrow-left class="h-4 w-4 text-indigo-700" />
            </div>
        </a>
    </div>
    <div class="bg-white sm:rounded-lg shadow px-5 py-3">
        <x-general.grid mobile="1" gap="5" sm="1" md="1" lg="1" xl="1" class="col-span-6">
            <x-form.basic-form action="createCustomer">
                <x-slot name="content">
                    <x-general.grid mobile="1" gap="5" sm="1" md="1" lg="1" xl="1" class="col-span-6">
                        <div class="">
                            <!-- Start: Membership information Information-->
                            <x-general.card class="bg-white shadow-lg p-4">
                                <h1 class="font-semibold text-indigo-500">Membership Information</h1>
                                <x-general.grid mobile="1" gap="3" sm="1" md="1" lg="1" xl="3" class="mt-5">
                                    <div class="mb-4">
                                        <x-form.input label="Membership No." livewire="wire:model=customer.ref_no" :editable="auth()->user()->permission_sub_module('edit','cif','details')"/>
                                    </div>

                                    <div class="mb-4">
                                        <x-form.dropdown label="Type" value="customer.type_id" :editable="auth()->user()->permission_sub_module('edit','cif','details')">
                                            @forelse ($types as $type)
                                            <option value="{{ $type->id }}">{{ $type->description }}</option>
                                            @empty @endforelse
                                        </x-form.dropdown>
                                    </div>

                                    <div class="mb-4">
                                        <x-form.dropdown label="Status" value="customer.status_id" :editable="auth()->user()->permission_sub_module('edit','cif','details')">
                                            @forelse ($statuses as $status)
                                            <option value="{{ $status->id }}">{{ $status->description }}</option>
                                            @empty @endforelse
                                        </x-form.dropdown>
                                    </div>

                                    <div class="mb-4">
                                        <x-form.input type="date" label="Apply Date" livewire="wire:model=customer.apply_date" :editable="auth()->user()->permission_sub_module('edit','cif','details')"/>
                                    </div>

                                    <div class="mb-4">
                                        <x-form.input type="date" label="Start Date" livewire="wire:model=customer.start_date" :editable="auth()->user()->permission_sub_module('edit','cif','details')"/>
                                    </div>

                                    <div class="mb-4">
                                        <x-form.input type="date" label="End Date" livewire="wire:model=customer.end_date" :editable="auth()->user()->permission_sub_module('edit','cif','details')"/>
                                    </div>
                                </x-general.grid>
                            </x-general.card>
                            <!-- End: Individual Information-->

                            <!-- Start: Customer Information-->
                            <x-general.card class="bg-white shadow-lg p-4 mt-5">
                                <h1 class="font-semibold text-indigo-500">Member Information</h1>
                                <x-general.grid mobile="1" gap="3" sm="1" md="1" lg="1" xl="2" class="mt-5">
                                    <div class="mb-4">
                                        <x-form.dropdown label="Title" value="customer.title_id" :editable="auth()->user()->permission_sub_module('edit','cif','details')">
                                            @forelse ($titles as $title)
                                            <option value="{{ $title->id }}">{{ $title->description }}</option>
                                            @empty @endforelse
                                        </x-form.dropdown>
                                    </div>
                                    <div class="mb-4">
                                        <x-form.input label="Name" livewire="wire:model=customer.name" :editable="auth()->user()->permission_sub_module('edit','cif','details')"/>
                                    </div>
                                    <div class="mb-4">
                                        <x-form.dropdown label="Identity Type" value="customer.identity_type_id" :editable="auth()->user()->permission_sub_module('edit','cif','details')">
                                            @forelse ($identity_types as $identity_type)
                                            <option value="{{ $identity_type->id }}">{{ $identity_type->description }}</option>
                                            @empty @endforelse
                                        </x-form.dropdown>
                                    </div>

                                    <div class="mb-4">
                                        <x-form.input label="Identity No"  livewire="wire:model=cic" :editable="true"/>
                                    </div>

                                    <div class="mb-4">
                                        <x-form.dropdown label="Other ID Type" value="customer.other_identity_type_id" :editable="auth()->user()->permission_sub_module('edit','cif','details')">
                                            @forelse ($identity_types as $other_identity_type)
                                            <option value="{{ $other_identity_type->id }}">{{ $other_identity_type->description }}</option>
                                            @empty @endforelse
                                        </x-form.dropdown>
                                    </div>

                                    <div class="mb-4">
                                        <x-form.input label="Other ID" livewire="wire:model=customer.other_identity_no" :editable="true"/>
                                    </div>

                                    <div>
                                        <x-form.dropdown label="Gender" value="cgender" :editable="auth()->user()->permission_sub_module('edit','cif','details')">
                                            @forelse ($genders as $gender)
                                            <option value="{{ $gender->id }}">{{ $gender->description }}</option>
                                            @empty @endforelse
                                        </x-form.dropdown>
                                    </div>

                                    <div class="mb-4">
                                        <x-form.input type="date" label="Birth Date" livewire="wire:model=cbirthdate" :editable="true"/>
                                    </div>

                                    <div class="mb-4">
                                        <x-form.dropdown label="Race" value="crace" :editable="auth()->user()->permission_sub_module('edit','cif','details')">
                                            @forelse ($races as $race)
                                            <option value="{{ $race->id }}">{{ $race->description }}</option>
                                            @empty @endforelse
                                        </x-form.dropdown>
                                    </div>

                                    <div class="mb-4">
                                        <x-form.input type="text" label="Bumiputra Status" livewire="wire:model=cbumi"  :editable=true />
                                    </div>

                                    <div class="mb-4">
                                        <x-form.dropdown label="Languages" value="customer.language_id" :editable="auth()->user()->permission_sub_module('edit','cif','details')">
                                            @forelse ($languages as $language)
                                            <option value="{{ $language->id }}">{{ $language->description }}</option>
                                            @empty @endforelse
                                        </x-form.dropdown>
                                    </div>

                                    <div class="mb-4">
                                        <x-form.dropdown label="Marital" value="customer.marital_id" :editable="auth()->user()->permission_sub_module('edit','cif','details')">
                                            @forelse ($maritals as $marital)
                                            <option value="{{ $marital->id }}">{{ $marital->description }}</option>
                                            @empty @endforelse
                                        </x-form.dropdown>
                                    </div>

                                    <div class="mb-4">
                                        <x-form.dropdown label="Citizenship" value="customer.country_id" :editable="auth()->user()->permission_sub_module('edit','cif','details')">
                                            @forelse ($countries as $country)
                                            <option value="{{ $country->id }}">{{ $country->description }}</option>
                                            @empty @endforelse
                                        </x-form.dropdown>
                                    </div>
                                </x-general.grid>
                            </x-general.card>
                            <!-- End: Customer Information-->



                        </div>

                    </x-general.grid>
                </x-slot>
                <x-form.submit-cancel-button class="pt-5 mt-8 border-t border-gray-200" cancel="Cancel" submit="Save" cancelpage="{{route('user.cif.index')}}" />
            </x-form.basic-form>
        </x-general.grid>
    </div>
</div>
@push('js')
<script>
    window.addEventListener('swal',function(e){Swal.fire(e.detail);});
</script>
@endpush
