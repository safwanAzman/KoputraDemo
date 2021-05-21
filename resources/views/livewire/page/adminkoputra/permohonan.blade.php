<div>
    <div class="z-20 relative mx-auto px-0 my-3 text-lg leading-6 font-medium text-cool-gray-900">
        <x-general.grid mobile="1" gap="5" sm="1" md="2" lg="1" xl="1" class="col-span-6 items-center mt-8" >
            <div x-data="{ active: 0, Open5 :false}" >
                <div class="bg-white py-4 px-4 rounded-lg shadow-lg">
                    <div class="bg-white shadow-lg rounded-lg py-2 px-2">
                        <div class="flex space-x-2">
                            <x-tab.nav-tab name="0" livewire="">
                                <div class="flex font-medium text-sm">
                                    <x-heroicon-o-calculator class="w-6 h-6 mr-2" />Pembiayaan
                                </div>
                            </x-tab.nav-tab>
                            <x-tab.nav-tab name="1" livewire="">
                                <div class="flex font-medium text-sm">
                                    <x-heroicon-o-clipboard-list class="w-6 h-6 mr-2" />Keahlian
                                </div>
                            </x-tab.nav-tab>
                        </div>
                    </div>

                    <x-tab.nav-content name="0">
                        <div class="mt-4">
                            <x-table.table>
                                <x-slot name="thead">
                                    <x-table.table-header class="text-left" value="NO." sort="" />
                                    <x-table.table-header class="text-left" value="NO.PERMOHONAN" sort="" />
                                    <x-table.table-header class="text-left" value="JUMLAH DIPOHON" sort="" />
                                    <x-table.table-header class="text-left" value="NAMA PENUH" sort="" />
                                    <x-table.table-header class="text-left" value="NO. K/P BARU" sort="" />
                                    <x-table.table-header class="text-left" value="STATUS PERMOHONAN" sort="" />
                                    <x-table.table-header class="text-left" value="Tindakan" sort="" />
                                    <x-table.table-header class="text-left" value="PERJANJIAN" sort="" />
                                    <x-table.table-header class="text-left" value="TARIKH PERMOHONAN" sort="" />
                                </x-slot>
                                <x-slot name="tbody">
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
                                            <p>85409035147</p>
                                        </x-table.table-body>

                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                            <p>PERMOHONAN DITERIMA</p>
                                        </x-table.table-body>

                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                            <div>
                                                <x-heroicon-s-play class="w-8 h-8 text-indigo-600 hover:text-indigo-700" 
                                                @click="Open5 = true"/>
                                            </div>
                                        </x-table.table-body>
                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">

                                        </x-table.table-body>
                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                            <p>26-04-2021</p>
                                        </x-table.table-body>

                                    </tr>

                                    <tr>
                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                            <p>2.</p>
                                        </x-table.table-body>

                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">

                                            <div x-data="{Open : false}">
                                                <a href="#" class="flex items-center space-x-1">
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

                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                            <p>Menunggu Kelulusan ALK</p>
                                        </x-table.table-body>

                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                            <div>
                                                <x-heroicon-o-check-circle class="w-6 h-6 text-green-500" />
                                            </div>
                                        </x-table.table-body>
                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">

                                        </x-table.table-body>
                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                            <p>25-04-2021</p>
                                        </x-table.table-body>

                                    </tr>

                                    <tr>
                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                            <p>3.</p>
                                        </x-table.table-body>

                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">

                                            <div x-data="{Open : false}">
                                                <a href="#" class="flex items-center space-x-1">
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

                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                            <p>Permohonan Diluluskan</p>
                                        </x-table.table-body>

                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                            <div>
                                                <x-heroicon-o-clipboard-check class="w-6 h-6 text-green-500" />
                                            </div>
                                        </x-table.table-body>
                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">

                                        </x-table.table-body>
                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                            <p>12-04-2021</p>
                                        </x-table.table-body>

                                    </tr>

                                    <tr>
                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                            <p>4.</p>
                                        </x-table.table-body>

                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">

                                            <div x-data="{Open : false}">
                                                <a href="#" class="flex items-center space-x-1">
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

                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                            <p>Sedang di Prosess</p>
                                        </x-table.table-body>

                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                            <div>
                                                <x-heroicon-o-clock class="w-6 h-6 text-yellow-500" />
                                            </div>
                                        </x-table.table-body>
                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">

                                        </x-table.table-body>
                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                            <p>14-04-2021</p>
                                        </x-table.table-body>

                                    </tr>

                                </x-slot>
                            </x-table.table>
                            
                        </div>
                    </x-tab.nav-content>

                    <x-tab.nav-content name="1">
                        <div class="mt-4" x-cloak>
                            <x-table.table>
                                <x-slot name="thead">
                                    <x-table.table-header class="text-left" value="NO." sort="" />
                                    <x-table.table-header class="text-left" value="NO.PERMOHONAN" sort="" />
                                    <x-table.table-header class="text-left" value="Nama" sort="" />
                                    <x-table.table-header class="text-left" value="No. Kad Pengenalan" sort="" />
                                    <x-table.table-header class="text-left" value="STATUS PERMOHONAN" sort="" />
                                    <x-table.table-header class="text-left" value="Tindakan" sort="" />
                                </x-slot>
                                <x-slot name="tbody">
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
                                                    <p>02202323451</p>
                                                </a>
                                            </div>
                                        </x-table.table-body>

                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                            <p>RASMIZAM BIN MOHAMAD</p>
                                        </x-table.table-body>

                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                            <p>960211103167</p>
                                        </x-table.table-body>

                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                            <p>PERMOHONAN DITERIMA</p>
                                        </x-table.table-body>

                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                            <div x-data="{Open : false}">
                                                <div class="flex space-x-2">
                                                    <x-heroicon-s-play class="w-8 h-8 text-indigo-600 hover:text-indigo-700 tooltipbtn focus:outline-none" 
                                                    x-on:click="Open = true"  data-title="Maklumat Permohonan" data-placement="top"/>
                                                </div>
                                                <x-general.modal modalActive="Open" title="Information" modalSize="2xl">
                                                    <div class="px-4 py-4  overflow-y-auto">
                                                        <x-general.grid mobile="1" gap="1" sm="3" md="3" lg="3" xl="3" class="col-span-6 leading-8">
                                                            <div>
                                                                <p class="text-sm">Name</p>
                                                                <p class="text-sm font-semibold text-gray-400 uppercase">RASMIZAM BIN MOHAMAD</p>
                                                            </div>
                                                            <div>
                                                                <p class="text-sm">New IC No.</p>
                                                                <p class="text-sm font-semibold text-gray-400 uppercase">960211103167</p>
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
                                                                <p class="text-sm font-semibold text-gray-400 uppercase">01794468546</p>
                                                            </div>
                                                            <div>
                                                                <p class="ttext-sm">Phone No. (Home)</p>
                                                                <p class="text-sm font-semibold text-gray-400 uppercase">097476355</p>
                                                            </div>
                                                            <div>
                                                                <p class="text-sm">Account Bank No.</p>
                                                                <p class="text-sm font-semibold text-gray-400 uppercase">1399892126</p>
                                                            </div>
                                                            <div>
                                                                <p class="text-sm">Personal Email</p>
                                                                <p class="text-sm font-semibold text-gray-400 uppercase">rasmizammohamad@gmail.com</p>
                                                            </div>
                                                            <div>
                                                                <p class="text-sm">Office/Work Email</p>
                                                                <p class="text-sm font-semibold text-gray-400 uppercase">Tiada</p>
                                                            </div>
                                                        </x-general.grid>
                                                        <div>
                                                            <p class="text-sm">Address</p>
                                                            <p class="text-sm font-semibold text-gray-400 uppercase">Lot 72, Kg. Puteh, 28100 Temerloh, Pahang</p>
                                                        </div>
                                                        <div class="flex justify-center mt-4 ">
                                                            <a href="#" onclick="save2()"
                                                                class="flex items-center text-xs px-5 py-2 text-center text-white bg-indigo-600  rounded-lg shadow-sm focus:outline-none hover:bg-indigo-700">
                                                                KELULUSAN ALK
                                                            </a>
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

                                            <div x-data="{Open : false}">
                                                <a href="#" class="flex items-center space-x-1">
                                                    <x-heroicon-s-information-circle
                                                        class="h-5 w-5 text-indigo-700 tooltipbtn focus:outline-none"
                                                        data-title="Maklumat Permohonan" data-placement="top" />
                                                    <p>002203432567</p>
                                                </a>
                                            </div>

                                        </x-table.table-body>

                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                            <p>NUR HANI BALQIS BINTI AZMI</p>
                                        </x-table.table-body>

                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                            <p>000603036446</p>
                                        </x-table.table-body>

                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                            <p>Sedang di Prosess</p>
                                        </x-table.table-body>

                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                            <div>
                                                <x-heroicon-o-clock class="w-6 h-6 text-yellow-500" />
                                            </div>
                                        </x-table.table-body>
                                    </tr>

                                </x-slot>
                            </x-table.table>
                        </div>
                    </x-tab.nav-content>
                    

                    @include('pages.adminkoputra.modal-permohonan')
                </div>
            </div>
        </x-general.grid>
    </div>

    <!-- header -->
    <div class="absolute top-0 left-0 right-0 z-0">
        <x-general.header bgimg="" title="Permohonan" height="8rem" />
    </div>

</div>

@push('js')
<script>
    function app() {
        return {
            step: 1,
            togglePassword: false,
        }
    }

    function save() {
        Swal.fire({
            icon: 'success',
            title: 'Permohonan Dihantar Kepada ALK Dengan Jayanya!',
            showConfirmButton: false,
        })
        setTimeout("location.href = '{{route('donepermohonan')}}';", 2500);
    }

    function save2() {
        Swal.fire({
            icon: 'success',
            title: 'Permohonan Dihantar Kepada ALK Dengan Jayanya!',
            showConfirmButton: false,
        })
        setTimeout("location.href = '{{route('donepermohonan2')}}';", 2500);
    }
</script>
@endpush