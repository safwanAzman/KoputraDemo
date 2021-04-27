<div>
    <div class="z-20 relative mx-auto px-0 my-3 text-lg leading-6 font-medium text-cool-gray-900">
        <x-general.grid mobile="1" gap="5" sm="1" md="2" lg="1" xl="1" class="col-span-6 items-center mt-8">
            <div class="bg-white py-10 px-10 rounded-lg shadow-lg">
                {{-- <div class="flex justify-end">
                    <a href="{{route('members')}}" class="flex px-4 py-1 text-sm font-bold text-white bg-indigo-600  hover:bg-indigo-700 rounded">
                        <div class="flex items-center space-x-2">
                            <x-heroicon-o-arrow-left class="w-4 h-4" /> 
                            <p>Return</p>
                        </div>
                    </a>
                </div> --}}
                <x-form.basic-form>
                    <x-slot name="content">
                        <x-general.grid mobile="1" gap="4" sm="1" md="2" lg="2" xl="2" class="col-span-6">
                            <x-form.input label="Name"  value="" />
                            <x-form.input label="IC No."  value="" />
                            <div>
                                <span class="block text-sm font-semibold leading-5 text-gray-700">Gender</span>
                                <div class="mt-2">
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio" name="name" value="l">
                                        <span class="ml-2 text-sm text-gray-700">Male</span>
                                    </label>
                                    <label class="inline-flex items-center ml-6">
                                        <input type="radio" class="form-radio" name="name" value="">
                                        <span class="ml-2 text-sm text-gray-700">Female</span>
                                    </label>
                                </div>
                            </div>
                            <x-form.dropdown label="Race" default="yes" value="" >
                                <option value=""></option>
                            </x-form.dropdown>
                            <x-form.dropdown label="Religion" default="yes" value="" >
                                <option value=""></option>
                            </x-form.dropdown>
                            <x-form.dropdown label="Citizen" default="yes" value="" >
                                <option value=""></option>
                            </x-form.dropdown>
                            <x-form.dropdown label="Marital Status" default="yes" value="" >
                                <option value=""></option>
                            </x-form.dropdown>
                            <x-form.dropdown label="Residence Type" default="yes" value="" >
                                <option value="">Own</option>
                                <option value="">Family</option>
                                <option value="">Rental</option>
                                <option value="">Others</option>
                            </x-form.dropdown>
                            <x-form.input label="Total Liabilities"  value="" />
                            <x-form.input label="Phone No. (HP)"  value="" />
                            <x-form.input label="Phone No. (Home)"  value="" />
                            <x-form.input label="Account Bank No."  value="" />
                            <x-form.input label="Personal Email"  value="" />
                            <x-form.input label="Office/Work Email"  value="" />
                        </x-general.grid>
                        <x-form.address class="" label="Address" value1="" value2="" value3="" value4="" value5=""
                            value6="" condition="state" />

                        <div class="flex justify-center mt-8">
                            <a onclick="save()" href="#" class="flex px-4 py-1 text-sm font-bold text-white bg-green-600  hover:bg-green-700 rounded">
                                <div class="flex items-center space-x-2">
                                    <x-heroicon-o-save class="w-4 h-4" /> 
                                    <p>Save</p>
                                </div>
                            </a>
                        </div>
                    </x-slot>
                </x-form.basic-form>
            </div>
        </x-general.grid>
    </div>

    <!-- header -->
    <div class="absolute top-0 left-0 right-0 z-0">
        <x-general.header bgimg="" title="Register Member" />
    </div>
</div>

@push('js')
<script>
    function save() {
        Swal.fire({
            icon: 'success',
            title: 'Berjaya Simpan',
            showConfirmButton: false,
            timer: 1500
        })
    }
</script>
@endpush