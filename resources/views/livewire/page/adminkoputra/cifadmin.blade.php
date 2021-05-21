<div>
    <div class="z-20 relative mx-auto px-0 my-3 text-lg leading-6 font-medium text-cool-gray-900">
        <x-general.grid mobile="1" gap="5" sm="1" md="2" lg="1" xl="1" class="bg-white py-4 px-4 rounded-lg col-span-6 items-center mt-8" x-data="{ active: 0}">

            <div class="bg-white shadow-lg rounded-lg py-2 px-2 overflow-x-auto w-full">
                <div class="flex space-x-2">
                    <x-hovertab.title name="0" livewire="">
                        <x-heroicon-o-currency-dollar class="w-6 h-6 mr-2" />
                        <span
                            class="tooltip-text bg-indigo-600 border rounded border-indigo-600 text-white -mt-14">Organisation Info</span>
                    </x-hovertab.title>

                    <x-hovertab.title name="1" livewire="">
                        <x-heroicon-o-chart-square-bar class="w-6 h-6 mr-2" />
                        <span
                            class="tooltip-text bg-indigo-600 border rounded border-indigo-600 text-white -mt-14">Branches</span>
                    </x-hovertab.title>

                    <x-hovertab.title name="2" livewire="">
                        <x-heroicon-o-home class="w-6 h-6 mr-2" />
                        <span
                            class="tooltip-text bg-indigo-600 border rounded border-indigo-600 text-white -mt-14">Transaction Codes</span>
                    </x-hovertab.title>

                    <x-hovertab.title name="3" livewire="">
                        <x-heroicon-o-truck class="w-6 h-6 mr-2" />
                        <span
                            class="tooltip-text bg-indigo-600 border rounded border-indigo-600 text-white -mt-14">Fee/Tariff Codes</span>
                    </x-hovertab.title>

                    <x-hovertab.title name="4" livewire="">
                        <x-heroicon-o-cog class="w-6 h-6 mr-2" />
                        <span
                            class="tooltip-text bg-indigo-600 border rounded border-indigo-600 text-white -mt-14">Group Maintenance</span>
                    </x-hovertab.title>

    
                    <x-hovertab.title name="5" livewire="">
                        <x-heroicon-o-user-group class="w-6 h-6 mr-2" />
                        <span
                            class="tooltip-text bg-indigo-600 border rounded border-indigo-600 text-white -mt-14">User Maintenance</span>
                    </x-hovertab.title>

                    <x-hovertab.title name="6" livewire="">
                        <x-heroicon-o-desktop-computer class="w-6 h-6 mr-2" />
                        <span
                            class="tooltip-text bg-indigo-600 border rounded border-indigo-600 text-white -mt-14">Screen Access</span>
                    </x-hovertab.title>
                    
                </div>
            </div>
            <x-hovertab.content name="0">
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

                            <div class="flex justify-center mt-2">
                                <button onclick="" href="#" class="flex px-8 py-1 ml-2 text-sm font-bold text-gray-800 hover:bg-gray-100 border border-gray-400 rounded shadow">
                                    <div class="flex items-center space-x-2">
                                        <p>New</p>
                                    </div>
                                </button>
                                <button onclick="" href="#" class="flex px-8 py-1 ml-2 text-sm font-bold text-gray-800 hover:bg-gray-100 border border-gray-400 rounded shadow">
                                    <div class="flex items-center space-x-2">
                                        <p>Delete</p>
                                    </div>
                                </button>
                                <button onclick="" href="#" class="flex px-8 py-1 ml-2 text-sm font-bold text-gray-800 hover:bg-gray-100 border border-gray-400 rounded shadow">
                                    <div class="flex items-center space-x-2">
                                        <p>Save</p>
                                    </div>
                                </button>
                                <button onclick="" href="#" class="flex px-8 py-1 ml-2 text-sm font-bold text-gray-800 hover:bg-gray-100 border border-gray-400 rounded shadow">
                                    <div class="flex items-center space-x-2">
                                        <p>Close</p>
                                    </div>
                                </button>
                            </div>

                        </div>
                    </x-slot>

                </x-form.basic-form>
            </x-hovertab.content>

            <x-hovertab.content name="1">
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
                                <div class="flex space-x-2 w-full">
                                    <x-form.input label="Branch Code"  value="51" />
                                </div>

                                <x-form.input label="Branch Name"  value="MWANAKWEREKWE" />

                                <div class="flex space-x-2 w-full">
                                    <x-form.input label="Short Name"  value="MWIB" />
                                </div>

                                <div class="flex space-x-2 w-full">
                                    <x-form.input label="Area Code"  value="A02" />
                                </div>
                            </x-general.grid>

                                <x-form.address class="" label="Address" value1="" value2="" value3="" value4="" value5=""
                                value6="" condition="state" />

                            <x-general.grid mobile="1" gap="5" sm="1" md="1" lg="2" xl="2" class="col-span-6 mt-6">
                                <div class="flex space-x-2 w-full">
                                    <x-form.input label="Operating Code"  value="HW52" />
                                </div>
                                
                                <div class="flex space-x-2 w-full">
                                    <x-form.input label="Telephone No"  value="+51 324 2314" />
                                </div>

                                <div class="flex space-x-2 w-full">
                                    <x-form.input label="GL Acct. Number"  value="510101" />
                                </div>

                                <div class="flex space-x-2 w-full">
                                    <x-form.input label="ATM Interbranch GL"  value="113454" />
                                </div>

                                <div class="flex space-x-2 w-full">
                                    <x-form.input label="Work Date"  value="17-02-2013" />
                                </div>

                                <div class="flex space-x-2 w-full">
                                    <x-form.input label="Report Work Date"  value="23-12-2011" />
                                </div>

                                <div class="flex space-x-2 w-full">
                                    <x-form.input label="Last Sequence No"  value="235" />
                                </div>

                                <div class="flex space-x-2 w-full">
                                    <x-form.input label="InterBranch GL Number"  value="113461" />
                                </div>
                            </x-general.grid>

                            <div class="font-semibold text-lg text-black py-1 px-1 mt-4">
                                <p>Teller & Batch Processing Setting</p>
                            </div>

                            <x-general.grid mobile="1" gap="5" sm="1" md="1" lg="2" xl="2" class="col-span-6 mt-6">

                                <div class="flex space-x-2 w-full">
                                    <x-form.input label="End of Day Flag"  value="Active" />
                                </div>

                                <div class="flex space-x-2 w-full">
                                    <x-form.input label="Batch Flag"  value="Not yet run" />
                                </div>
                                
                            </x-general.grid>

                            <div class="font-semibold text-lg text-white bg-indigo-600 py-2 px-4 rounded-md mt-8">
                                <p>Control Button</p>
                            </div>
                            
                            <div class="flex justify-center mt-2">
                                <button onclick="" href="#" class="flex px-8 py-1 ml-2 text-sm font-bold text-gray-800 hover:bg-gray-100 border border-gray-400 rounded shadow">
                                    <div class="flex items-center space-x-2">
                                        <p>New</p>
                                    </div>
                                </button>
                                <button onclick="" href="#" class="flex px-8 py-1 ml-2 text-sm font-bold text-gray-800 hover:bg-gray-100 border border-gray-400 rounded shadow">
                                    <div class="flex items-center space-x-2">
                                        <p>Delete</p>
                                    </div>
                                </button>
                                <button onclick="" href="#" class="flex px-8 py-1 ml-2 text-sm font-bold text-gray-800 hover:bg-gray-100 border border-gray-400 rounded shadow">
                                    <div class="flex items-center space-x-2">
                                        <p>Save</p>
                                    </div>
                                </button>
                                <button onclick="" href="#" class="flex px-8 py-1 ml-2 text-sm font-bold text-gray-800 hover:bg-gray-100 border border-gray-400 rounded shadow">
                                    <div class="flex items-center space-x-2">
                                        <p>Close</p>
                                    </div>
                                </button>
                            </div>
                            
                        </div>
                    </x-slot>
                </x-form.basic-form>
            </x-hovertab.content>

            <x-hovertab.content name="2">
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
                                <div class="flex space-x-2 w-full">
                                    <x-form.input label="Branch Code"  value="51" />
                                </div>

                                <x-form.input label="Branch Name"  value="MWANAKWEREKWE" />

                                <div class="flex space-x-2 w-full">
                                    <x-form.input label="Short Name"  value="MWIB" />
                                </div>

                                <div class="flex space-x-2 w-full">
                                    <x-form.input label="Area Code"  value="A02" />
                                </div>
                            </x-general.grid>

                                <x-form.address class="" label="Address" value1="" value2="" value3="" value4="" value5=""
                                value6="" condition="state" />

                            <x-general.grid mobile="1" gap="5" sm="1" md="1" lg="2" xl="2" class="col-span-6 mt-6">
                                <div class="flex space-x-2 w-full">
                                    <x-form.input label="Operating Code"  value="HW52" />
                                </div>
                                
                                <div class="flex space-x-2 w-full">
                                    <x-form.input label="Telephone No"  value="+51 324 2314" />
                                </div>

                                <div class="flex space-x-2 w-full">
                                    <x-form.input label="GL Acct. Number"  value="510101" />
                                </div>

                                <div class="flex space-x-2 w-full">
                                    <x-form.input label="ATM Interbranch GL"  value="113454" />
                                </div>

                                <div class="flex space-x-2 w-full">
                                    <x-form.input label="Work Date"  value="17-02-2013" />
                                </div>

                                <div class="flex space-x-2 w-full">
                                    <x-form.input label="Report Work Date"  value="23-12-2011" />
                                </div>

                                <div class="flex space-x-2 w-full">
                                    <x-form.input label="Last Sequence No"  value="235" />
                                </div>

                                <div class="flex space-x-2 w-full">
                                    <x-form.input label="InterBranch GL Number"  value="113461" />
                                </div>
                            </x-general.grid>

                            <div class="font-semibold text-lg text-black py-1 px-1 mt-4">
                                <p>Teller & Batch Processing Setting</p>
                            </div>

                            <x-general.grid mobile="1" gap="5" sm="1" md="1" lg="2" xl="2" class="col-span-6 mt-6">

                                <div class="flex space-x-2 w-full">
                                    <x-form.input label="End of Day Flag"  value="Active" />
                                </div>

                                <div class="flex space-x-2 w-full">
                                    <x-form.input label="Batch Flag"  value="Not yet run" />
                                </div>
                                
                            </x-general.grid>

                            <div class="font-semibold text-lg text-white bg-indigo-600 py-2 px-4 rounded-md mt-8">
                                <p>Control Button</p>
                            </div>
                            
                            <div class="flex justify-center mt-2">
                                <button onclick="" href="#" class="flex px-8 py-1 ml-2 text-sm font-bold text-gray-800 hover:bg-gray-100 border border-gray-400 rounded shadow">
                                    <div class="flex items-center space-x-2">
                                        <p>New</p>
                                    </div>
                                </button>
                                <button onclick="" href="#" class="flex px-8 py-1 ml-2 text-sm font-bold text-gray-800 hover:bg-gray-100 border border-gray-400 rounded shadow">
                                    <div class="flex items-center space-x-2">
                                        <p>Delete</p>
                                    </div>
                                </button>
                                <button onclick="" href="#" class="flex px-8 py-1 ml-2 text-sm font-bold text-gray-800 hover:bg-gray-100 border border-gray-400 rounded shadow">
                                    <div class="flex items-center space-x-2">
                                        <p>Save</p>
                                    </div>
                                </button>
                                <button onclick="" href="#" class="flex px-8 py-1 ml-2 text-sm font-bold text-gray-800 hover:bg-gray-100 border border-gray-400 rounded shadow">
                                    <div class="flex items-center space-x-2">
                                        <p>Close</p>
                                    </div>
                                </button>
                            </div>
                            
                        </div>
                    </x-slot>
                </x-form.basic-form>
            </x-hovertab.content>

            <x-hovertab.content name="3">
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
            </x-hovertab.content>

            <x-hovertab.content name="4">
                <div class="bg-white py-4 px-10 rounded-lg shadow-lg">
                    <div class="grid grid-cols-12 gap-6">
                        <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-6 xxl:col-span-6 bg-white px-2 py-4 shadow-lg">
                            <x-table.table>
                                    <x-slot name="thead">
                                        <x-table.table-header class="text-left" value="Description" sort="" />
                                        <x-table.table-header class="text-left" value="Role" sort="" />
                                        <x-table.table-header class="text-left" value="Officer Level" sort="" />
                                    </x-slot>
                                    <x-slot name="tbody">
                                        <tr>
                                            <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                    <p>Bank Officers</p>
                                            </x-table.table-body>
                                            <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                    <p>122</p>
                                            </x-table.table-body>
                                            <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                    <p>1</p>
                                            </x-table.table-body>
                                        </tr>
                                        <tr>
                                            <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                    <p>Customer Service</p>
                                            </x-table.table-body>
                                            <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                    <p>554</p>
                                            </x-table.table-body>
                                            <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                    <p>3</p>
                                            </x-table.table-body>
                                        </tr>
                                        <tr>
                                            <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                    <p>RELIEF GROUP</p>
                                            </x-table.table-body>
                                            <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                    <p>574</p>
                                            </x-table.table-body>
                                            <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                    <p>3</p>
                                            </x-table.table-body>
                                        </tr>
                                        <tr>
                                            <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                    <p>RELIEF GROUP 2</p>
                                            </x-table.table-body>
                                            <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                    <p>544</p>
                                            </x-table.table-body>
                                            <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                    <p>3</p>
                                            </x-table.table-body>
                                        </tr>
                                        <tr>
                                            <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                    <p>Supervisor Level 5</p>
                                            </x-table.table-body>
                                            <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                    <p>2562</p>
                                            </x-table.table-body>
                                            <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                    <p>1</p>
                                            </x-table.table-body>
                                        </tr>
                                        <tr>
                                            <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                    <p>System Administrator</p>
                                            </x-table.table-body>
                                            <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                    <p>8190</p>
                                            </x-table.table-body>
                                            <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                    <p>1</p>
                                            </x-table.table-body>
                                        </tr>
                                        <tr>
                                            <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                    <p>Teller Level 1</p>
                                            </x-table.table-body>
                                            <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                    <p>516</p>
                                            </x-table.table-body>
                                            <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                    <p>2</p>
                                            </x-table.table-body>
                                        </tr>
                                        <tr>
                                            <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                    <p>Teller| Supervisor Level 2</p>
                                            </x-table.table-body>
                                            <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                    <p>1540</p>
                                            </x-table.table-body>
                                            <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                    <p>1</p>
                                            </x-table.table-body>
                                        </tr>
                                    </x-slot>
                            </x-table.table>
                        </div>
                        <div class="relative col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-6 xxl:col-span-6 bg-white px-2 py-4 shadow-lg">
                            <div class="py-4 ">
                                <h1 class="font-semibold text-indigo-500 border-b-2 border-indigo-600">Group Details</h1>
                            </div>
                            <x-general.grid mobile="1" gap="4" sm="1" md="1" lg="2" xl="2" class="col-span-6">
                                <x-form.input label="Description"  value="Bank Officers" />
                                <x-form.dropdown label="Edit Level" default="yes" value="" >
                                    <option value="" selected>1</option>
                                </x-form.dropdown>
                            </x-general.grid>

                            <div class="py-4">
                                <h1 class="font-semibold text-indigo-500 border-b-2 border-indigo-600">Role</h1>
                            </div>
                            <x-general.grid mobile="1" gap="4" sm="1" md="3" lg="3" xl="3" class="col-span-6">
                                <label class="inline-flex items-center">
                                    <input type="checkbox" class="form-checkbox" checked>
                                    <span class="ml-2 text-sm text-gray-700">Maintenance</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="checkbox" class="form-checkbox" checked>
                                    <span class="ml-2 text-sm text-gray-700">Product Maintenance</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="checkbox" class="form-checkbox">
                                    <span class="ml-2 text-sm text-gray-700">Supervisor 2</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="checkbox" class="form-checkbox">
                                    <span class="ml-2 text-sm text-gray-700">Transaction Access</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="checkbox" class="form-checkbox">
                                    <span class="ml-2 text-sm text-gray-700">Conversion Team</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="checkbox" class="form-checkbox">
                                    <span class="ml-2 text-sm text-gray-700">Supervisor 5</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="checkbox" class="form-checkbox" checked>
                                    <span class="ml-2 text-sm text-gray-700">Bank Wide Inquiry</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="checkbox" class="form-checkbox">
                                    <span class="ml-2 text-sm text-gray-700">Admin Team</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="checkbox" class="form-checkbox">
                                    <span class="ml-2 text-sm text-gray-700">Manager</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="checkbox" class="form-checkbox">
                                    <span class="ml-2 text-sm text-gray-700">Branch only inquiry</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="checkbox" class="form-checkbox">
                                    <span class="ml-2 text-sm text-gray-700">Teller</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="checkbox" class="form-checkbox" checked>
                                    <span class="ml-2 text-sm text-gray-700">Creation</span>
                                </label>
                            </x-general.grid>
                            <div class="flex justify-center absolute bottom-0 py-2 px-2 right-0">
                                <button onclick="" href="#" class="flex px-8 py-1 ml-2 text-sm font-bold text-gray-800 hover:bg-gray-100 border border-gray-400 rounded shadow">
                                    <div class="flex items-center space-x-2">
                                        <p>New</p>
                                    </div>
                                </button>
                                <button onclick="" href="#" class="flex px-8 py-1 ml-2 text-sm font-bold text-gray-800 hover:bg-gray-100 border border-gray-400 rounded shadow">
                                    <div class="flex items-center space-x-2">
                                        <p>Save</p>
                                    </div>
                                </button>
                                <button onclick="" href="#" class="flex px-8 py-1 ml-2 text-sm font-bold text-gray-800 hover:bg-gray-100 border border-gray-400 rounded shadow">
                                    <div class="flex items-center space-x-2">
                                        <p>Cancel</p>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </x-hovertab.content>

            <x-hovertab.content name="5">
                <div class="bg-white py-4 px-10 rounded-lg shadow-lg">
                    <div class="grid grid-cols-12 gap-6">
                        <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-6 xxl:col-span-6 bg-white px-2 py-4 shadow-lg">
                            <x-table.table>
                                    <x-slot name="thead">
                                        <x-table.table-header class="text-left" value="Name" sort="" />
                                        <x-table.table-header class="text-left" value="user id" sort="" />
                                        <x-table.table-header class="text-left" value="Branch" sort="" />
                                    </x-slot>
                                    <x-slot name="tbody">
                                        <tr>
                                            <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                    <p>Abdalla jabir abdalla</p>
                                            </x-table.table-body>
                                            <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                    <p>mwjabir</p>
                                            </x-table.table-body>
                                            <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                    <p>mwanakwerekwe</p>
                                            </x-table.table-body>
                                        </tr>
                                        <tr>
                                            <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                    <p>Abdalla jabir</p>
                                            </x-table.table-body>
                                            <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                    <p>karjabir</p>
                                            </x-table.table-body>
                                            <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                    <p>kariakoo</p>
                                            </x-table.table-body>
                                        </tr>
                                        <tr>
                                            <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                    <p>Asari</p>
                                            </x-table.table-body>
                                            <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                    <p>asari</p>
                                            </x-table.table-body>
                                            <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                    <p>hq1</p>
                                            </x-table.table-body>
                                        </tr>
                                        <tr>
                                            <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                    <p>C_CSA</p>
                                            </x-table.table-body>
                                            <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                    <p>CHK03</p>
                                            </x-table.table-body>
                                            <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                    <p>chakechake</p>
                                            </x-table.table-body>
                                        </tr>
                                        <tr>
                                            <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                    <p>C_SPVR5</p>
                                            </x-table.table-body>
                                            <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                    <p>CHK04</p>
                                            </x-table.table-body>
                                            <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                    <p>chakechake</p>
                                            </x-table.table-body>
                                        </tr>
                                        <tr>
                                            <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                    <p>C_Teller 1</p>
                                            </x-table.table-body>
                                            <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                    <p>CHK01</p>
                                            </x-table.table-body>
                                            <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                    <p>chakechake</p>
                                            </x-table.table-body>
                                        </tr>
                                        <tr>
                                            <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                    <p>C_Teller 2</p>
                                            </x-table.table-body>
                                            <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                    <p>CHK02</p>
                                            </x-table.table-body>
                                            <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                    <p>chakechake</p>
                                            </x-table.table-body>
                                        </tr>
                                        <tr>
                                            <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                    <p>CSA01</p>
                                            </x-table.table-body>
                                            <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                    <p>CSA01</p>
                                            </x-table.table-body>
                                            <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                    <p>chakechake</p>
                                            </x-table.table-body>
                                        </tr>
                                        <tr>
                                            <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                    <p>DAR CSA</p>
                                            </x-table.table-body>
                                            <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                    <p>KAR03</p>
                                            </x-table.table-body>
                                            <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                    <p>KARIAKOO</p>
                                            </x-table.table-body>
                                        </tr>
                                        <tr>
                                            <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                    <p>DAR SPVR5</p>
                                            </x-table.table-body>
                                            <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                    <p>KAR04</p>
                                            </x-table.table-body>
                                            <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                    <p>KARIAKOO</p>
                                            </x-table.table-body>
                                        </tr>
                                    </x-slot>
                            </x-table.table>
                        </div>
                        <div class="relative col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-6 xxl:col-span-6 bg-white px-2 py-4 shadow-lg">
                        
                            <div class="py-4">
                                <h1 class="font-semibold text-indigo-500 border-b-2 border-indigo-600">Officer Details</h1>
                            </div>
                            <x-general.grid mobile="1" gap="4" sm="1" md="2" lg="2" xl="2" class="col-span-6">
                                <x-form.input label="User ID" value="MWJABIR" livewire="" />
                                <x-form.input label="Officer Name" value="ABDALLA JABIR ABDALLA" livewire="" />
                                <x-form.dropdown label="ID Satus" default="yes" value="" >
                                    <option value="" selected>ACTIVE</option>
                                    <option value="">EXPIRED</option>
                                    <option value="">SUSPENDED</option>
                                    <option value="">OFF DUTY / ON LEAVE</option>
                                </x-form.dropdown>
                                <x-form.dropdown label="Branch" default="yes" value="" >
                                    <option value="" selected>MWANAKWEREKWE</option>
                                    <option value="">KARIAKOO</option>
                                    <option value="">CHAKECHAKE</option>
                                    <option value="">SUNGAI BESI</option>
                                    <option value="">TAZARA</option>
                                    <option value="">MTWARA</option>
                                    <option value="">IRFAN HOLLAND</option>
                                </x-form.dropdown>
                                <x-form.input label="Password Status" value="Must Change Password" livewire="" readonly/>
                                <x-form.input label="Position Held" value="SYSTEM ADMINISTRATOR" livewire="" />
                                <x-form.input label="ID Expriy Date" value="0000-00-00" livewire="" />

                                <x-form.dropdown label="Group" default="yes" value="" >
                                    <option value="">Teller Level 1</option>
                                    <option value="">Teller | Supervisor Level 2</option>
                                    <option value="">Supervisor Level 5</option>
                                    <option value="">Bank Officers</option>
                                    <option value=""selected>System Adminstrator</option>
                                    <option value="">CUSTOMER SERVICE</option>
                                </x-form.dropdown>

                                <x-form.input label="ID Creation Date" value="00- -000 00:00:00 AM" livewire="" readonly/>
                                <x-form.input label="Edit Level" value="1" livewire=""/>
                                <x-form.input label="Role" value="8190" livewire=""/>
                                
                            </x-general.grid>
                        </div>
                    </div>
                    <div class="flex justify-between bg-white shadow-xl py-4 px-4 mt-6">
                        <div>
                            <button onclick="" href="#" class="flex px-8 py-1 ml-2 text-sm font-bold text-gray-800 hover:bg-gray-100 border border-gray-400 rounded shadow">
                                <div class="flex items-center space-x-2">
                                    <p>User listing Report</p>
                                </div>
                            </button>
                        </div>
                        <div class='flex space-x-2'>
                            <button onclick="" href="#" class="flex px-8 py-1 ml-2 text-sm font-bold text-gray-800 hover:bg-gray-100 border border-gray-400 rounded shadow">
                                <div class="flex items-center space-x-2">
                                    <p>New User</p>
                                </div>
                            </button>
                            <button onclick="" href="#" class="cursor-not-allowed flex px-8 py-1 ml-2 text-sm font-bold text-gray-800 hover:bg-gray-100 border border-gray-400 rounded shadow">
                                <div class="flex items-center space-x-2">
                                    <p>Reset Password</p>
                                </div>
                            </button>
                            <button onclick="" href="#" class="cursor-not-allowed flex px-8 py-1 ml-2 text-sm font-bold text-gray-800 hover:bg-gray-100 border border-gray-400 rounded shadow">
                                <div class="flex items-center space-x-2">
                                    <p>Delete User</p>
                                </div>
                            </button>
                            <button onclick="" href="#" class=" flex px-8 py-1 ml-2 text-sm font-bold text-gray-800 hover:bg-gray-100 border border-gray-400 rounded shadow">
                                <div class="flex items-center space-x-2">
                                    <p>Edit</p>
                                </div>
                            </button>
                            <button onclick="" href="#" class=" flex px-8 py-1 ml-2 text-sm font-bold text-gray-800 hover:bg-gray-100 border border-gray-400 rounded shadow">
                                <div class="flex items-center space-x-2">
                                    <p>Save</p>
                                </div>
                            </button>
                            <button onclick="" href="#" class=" flex px-8 py-1 ml-2 text-sm font-bold text-gray-800 hover:bg-gray-100 border border-gray-400 rounded shadow">
                                <div class="flex items-center space-x-2">
                                    <p>Cancel</p>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </x-hovertab.content>

            <x-hovertab.content name="6">
                <div class="bg-white py-4 px-10 rounded-lg shadow-lg">
                    <div class="flex items-center">
                        <span class="mr-2 text-base text-gray-500">Group : </span>
                        <x-form.dropdown label="" default="yes" value="" >
                            <option value="" selected>Bank Officers</option>
                            <option value="" >CUSTOMER SERVICE</option>
                            <option value="" >RELIEF GROUP </option>
                            <option value="" >RELIEF GROUP 2 </option>
                            <option value="" >Supervisor Level 5</option>
                            <option value="" >System Admistrator</option>
                            <option value="" >Teller Level 1</option>
                            <option value="" >Teller | Supervisor Level 2</option>
                        </x-form.dropdown>
                    </div>
                    <div class="flex justify-center mt-4 mx-auto">
                        <div class="bg-white py-4 px-4 rounded-lg shadow-lg  w-full">
                            <x-table.table>
                                <x-slot name="thead">
                                    <x-table.table-header class="text-left" value="Screen" sort="" />
                                    <x-table.table-header class="text-center" value="Authorized" sort="" />
                                </x-slot>
                                <x-slot name="tbody">
                                    <tr>
                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                <p>Customer</p>
                                        </x-table.table-body>
                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                            <div class="flex justify-center">
                                                <input type="checkbox" class="form-checkbox" checked>
                                            </div>
                                        </x-table.table-body>
                                    </tr>
                                </x-slot>
                            </x-table.table>
                        </div>
                    </div>
                    <div class="flex justify-end mt-4">
                        <button onclick="" href="#" class="flex px-8 py-1 ml-2 text-sm font-bold text-gray-800 hover:bg-gray-100 border border-gray-400 rounded shadow">
                            <div class="flex items-center space-x-2">
                                <p>Save</p>
                            </div>
                        </button>
                        <button onclick="" href="#" class="flex px-8 py-1 ml-2 text-sm font-bold text-gray-800 hover:bg-gray-100 border border-gray-400 rounded shadow">
                            <div class="flex items-center space-x-2">
                                <p>Cancel</p>
                            </div>
                        </button>
                    </div>
                </div>
            </x-hovertab.content>



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