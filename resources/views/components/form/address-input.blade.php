<div>
    <div>
        {{$slot}}
        {{-- @dump($key) --}}
        {{-- @dump($postcodes) --}}
        {{-- @dump($states) --}}
        {{-- @dump($countries) --}}
        <div class="mt-3 flex rounded-md shadow-sm">
            <div class="w-full">
                <div class="flex justify-between">
                    <div>
                        <label class="block text-sm font-semibold leading-5 text-gray-700">
                            Address
                        </label>
                    </div>
                    <div>
                        <label class="inline-block align-middle text-xs text-gray-700 font-semibold">Mailing Address</label>
                        <input wire:model="addresses.{{ $key }}.mail_flag" type="checkbox" class="inline-block align-middle leading-tight @error('addresses'.$key.'mail_flag') border-red-300 bg-red-50 text-red-900 @enderror" wire:loading.attr='readonly' wire:loading.class="bg-gray-300" wire:target="submit">
                    </div>
                </div>
            </div>
        </div>

        <x-form.input-nested attribute="" type="text" label="" value="addresses.{{$key}}.address1" :editable=$editable livewire="wire:model=addresses.{{ $key }}.address1"/>
        <x-form.input-nested attribute="" type="text" label="" value="addresses.{{$key}}.address2" :editable=$editable livewire="wire:model=addresses.{{ $key }}.address2"/>
        <x-form.input-nested attribute="" type="text" label="" value="addresses.{{$key}}.address3" :editable=$editable livewire="wire:model=addresses.{{ $key }}.address3"/>
    </div>
    <div class="mt-3 grid gap-2 lg:grid-cols-2 sm:grid-cols-1">

        <x-form.input-nested attribute="" type="text" label="Postcode" value="addresses.{{$key}}.postcode" :editable=$editable livewire="wire:model=addresses.{{ $key }}.postcode"/>
        <x-form.input-nested attribute="" type="text" label="Town" value="addresses.{{$key}}.town" :editable=$editable livewire="wire:model=addresses.{{ $key }}.town"/>


        <x-form.state-dropdown label="State" value="addresses.{{ $key }}.state_id" :editable=$editable>
            @forelse ($states as $state)
            <option class="font-mono" value="{{ $state['id'] }}">{{ $state['description'] }}</option>
            @empty @endforelse
        </x-form.state-dropdown>

        <x-form.country-dropdown label="Country" value="addresses.{{ $key }}.country_id" :editable=$editable>
            @forelse($countries as $country)
            <option class="font-mono" value="{{ $country['id'] }}">{{ $country['description'] }}</option>
            @empty @endforelse
        </x-form.country-dropdown>

        <x-form.input-nested attribute="" type="text" label="Phone" value="addresses.{{$key}}.phone" :editable=$editable livewire="wire:model=addresses.{{ $key }}.phone"/>
        <x-form.input-nested attribute="" type="text" label="Phone" value="addresses.{{$key}}.fax" :editable=$editable livewire="wire:model=addresses.{{ $key }}.fax"/>
    </div>
</div>
