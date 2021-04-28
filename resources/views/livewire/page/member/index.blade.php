<div>
    <div class="z-20 relative mx-auto px-0 my-3 text-lg leading-6 font-medium text-cool-gray-900">
        <x-general.grid mobile="1" gap="5" sm="1" md="2" lg="1" xl="1" class="col-span-6 items-center mt-8">
            <div class="bg-white py-4 px-4 rounded-lg shadow-lg">
                {{-- <div class="flex justify-end">
                    <a href="{{route('members-create')}}" class="flex px-4 py-1 text-sm font-bold text-white bg-indigo-600  hover:bg-indigo-700 rounded">
                        <div class="flex items-center space-x-2">
                            <x-heroicon-o-user class="w-4 h-4" /> 
                            <p>Daftar Member</p>
                        </div>
                    </a>
                </div> --}}
                <div class="mt-4">
                    <x-table.table>
                        <x-slot name="thead">
                            <x-table.table-header class="text-left" value="NO." sort="" />
                            <x-table.table-header class="text-left" value="Nama" sort="" />
                            <x-table.table-header class="text-left" value="No. Kad Pengenalan" sort="" />
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
                                    <p>980110053049</p>
                                </x-table.table-body>


                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <div x-data="{Open : false}" >
                                        <div class="flex space-x-2">
                                            <a href="#" x-on:click="Open = true"
                                                class="rounded-full px-2 py-2 bg-indigo-600 hover:bg-indigo-700 shadow-lg tooltipbtn"
                                                data-title="Lihat Maklumat" data-placement="top">
                                                <x-heroicon-o-eye class="h-4 w-4 text-white" />
                                            </a>
                                        </div>
                                        <x-general.modal modalActive="Open" title="Information" modalSize="2xl">
                                                <div class="px-4 py-4  overflow-y-auto">
                                                    <x-general.grid mobile="1" gap="1" sm="3" md="3" lg="3" xl="3" class="col-span-6 leading-8">
                                                        <div>
                                                            <p class="text-sm">Nama</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">MUHAMMAD AHMAD</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">No. Kad Pengenalan Baru</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">980110053049</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Jantina</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">LELAKI</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Kaum</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">MELAYU</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Agama</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">ISLAM</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Warganegara</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">MALAYSIA</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Status Perkahwinan</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">BUJANG</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Jenis Kediaman</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">SEWA</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Jumlah Tanggungan</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">TIADA</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">No. Telefon Bimbit</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">0129721345</p>
                                                        </div>
                                                        <div>
                                                            <p class="ttext-sm">No. Telefon Rumah</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">Tiada</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">No. Akaun Bank</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">0112333456631</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Emel Peribadi</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">ahmad452@gmail.com</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Emel Kerja</p>
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

                            <tr>
                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <p>2.</p>
                                </x-table.table-body>

                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <p>MOHD AIZUDDIN</p>
                                </x-table.table-body>

                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <p>850409035147</p>
                                </x-table.table-body>


                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <div x-data="{Open : false}" >
                                        <div class="flex space-x-2">
                                            <a href="#" x-on:click="Open = true"
                                                class="rounded-full px-2 py-2 bg-indigo-600 hover:bg-indigo-700 shadow-lg tooltipbtn"
                                                data-title="Lihat Maklumat" data-placement="top">
                                                <x-heroicon-o-eye class="h-4 w-4 text-white" />
                                            </a>
                                        </div>
                                        <x-general.modal modalActive="Open" title="Information" modalSize="2xl">
                                                <div class="px-4 py-4  overflow-y-auto">
                                                    <x-general.grid mobile="1" gap="1" sm="3" md="3" lg="3" xl="3" class="col-span-6 leading-8">
                                                        <div>
                                                            <p class="text-sm">Nama</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">MOHD AIZUDDIN </p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">No. Kad Pengenalan Baru</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">850409035147</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Jantina</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">LELAKI</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Kaum</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">MELAYU</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Agama</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">ISLAM</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Warganegara</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">MALAYSIA</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Status Perkahwinan</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">BERKAHWIN</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Jenis Kediaman</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">SENDIRI</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Jumlah Tanggungan</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">1</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">No. Telefon Bimbit</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">0183546808</p>
                                                        </div>
                                                        <div>
                                                            <p class="ttext-sm">No. Telefon Rumah</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">Tiada</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">No. Akaun Bank </p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">8700954277</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Emel Peribadi</p>
                                                            <p class="text-sm font-semibold text-gray-400">aizuddin.yusoff@ymail.com</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Emel Kerja</p>
                                                            <p class="text-sm font-semibold text-gray-400"></p>
                                                        </div>
                                                    </x-general.grid>
                                                    <div>
                                                        <p class="text-sm">Alamat</p>
                                                        <p class="text-sm font-semibold text-gray-400 uppercase">Lot 900, Jalan 2G, Kg. Baru Lanjut, 43650 Sepang, Selangor</p>
                                                    </div>
                                                </div>
                                        </x-general.modal>
                                    </div>
                                </x-table.table-body>
                            </tr>

                            <tr>
                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <p>3.</p>
                                </x-table.table-body>

                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <p>AMIRUL FIKRI BIN HERMAN</p>
                                </x-table.table-body>

                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <p>961203106711</p>
                                </x-table.table-body>


                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <div x-data="{Open : false}" >
                                        <div class="flex space-x-2">
                                            <a href="#" x-on:click="Open = true"
                                                class="rounded-full px-2 py-2 bg-indigo-600 hover:bg-indigo-700 shadow-lg tooltipbtn"
                                                data-title="Maklumat Permohonan" data-placement="top">
                                                <x-heroicon-o-eye class="h-4 w-4 text-white" />
                                            </a>
                                        </div>
                                        <x-general.modal modalActive="Open" title="Information" modalSize="2xl">
                                                <div class="px-4 py-4  overflow-y-auto">
                                                    <x-general.grid mobile="1" gap="1" sm="3" md="3" lg="3" xl="3" class="col-span-6 leading-8">
                                                        <div>
                                                            <p class="text-sm">Nama</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">AMIRUL FIKRI BIN HERMAN</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">No. Kad Pengenalan Baru</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">961203106711</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Jantina</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">LELAKI</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Kaum</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">MELAYU</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Agama</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">ISLAM</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Warganegara</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">MALAYSIA</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Status Perkahwinan</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">BERKAHWIN</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Jenis Kediaman</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">SEWA</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Jumlah Tanggungan</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">TIADA</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">No. Telefon Bimbit</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">011121967288</p>
                                                        </div>
                                                        <div>
                                                            <p class="ttext-sm">No. Telefon Rumah</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">097666567</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">No. Akaun Bank</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">13119927538</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Emel Peribadi</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">amfikriman@gmail.com</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Emel Kerja</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">amirul@plus.com</p>
                                                        </div>
                                                    </x-general.grid>
                                                    <div>
                                                        <p class="text-sm">Alamat</p>
                                                        <p class="text-sm font-semibold text-gray-400 uppercase">Lot 982, Taman Indera Putra, Wangsa Maju, 57000 WP Kuala Lumpur</p>
                                                    </div>
                                                </div>
                                        </x-general.modal>
                                    </div>
                                </x-table.table-body>
                            </tr>

                            <tr>
                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <p>4.</p>
                                </x-table.table-body>

                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <p>NUR HANI BALQIS BINTI AZMI</p>
                                </x-table.table-body>

                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <p>000603036446</p>
                                </x-table.table-body>


                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <div x-data="{Open : false}" >
                                        <div class="flex space-x-2">
                                            <a href="#" x-on:click="Open = true"
                                                class="rounded-full px-2 py-2 bg-indigo-600 hover:bg-indigo-700 shadow-lg tooltipbtn"
                                                data-title="Maklumat Permohonan" data-placement="top">
                                                <x-heroicon-o-eye class="h-4 w-4 text-white" />
                                            </a>
                                        </div>
                                        <x-general.modal modalActive="Open" title="Information" modalSize="2xl">
                                                <div class="px-4 py-4  overflow-y-auto">
                                                    <x-general.grid mobile="1" gap="1" sm="3" md="3" lg="3" xl="3" class="col-span-6 leading-8">
                                                        <div>
                                                            <p class="text-sm">Nama</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">NUR HANI BALQIS BINTI AZMI</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">No. Kad Pengenalan Baru</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">000603036446</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Jantina</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">PEREMPUAN</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Kaum</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">MELAYU</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Agama</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">ISLAM</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Warganegara</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">MALAYSIA</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Status Perkahwinan</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">BUJANG</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Jenis Kediaman</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">IBU BAPA</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Jumlah Tanggungan</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">TIADA</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">No. Telefon Bimbit</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">0199283489</p>
                                                        </div>
                                                        <div>
                                                            <p class="ttext-sm">No. Telefon Rumah</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">037459128</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">No. Akaun Bank</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">365711899</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Emel Peribadi</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">balqismai00@gmail.com</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Emel Kerja</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">Tiada</p>
                                                        </div>
                                                    </x-general.grid>
                                                    <div>
                                                        <p class="text-sm">Alamat</p>
                                                        <p class="text-sm font-semibold text-gray-400 uppercase">No. 34, Kg. Api-Api, 45700 Kuala Selangor, Selangor.</p>
                                                    </div>
                                                </div>
                                        </x-general.modal>
                                    </div>
                                </x-table.table-body>
                            </tr>

                            <tr>
                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <p>5.</p>
                                </x-table.table-body>

                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <p>RASMIZAM BIN MOHAMAD</p>
                                </x-table.table-body>

                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <p>960211103167</p>
                                </x-table.table-body>


                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <div x-data="{Open : false}" >
                                        <div class="flex space-x-2">
                                            <a href="#" x-on:click="Open = true"
                                                class="rounded-full px-2 py-2 bg-indigo-600 hover:bg-indigo-700 shadow-lg tooltipbtn"
                                                data-title="Maklumat Permohonan" data-placement="top">
                                                <x-heroicon-o-eye class="h-4 w-4 text-white" />
                                            </a>
                                        </div>
                                        <x-general.modal modalActive="Open" title="Information" modalSize="2xl">
                                                <div class="px-4 py-4  overflow-y-auto">
                                                    <x-general.grid mobile="1" gap="1" sm="3" md="3" lg="3" xl="3" class="col-span-6 leading-8">
                                                        <div>
                                                            <p class="text-sm">Nama</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">RASMIZAM BIN MOHAMAD</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">No. Kad Pengenalan Baru</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">960211103167</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Jantina</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">LELAKI</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Kaum</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">MELAYU</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Agama</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">ISLAM</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Warganegara</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">MALAYSIA</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Status Perkahwinan</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">BUJANG</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Jenis Kediaman</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">IBU BAPA</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Jumlah Tanggungan</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">TIADA</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">No. Telefon Bimbit</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">01794468546</p>
                                                        </div>
                                                        <div>
                                                            <p class="ttext-sm">No. Telefon Rumah</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">097476355</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">No. Akaun Bank</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">1399892126</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Emel Peribadi</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">rasmizammohamad@gmail.com</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Emel Kerja</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">Tiada</p>
                                                        </div>
                                                    </x-general.grid>
                                                    <div>
                                                        <p class="text-sm">Alamat</p>
                                                        <p class="text-sm font-semibold text-gray-400 uppercase">Lot 72, Kg. Puteh, 28100 Temerloh, Pahang</p>
                                                    </div>
                                                </div>
                                        </x-general.modal>
                                    </div>
                                </x-table.table-body>
                            </tr>

                            {{-- <tr>
                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <p>6.</p>
                                </x-table.table-body>

                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <p>AMANI ALISYA BINTI MAZRI</p>
                                </x-table.table-body>

                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <p>940304117134</p>
                                </x-table.table-body>


                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <div x-data="{Open : false}" >
                                        <div class="flex space-x-2">
                                            <a href="#" x-on:click="Open = true"
                                                class="rounded-full px-2 py-2 bg-indigo-600 hover:bg-indigo-700 shadow-lg tooltipbtn"
                                                data-title="Maklumat Permohonan" data-placement="top">
                                                <x-heroicon-o-eye class="h-4 w-4 text-white" />
                                            </a>
                                        </div>
                                        <x-general.modal modalActive="Open" title="Information" modalSize="2xl">
                                                <div class="px-4 py-4  overflow-y-auto">
                                                    <x-general.grid mobile="1" gap="1" sm="3" md="3" lg="3" xl="3" class="col-span-6 leading-8">
                                                        <div>
                                                            <p class="text-sm">Name</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">AMANI ALISYA BINTI MAZRI</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">New IC No.</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">940304117134</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Gender</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">PEREMPUAN</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Race</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">MELAYU</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Religion</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">ISLAM</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Citizen</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">MALAYSIA</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Marital Status</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">BERKAHWIN</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Residence Type</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">SEWA</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Total Liabilities</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">TIADA</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Phone No. (HP)</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">013972411</p>
                                                        </div>
                                                        <div>
                                                            <p class="ttext-sm">Phone No. (Home)</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">Tiada</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Account Bank No.</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">12182279501</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Personal Email</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">wamanialisya@gmail.com</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Office/Work Email</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">Tiada</p>
                                                        </div>
                                                    </x-general.grid>
                                                    <div>
                                                        <p class="text-sm">Address</p>
                                                        <p class="text-sm font-semibold text-gray-400 uppercase">Lot 8810, Kg. Beranang, 24100 Marang, Terengganu</p>
                                                    </div>
                                                </div>
                                        </x-general.modal>
                                    </div>
                                </x-table.table-body>
                            </tr>

                            <tr>
                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <p>7.</p>
                                </x-table.table-body>

                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <p>CHUA XIU WEN</p>
                                </x-table.table-body>

                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <p>000904048338</p>
                                </x-table.table-body>


                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <div x-data="{Open : false}" >
                                        <div class="flex space-x-2">
                                            <a href="#" x-on:click="Open = true"
                                                class="rounded-full px-2 py-2 bg-indigo-600 hover:bg-indigo-700 shadow-lg tooltipbtn"
                                                data-title="Maklumat Permohonan" data-placement="top">
                                                <x-heroicon-o-eye class="h-4 w-4 text-white" />
                                            </a>
                                        </div>
                                        <x-general.modal modalActive="Open" title="Information" modalSize="2xl">
                                                <div class="px-4 py-4  overflow-y-auto">
                                                    <x-general.grid mobile="1" gap="1" sm="3" md="3" lg="3" xl="3" class="col-span-6 leading-8">
                                                        <div>
                                                            <p class="text-sm">Name</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">CHUA XIU WEN</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">New IC No.</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">000904048338</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Gender</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">PEREMPUAN</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Race</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">CINA</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Religion</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">BUDDHA</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Citizen</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">MALAYSIA</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Marital Status</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">BUJANG</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Residence Type</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">IBU BAPA</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Total Liabilities</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">TIADA</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Phone No. (HP)</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">011132278721</p>
                                                        </div>
                                                        <div>
                                                            <p class="ttext-sm">Phone No. (Home)</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">Tiada</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Account Bank No.</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">1827417182</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Personal Email</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">xiu_wen@gmail.com</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Office/Work Email</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">Tiada</p>
                                                        </div>
                                                    </x-general.grid>
                                                    <div>
                                                        <p class="text-sm">Address</p>
                                                        <p class="text-sm font-semibold text-gray-400 uppercase">Lot 92 Perkampungan Portugis, 75300 Bandaraya Melaka, Melaka</p>
                                                    </div>
                                                </div>
                                        </x-general.modal>
                                    </div>
                                </x-table.table-body>
                            </tr>

                            <tr>
                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <p>8.</p>
                                </x-table.table-body>

                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <p>ALYA ANIS BINTI FAZWAN</p>
                                </x-table.table-body>

                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <p>981225015544</p>
                                </x-table.table-body>


                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <div x-data="{Open : false}" >
                                        <div class="flex space-x-2">
                                            <a href="#" x-on:click="Open = true"
                                                class="rounded-full px-2 py-2 bg-indigo-600 hover:bg-indigo-700 shadow-lg tooltipbtn"
                                                data-title="Maklumat Permohonan" data-placement="top">
                                                <x-heroicon-o-eye class="h-4 w-4 text-white" />
                                            </a>
                                        </div>
                                        <x-general.modal modalActive="Open" title="Information" modalSize="2xl">
                                                <div class="px-4 py-4  overflow-y-auto">
                                                    <x-general.grid mobile="1" gap="1" sm="3" md="3" lg="3" xl="3" class="col-span-6 leading-8">
                                                        <div>
                                                            <p class="text-sm">Name</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">ALYA ANIS BINTI FAZWAN</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">New IC No.</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">981225015544</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Gender</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">PEREMPUAN</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Race</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">MELAYU</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Religion</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">ISLAM</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Citizen</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">MALAYSIA</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Marital Status</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">BUJANG</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Residence Type</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">SEWA</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Total Liabilities</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">TIADA</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Phone No. (HP)</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">0129243731</p>
                                                        </div>
                                                        <div>
                                                            <p class="ttext-sm">Phone No. (Home)</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">Tiada</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Account Bank No.</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">01119824758</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Personal Email</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">alyanis@gmail.com</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Office/Work Email</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">alya@mcmc.com</p>
                                                        </div>
                                                    </x-general.grid>
                                                    <div>
                                                        <p class="text-sm">Address</p>
                                                        <p class="text-sm font-semibold text-gray-400 uppercase">Lot 291 Desa Merpati, Taman Bunga, 79000 Nusajaya, Johor</p>
                                                    </div>
                                                </div>
                                        </x-general.modal>
                                    </div>
                                </x-table.table-body>
                            </tr>

                            <tr>
                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <p>9.</p>
                                </x-table.table-body>

                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <p>NIK AZRI BIN NIK HASSAN</p>
                                </x-table.table-body>

                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <p>880529035899</p>
                                </x-table.table-body>


                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <div x-data="{Open : false}" >
                                        <div class="flex space-x-2">
                                            <a href="#" x-on:click="Open = true"
                                                class="rounded-full px-2 py-2 bg-indigo-600 hover:bg-indigo-700 shadow-lg tooltipbtn"
                                                data-title="Maklumat Permohonan" data-placement="top">
                                                <x-heroicon-o-eye class="h-4 w-4 text-white" />
                                            </a>
                                        </div>
                                        <x-general.modal modalActive="Open" title="Information" modalSize="2xl">
                                                <div class="px-4 py-4  overflow-y-auto">
                                                    <x-general.grid mobile="1" gap="1" sm="3" md="3" lg="3" xl="3" class="col-span-6 leading-8">
                                                        <div>
                                                            <p class="text-sm">Name</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">NIK AZRI BIN NIK HASSAN</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">New IC No.</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">880529035899</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Gender</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">LELAKI</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Race</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">MELAYU</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Religion</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">ISLAM</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Citizen</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">MALAYSIA</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Marital Status</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">BERKAHWIN</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Residence Type</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">SENDIRI</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Total Liabilities</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">2</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Phone No. (HP)</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">0129812471</p>
                                                        </div>
                                                        <div>
                                                            <p class="ttext-sm">Phone No. (Home)</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">097445873</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Account Bank No.</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">13109187229</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Personal Email</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">nik.azri88@gmail.com</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Office/Work Email</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">nikazri@msu.com</p>
                                                        </div>
                                                    </x-general.grid>
                                                    <div>
                                                        <p class="text-sm">Address</p>
                                                        <p class="text-sm font-semibold text-gray-400 uppercase">12-06 Apartment Merpati, Jalan Melawati, 47000 Shah Alam, Selangor</p>
                                                    </div>
                                                </div>
                                        </x-general.modal>
                                    </div>
                                </x-table.table-body>
                            </tr>

                            <tr>
                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <p>10.</p>
                                </x-table.table-body>

                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <p>SURIANI BINTI MAHMUD</p>
                                </x-table.table-body>

                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <p>780708052198</p>
                                </x-table.table-body>


                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <div x-data="{Open : false}" >
                                        <div class="flex space-x-2">
                                            <a href="#" x-on:click="Open = true"
                                                class="rounded-full px-2 py-2 bg-indigo-600 hover:bg-indigo-700 shadow-lg tooltipbtn"
                                                data-title="Maklumat Permohonan" data-placement="top">
                                                <x-heroicon-o-eye class="h-4 w-4 text-white" />
                                            </a>
                                        </div>
                                        <x-general.modal modalActive="Open" title="Information" modalSize="2xl">
                                                <div class="px-4 py-4  overflow-y-auto">
                                                    <x-general.grid mobile="1" gap="1" sm="3" md="3" lg="3" xl="3" class="col-span-6 leading-8">
                                                        <div>
                                                            <p class="text-sm">Name</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase whitepsace-normal">SURIANI BINTI MAHMUD</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">New IC No.</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">780708052198</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Gender</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">PEREMPUAN</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Race</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">MELAYU</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Religion</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">ISLAM</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Citizen</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">MALAYSIA</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Marital Status</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">BUJANG</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Residence Type</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">SENDIRI</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Total Liabilities</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">4</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Phone No. (HP)</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">0198226310</p>
                                                        </div>
                                                        <div>
                                                            <p class="ttext-sm">Phone No. (Home)</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">097541129</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Account Bank No.</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">12855209178</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Personal Email</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">suriani_mah78@gmail.com</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm">Office/Work Email</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">suriani_mahmud@sksi@yahoo.com</p>
                                                        </div>
                                                    </x-general.grid>
                                                    <div>
                                                        <p class="text-sm">Address</p>
                                                        <p class="text-sm font-semibold text-gray-400 uppercase">Lot 456, Taman Restu, Jalan Telipot, Kota Bharu, Kelantan</p>
                                                    </div>
                                                </div>
                                        </x-general.modal>
                                    </div>
                                </x-table.table-body>
                            </tr> --}}
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
