<div class="mx-auto px-0 my-3 text-lg leading-6 font-medium text-cool-gray-900 sm:px-6 lg:px-8">
    <div class="relative">
        <x-general.page-title class="mb-0" title="Insert Bulk" />
        <a href="{{route("user.cif.index")}}" class="flex items-center mb-4 absolute right-0 top-0 my-3 mx-2">
            <div class="rounded-full  flex items-center py-2 px-2  text-bold justify-center bg-white">
                <x-heroicon-o-arrow-left class="h-4 w-4 text-indigo-700" />
            </div>
        </a>
    </div>
    <x-general.card class="bg-white sm:rounded-lg shadow px-5 py-3">
        <div
            class="flex flex-col lg:flex-row sm:flex-col px-4 mx-auto my-5 font-medium leading-6 text-cool-gray-900 sm:px-6 lg:px-8">
            <x-general.card class="bg-white p-5 w-full shadow-xl">
                <div>
                    <p class="text-lg font-semibold">Procedure for bulk transaction</p>
                    <ol class="px-6 text-sm list-decimal pt-2">
                        <li>Please download this
                            <a href="#" target="_blank"
                                class="text-blue-400 transition duration-300 ease-in-out hover:text-blue-500">Format
                                Template
                            </a>
                            .</li>
                        <li>
                            Key in the transactions base on format template.
                        </li>
                        <li>
                            Please refer to
                            <span x-data="{ open: false }">
                                <a @click="open = true" type="button"
                                    class="text-blue-400 transition duration-300 ease-in-out cursor-pointer hover:text-blue-500">
                                    Guide
                                </a>
                                {{-- @include('pages.pembayarzakat.modalpanduan') --}}
                            </span>
                            for easy .
                        </li>
                        <li>Upload the completed Format Template in the space provided.</li>

                        <li>Once the upload process is complete. Click
                            <span type="submit"
                                class="px-2 py-1 text-xs text-white bg-indigo-600 rounded shadow cursor-default">Save</span>
                            to save the list.
                        </li>
                    </ol>
                </div>
            </x-general.card>
            <x-general.card class="mt-4 lg:mt-0 shadow-xl bg-white p-5 w-full lg:ml-4">
                <div class="text-lg font-semibold">
                    <p>Upload your bulk transaction list </p>
                    <form wire:submit.prevent="save">
                        {{-- @php
                        if($errors->get('dokumen')) {
                        $hidesubmit = "hidden";
                        }
                        else {
                        if(is_null($dokumen)) {
                        $hidesubmit = "hidden";
                        }
                        else {
                        $hidesubmit = "";
                        }
                        }
                        @endphp --}}
                        <div class="flex mt-3">
                            <label for="muatnaikpukal"
                                class="w-full p-10 text-center transition duration-300 ease-in-out bg-gray-100 rounded-lg shadow cursor-pointer hover:bg-white group">
                                <span
                                    class="inline-flex items-center font-medium text-gray-600 group-hover:text-gray-700">
                                    {{-- @if (!is_null($dokumen))
                                    <div class="flex items-center">
                                        @if ($errors->get('dokumen'))
                                        <x-heroicon-o-exclamation class="w-6 h-6 mr-2 text-red-400" />
                                        @else
                                        <x-heroicon-o-shield-check class="w-6 h-6 mr-2 text-green-400" />
                                        @endif
                                        {{ $dokumen->getClientOriginalName() }}
                        </div>
                        @else --}}
                        <x-heroicon-o-cloud-upload
                            class="w-6 h-6 mr-2 text-indigo-600 animate-bounce" />
                        Please choose document
                        {{-- @endif --}}
                        </span>
                        </label>
                        <input type="file" class="absolute invisible pointer-events-none" id="muatnaikpukal"
                            name="muatnaikpukal" wire:model="dokumen">
                </div>
                {{-- @error('dokumen')
                        <span class="text-red-500">{{ $message }}</span>
                @enderror --}}
                <div class="flex justify-center mt-3 ">
                    <button type="submit"
                        class="px-4 py-2 text-white transition duration-300 ease-in-out bg-indigo-500 rounded-lg shadow hover:bg-indigo-600 hover:text-white">
                        Save
                    </button>
                </div>
                </form>
                <div wire:loading wire:target="dokumen" class="absolute inset-0 z-10">
                    <div class="flex items-center justify-center h-full rounded-lg">
                        <div class="p-2 bg-black bg-opacity-50 rounded-lg"><img class="w-8 h-8"
                                src="{{ asset('img/spin_loading.gif') }}"></div>
                    </div>
                </div>
                <div wire:loading wire:target="save" class="absolute inset-0 z-10">
                    <div class="flex items-center justify-center h-full rounded-lg">
                        <div class="p-2 bg-black bg-opacity-50 rounded-lg"><img class="w-8 h-8"
                                src="{{ asset('img/spin_loading.gif') }}"></div>
                    </div>
                </div>
            </div>
            </x-general.card>
        </div>
    </x-general.card>
</div>
