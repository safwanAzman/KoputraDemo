<div>
    <div class="z-20 relative mx-auto px-0 my-3 text-lg leading-6 font-medium text-cool-gray-900">
        <x-general.grid mobile="1" gap="5" sm="1" md="2" lg="1" xl="1" class="col-span-6 items-center mt-8">
            <div class="bg-white py-4 px-4 rounded-lg shadow-lg">
                <div class="flex justify-end">
                    <a href="{{route('members-create')}}" class="flex px-4 py-1 text-sm font-bold text-white bg-indigo-600  hover:bg-indigo-700 rounded">
                        <div class="flex items-center space-x-2">
                            <x-heroicon-o-user class="w-4 h-4" /> 
                            <p>Daftar Members</p>
                        </div>
                    </a>
                </div>
                <div class="mt-4">
                    <x-table.table>
                        <x-slot name="thead">
                            <x-table.table-header class="text-left" value="NO." sort="" />
                            <x-table.table-header class="text-left" value="Nama" sort="" />
                            <x-table.table-header class="text-left" value="NO K/P baru" sort="" />
                            <x-table.table-header class="text-left" value="Tindakan" sort="" />
                        </x-slot>
                        <x-slot name="tbody">
                            <tr>
                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <p>1.</p>
                                </x-table.table-body>

                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <p>MUHAMMAD AHMAD ALI</p>
                                </x-table.table-body>

                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <p>9891105049</p>
                                </x-table.table-body>


                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <div x-data="{Open : false}" >
                                        <div class="flex space-x-2">
                                            <a href="#" x-on:click="Open = true"
                                                class="rounded-full px-2 py-2 bg-indigo-600 hover:bg-indigo-700 shadow-lg tooltipbtn"
                                                data-title="View Detail" data-placement="top">
                                                <x-heroicon-o-eye class="h-4 w-4 text-white" />
                                            </a>
                                        </div>
                                        <x-general.modal modalActive="Open" title="Informasi" modalSize="2xl">
                                                <div class="px-4 py-4  overflow-y-auto">
                                                    <x-general.grid mobile="1" gap="1" sm="3" md="3" lg="3" xl="3" class="col-span-6 leading-8">
                                                        <div>
                                                            <p class="text-sm">Nama</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">MUHAMMAD AHMAD</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">No.k/p baru</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">9891105049</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Jantina</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">LELAKI</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Bangsa</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">MELAYU</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Agama</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">ISLAM</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">MALAYSIA</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">ISLAM</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Taraf Perkahwinan</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">BUJANG</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Jenis Kediaman</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">SEWA</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Bil.tangungan</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">TIADA</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Tel.Bimbit</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">0129721345</p>
                                                        </div>
                                                        <div>
                                                            <p class="ttext-sm">Tel.Kediaman</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">Tiada</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">No Akaun/Bank</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">0112333456631</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Email Perabadi</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">ahmad452@gmail.com</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Email Pejabat</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">Tiada</p>
                                                        </div>
                                                    </x-general.grid>
                                                    <div>
                                                        <p class="text-sm">Alamat</p>
                                                        <p class="text-sm font-semibold text-gray-400 uppercase">Lot 7642 jalan kampung batu 43000 kajang selangor</p>
                                                    </div>
                                                </div>
                                        </x-general.modal>
                                    </div>
                                </x-table.table-body>
                            </tr>
                        </x-slot>
                    </x-table.table>
                </div>
            </div>
        </x-general.grid>
    </div>
    
    <!-- header -->
    <div class="absolute top-0 left-0 right-0 z-0">
        <x-general.header bgimg=""  title="MEMBERS"/>
    </div>

</div>
