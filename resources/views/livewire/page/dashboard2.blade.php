<div>
    <div class="z-20 relative mx-auto px-0 my-3 text-lg leading-6 font-medium text-cool-gray-900">
        <!-- Start Content -->
        <x-general.grid mobile="1" gap="5" sm="1" md="2" lg="4" xl="4" class="col-span-6 items-center mt-20">
            <x-dashboard.info-card bg="white" title="JUMLAH PERMOHONAN YANG DIPOHON" value="4" iconbg="red"
                percentage="33%" footerTitle="Daripada bulan lepas" cardRoute="#">
                <x-slot name="svg">
                    <x-heroicon-o-document-text class="h-7 w-7" />
                </x-slot>
            </x-dashboard.info-card>

            <x-dashboard.info-card bg="white" title="JUMLAH PERMOHONAN YANG LULUS" value="3" iconbg="green"
                percentage="50%" footerTitle="Daripada bulan lepas" cardRoute="#">
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
                                            <p>009011210039</p>
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
                                    <p>10,000.00</p>
                                </x-table.table-body>

                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <p>MOHINDER SURESH A/L CHANDRA SURESH</p>
                                </x-table.table-body>

                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <p>840203-14-5397</p>
                                </x-table.table-body>

                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <p>SEDANG DIPROSES</p>
                                </x-table.table-body>

                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <div class="flex space-x-2">
                                        <a href="#" onclick="lPermohonan()"
                                            class="rounded-full px-1 py-1 bg-green-500 hover:bg-green-600 shadow-lg tooltipbtn"
                                            data-title="Lulus Permohonan" data-placement="top">
                                            <x-heroicon-o-check class="h-4 w-4 text-white" />
                                        </a>

                                        <a href="#" onclick="tPermohonan()"
                                            class="rounded-full px-1 py-1 bg-red-500 hover:bg-red-600 shadow-lg tooltipbtn"
                                            data-title="Tolak Permohonan" data-placement="top">
                                            <x-heroicon-o-x class="h-4 w-4 text-white" />
                                        </a>

                                        <a href="#" onclick="eksekutifT()"
                                            class="rounded-full px-1 py-1 bg-orange-500 hover:bg-orange-600 shadow-lg tooltipbtn"
                                            data-title="Pindah Eksekutif" data-placement="top">
                                            <x-heroicon-o-users class="h-4 w-4 text-white" />
                                        </a>
                                    </div>
                                </x-table.table-body>

                            </tr>
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
                                            <p>009011210041</p>
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
                                    <p>30,000.00</p>
                                </x-table.table-body>

                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <p>HJH NURNAJIHA HAFIZ BINTI SYED HASZLAN</p>
                                </x-table.table-body>

                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <p>710208-13-9740</p>
                                </x-table.table-body>

                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <p>SEDANG DIPROSES</p>
                                </x-table.table-body>

                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <div class="flex space-x-2">
                                        <a href="#" onclick="lPermohonan()"
                                            class="rounded-full px-1 py-1 bg-green-500 hover:bg-green-600 shadow-lg tooltipbtn"
                                            data-title="Lulus Permohonan" data-placement="top">
                                            <x-heroicon-o-check class="h-4 w-4 text-white" />
                                        </a>

                                        <a href="#" onclick="tPermohonan()"
                                            class="rounded-full px-1 py-1 bg-red-500 hover:bg-red-600 shadow-lg tooltipbtn"
                                            data-title="Tolak Permohonan" data-placement="top">
                                            <x-heroicon-o-x class="h-4 w-4 text-white" />
                                        </a>

                                        <a href="#" onclick="eksekutifT()"
                                            class="rounded-full px-1 py-1 bg-orange-500 hover:bg-orange-600 shadow-lg tooltipbtn"
                                            data-title="Pindah Eksekutif" data-placement="top">
                                            <x-heroicon-o-users class="h-4 w-4 text-white" />
                                        </a>
                                    </div>
                                </x-table.table-body>

                            </tr>
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
                                            <p>009011210056</p>
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
                                    <p>15,500.00</p>
                                </x-table.table-body>

                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <p>INSYIRAH FAEZ BINTI MUAIN</p>
                                </x-table.table-body>

                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <p>830528-04-7920</p>
                                </x-table.table-body>

                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <p>SEDANG DIPROSES</p>
                                </x-table.table-body>

                                <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                    <div class="flex space-x-2">
                                        <a href="#" onclick="lPermohonan()"
                                            class="rounded-full px-1 py-1 bg-green-500 hover:bg-green-600 shadow-lg tooltipbtn"
                                            data-title="Lulus Permohonan" data-placement="top">
                                            <x-heroicon-o-check class="h-4 w-4 text-white" />
                                        </a>

                                        <a href="#" onclick="tPermohonan()"
                                            class="rounded-full px-1 py-1 bg-red-500 hover:bg-red-600 shadow-lg tooltipbtn"
                                            data-title="Tolak Permohonan" data-placement="top">
                                            <x-heroicon-o-x class="h-4 w-4 text-white" />
                                        </a>

                                        <a href="#" onclick="eksekutifT()"
                                            class="rounded-full px-1 py-1 bg-orange-500 hover:bg-orange-600 shadow-lg tooltipbtn"
                                            data-title="Pindah Eksekutif" data-placement="top">
                                            <x-heroicon-o-users class="h-4 w-4 text-white" />
                                        </a>
                                    </div>
                                </x-table.table-body>

                            </tr>
                            
                        </x-slot>
                    </x-table.table>
                </div>
            </div>
        </x-general.grid>
    </div>
    <div class="absolute top-0 left-0 right-0 z-0">
        <x-general.header bgimg="" title="Dashboard"/>
    </div>

    @push('js')
    <script>
        function tPermohonan() {
            Swal.fire({
                title: 'Tolak permohonan pembiayaan ini?',
                showCancelButton: true,
                confirmButtonColor: '#d14529',
                confirmButtonText: `Tolak`,
                cancelButtonText: 'Batal',
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    Swal.fire('Permohonan Ditolak!', '', 'error')
                    setTimeout("location.href = '{{route('alk2')}}';", 2500);
                }
            })
        }

        function lPermohonan() {
            Swal.fire({
                title: 'Luluskan permohonan pembiayaan ini?',
                showCancelButton: true,
                confirmButtonText: `Ya`,
                cancelButtonText: 'Batal',
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    Swal.fire('Permohonan Diluluskan!', '', 'success')
                    // window.location = "dashboard2.html";
                    setTimeout("location.href = '{{route('alk2')}}';", 2500);
                }
            })
        }

        function eksekutifT() {
            Swal.fire({
                title: 'Hantar Permohonan Kepada Ahli Lembaga Koperasi Lain?',
                input: 'select',
                inputOptions: {
                    '1': 'Ahli Lembaga Koperasi 1',
                    '2': 'Ahli Lembaga Koperasi 2',
                    '3': 'Ahli Lembaga Koperasi 3',
                },
                inputPlaceholder: 'Sila Pilih',
                showCancelButton: true,
                inputValidator: function(value) {
                    return new Promise(function(resolve, reject) {
                        if (value !== '') {
                            resolve();
                            setTimeout("location.href = '{{route('alk2')}}';", 2500);
                        } else {
                            resolve('You need to select a Tier');
                        }
                    });
                }
            }).then(function(result) {
                if (result.isConfirmed) {
                    Swal.fire({
                        icon: 'success',
                        html: 'Permohonan telah di hantar kepada Ahli Lembaga Koperasi ' + result.value
                    });
                }
            })
        }
    </script>
    @endpush
</div>