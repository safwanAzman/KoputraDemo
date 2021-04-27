<div>
    <div class="z-20 relative mx-auto px-0 my-3 text-lg leading-6 font-medium text-cool-gray-900">
        <x-general.grid mobile="1" gap="5" sm="1" md="2" lg="1" xl="1" class="col-span-6 items-center mt-8">
            <x-form.basic-form>
                <x-slot name="content">
                    <div class="bg-white py-4 px-10 rounded-lg shadow-lg">

                        <div class="font-semibold text-lg text-white bg-indigo-600 py-2 px-4 rounded-md">
                            <p>Maklumat Produk</p>
                        </div>
                        <x-general.grid mobile="1" gap="5" sm="1" md="1" lg="2" xl="2" class="col-span-6 mt-6">
                            <x-form.input label="Nama Produk"  value="PEMBIAYAAN CASH-i PLUS" />
                            <x-form.input label="Kadar Keuntungan (%p.a)"  value="5.00" />
                            <x-form.input label="Tempoh Kelulusan (Hari)"  value="3" />
                            <x-form.input label="Payout Tertinggi (%)"  value="0.00" />
                            <x-form.input label="Caj Pemprosesan (RM)"  value="0.00" />
                            <x-form.input label="Peratus KWPPA (%)"  value="0.00" />
                            <x-form.input label="Peratus Takaful (%)"  value="0.00" />
                            <x-form.input label="Cagaran Pembiayaan (RM)"  value="0.00" />
                            <x-form.input label="Saham Penjamin (RM)"  value="0.00" />
                        </x-general.grid>

                        <div class="font-semibold text-lg text-white bg-indigo-600 py-2 px-4 rounded-md mt-8">
                            <p>Jumlah Pembiayaan</p>
                        </div>

                        <x-general.grid mobile="1" gap="5" sm="1" md="1" lg="2" xl="2" class="col-span-6 mt-6">
                            <x-form.input label="Pembiayaan Maksimum (RM)"  value="100000.00" />
                            <x-form.input label="Pembiayaan Minimum (RM)"  value="1000.00" />
                            <x-form.input label="Default Pembiayaan Maksimum (RM)"  value="1000.00" />
                        </x-general.grid>

                        <div class="font-semibold text-lg text-white bg-indigo-600 py-2 px-4 rounded-md mt-8">
                            <p>Tempoh Pembiayaan</p>
                        </div>

                        <x-general.grid mobile="1" gap="5" sm="1" md="1" lg="2" xl="2" class="col-span-6 mt-6">
                            <x-form.input label="Tempoh Maksimum Pembiayaan (Tahun)"  value="5" />
                            <x-form.input label="Tempoh Minimum Pembiayaan (Tahun)"  value="1" />
                            <x-form.input label="Default Tempoh Pembiayaan Maksimum (Tahun)"  value="1" />
                        </x-general.grid>

                        <div class="font-semibold text-lg text-white bg-indigo-600 py-2 px-4 rounded-md mt-8">
                            <p>Maklumat Tambahan</p>
                        </div>

                        <x-general.grid mobile="1" gap="5" sm="1" md="1" lg="2" xl="2" class="col-span-6 mt-6">
                            <x-form.input label="Tangga Gaji Minimum (RM)"  value="0.00" />
                            <x-form.input label="Kelayakan Pekerjaan"  value="" />
                        </x-general.grid>
                        <x-general.grid mobile="1" gap="5" sm="1" md="1" lg="1" xl="1" class="col-span-6">
                            <x-form.text-area value="" label="Lain-lain Informasi" title=""></x-form.text-area>
                        </x-general.grid>

                        <div class="font-semibold text-lg text-white bg-indigo-600 py-2 px-4 rounded-md mt-8">
                            <p>Maklumat Caj</p>
                        </div>

                        <x-general.grid mobile="1" gap="5" sm="1" md="1" lg="2" xl="2" class="col-span-6 mt-6">
                            <x-form.input label="Yuran Bulanan Koperasi (RM)"  value="30.00" />
                            <x-form.input label="Minimum Saham Peminjam (RM)"  value="600.00" />
                            <x-form.input label="FI Masuk Peminjam (RM)"  value="20.00" />
                            <x-form.input label="FI Masuk Penjamin (RM)"  value="20.00" />
                            <div class="flex space-x-2 w-full">
                                <x-form.dropdown label="Caj Bank" default="no" value="" >
                                    <option value="">Tiada</option>
                                    <option value="" selected>Kadar Tetap</option>
                                    <option value="">Peratus</option>
                                </x-form.dropdown>
                                <x-form.input label="(RM)"  value="50.00" />
                            </div>
                            <div class="flex space-x-2 w-full">
                                <x-form.dropdown label="Duti Setem" default="no" value="" >
                                    <option value="">Tiada</option>
                                    <option value="">Kadar Tetap</option>
                                    <option value="" selected>Peratus</option>
                                </x-form.dropdown>
                                <x-form.input label="%"  value="0.50" />
                            </div>

                            <x-form.dropdown label="Kadar Had Potongan Gaji Dibenarkan" default="no" value="" >
                                    <option value="" selected>50%</option>
                                    <option value="">60%</option>
                                    <option value="">75%</option>
                                    <option value="">85%</option>
                            </x-form.dropdown>
                        </x-general.grid>

                        <div class="font-semibold text-lg text-white bg-indigo-600 py-2 px-4 rounded-md mt-8">
                            <p>Maklumat Caj Tambahan</p>
                        </div>

                        <table width="100%" class="mt-4">
                            <tbody>
                                <tr>
                                    <td width="30%">
                                        <x-general.grid mobile="1" gap="2" sm="1" md="1" lg="2" xl="2" class="col-span-6">
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" class="form-radio" checked>
                                                <span class="ml-2 text-sm text-gray-700">Khariat Kematian</span>
                                            </label>
                                            <x-form.input label=""  value="RM 200.00" />
                                        </x-general.grid>
                                        </div>
                                    </td>
                                    <td width="40%" class="pl-4">
                                        <div class="flex space-x-4 w-full">
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" class="form-radio" checked>
                                                <span class="ml-2 text-sm text-gray-700"></span>
                                            </label>
                                            <div class="flex mt-1 mb-2 rounded-md shadow-sm">
                                                <input type="text"  value="Caj Insolvensi" readonly
                                                    class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 "
                                                >
                                                <span class="ml-2 mt-2">=</span>
                                            </div>
                                            <x-form.input label=""  value="RM 200.00" />
                                    </td>
                                </tr>

                                <tr>
                                    <td width="30%">
                                        <x-general.grid mobile="1" gap="2" sm="1" md="1" lg="2" xl="2" class="col-span-6">
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" class="form-radio" checked>
                                                <span class="ml-2 text-sm text-gray-700">Bayaran Pendahuluan</span>
                                            </label>
                                            <x-form.dropdown label="" default="no" value="" >
                                                <option value="">1 Bulan</option>
                                                <option value="" selected>2 Bulan</option>
                                                <option value="">3 Bulan</option>
                                                <option value="">4 Bulan</option>
                                                <option value="">5 Bulan</option>
                                                <option value="">6 Bulan</option>
                                                <option value="">7 Bulan</option>
                                                <option value="">8 Bulan</option>
                                                <option value="">9 Bulan</option>
                                                <option value="">10 Bulan</option>
                                                <option value="">11 Bulan</option>
                                                <option value="">12 Bulan</option>
                                        </x-form.dropdown>
                                        </x-general.grid>
                                        </div>
                                    </td>
                                    <td width="40%" class="pl-4">
                                        <div class="flex space-x-4 w-full">
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" class="form-radio" checked>
                                                <span class="ml-2 text-sm text-gray-700"></span>
                                            </label>
                                            <div class="flex mt-1 mb-2 rounded-md shadow-sm">
                                                <input type="text"  value="Test Open Field 1"
                                                    class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 "
                                                >
                                                <span class="ml-2 mt-2">=</span>
                                            </div>
                                            <x-form.input label=""  value="RM 150.00" />
                                        </div>

                                    </td>
                                </tr>

                                <tr>
                                    <td width="30%">
                                        <x-general.grid mobile="1" gap="2" sm="1" md="1" lg="2" xl="2" class="col-span-6">
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" class="form-radio" checked>
                                                <span class="ml-2 text-sm text-gray-700">Dalal</span>
                                            </label>
                                            <x-form.input label=""  value="% 1.00" />
                                        </x-general.grid>
                                        </div>
                                    </td>
                                    <td width="40%" class="pl-4">
                                        <div class="flex space-x-4 w-full">
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" class="form-radio" checked>
                                                <span class="ml-2 text-sm text-gray-700"></span>
                                            </label>
                                            <div class="flex mt-1 mb-2 rounded-md shadow-sm">
                                                <input type="text"  value="Test Open Field 2"
                                                    class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 "
                                                >
                                                <span class="ml-2 mt-2">=</span>
                                            </div>
                                            <x-form.input label=""  value="RM 150.00" />
                                        </div>

                                    </td>
                                </tr>

                                <tr>
                                    <td width="30%">
                                        <x-general.grid mobile="1" gap="2" sm="1" md="1" lg="2" xl="2" class="col-span-6">
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" class="form-radio" checked>
                                                <span class="ml-2 text-sm text-gray-700">Levi Pembiayaan</span>
                                            </label>
                                            <x-form.input label=""  value="RM 200.00" />
                                        </x-general.grid>
                                        </div>
                                    </td>
                                    <td width="40%" class="pl-4">
                                        <div class="flex space-x-4 w-full">
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" class="form-radio" checked>
                                                <span class="ml-2 text-sm text-gray-700"></span>
                                            </label>
                                            <div class="flex mt-1 mb-2 rounded-md shadow-sm">
                                                <input type="text"  value="Test Open Field 3"
                                                    class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 "
                                                >
                                                <span class="ml-2 mt-2">=</span>
                                            </div>
                                            <x-form.input label=""  value="RM 150.00" />
                                        </div>

                                    </td>
                                </tr>

                                <tr>
                                    <td width="30%">
                                        <x-general.grid mobile="1" gap="2" sm="1" md="1" lg="2" xl="2" class="col-span-6">
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" class="form-radio" checked>
                                                <span class="ml-2 text-sm text-gray-700">Caj SPeKAR</span>
                                            </label>
                                            <x-form.input label=""  value="RM 200.00" />
                                        </x-general.grid>
                                        </div>
                                    </td>
                                    <td width="40%" class="pl-4">
                                        <div class="flex space-x-4 w-full">
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" class="form-radio" checked>
                                                <span class="ml-2 text-sm text-gray-700"></span>
                                            </label>
                                            <div class="flex mt-1 mb-2 rounded-md shadow-sm">
                                                <input type="text"  value="Test Open Field 4"
                                                    class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 "
                                                >
                                                <span class="ml-2 mt-2">=</span>
                                            </div>
                                            <x-form.input label=""  value="RM 150.00" />
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td width="30%">
                                        <x-general.grid mobile="1" gap="2" sm="1" md="1" lg="2" xl="2" class="col-span-6">
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" class="form-radio" checked>
                                                <span class="ml-2 text-sm text-gray-700">Caj CTOS</span>
                                            </label>
                                            <x-form.input label=""  value="RM 200.00" />
                                        </x-general.grid>
                                        </div>
                                    </td>
                                    <td width="40%" class="pl-4">
                                        <div class="flex space-x-4 w-full">
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" class="form-radio" checked>
                                                <span class="ml-2 text-sm text-gray-700"></span>
                                            </label>
                                            <div class="flex mt-1 mb-2 rounded-md shadow-sm">
                                                <input type="text"  value="Test Open Field 4"
                                                    class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 "
                                                >
                                                <span class="ml-2 mt-2">=</span>
                                            </div>
                                            <x-form.input label=""  value="RM 150.00" />
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td width="30%">
                                        <x-general.grid mobile="1" gap="2" sm="1" md="1" lg="2" xl="2" class="col-span-6">
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" class="form-radio" checked>
                                                <span class="ml-2 text-sm text-gray-700">Dalal BPA</span>
                                            </label>
                                            <x-form.input label=""  value="% 2.00" />
                                        </x-general.grid>
                                        </div>
                                    </td>
                                </tr>
                            
                            </tbody>
                        </table>

                        <div class="font-semibold text-lg text-white bg-indigo-600 py-2 px-4 rounded-md mt-8">
                            <p>Brosur</p>
                        </div>

                        <x-general.grid mobile="1" gap="5" sm="1" md="1" lg="2" xl="2" class="col-span-6 mt-6">

                            <x-form.input label="Fail Brosur (Risalah ini hendaklah dalam format berikut JPEG, JPG, PNG)"  value="" type="file"/>
                            
                            <div class="ml-20 -mt-4">
                                <label class="inline-flex items-center">
                                    <span class="ml-2 text-sm text-gray-700">Pratonton Brosur</span>
                                </label>
                                <img src="" alt="img" class="w-auto h-20 px-2 py-2 border-2  "/>
                            </div>
                        </x-general.grid>


                        <div class="font-semibold text-lg text-white bg-indigo-600 py-2 px-4 rounded-md mt-8">
                            <p>Jadual Pembayaran Balik Pembiayaan</p>
                        </div>

                        <x-general.grid mobile="1" gap="5" sm="1" md="1" lg="2" xl="2" class="col-span-6 mt-6">

                            <x-form.input label="Fail Jadual Pembayaran Balik Pembiayaan (Risalah ini hendaklah dalam format berikut JPEG, JPG, PNG)"  value="" type="file"/>
                            
                            <div class="ml-20 -mt-4">
                                <label class="inline-flex items-center">
                                    <span class="ml-2 text-sm text-gray-700">Pratonton Brosur</span>
                                </label>
                                <img src="" alt="img" class="w-auto h-20 px-2 py-2 border-2  "/>
                            </div>
                        </x-general.grid>

                        <div class="flex justify-center mt-8">
                            <a onclick="save()" href="#" class="flex px-4 py-1 text-sm font-bold text-white bg-green-600  hover:bg-green-700 rounded">
                                <div class="flex items-center space-x-2">
                                    <x-heroicon-o-save class="w-4 h-4" /> 
                                    <p>Simpan</p>
                                </div>
                            </a>
                        </div>
                        
                    </div>
                </x-slot>

            </x-form.basic-form>
        </x-general.grid>
    </div>

    <!-- header -->
    <div class="absolute top-0 left-0 right-0 z-0">
        <x-general.header bgimg=""  title="KEMAS KINI PRODUK"/>
    </div>

</div>
@push('js')
<script>
    function save() {
        Swal.fire({
            icon: 'success',
            title: 'Berjaya Simpan',
            showConfirmButton: false,
            timer: 1500
        })
    }
</script>  
@endpush