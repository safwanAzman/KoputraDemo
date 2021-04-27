<div>
    <div class="z-20 relative mx-auto px-0 my-3 text-lg leading-6 font-medium text-cool-gray-900" x-data="{Open : false}">
        <x-general.grid mobile="1" gap="5" sm="1" md="2" lg="1" xl="1" class="col-span-6 items-center mt-8">
            <div class="bg-white py-4 px-4 rounded-lg shadow-lg">

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
                                        <x-heroicon-s-play class="w-8 h-8 text-indigo-600 hover:text-indigo-700"  x-on:click="Open = true" />
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

                            <tr>
                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <p>5.</p>
                                </x-table.table-body>

                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">

                                    <div x-data="{Open : false}">
                                        <a href="#" class="flex items-center space-x-1">
                                            <x-heroicon-s-information-circle
                                                class="h-5 w-5 text-indigo-700 tooltipbtn focus:outline-none"
                                                data-title="Maklumat Permohonan" data-placement="top" />
                                            <p>002202323451</p>
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
                                    <p>19-04-2021</p>
                                </x-table.table-body>

                            </tr>
                        
                        </x-slot>
                    </x-table.table>
                    @include('pages.adminkoputra.modal-permohonan')
                </div>
                
            </div>
        </x-general.grid>
    </div>

    <!-- header -->
    <div class="absolute top-0 left-0 right-0 z-0">
        <x-general.header bgimg="" title="Permohonan" />
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
                title: 'Luluskan permohonan pembiayaan ini?',
                showCancelButton: true,
                confirmButtonText: `Ya`,
                cancelButtonText: 'Batal',
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    Swal.fire('Permohonan Dihantar Kepada ALK Dengan Jayanya!', '', 'success')
                    // window.location = "dashboard2.html";
                    setTimeout("location.href = '{{route('donepermohonan')}}';", 2500);
                }
            })
        }
</script>
@endpush