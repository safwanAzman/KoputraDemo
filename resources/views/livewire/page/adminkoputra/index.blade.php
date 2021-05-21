<div>
    <div class="z-20 relative mx-auto px-0 my-3 text-lg leading-6 font-medium text-cool-gray-900">
        <x-general.grid mobile="1" gap="5" sm="1" md="2" lg="1" xl="1" class="bg-white py-4 px-4 rounded-lg col-span-6 items-center mt-8" x-data="{ active: 0}">

            <div class="bg-white shadow-lg rounded-lg py-2 px-2">
                <div class="flex space-x-2">
                    <x-tab.nav-tab name="0" livewire="">
                        <div class="flex font-medium text-sm">
                            <x-heroicon-o-currency-dollar class="w-6 h-6 mr-2" />Financing
                        </div>
                    </x-tab.nav-tab>
                    <x-tab.nav-tab name="1" livewire="">
                        <div class="flex font-medium text-sm">
                            <x-heroicon-o-chart-square-bar class="w-6 h-6 mr-2" />Trading
                        </div>
                    </x-tab.nav-tab>
                    <x-tab.nav-tab name="2" livewire="">
                        <div class="flex font-medium text-sm">
                            <x-heroicon-o-home class="w-6 h-6 mr-2" />Homestay
                        </div>
                    </x-tab.nav-tab>
                    <x-tab.nav-tab name="3" livewire="">
                        <div class="flex font-medium text-sm">
                            <x-heroicon-o-truck class="w-6 h-6 mr-2" />Services
                        </div>
                    </x-tab.nav-tab>
                    <x-tab.nav-tab name="4" livewire="">
                        <div class="flex font-medium text-sm">
                            <x-heroicon-o-calculator class="w-6 h-6 mr-2"/>Tetapan Kalkulator
                        </div>
                    </x-tab.nav-tab>
                    <x-tab.nav-tab name="5" livewire="">
                        <div class="flex font-medium text-sm">
                            <x-heroicon-o-clipboard-list class="w-6 h-6 mr-2"/>Dokumen Sokongan
                        </div>
                    </x-tab.nav-tab>
                </div>
            </div>
            <x-tab.nav-content name="0">
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
            </x-tab.nav-content>

            <x-tab.nav-content name="1">
                <x-form.basic-form>
                    <x-slot name="content">
                        <div class="bg-white py-4 px-10 rounded-lg shadow-lg">
                            <div class="font-semibold text-lg text-white bg-indigo-600 py-2 px-4 rounded-md">
                                <p>Maklumat Trading</p>
                            </div>
                            <x-general.grid mobile="1" gap="5" sm="1" md="1" lg="2" xl="2" class="col-span-6 mt-6">
                                <x-form.dropdown label="Jenis Produk" default="yes" value="" >
                                    <option value="1" >Daily Necessities</option>
                                    <option value="2">Lifestyle</option>
                                    <option value="3">Fashion</option>
                                    <option value="4">Electronic</option>
                                </x-form.dropdown>
                                <x-form.input label="Nama Produk"  value="" type=""/>
                                <x-form.input label="Fail Brosur (Risalah ini hendaklah dalam format berikut JPEG, JPG, PNG)"  value="" type="file"/>
                                <x-form.input label="Harga Awam"  value="" type=""/>
                                <x-form.input label="Harga Ahli"  value="" type=""/>
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
            </x-tab.nav-content>

            <x-tab.nav-content name="2">
                <x-form.basic-form>
                    <x-slot name="content">
                        <div class="bg-white py-4 px-10 rounded-lg shadow-lg">
                            <div class="font-semibold text-lg text-white bg-indigo-600 py-2 px-4 rounded-md">
                                <p>Maklumat Homestay</p>
                            </div>
                            <x-general.grid mobile="1" gap="5" sm="1" md="1" lg="2" xl="2" class="col-span-6 mt-6">
                                <x-form.dropdown label="Jenis Homestay" default="yes" value="" >
                                    <option value="1" >Apartment</option>
                                    <option value="2">Banglo</option>
                                    <option value="3">Teres</option>
                                </x-form.dropdown>
                                <x-form.input label="Nama Produk"  value="" type=""/>
                                <x-form.input label="Fail Brosur (Risalah ini hendaklah dalam format berikut JPEG, JPG, PNG)"  value="" type="file"/>
                                <x-form.input label="Harga Awam"  value="" type=""/>
                                <x-form.input label="Harga Ahli"  value="" type=""/>
                            </x-general.grid>

                            <x-form.address class="" label="Alamat" value1="" value2="" value3="" value4="" value5=""
                            value6="" condition="state" />

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
            </x-tab.nav-content>

            <x-tab.nav-content name="3">
                <x-form.basic-form>
                    <x-slot name="content">
                        <div class="bg-white py-4 px-10 rounded-lg shadow-lg">
                            <div class="font-semibold text-lg text-white bg-indigo-600 py-2 px-4 rounded-md">
                                <p>Maklumat Services</p>
                            </div>
                            <x-general.grid mobile="1" gap="5" sm="1" md="1" lg="2" xl="2" class="col-span-6 mt-6">
                                <x-form.dropdown label="Perkhidmatan" default="yes" value="" >
                                    <option value="1" selected>KPC Property Care</option>
                                    <option value="2">Takaful Koputra</option>
                                    <option value="2">Takaful Kenderaan</option>
                                    <option value="2">Takaful Kebakaran</option>
                                </x-form.dropdown>
                                <x-form.dropdown label="Jenis" default="yes" value="" >
                                    <option value="1" >Perkhidmatan Pembasmian Virus.</option>
                                    <option value="1" >Cucian dan Pembersihan Bangunan / Pejabat / Kediaman.</option>
                                    <option value="2">Membersihkan kawasan dan pemotongan rumput.</option>
                                    <option value="1">Penyelenggaraan bangunan / taman / lanskap.</option>
                                    <option value="2">Kawalan serangga perosak.</option>
                                    <option value="2">Perkhidmatan dobi.</option>
                                    <option value="2">Mengecat rumah dan bangunan.</option>
                                    <option value="2">Cucian rumah dan bangunan.</option>
                                    <option value="2">Sanitasi dalaman dan luaran bangunan.</option>
                                </x-form.dropdown>
                                <x-form.input label="Fail Brosur (Risalah ini hendaklah dalam format berikut JPEG, JPG, PNG)"  value="" type="file"/>
                                <x-form.input label="Harga Awam"  value="" type=""/>
                                <x-form.input label="Harga Ahli"  value="" type=""/>
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
            </x-tab.nav-content>

            <x-tab.nav-content name="4">
                                <x-general.grid mobile="1" gap="5" sm="1" md="1" lg="2" xl="2" class="col-span-6 items-center mt-8">
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

                                    <x-form.input label="Caj Pemprosesan (RM)"  value="50.00" />

                                    <x-form.dropdown label="Kadar Had Potongan Gaji Dibenarkan" default="no" value="" >
                                            <option value="" selected>50%</option>
                                            <option value="">60%</option>
                                            <option value="">75%</option>
                                            <option value="">85%</option>
                                    </x-form.dropdown>

                                    <x-form.input label="Kadar Keuntungan (% p.a)"  value="6.0000" />

                                    <x-form.input label="Peratus KWPPA (%)"  value="13.0000" />

                                    <x-form.input label="Peratus Takaful (%)"  value="13.0000" />

                                    <x-form.input label="Peratus Takaful (RM)"  value="13.0000" />

                                    <x-form.input label="Saham (Penjamin)"  value="1000.00" />
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

                                
                                <div class="flex justify-center mt-8">
                                    <a onclick="save()" href="#" class="flex px-4 py-1 text-sm font-bold text-white bg-green-600  hover:bg-green-700 rounded">
                                        <div class="flex items-center space-x-2">
                                            <x-heroicon-o-save class="w-4 h-4" /> 
                                            <p>Simpan</p>
                                        </div>
                                    </a>
                                </div>
                            </x-tab.nav-content>

                    <x-tab.nav-content name="5">
                        <div class="bg-white shadow-xl rounded-lg py-2 px-10 mt-2">
                            <x-general.grid mobile="1" gap="5" sm="1" md="1" lg="1" xl="1" class="col-span-6 items-center my-8">
                                <label class="inline-flex items-center">
                                    <input type="checkbox" class="form-checkbox" checked>
                                    <span class="ml-2 text-sm text-gray-700">Salinan Kad Pengenalan (Depan dan Belakang)</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="checkbox" class="form-checkbox" checked>
                                    <span class="ml-2 text-sm text-gray-700">Sijil Beranak (Untuk Polis Sahaja)</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="checkbox" class="form-checkbox" checked>
                                    <span class="ml-2 text-sm text-gray-700">Salinan Penyata Gaji Terkini (Beserta cop Pengesahan majikan)</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="checkbox" class="form-checkbox" checked>
                                    <span class="ml-2 text-sm text-gray-700">Salinan Penyata Gaji 1 Bulan Sebelumnya (Beserta cop pengesahan majikan)</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="checkbox" class="form-checkbox" checked>
                                    <span class="ml-2 text-sm text-gray-700">Salinan Penyata Gaji 2 Bulan Sebelumnya (Beserta cop pengesahan majikan)</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="checkbox" class="form-checkbox" checked>
                                    <span class="ml-2 text-sm text-gray-700">Salinan Buku/Penyata Bank</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="checkbox" class="form-checkbox" >
                                    <span class="ml-2 text-sm text-gray-700">Salinan Bil Utiliti</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="checkbox" class="form-checkbox" >
                                    <span class="ml-2 text-sm text-gray-700">Borang Kebenaran Penzahiran Maklumat Peribadi</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="checkbox" class="form-checkbox" >
                                    <span class="ml-2 text-sm text-gray-700">Surat Pengesahan Jawatan</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="checkbox" class="form-checkbox" >
                                    <span class="ml-2 text-sm text-gray-700">Surat Penyelesaian Pinjaman Lain (Jika perlu sahaja)</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="checkbox" class="form-checkbox" >
                                    <span class="ml-2 text-sm text-gray-700">Baucar Bayaran (Jika perlu sahaja)</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="checkbox" class="form-checkbox" >
                                    <input type="text"  value="Borang pengesahan BR1M"
                                        class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 ml-2"
                                        >
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="checkbox" class="form-checkbox" >
                                    <input type="text"  value="" placeholder="Borang Tambahan"
                                        class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 ml-2"
                                        >
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="checkbox" class="form-checkbox" >
                                    <input type="text"  value="" placeholder="Borang Tambahan"
                                        class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 ml-2"
                                        >
                                </label>
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
                    </x-tab.nav-content>




        </x-general.grid>
    </div>

    <!-- header -->
    <div class="absolute top-0 left-0 right-0 z-0">
        <x-general.header bgimg=""  title="KEMAS KINI PRODUK" height="8rem"/>
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