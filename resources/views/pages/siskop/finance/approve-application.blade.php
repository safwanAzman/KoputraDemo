<x-general.grid mobile="1" gap="5" sm="1" md="1" lg="1" xl="1" class="col-span-6">
    <div class="mt-6">
        <div class="flex items-center space-x-4 mx-6">
            <span class="text-base text-gray-500 -mt-4">Search :</span>
            <x-form.dropdown label="" value="search_by" :editable="auth()->user()->permission_sub_module('edit','cif','details')">
                {{-- <option value="ref_no">Membership No</option> --}}
                <option value="name">Name</option>
                <option value="identity_no">Identity No.</option>
                {{-- <option value="account_no">Account No.</option> --}}
            </x-form.dropdown>
            <x-form.input name="search" label="" value=""  livewire="" :editable="true"/>
        </div>
        <x-general.card class="bg-white shadow-lg p-4">
            <x-general.table>
                <x-slot name="thead">
                    <x-general.table-header class="text-center" value="Account No" sort="" livewire="" />
                    <x-general.table-header class="text-center" value="Status" sort="" livewire="" />
                    <x-general.table-header class="text-center" value="Approved Amount" sort="" livewire="" />
                    <x-general.table-header class="text-center" value="Selling Price" sort="" livewire="" />
                    <x-general.table-header class="text-center" value="Desbursed amount" sort="" livewire="" />
                    <x-general.table-header class="text-center" value="Action" sort="" livewire="" />
                    <x-general.table-header class="text-center" value="" sort="" livewire="" />
                </x-slot>
                <x-slot name="tbody">
                    <tr>
                        <x-general.table-body colspan="" class="text-center font-medium text-gray-900">
                            <p>Test</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-center font-medium text-gray-900">
                            <p>Test</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-right font-medium text-gray-900">
                            <p>Test</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-right font-medium text-gray-900">
                            <p>Test</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-right font-medium text-gray-900">
                            <p>Test</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-center font-medium text-gray-900">
                            <x-general.button.icon href="#" target="" label="View"
                                color="{{auth()->user()->primary_color}}" livewire="">
                                <x-heroicon-o-eye class="-ml-0.5 mr-2 h-4 w-4" />
                            </x-general.button.icon>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-center font-medium text-gray-900">
                            <input id="" type="checkbox"
                            class="form-checkbox w-4 h-4 text-indigo-600 transition duration-150 ease-in-out" />
                        </x-general.table-body>
                        </tr>
                </x-slot>
            </x-general.table>
        </x-general.card>
    </div>
</x-general.grid>
