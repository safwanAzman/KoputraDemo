<div>
    <div class="z-20 relative mx-auto px-0 my-3 text-lg leading-6 font-medium text-cool-gray-900">
        <x-general.grid mobile="1" gap="5" sm="1" md="2" lg="1" xl="1" class="bg-white py-4 px-4 rounded-lg col-span-6 items-center mt-8" x-data="{ active: 0}">

            <div class="bg-white shadow-lg rounded-lg py-2 px-2">
                <div class="flex space-x-2">
                    <x-tab.nav-tab name="0" livewire="">
                        <div class="flex font-medium text-sm">
                            <x-heroicon-o-currency-dollar class="w-6 h-6 mr-2" />Organisation Info
                        </div>
                    </x-tab.nav-tab>
                    <x-tab.nav-tab name="1" livewire="">
                        <div class="flex font-medium text-sm">
                            <x-heroicon-o-chart-square-bar class="w-6 h-6 mr-2" />Branches
                        </div>
                    </x-tab.nav-tab>
                    <x-tab.nav-tab name="2" livewire="">
                        <div class="flex font-medium text-sm">
                            <x-heroicon-o-home class="w-6 h-6 mr-2" />Transaction Codes
                        </div>
                    </x-tab.nav-tab>
                    <x-tab.nav-tab name="3" livewire="">
                        <div class="flex font-medium text-sm">
                            <x-heroicon-o-truck class="w-6 h-6 mr-2" />Fee/Tariff Codes
                        </div>
                    </x-tab.nav-tab>
                </div>
            </div>
            <x-tab.nav-content name="0">
                <x-form.basic-form>
                    <x-slot name="content">
                        <div class="bg-white py-4 px-10 rounded-lg shadow-lg">

                            <div class="font-semibold text-lg text-white bg-indigo-600 py-2 px-4 rounded-md">
                                <p>Organisation List</p>
                            </div>
                            <x-general.grid mobile="1" gap="5" sm="1" md="1" lg="2" xl="2" class="col-span-6 mt-6">
                                <x-form.dropdown label="Organisation Name" default="yes" value="" >
                                    <option value="1" selected>People's Bank of Zanzibar</option>
                                    <option value="2">Bank Malayan</option>
                                    <option value="2">Bank Islam</option>
                                    <option value="2">Bank Muamalat</option>
                                </x-form.dropdown>
                                <x-form.input label="Group ID"  value="1" type="" disabled/>
                                <x-form.input label="Seq. Number"  value="1" type="" disabled/>
                                <x-form.input label="Code"  value="CAX137" type="" disabled/>
                                <x-form.input label="Code Description"  value="People's Bank of Zanzibar" type="" disabled/>
                            </x-general.grid>

                            <div class="font-semibold text-lg text-white bg-indigo-600 py-2 px-4 rounded-md mt-8">
                                <p>Organisation Info</p>
                            </div>

                            <x-general.grid mobile="1" gap="5" sm="1" md="1" lg="2" xl="2" class="col-span-6 mt-6">
                                <x-form.input label="Seq. Number"  value="1" disabled/>
                                <x-form.input label="Code"  value="CAX137" disabled/>
                                <x-form.input label="Code Description"  value="People's Bank of Zanzibar" disabled/>
                            </x-general.grid>

                            <div class="font-semibold text-lg text-white bg-indigo-600 py-2 px-4 rounded-md mt-8">
                                <p>Control Button</p>
                            </div>

                            <div class="flex justify-center mt-8">
                                <button onclick="" href="#" class="flex px-4 py-1 text-sm font-bold text-white bg-gray-600  rounded">
                                    <div class="flex items-center space-x-2">
                                        <x-heroicon-o-save class="w-4 h-4" /> 
                                        <p>New</p>
                                    </div>
                                </button>
                                <button onclick="" href="#" class="flex px-4 py-1 ml-2 text-sm font-bold text-white bg-gray-600 rounded">
                                    <div class="flex items-center space-x-2">
                                        <x-heroicon-o-save class="w-4 h-4" /> 
                                        <p>Delete</p>
                                    </div>
                                </button>
                                <button onclick="" href="#" class="flex px-4 py-1 ml-2 text-sm font-bold text-white bg-gray-600 rounded disabled:opacity-50" disabled>
                                    <div class="flex items-center space-x-2">
                                        <x-heroicon-o-save class="w-4 h-4" /> 
                                        <p>Save</p>
                                    </div>
                                </button>
                                <button onclick="" href="#" class="flex px-4 py-1 ml-2 text-sm font-bold text-white bg-green-600  hover:bg-green-700 rounded">
                                    <div class="flex items-center space-x-2">
                                        <x-heroicon-o-save class="w-4 h-4" /> 
                                        <p>Close</p>
                                    </div>
                                </button>
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
                                <p>Brances</p>
                            </div>
                            <x-general.grid mobile="1" gap="5" sm="1" md="1" lg="2" xl="2" class="col-span-6 mt-6">
                                <x-form.dropdown label="Branches List" default="yes" value="" >
                                    <option value="1" selected>MWANAKWEREKWE</option>
                                    <option value="2">KARIAKOO</option>
                                    <option value="2">CHAKECHAKE</option>
                                    <option value="2">SUNGAI BESI</option>
                                </x-form.dropdown>
                                <x-form.input label="Branch Code"  value="51" type="" disabled/>
                                <x-form.input label="Branch Name"  value="MWANAKWEREKWE" type="" disabled/>
                                <x-form.input label="Short Name"  value="MWIB" type="" disabled/>
                                <x-form.input label="Area Code"  value="A02" type="" disabled/>
                            </x-general.grid>

                            <div class="font-semibold text-lg text-white bg-indigo-600 py-2 px-4 rounded-md mt-8">
                                <p>Branch Details</p>
                            </div>
                            <x-general.grid mobile="1" gap="5" sm="1" md="1" lg="2" xl="2" class="col-span-6 mt-6">
                                <x-form.dropdown label="Branches List" default="yes" value="" >
                                    <option value="1" selected>MWANAKWEREKWE</option>
                                    <option value="2">KARIAKOO</option>
                                    <option value="2">CHAKECHAKE</option>
                                    <option value="2">SUNGAI BESI</option>
                                </x-form.dropdown>
                                <x-form.input label="Branch Code"  value="51" type="" disabled/>
                                <x-form.input label="Branch Name"  value="MWANAKWEREKWE" type="" disabled/>
                                <x-form.input label="Short Name"  value="MWIB" type="" disabled/>
                                <x-form.input label="Area Code"  value="A02" type="" disabled/>
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




        </x-general.grid>
    </div>

    <!-- header -->
    <div class="absolute top-0 left-0 right-0 z-0">
        <x-general.header bgimg=""  title="CIF Admin" height="8rem"/>
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