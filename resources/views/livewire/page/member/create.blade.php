<div>
    <div class="z-20 relative mx-auto px-0 my-3 text-lg leading-6 font-medium text-cool-gray-900">
        <x-general.grid mobile="1" gap="5" sm="1" md="2" lg="1" xl="1" class="col-span-6 items-center mt-8">
            <div class="bg-white py-6 px-10 rounded-lg shadow-lg">
                <div class="flex justify-end">
                    <a href="{{route('members')}}" class="flex px-4 py-1 text-sm font-bold text-white bg-indigo-600  hover:bg-indigo-700 rounded">
                        <div class="flex items-center space-x-2">
                            <x-heroicon-o-arrow-left class="w-4 h-4" /> 
                            <p>Kembali</p>
                        </div>
                    </a>
                </div>
                <x-form.basic-form>
                    <x-slot name="content">
                        <x-general.grid mobile="1" gap="4" sm="1" md="2" lg="2" xl="2" class="col-span-6">
                            <x-form.input label="Nama" wire:model="" value="" />
                            <x-form.input label="No K/P" wire:model="" value="" />
                            <div>
                                <span class="block text-sm font-semibold leading-5 text-gray-700">Jantina</span>
                                <div class="mt-2">
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio" name="name" value="l">
                                        <span class="ml-2 text-sm text-gray-700">Lelaki</span>
                                    </label>
                                    <label class="inline-flex items-center ml-6">
                                        <input type="radio" class="form-radio" name="name" value="">
                                        <span class="ml-2 text-sm text-gray-700">Perempuan</span>
                                    </label>
                                </div>
                            </div>
                            <x-form.dropdown label="Bangsa" default="yes" value="" wire:model="">
                                <option value=""></option>
                            </x-form.dropdown>
                            <x-form.dropdown label="Agama" default="yes" value="" wire:model="">
                                <option value=""></option>
                            </x-form.dropdown>
                            <x-form.dropdown label="Warganegara" default="yes" value="" wire:model="">
                                <option value=""></option>
                            </x-form.dropdown>
                            <x-form.dropdown label="Taraf Perkahwinan" default="yes" value="" wire:model="">
                                <option value=""></option>
                            </x-form.dropdown>
                            <x-form.dropdown label="Jenis Kediaman" default="yes" value="" wire:model="">
                                <option value="">Kediaman Sendiri</option>
                                <option value="">Keluarga</option>
                                <option value="">Sewa</option>
                                <option value="">Lain-lain</option>
                            </x-form.dropdown>
                            <x-form.input label="Bil.Tanggungan" wire:model="" value="" />
                            <x-form.input label="Tel.Bimbit" wire:model="" value="" />
                            <x-form.input label="Tel.Kediaman" wire:model="" value="" />
                            <x-form.input label="No Akaun/Bank" wire:model="" value="" />
                            <x-form.input label="Email Perabadi" wire:model="" value="" />
                            <x-form.input label="Email Pejabat" wire:model="" value="" />
                        </x-general.grid>
                        <x-form.address class="" label="Address" value1="" value2="" value3="" value4="" value5=""
                            value6="" condition="state" />

                        <div class="flex justify-center mt-8">
                            <a href="{{route('members')}}" class="flex px-4 py-1 text-sm font-bold text-white bg-green-600  hover:bg-green-700 rounded">
                                <div class="flex items-center space-x-2">
                                    <x-heroicon-o-save class="w-4 h-4" /> 
                                    <p>Simpan</p>
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
        <x-general.header bgimg="" title="Daftar Member" />
    </div>
</div>