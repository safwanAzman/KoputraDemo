<div>
    <div class="z-20 relative mx-auto px-0 my-3 text-lg leading-6 font-medium text-cool-gray-900">
        <!-- Start Content -->

        @if (session('success'))
        <x-toaster.success title="{{ session('success') }}"/>
        {{-- @elseif (session('warning'))
        <x-toaster.warning title="{{ session('warning') }}"/>
        @elseif (session('info'))
        <x-toaster.info title="{{ session('info') }}"/> --}}
        @endif

        <x-general.grid mobile="1" gap="5" sm="1" md="2" lg="4" xl="4" class="col-span-6 items-center mt-20">
            <x-dashboard.info-card bg="white" title="JUMLAH PERMOHONAN YANG DIPOHON" value="4" iconbg="red"
                percentage="33%" footerTitle="Daripada bulan lepas" cardRoute="#">
                <x-slot name="svg">
                    <x-heroicon-o-document-text class="h-7 w-7" />
                </x-slot>
            </x-dashboard.info-card>

            <x-dashboard.info-card bg="white" title="JUMLAH PERMOHONAN YANG LULUS" value="2" iconbg="green"
                percentage="33%" footerTitle="Daripada bulan lepas" cardRoute="#">
                <x-slot name="svg">
                    <x-heroicon-o-chart-pie class="h-7 w-7" />
                </x-slot>
            </x-dashboard.info-card>

            <x-dashboard.info-card bg="white" title="JUMLAH KESELURUHAN PENGGUNA BERDAFTAR" value="25" iconbg="yellow"
                percentage="20%" footerTitle="Keseluruhan ahli" cardRoute="#">
                <x-slot name="svg">
                    <x-heroicon-o-user-group class="h-7 w-7" />
                </x-slot>
            </x-dashboard.info-card>

            <x-dashboard.info-card bg="white" title="JUMLAH KESELURUHAN AHLI KOPERASI" value="32" iconbg="blue"
                percentage="20%" footerTitle="Keseluruhan ahli" cardRoute="#">
                <x-slot name="svg">
                    <x-heroicon-o-office-building class="h-7 w-7" />
                </x-slot>
            </x-dashboard.info-card>
        </x-general.grid>

        <x-general.grid mobile="1" gap="5" sm="1" md="2" lg="1" xl="1" class="col-span-6 items-center mt-8">
            <div class="bg-white p-4 shadow-lg rounded-lg">
                <h1 class="font-semibold text-lg">PERMOHONAN YANG MASIH MENUNGGU KELULUSAN</h1>
                <div class="mt-4">
                    <x-table.table>
                        <x-slot name="thead">
                            <x-table.table-header class="text-left" value="NO." sort="" />
                            <x-table.table-header class="text-left" value="NO.PERMOHONAN" sort="" />
                            <x-table.table-header class="text-left" value="JUMLAH DIPOHON" sort="" />
                            <x-table.table-header class="text-left" value="NAMA PENUH" sort="" />
                            <x-table.table-header class="text-left" value="NO. K/P BARU" sort="" />
                            <x-table.table-header class="text-left" value="STATUS PERMOHONAN" sort="" />
                            <x-table.table-header class="text-left" value="KEPUTUSAN KELULUSAN" sort="" />
                        </x-slot>
                        <x-slot name="tbody">
                            @if ($dat[0]==1)
                            <tr>
                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <p>1.</p>
                                </x-table.table-body>

                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">

                                    <div x-data="{Open : false}">
                                        <a href="#" class="flex items-center space-x-1" x-on:click="Open = true">
                                            <x-heroicon-s-information-circle
                                                class="h-5 w-5 text-indigo-700 tooltipbtn focus:outline-none"
                                                data-title="Maklumat Permohonan" data-placement="top" />
                                            <p>002002210074</p>
                                        </a>

                                        <x-general.modal modalActive="Open" title="Informasi" modalSize="4xl">
                                            {{-- <div class="px-6 py-4 ">
                                                <h1 class="text-indigo-700 text-xl font-semibold border-b-4 border-indigo-500">MAKLUMAT PEBIAYAAN DIPOHON</h1>
                                            </div> --}}
                                            <x-general.grid mobile="1" gap="4" sm="1" md="1" lg="1" xl="1"
                                                class="col-span-6">
                                                <div class="h-96 overflow-y-auto mt-4 pl-4">
                                                    <img src="{{asset('img/test.png')}}" class="w-auto" />
                                                </div>
                                            </x-general.grid>
                                        </x-general.modal>
                                    </div>

                                </x-table.table-body>

                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <p>100,000.00</p>
                                </x-table.table-body>

                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <p>MOHD AIZUDDIN BIN MOHD YUSOFF</p>
                                </x-table.table-body>

                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <p>850409035147</p>
                                </x-table.table-body>

                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <p>MENUNGGU KELULUSAN ALK</p>
                                </x-table.table-body>

                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <div class="flex space-x-2"  x-data="{Open : false, Open2 : false, Open3 : false }">

                                        
                                        <a href="#" x-on:click="Open = true"
                                        class="rounded-full px-1 py-1 bg-green-500 hover:bg-green-600 shadow-lg tooltipbtn"
                                        data-title="Lulus Permohonan" data-placement="top">
                                        <x-heroicon-o-check class="h-4 w-4 text-white" />
                                        </a>

                                        <x-general.modal-button 
                                            modalActive="Open" 
                                            title="Terima Permohonan" 
                                            description="Adakah anda pasti untuk menerima permohonan pinjaman ini?" 
                                            iconColour="blue" 
                                            draw="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                                            colour="green"
                                            lButton="Batal" 
                                            rButton="Terima"
                                            alkCheck="false"
                                            itemid="0">
                                    
                                        </x-general.modal-button>
                                        
                                        <a href="#" x-on:click="Open2 = true"
                                            class="rounded-full px-1 py-1 bg-red-500 hover:bg-red-600 shadow-lg tooltipbtn"
                                            data-title="Tolak Permohonan" data-placement="top">
                                            <x-heroicon-o-x class="h-4 w-4 text-white" />
                                        </a>

                                        <x-general.modal-button 
                                            modalActive="Open2" 
                                            title="Tolak Permohonan" 
                                            description="Adakah anda pasti untuk menolak permohonan pinjaman ini?" 
                                            iconColour="red" 
                                            draw="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                                            colour="red"
                                            lButton="Batal" 
                                            rButton="Tolak"
                                            alkCheck="false"
                                            itemid="0">
                                    
                                        </x-general.modal-button>

                                        <a href="#" x-on:click="Open3 = true"
                                            class="rounded-full px-1 py-1 bg-orange-500 hover:bg-orange-600 shadow-lg tooltipbtn"
                                            data-title="Pindah Eksekutif" data-placement="top">
                                            <x-heroicon-s-users class="h-4 w-4 text-white" />
                                        </a>

                                        <x-general.modal-button 
                                            modalActive="Open3" 
                                            title="Pindah Eksekutif" 
                                            description="Hantar permohonan kepada Ahli Lembaga Koperasi Lain?" 
                                            iconColour="blue" 
                                            draw="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                                            colour="green"
                                            lButton="Batal" 
                                            rButton="Ya"
                                            alkCheck="true"
                                            itemid="0">
                                            
                                        </x-general.modal-button>
                                    </div>
                                </x-table.table-body>

                            </tr>
                            @endif
                            @if ($dat[1]==1)
                            <tr>
                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <p>2.</p>
                                </x-table.table-body>

                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">

                                    <div x-data="{Open : false}">
                                        <a href="#" class="flex items-center space-x-1" x-on:click="Open = true">
                                            <x-heroicon-s-information-circle
                                                class="h-5 w-5 text-indigo-700 tooltipbtn focus:outline-none"
                                                data-title="Maklumat Permohonan" data-placement="top" />
                                            <p>002202310474</p>
                                        </a>
                                    </div>

                                </x-table.table-body>

                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <p>20,000.00</p>
                                </x-table.table-body>

                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <p>MUHAMMAD AHMAD ALI</p>
                                </x-table.table-body>

                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <p>980110053049</p>
                                </x-table.table-body>

                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <p>MENUNGGU KELULUSAN ALK</p>
                                </x-table.table-body>

                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <div class="flex space-x-2"  x-data="{Open : false, Open2 : false, Open3 : false }">

                                        
                                        <a href="#" x-on:click="Open = true"
                                        class="rounded-full px-1 py-1 bg-green-500 hover:bg-green-600 shadow-lg tooltipbtn"
                                        data-title="Lulus Permohonan" data-placement="top">
                                        <x-heroicon-o-check class="h-4 w-4 text-white" />
                                        </a>

                                        <x-general.modal-button 
                                            modalActive="Open" 
                                            title="Terima Permohonan" 
                                            description="Adakah anda pasti untuk menerima permohonan pinjaman ini?" 
                                            iconColour="blue" 
                                            draw="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                                            colour="green"
                                            lButton="Batal" 
                                            rButton="Terima"
                                            alkCheck="false"
                                            itemid="1">
                                    
                                        </x-general.modal-button>
                                        
                                        <a href="#" x-on:click="Open2 = true"
                                            class="rounded-full px-1 py-1 bg-red-500 hover:bg-red-600 shadow-lg tooltipbtn"
                                            data-title="Tolak Permohonan" data-placement="top">
                                            <x-heroicon-o-x class="h-4 w-4 text-white" />
                                        </a>

                                        <x-general.modal-button 
                                            modalActive="Open2" 
                                            title="Tolak Permohonan" 
                                            description="Adakah anda pasti untuk menolak permohonan pinjaman ini?" 
                                            iconColour="red" 
                                            draw="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                                            colour="red"
                                            lButton="Batal" 
                                            rButton="Tolak"
                                            alkCheck="false"
                                            itemid="1">
                                    
                                        </x-general.modal-button>

                                        <a href="#" x-on:click="Open3 = true"
                                            class="rounded-full px-1 py-1 bg-orange-500 hover:bg-orange-600 shadow-lg tooltipbtn"
                                            data-title="Pindah Eksekutif" data-placement="top">
                                            <x-heroicon-s-users class="h-4 w-4 text-white" />
                                        </a>

                                        <x-general.modal-button 
                                            modalActive="Open3" 
                                            title="Pindah Eksekutif" 
                                            description="Hantar permohonan kepada Ahli Lembaga Koperasi Lain?" 
                                            iconColour="blue" 
                                            draw="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                                            colour="green"
                                            lButton="Batal" 
                                            rButton="Ya"
                                            alkCheck="true"
                                            itemid="1">
                                            
                                        </x-general.modal-button>
                                    </div>
                                </x-table.table-body>

                            </tr>
                            @endif
                            @if ($dat[2]==1)
                            <tr>
                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <p>3.</p>
                                </x-table.table-body>

                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">

                                    <div x-data="{Open : false}">
                                        <a href="#" class="flex items-center space-x-1" x-on:click="Open = true">
                                            <x-heroicon-s-information-circle
                                                class="h-5 w-5 text-indigo-700 tooltipbtn focus:outline-none"
                                                data-title="Maklumat Permohonan" data-placement="top" />
                                            <p>002202310252</p>
                                        </a>
                                    </div>

                                </x-table.table-body>

                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <p>13,000.00</p>
                                </x-table.table-body>

                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <p>AMIRUL FIKRI BIN HERMAN</p>
                                </x-table.table-body>

                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <p>961203106711</p>
                                </x-table.table-body>

                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <p>MENUNGGU KELULUSAN ALK</p>
                                </x-table.table-body>

                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <div class="flex space-x-2"  x-data="{Open : false, Open2 : false, Open3 : false }">

                                        
                                        <a href="#" x-on:click="Open = true"
                                        class="rounded-full px-1 py-1 bg-green-500 hover:bg-green-600 shadow-lg tooltipbtn"
                                        data-title="Lulus Permohonan" data-placement="top">
                                        <x-heroicon-o-check class="h-4 w-4 text-white" />
                                        </a>

                                        <x-general.modal-button 
                                            modalActive="Open" 
                                            title="Terima Permohonan" 
                                            description="Adakah anda pasti untuk menerima permohonan pinjaman ini?" 
                                            iconColour="blue" 
                                            draw="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                                            colour="green"
                                            lButton="Batal" 
                                            rButton="Terima"
                                            alkCheck="false"
                                            itemid="2">
                                    
                                        </x-general.modal-button>
                                        
                                        <a href="#" x-on:click="Open2 = true"
                                            class="rounded-full px-1 py-1 bg-red-500 hover:bg-red-600 shadow-lg tooltipbtn"
                                            data-title="Tolak Permohonan" data-placement="top">
                                            <x-heroicon-o-x class="h-4 w-4 text-white" />
                                        </a>

                                        <x-general.modal-button 
                                            modalActive="Open2" 
                                            title="Tolak Permohonan" 
                                            description="Adakah anda pasti untuk menolak permohonan pinjaman ini?" 
                                            iconColour="red" 
                                            draw="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                                            colour="red"
                                            lButton="Batal" 
                                            rButton="Tolak"
                                            alkCheck="false"
                                            itemid="2">
                                    
                                        </x-general.modal-button>

                                        <a href="#" x-on:click="Open3 = true"
                                            class="rounded-full px-1 py-1 bg-orange-500 hover:bg-orange-600 shadow-lg tooltipbtn"
                                            data-title="Pindah Eksekutif" data-placement="top">
                                            <x-heroicon-s-users class="h-4 w-4 text-white" />
                                        </a>

                                        <x-general.modal-button 
                                            modalActive="Open3" 
                                            title="Pindah Eksekutif" 
                                            description="Hantar permohonan kepada Ahli Lembaga Koperasi Lain?" 
                                            iconColour="blue" 
                                            draw="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                                            colour="green"
                                            lButton="Batal" 
                                            rButton="Ya"
                                            alkCheck="true"
                                            itemid="2">
                                            
                                        </x-general.modal-button>
                                    </div>
                                </x-table.table-body>

                            </tr>
                            @endif
                            @if ($dat[3]==1)
                            <tr>
                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <p>4.</p>
                                </x-table.table-body>

                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">

                                    <div x-data="{Open : false}">
                                        <a href="#" class="flex items-center space-x-1" x-on:click="Open = true">
                                            <x-heroicon-s-information-circle
                                                class="h-5 w-5 text-indigo-700 tooltipbtn focus:outline-none"
                                                data-title="Maklumat Permohonan" data-placement="top" />
                                            <p>002203432567</p>
                                        </a>
                                    </div>

                                </x-table.table-body>

                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <p>23,000.00</p>
                                </x-table.table-body>

                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <p>NUR HANI BALQIS BINTI AZMI</p>
                                </x-table.table-body>

                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <p>000603036446</p>
                                </x-table.table-body>

                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <p>MENUNGGU KELULUSAN ALK</p>
                                </x-table.table-body>

                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <div class="flex space-x-2"  x-data="{Open : false, Open2 : false, Open3 : false }">

                                        
                                        <a href="#" x-on:click="Open = true"
                                        class="rounded-full px-1 py-1 bg-green-500 hover:bg-green-600 shadow-lg tooltipbtn"
                                        data-title="Lulus Permohonan" data-placement="top">
                                        <x-heroicon-o-check class="h-4 w-4 text-white" />
                                        </a>

                                        <x-general.modal-button 
                                            modalActive="Open" 
                                            title="Terima Permohonan" 
                                            description="Adakah anda pasti untuk menerima permohonan pinjaman ini?" 
                                            iconColour="blue" 
                                            draw="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                                            colour="green"
                                            lButton="Batal" 
                                            rButton="Terima"
                                            alkCheck="false"
                                            itemid="3">
                                    
                                        </x-general.modal-button>
                                        
                                        <a href="#" x-on:click="Open2 = true"
                                            class="rounded-full px-1 py-1 bg-red-500 hover:bg-red-600 shadow-lg tooltipbtn"
                                            data-title="Tolak Permohonan" data-placement="top">
                                            <x-heroicon-o-x class="h-4 w-4 text-white" />
                                        </a>

                                        <x-general.modal-button 
                                            modalActive="Open2" 
                                            title="Tolak Permohonan" 
                                            description="Adakah anda pasti untuk menolak permohonan pinjaman ini?" 
                                            iconColour="red" 
                                            draw="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                                            colour="red"
                                            lButton="Batal" 
                                            rButton="Tolak"
                                            alkCheck="false"
                                            itemid="3">
                                    
                                        </x-general.modal-button>

                                        <a href="#" x-on:click="Open3 = true"
                                            class="rounded-full px-1 py-1 bg-orange-500 hover:bg-orange-600 shadow-lg tooltipbtn"
                                            data-title="Pindah Eksekutif" data-placement="top">
                                            <x-heroicon-s-users class="h-4 w-4 text-white" />
                                        </a>

                                        <x-general.modal-button 
                                            modalActive="Open3" 
                                            title="Pindah Eksekutif" 
                                            description="Hantar permohonan kepada Ahli Lembaga Koperasi Lain?" 
                                            iconColour="blue" 
                                            draw="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                                            colour="green"
                                            lButton="Batal" 
                                            rButton="Ya"
                                            alkCheck="true"
                                            itemid="3">
                                            
                                        </x-general.modal-button>
                                    </div>
                                </x-table.table-body>

                            </tr>
                            @endif
                            @if ($dat[4]==1)
                            <tr>
                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <p>5.</p>
                                </x-table.table-body>

                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">

                                    <div x-data="{Open : false}">
                                        <a href="#" class="flex items-center space-x-1" x-on:click="Open = true">
                                            <x-heroicon-s-information-circle
                                                class="h-5 w-5 text-indigo-700 tooltipbtn focus:outline-none"
                                                data-title="Maklumat Permohonan" data-placement="top" />
                                            <p>02202323451</p>
                                        </a>
                                    </div>

                                </x-table.table-body>

                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <p>12,000.00</p>
                                </x-table.table-body>

                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <p>RASMIZAM BIN MOHAMAD</p>
                                </x-table.table-body>

                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <p>960211103167</p>
                                </x-table.table-body>

                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <p>MENUNGGU KELULUSAN ALK</p>
                                </x-table.table-body>

                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <div class="flex space-x-2"  x-data="{Open : false, Open2 : false, Open3 : false }">

                                        
                                        <a href="#" x-on:click="Open = true"
                                        class="rounded-full px-1 py-1 bg-green-500 hover:bg-green-600 shadow-lg tooltipbtn"
                                        data-title="Lulus Permohonan" data-placement="top">
                                        <x-heroicon-o-check class="h-4 w-4 text-white" />
                                        </a>

                                        <x-general.modal-button 
                                            modalActive="Open" 
                                            title="Terima Permohonan" 
                                            description="Adakah anda pasti untuk menerima permohonan pinjaman ini?" 
                                            iconColour="blue" 
                                            draw="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                                            colour="green"
                                            lButton="Batal" 
                                            rButton="Terima"
                                            alkCheck="false"
                                            itemid="4">
                                    
                                        </x-general.modal-button>
                                        
                                        <a href="#" x-on:click="Open2 = true"
                                            class="rounded-full px-1 py-1 bg-red-500 hover:bg-red-600 shadow-lg tooltipbtn"
                                            data-title="Tolak Permohonan" data-placement="top">
                                            <x-heroicon-o-x class="h-4 w-4 text-white" />
                                        </a>

                                        <x-general.modal-button 
                                            modalActive="Open2" 
                                            title="Tolak Permohonan" 
                                            description="Adakah anda pasti untuk menolak permohonan pinjaman ini?" 
                                            iconColour="red" 
                                            draw="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                                            colour="red"
                                            lButton="Batal" 
                                            rButton="Tolak"
                                            alkCheck="false"
                                            itemid="4">
                                    
                                        </x-general.modal-button>

                                        <a href="#" x-on:click="Open3 = true"
                                            class="rounded-full px-1 py-1 bg-orange-500 hover:bg-orange-600 shadow-lg tooltipbtn"
                                            data-title="Pindah Eksekutif" data-placement="top">
                                            <x-heroicon-s-users class="h-4 w-4 text-white" />
                                        </a>

                                        <x-general.modal-button 
                                            modalActive="Open3" 
                                            title="Pindah Eksekutif" 
                                            description="Hantar permohonan kepada Ahli Lembaga Koperasi Lain?" 
                                            iconColour="blue" 
                                            draw="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                                            colour="green"
                                            lButton="Batal" 
                                            rButton="Ya"
                                            alkCheck="true"
                                            itemid="4">
                                            
                                        </x-general.modal-button>
                                    </div>
                                </x-table.table-body>

                            </tr>
                            @endif
                        </x-slot>
                    </x-table.table>
                </div>
            </div>
        </x-general.grid>
    </div>
    <div class="absolute top-0 left-0 right-0 z-0">
        <x-general.header bgimg="" title="Dashboard"/>
    </div>
    
</div>
