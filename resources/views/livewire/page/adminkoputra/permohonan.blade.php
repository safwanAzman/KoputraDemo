<div>
    <div class="z-20 relative mx-auto px-0 my-3 text-lg leading-6 font-medium text-cool-gray-900">
        <x-general.grid mobile="1" gap="5" sm="1" md="2" lg="1" xl="1" class="col-span-6 items-center mt-8">
            <div x-data="{Open : true}">
                <x-general.modal-permohonan modalActive="Open" title="Permohonan" modalSize="4xl" route="{{route('donepermohonan')}}">
                    <x-general.grid mobile="1" gap="5" sm="1" md="1" lg="1" xl="1" class="col-span-6 ">
                        <div class=" p-4" x-data="app()" x-cloak>

                            <div class="w-full">
                                <div x-show.transition="step != 'complete'">

                                    <!-- Start Top Navigation -->
                                    <div class="px-4 py-4 border-b-2">
                                        <div class="flex justify-between">
                                            <div class="mb-1 text-xs font-bold leading-tight tracking-wide text-gray-500 uppercase"
                                                x-text="`Step: ${step} of 2`"></div>
                                        </div>
                                    </div>
                                    <!-- End Top Navigation -->

                                    <!-- Start Step Content -->
                                    <div class="px-4 py-4  overflow-y-auto" style="height: 28rem;">
                                        <div x-show.transition.in="step === 1">
                                            <x-form.basic-form>
                                                <x-slot name="content">
                                                    <div
                                                        class="font-semibold text-lg text-indigo-600 border-b-4 border-indigo-600 py-2">
                                                        <p>PERMOHONAN PEMBIAYAAN</p>
                                                    </div>
                                                    <x-general.grid mobile="1" gap="5" sm="1" md="1" lg="2" xl="2" class="col-span-6 mt-6">
                                                        <x-form.input label="JUMLAH PEMBIAYAAN DIPOHON (RM)"  value="10,000.00" readonly/>
                                                        <x-form.input label="KADAR KEUNTUNGAN (%)"  value="3.9900" readonly/>
                                                        <x-form.input label="TEMPOH PEMBIAYAAN (tahun)"  value="5 tahun" readonly/>
                                                        <x-form.input label="JUMLAH KEUNTUNGAN (RM)"  value="1,995.00" readonly/>
                                                        <x-form.input label="JUMLAH JUALAN (RM)"  value="1,995.00" readonly/>
                                                        <x-form.input label="ANSURAN BULANAN (RM)"  value="199.92" readonly/>
                                                    </x-general.grid>

                                                    <div
                                                        class="font-semibold text-lg text-indigo-600 border-b-4 border-indigo-600 py-2 mt-6">
                                                        <p>PENYELESAIAN PEMBIAYAAN</p>
                                                    </div>
                                                    <x-general.grid mobile="1" gap="5" sm="1" md="1" lg="1" xl="1" class="col-span-6 mt-6">
                                                        <table>
                                                            <thead class="text-xs" >
                                                                <th style="width:5%;">Bil</th>
                                                                <th style="width:40%;">NAMA KOPERASI / BANK</th>
                                                                <th style="width:15%;">T.LUPUT</th>
                                                                <th style="width:15%;">BYR BLNAN</th>
                                                                <th style="width:20%;">AMAUN PENYELESAIAN</th>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td><x-form.input label=""  value="" /></td>
                                                                    <td><x-form.input type="date" label=""  value="" /></td>
                                                                    <td><x-form.input  label=""  value="RM 0.00" /></td>
                                                                    <td><x-form.input  label=""  value="RM 0.00" /></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2</td>
                                                                    <td><x-form.input label=""  value="" /></td>
                                                                    <td><x-form.input type="date" label=""  value="" /></td>
                                                                    <td><x-form.input  label=""  value="RM 0.00" /></td>
                                                                    <td><x-form.input  label=""  value="RM 0.00" /></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>3</td>
                                                                    <td><x-form.input label=""  value="" /></td>
                                                                    <td><x-form.input type="date" label=""  value="" /></td>
                                                                    <td><x-form.input  label=""  value="RM 0.00" /></td>
                                                                    <td><x-form.input  label=""  value="RM 0.00" /></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>4</td>
                                                                    <td><x-form.input label=""  value="" /></td>
                                                                    <td><x-form.input type="date" label=""  value="" /></td>
                                                                    <td><x-form.input  label=""  value="RM 0.00" /></td>
                                                                    <td><x-form.input  label=""  value="RM 0.00" /></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>5</td>
                                                                    <td><x-form.input label=""  value="" /></td>
                                                                    <td><x-form.input type="date" label=""  value="" /></td>
                                                                    <td><x-form.input  label=""  value="RM 0.00" /></td>
                                                                    <td><x-form.input  label=""  value="RM 0.00" /></td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td class="text-sm">JUMLAH KESELURUHAN PENYELESAIAN PEMBIAYAAN	</td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td><x-form.input  label=""  value="RM 0.00" readonly /></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </x-general.grid>

                                                    <div
                                                        class="font-semibold text-lg text-indigo-600 border-b-4 border-indigo-600 py-2 mt-6">
                                                        <p>BUTIRAN GAJI/HAD KELAYAKKAN PEMOHON</p>
                                                    </div>
                                                    <x-general.grid mobile="1" gap="5" sm="1" md="2" lg="2" xl="2" class="col-span-6 mt-6">
                                                        <x-form.input label="GAJI POKOK (RM)"  value="3,500.00"  readonly/>
                                                        <x-form.input label="ELAUN TETAP BULANAN (RM)"  value="200.00"  readonly/>
                                                        <x-form.input label="GAJI POKOK + ELAUN TETAP BULANAN (RM)"  value="3,700.00"  readonly/>
                                                        <x-form.input label="JUMLAH POTONGAN GAJI YANG DIBENARKAN 50% (RM)"  value="1,850.00"  readonly/>
                                                        <x-form.input label="JUMLAH POTONGAN SLIP GAJI YANG SEDIA ADA (RM)"  value="400.00"  readonly/>
                                                        <x-form.input label="JUMLAH BAYARAN BULANAN (BAGI PENYELESAIAN PEMBIAYAAN) (RM)"  value="00.00"  readonly/>
                                                        <x-form.input label="JUMLAH BERSIH POTONGAN SLIP GAJI (RM)"  value="400.00"  readonly/>
                                                        <x-form.input label="JUMLAH BARU POTONGAN GAJI YANG DIBENARKAN (RM)"  value="3300.00"  readonly/>
                                                        <x-form.input label="JUMLAH POTONGAN BARU SLIP GAJI (RM)"  value="634.51"  readonly/>
                                                        <x-form.input label="JUMLAH GAJI BERSIH (RM)"  value="3065.49"  readonly/>
                                                        <x-form.input label="DSR (%)"  value="3065.49"  readonly/>
                                                    </x-general.grid>

                                                    <div
                                                        class="font-semibold text-lg text-indigo-600 border-b-4 border-indigo-600 py-2 mt-6">
                                                        <p>JUMLAH PEMBIAYAAN YANG LAYAK DIPOHON MENGIKUT HAD KELAYAKAN</p>
                                                    </div>
                                                    <x-general.grid mobile="1" gap="5" sm="1" md="2" lg="2" xl="2" class="col-span-6 mt-6">
                                                        <x-form.input label="JUMLAH PEMBIAYAAN YANG LAYAK (RM)"  value="10000.00"  />
                                                        <x-form.input label="KADAR KEUNTUNGAN (%)"  value="3.9900"  readonly/>
                                                        <x-form.input label="TEMPOH PEMBIAYAAN (tahun)"  value="5"  />
                                                        <x-form.input label="JUMLAH KEUNTUNGAN (RM)"  value="1995.00"  />
                                                        <x-form.input label="JUMLAH JUALAN (RM)"  value="11995.00"  readonly/>
                                                        <x-form.input label="ANSURAN BULANAN (RM)"  value="199.92"  readonly/>
                                                        <x-form.input label="YURAN BULANAN (RM)"  value="30.00"  readonly/>
                                                        <x-form.input label="SAHAM BULANAN (RM)"  value="0.00"  />
                                                        <x-form.input label="CAJ SPGA (2%) (RM)"  value="4.60"  />
                                                        <x-form.input label="JUMLAH BAYARAN BULANAN (RM)"  value="234.51"  />
                                                    </x-general.grid>
                                                </x-slot>
                                            </x-form.basic-form>
                                        </div>
                                        <div x-show.transition.in="step === 2">
                                            <x-form.basic-form>
                                                <x-slot name="content">
                                                    <div
                                                        class="font-semibold text-lg text-indigo-600 border-b-4 border-indigo-600 py-2">
                                                        <p>CAJ KOPERASI</p>
                                                    </div>
                                                    <x-general.grid mobile="1" gap="5" sm="1" md="2" lg="2" xl="2" class="col-span-6 mt-6">
                                                        <div class="">
                                                            <x-form.input label="YURAN BULANAN KOPERASI (RM)"  value="180.00"  readonly/>
                                                            <label class="block text-sm font-semibold leading-5 text-gray-700">
                                                                
                                                                <div class="flex space-x-1">
                                                                <p>RM 30.00 (bulan)</p>
                                                                    <input type="number"  value="5" class=" w-12 transition duration-150 ease-in-out sm:text-xs border-2 p-1 rounded-lg h-6">
                                                                </div>
                                                            </label>
                                                        </div>
                                                        <x-form.input label="MINIMUM SAHAM PEMINJAM (RM)"  value="2000.00"  />
                                                        <x-form.input label="FI MASUK PEMINJAM (RM)"  value="20.00"  />
                                                        <x-form.input label="FI MASUK PENJAMIN (RM)"  value="20.00"  />
                                                        <x-form.input label="CAJ BANK (RM)"  value="50.00"  />
                                                        <x-form.input label="DUTI SETEM (RM)"  value="50.00"  />
                                                        <x-form.input label="CAJ PEMPROSESAN (RM)"  value="50.00"  />
                                                        <div class="">
                                                            <x-form.input label="INSURAN (RM)"  value="180.00"  readonly/>
                                                            <label class="block text-sm font-semibold leading-5 text-gray-700">
                                                                
                                                                <div class="flex space-x-1">
                                                                    <select name="" class=" w-20 transition duration-150 ease-in-out sm:text-xs border-2 p-1 rounded-lg h-6">
                                                                            <option value="" selected>KWPPA</option>
                                                                            <option value="" >TAKAFUL</option>
                                                                            <option value="" >LAIN-LAIN</option>
                                                                    </select>
                                                                    <input type="text"  value="13%" class=" w-12 transition duration-150 ease-in-out sm:text-xs border-2 p-1 rounded-lg h-6">
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </x-general.grid>
                                                    <div class="flex justify-end">
                                                        <div class="flex space-x-2 border-2 p-4 rounded-md">
                                                            <p class="text-lg font-semibold">Jumlah:</p>
                                                            <p class="text-indigo-600 text-lg font-semibold">RM 3340.00</p>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="font-semibold text-lg text-indigo-600 border-b-4 border-indigo-600 py-2 mt-6">
                                                        <p>CAJ TAMBAHAN</p>
                                                    </div>
                                                    <x-general.grid mobile="1" gap="5" sm="1" md="2" lg="2" xl="2" class="col-span-6 mt-6">
                                                        <x-form.input label="KHARIAT KEMATIAN (RM)"  value="100.00"  readonly/>
                                                        <x-form.input label="BAYARAN PENDAHULUAN (RM)"  value="399.84"  readonly/>
                                                        <x-form.input label="DALAL (RM)"  value="2.50"  readonly/>
                                                        <x-form.input label="LEVI PEMBIAYAAN (RM)"  value="100.00"  readonly/>
                                                        <x-form.input label="CAJ SPEKAR (RM)"  value="100.00"  readonly/>
                                                        <x-form.input label="CAJ CTOS (RM)"  value="100.00"  readonly/>
                                                        <x-form.input label="CAJ INSOLVENSI (RM)"  value="100.00"  readonly/>
                                                    </x-general.grid>
                                                    <div class="flex justify-end">
                                                        <div class="flex space-x-2 border-2 p-4 rounded-md">
                                                            <p class="text-lg font-semibold">Jumlah:</p>
                                                            <p class="text-indigo-600 text-lg font-semibold">RM 902.34</p>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="font-semibold text-lg text-indigo-600 border-b-4 border-indigo-600 py-2 mt-6">
                                                        <p>CAJ TAMBAHAN LAIN-LAIN</p>
                                                    </div>
                                                    <x-general.grid mobile="1" gap="5" sm="1" md="2" lg="2" xl="2" class="col-span-6 mt-6">
                                                        <x-form.input label="TEST OPEN FIELD 1 (RM)"  value="100.00"  readonly/>
                                                        <x-form.input label="TEST OPEN FIELD 2 (RM)"  value="100.00"  readonly/>
                                                        <x-form.input label="TEST OPEN FIELD 3 (RM)"  value="100.00"  readonly/>
                                                        <x-form.input label="TEST OPEN FIELD 4 (RM)"  value="100.00"  readonly/>
                                                        <x-form.input label="TEST OPEN FIELD 5 (RM)"  value="100.00"  readonly/>
                                                    </x-general.grid>
                                                    <div class="flex justify-end">
                                                        <div class="flex space-x-2 border-2 p-4 rounded-md">
                                                            <p class="text-lg font-semibold">Jumlah:</p>
                                                            <p class="text-indigo-600 text-lg font-semibold">RM 500</p>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="font-semibold text-lg text-indigo-600 border-b-4 border-indigo-600 py-2 mt-4">
                                                        <p></p>
                                                    </div>
                                                    <div class="flex mt-6">
                                                        <div class="flex justify-between border-2 p-4 rounded-t-md w-full">
                                                            <p class="text-lg font-semibold">JUMLAH KESELURUHAN POTONGAN:</p>
                                                            <p class="text-indigo-600 text-lg font-semibold">RM 4742.34</p>
                                                        </div>
                                                    </div>
                                                    <div class="flex">
                                                        <div class="flex justify-between  border-2 p-4 rounded-b-md w-full">
                                                            <p class="text-lg font-semibold">BAKI PEMBIAYAAN:</p>
                                                            <p class="text-indigo-600 text-lg font-semibold">RM 5257.66</p>
                                                        </div>
                                                    </div>
                                                </x-slot>
                                            </x-form.basic-form>
                                        </div>
                                    </div>
                                    <!-- Step Content -->
                                </div>

                                <!-- Start Button -->
                                <div class="flex justify-center mt-4 w-full">
                                    <div class="flex space-x-2">
                                        <button x-show="step > 1" @click="step--"
                                            class="px-4 py-4 text-center text-white bg-indigo-600 rounded-full shadow-sm focus:outline-none hover:bg-indigo-700">
                                            <x-heroicon-o-arrow-left class="w-5 h-5" />
                                        </button>
                        
                                        <button x-show="step < 2" @click="step++"
                                            class=" px-4 py-4 text-center text-white bg-indigo-600 rounded-full shadow-sm focus:outline-none hover:bg-indigo-700">
                                            <x-heroicon-o-arrow-right class="w-5 h-5" />
                                        </button>

                                        <a href="#" x-show="step === 2" onclick="save()"
                                            class="flex items-center text-xs px-5 py-2 text-center text-white bg-indigo-600  rounded-lg shadow-sm focus:outline-none hover:bg-indigo-700">
                                            Email Tawaran
                                        </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Button -->
                            </div>
                        </div>

                    </x-general.grid>
                </x-general.modal-permohonan>
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
        Swal.fire(
            'Permohonan dikemukakan dengan jayanya',
            'sila periksa e-mel anda dari masa ke semasa.Segala maklumblasa dan keputusan permohonan akan dimaklumkan melalui e-mel anda',
            'success'
        )
    }
</script>
@endpush