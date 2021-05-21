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
                        <x-heroicon-o-light-bulb class="w-6 h-6 mr-2" />
                        <span
                            class="tooltip-text bg-indigo-600 border rounded border-indigo-600 text-white -mt-14">Hibah Codes</span>
                    </x-hovertab.title>

                    <x-hovertab.title name="5" livewire="">
                        <x-heroicon-o-cog class="w-6 h-6 mr-2" />
                        <span
                            class="tooltip-text bg-indigo-600 border rounded border-indigo-600 text-white -mt-14">Group Maintenance</span>
                    </x-hovertab.title>

    
                    <x-hovertab.title name="6" livewire="">
                        <x-heroicon-o-user-group class="w-6 h-6 mr-2" />
                        <span
                            class="tooltip-text bg-indigo-600 border rounded border-indigo-600 text-white -mt-14">User Maintenance</span>
                    </x-hovertab.title>

                    <x-hovertab.title name="7" livewire="">
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
                                    <option value="1" selected>KOPUTRA</option>
                                </x-form.dropdown>
                                <x-form.input label="Group ID"  value="1" type="" disabled/>
                                <x-form.input label="Seq. Number"  value="1" type="" disabled/>
                                <x-form.input label="Code"  value="KOOP88" type="" disabled/>
                                <x-form.input label="Code Description"  
                                value="KOPERASI PELABURAN KAKITANGAN BANK MUAMALAT MALAYSIA BERHAD" type="" disabled/>
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
                                <p>Branch</p>
                            </div>
                            <x-general.grid mobile="1" gap="5" sm="1" md="1" lg="2" xl="2" class="col-span-6 mt-6">
                                <x-form.dropdown label="Branches List" default="yes" value="" >
                                    <option value="1" selected>R-Balakong</option>
                                    <option value="2">R-Bangi</option>
                                    <option value="2">R-HQ</option>
                                    <option value="2">HQ-ACCOUNT</option>
                                    <option value="2">HQ-Koperasi</option>
                                    <option value="2">KPC HQ</option>
                                </x-form.dropdown>
                                <x-form.input label="Branch Code"  value="51" type="" disabled/>
                                <x-form.input label="Branch Name"  value="Ar-Rahnu KOPUTRA Balakong" type="" disabled/>
                                <x-form.input label="Short Name"  value="ARKB" type="" disabled/>
                                <x-form.input label="Area Code"  value="A02" type="" disabled/>
                            </x-general.grid>

                            <div class="font-semibold text-lg text-white bg-indigo-600 py-2 px-4 rounded-md mt-8">
                                <p>Branch Details</p>
                            </div>
                            <x-general.grid mobile="1" gap="5" sm="1" md="1" lg="2" xl="2" class="col-span-6 mt-6">
                                <div class="flex space-x-2 w-full">
                                    <x-form.input label="Branch Code"  value="51" />
                                </div>

                                <x-form.input label="Branch Name"  value="Ar-Rahnu KOPUTRA Balakong" />

                                <div class="flex space-x-2 w-full">
                                    <x-form.input label="Short Name"  value="ARKB" />
                                </div>

                                <div class="flex space-x-2 w-full">
                                    <x-form.input label="Area Code"  value="A02" />
                                </div>
                            </x-general.grid>

                                <x-form2.address class="" label="Address" 
                                value1="BALAKONG No.27-3," 
                                value2="Jalan Taming Permai 1, Taman Taming Jaya," 
                                value3="" 
                                value4="" 
                                value5="Seri Kembangan"
                                value6="" condition="state" />

                            <x-general.grid mobile="1" gap="5" sm="1" md="1" lg="2" xl="2" class="col-span-6 mt-6">
                                <div class="flex space-x-2 w-full">
                                    <x-form.input label="Operating Code"  value="HW52" />
                                </div>
                                
                                <div class="flex space-x-2 w-full">
                                    <x-form.input label="Telephone No"  value="03-89419770" />
                                </div>

                                <div class="flex space-x-2 w-full">
                                    <x-form.input label="GL Acct. Number"  value="510101" />
                                </div>

                                <div class="flex space-x-2 w-full">
                                    <x-form.input label="ATM Interbranch GL"  value="113454" />
                                </div>

                                <div class="flex space-x-2 w-full">
                                    <x-form.input label="Work Date"  value="17-02-2019" />
                                </div>

                                <div class="flex space-x-2 w-full">
                                    <x-form.input label="Report Work Date"  value="23-12-2019" />
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
                                <p>Transaction Codes and Descriptions</p>
                            </div>
                            <table width="30%" class="mt-4">
                                <tbody>
                                    <tr wire:click="t1">
                                        <td >
                                            <label class="inline-flex items-center">
                                                <span class="ml-2 text-sm text-gray-700">1.</span>
                                            </label>
                                        </td>
                                        <td>
                                            <label class="inline-flex items-center">
                                                <span class="ml-2 text-sm text-gray-700">0009</span>
                                            </label>
                                        </td>
                                        <td>
                                            <div class="flex space-x-4 w-full">
                                                <label class="inline-flex items-center">
                                                    <span class="ml-2 text-sm text-gray-700">Opening of Branch</span>
                                                </label>
                                            </div>

                                        </td>
                                    </tr>
                                    
                                    <tr wire:click="t2">
                                        <td >
                                            <label class="inline-flex items-center">
                                                <span class="ml-2 text-sm text-gray-700">2.</span>
                                            </label>
                                        </td>
                                        <td>
                                            <label class="inline-flex items-center">
                                                <span class="ml-2 text-sm text-gray-700">0010</span>
                                            </label>
                                        </td>
                                        <td>
                                            <div class="flex space-x-4 w-full">
                                                <label class="inline-flex items-center">
                                                    <span class="ml-2 text-sm text-gray-700">Enter Opening Cash</span>
                                                </label>
                                            </div>

                                        </td>
                                    </tr>

                                    <tr wire:click="t3">
                                        <td >
                                            <label class="inline-flex items-center">
                                                <span class="ml-2 text-sm text-gray-700">3.</span>
                                            </label>
                                        </td>
                                        <td>
                                            <label class="inline-flex items-center">
                                                <span class="ml-2 text-sm text-gray-700">0011</span>
                                            </label>
                                        </td>
                                        <td>
                                            <div class="flex space-x-4 w-full">
                                                <label class="inline-flex items-center">
                                                    <span class="ml-2 text-sm text-gray-700">Teller Totals Inquiry</span>
                                                </label>
                                            </div>

                                        </td>
                                    </tr>

                                    <tr wire:click="t4">
                                        <td >
                                            <label class="inline-flex items-center">
                                                <span class="ml-2 text-sm text-gray-700">4.</span>
                                            </label>
                                        </td>
                                        <td>
                                            <label class="inline-flex items-center">
                                                <span class="ml-2 text-sm text-gray-700">0012</span>
                                            </label>
                                        </td>
                                        <td>
                                            <div class="flex space-x-4 w-full">
                                                <label class="inline-flex items-center">
                                                    <span class="ml-2 text-sm text-gray-700">Branch Totals Inquiry</span>
                                                </label>
                                            </div>

                                        </td>
                                    </tr>

                                    <tr wire:click="t5">
                                        <td >
                                            <label class="inline-flex items-center">
                                                <span class="ml-2 text-sm text-gray-700">5.</span>
                                            </label>
                                        </td>
                                        <td>
                                            <label class="inline-flex items-center">
                                                <span class="ml-2 text-sm text-gray-700">0013</span>
                                            </label>
                                        </td>
                                        <td>
                                            <div class="flex space-x-4 w-full">
                                                <label class="inline-flex items-center">
                                                    <span class="ml-2 text-sm text-gray-700">Clear Teller Totals</span>
                                                </label>
                                            </div>

                                        </td>
                                    </tr>

                                    <tr wire:click="t6">
                                        <td >
                                            <label class="inline-flex items-center">
                                                <span class="ml-2 text-sm text-gray-700">6.</span>
                                            </label>
                                        </td>
                                        <td>
                                            <label class="inline-flex items-center">
                                                <span class="ml-2 text-sm text-gray-700">0014</span>
                                            </label>
                                        </td>
                                        <td>
                                            <div class="flex space-x-4 w-full">
                                                <label class="inline-flex items-center">
                                                    <span class="ml-2 text-sm text-gray-700">Receive Cash From Vault</span>
                                                </label>
                                            </div>

                                        </td>
                                    </tr>

                                    <tr wire:click="t7">
                                        <td >
                                            <label class="inline-flex items-center">
                                                <span class="ml-2 text-sm text-gray-700">7.</span>
                                            </label>
                                        </td>
                                        <td>
                                            <label class="inline-flex items-center">
                                                <span class="ml-2 text-sm text-gray-700">0015</span>
                                            </label>
                                        </td>
                                        <td>
                                            <div class="flex space-x-4 w-full">
                                                <label class="inline-flex items-center">
                                                    <span class="ml-2 text-sm text-gray-700">Transfer Cash To Vault</span>
                                                </label>
                                            </div>

                                        </td>
                                    </tr>

                                
                                </tbody>
                            </table>

                            <div class="font-semibold text-lg text-white bg-indigo-600 py-2 px-4 rounded-md mt-8">
                                <p>Transaction Code Details</p>
                            </div>

                            <x-general.grid mobile="1" gap="5" sm="1" md="1" lg="3" xl="4" class="col-span-6 mt-6">
                                <x-form.input label="Transaction Code"  value="0009" />

                                <x-form.input label="Transaction Description"  value="Opening of Branch" />

                                <x-form.input label="Transaction Type"  value="Internal" />

                                <x-form.input label="Product"  value="System Used" />
                            </x-general.grid>

                            <x-general.grid mobile="1" gap="5" sm="1" md="1" lg="3" xl="4" class="col-span-6 mt-6">
                                <x-form.input label="Inter Branch Flag"  value="Not Allowed" />
                            
                                <x-form.input label="Override Flag"  value="Supervisor 5" />

                                <x-form.input label="Offline Flag"  value="No" />

                                <x-form.input label="Cash Transaction"  value="Non Cash" />

                                <x-form.input label="Teller Totals Flag"  value="No" />

                                <x-form.input label="Bucket"  value="None" />

                                <x-form.input label="Input Format"  value="0" />

                                <x-form.input label="Output Format"  value="1" />

                                <x-form.input label="Mnemonic Code"  value="" />

                                <x-form.input label="Transaction Category"  value="System Transaction" />

                                <x-form.input label="Floating Flag"  value="No" />

                                <x-form.input label="Floating Day(s)"  value="0" />

                                <x-form.input label="Precede By Txn Code"  value="" />

                                <x-form.input label="Authority Level"  value="2048" />

                                <x-form.input label="Reversal Allowed?"  value="No" />

                            </x-general.grid>

                            <div class="font-semibold text-lg text-black py-1 px-1 mt-4">
                                <p>GL Entries </p>
                            </div>

                            <x-general.grid mobile="1" gap="5" sm="1" md="1" lg="2" xl="2" class="col-span-6 mt-6">

                                <div class="flex space-x-2 w-full">
                                    <x-form.input label="Debit GL Account"  value="" />
                                    <x-form.input label="Credit GL Account"  value="" />
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
                                <p>Fee/Tariff Codes</p>
                            </div>
                            <x-table.table>
                                <x-slot name="thead">
                                    <x-table.table-header class="text-left" value="GROUP ID" sort="" />
                                    <x-table.table-header class="text-left" value="SEQUENCE NUMBER" sort="" />
                                    <x-table.table-header class="text-left" value="CODE" sort="" />
                                    <x-table.table-header class="text-left" value="CODE DESCRIPTION" sort="" />
                                    <x-table.table-header class="text-left" value="GL ACCOUNT CODE" sort="" />
                                </x-slot>
                                <x-slot name="tbody">
                                    <tr>
                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                            <p>7</p>
                                        </x-table.table-body>

                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                            <p>1</p>
                                        </x-table.table-body>

                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                            <p>CDF</p>
                                        </x-table.table-body>

                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                            <p>CASH DEPOSIT FEE</p>
                                        </x-table.table-body>

                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                            <x-form.dropdown label="" value="">
                                                <option value="0"></option>
                                                <option value="01">Bank Commission</option>
                                                <option value="1">ATM Commission</option>
                                                <option value="2">Ledger Fee</option>
                                                <option value="3">Commission on Guarantee</option>
                                                <option value="4">Sales of Cheque Book</option>
                                                <option value="5">Authorisation Fee</option>
                                                <option value="6">Service Charge</option>
                                            </x-form.dropdown>
                                        </x-table.table-body>
                                    </tr>

                                    <tr>
                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                            <p>7</p>
                                        </x-table.table-body>

                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                            <p>2</p>
                                        </x-table.table-body>

                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                            <p>CWF</p>
                                        </x-table.table-body>

                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                            <p>Cash Withdrawal Fee</p>
                                        </x-table.table-body>

                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                            <x-form.dropdown label="" value="">
                                                <option value="0"></option>
                                                <option value="01">Bank Commission</option>
                                                <option value="1">ATM Commission</option>
                                                <option value="2">Ledger Fee</option>
                                                <option value="3">Commission on Guarantee</option>
                                                <option value="4">Sales of Cheque Book</option>
                                                <option value="5">Authorisation Fee</option>
                                                <option value="6">Service Charge</option>
                                            </x-form.dropdown>
                                        </x-table.table-body>
                                    </tr>

                                    <tr>
                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                            <p>7</p>
                                        </x-table.table-body>

                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                            <p>3</p>
                                        </x-table.table-body>

                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                            <p>OCC</p>
                                        </x-table.table-body>

                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                            <p>Outstation Cheque Clearing Fee</p>
                                        </x-table.table-body>
                                        
                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                            <x-form.dropdown label="" value="">
                                                <option value="0"></option>
                                                <option value="01">Bank Commission</option>
                                                <option value="1">ATM Commission</option>
                                                <option value="2">Ledger Fee</option>
                                                <option value="3">Commission on Guarantee</option>
                                                <option value="4">Sales of Cheque Book</option>
                                                <option value="5">Authorisation Fee</option>
                                                <option value="6">Service Charge</option>
                                            </x-form.dropdown>
                                        </x-table.table-body>
                                    </tr>

                                    <tr>
                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                            <p>7</p>
                                        </x-table.table-body>

                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                            <p>4</p>
                                        </x-table.table-body>

                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                            <p>SCC</p>
                                        </x-table.table-body>

                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                            <p>Special Cheque  Clearing Fee</p>
                                        </x-table.table-body>
                                        
                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                            <x-form.dropdown label="" value="">
                                                <option value="0"></option>
                                                <option value="01">Bank Commission</option>
                                                <option value="1">ATM Commission</option>
                                                <option value="2">Ledger Fee</option>
                                                <option value="3">Commission on Guarantee</option>
                                                <option value="4">Sales of Cheque Book</option>
                                                <option value="5">Authorisation Fee</option>
                                                <option value="6">Service Charge</option>
                                            </x-form.dropdown>
                                        </x-table.table-body>
                                    </tr>

                                    <tr>
                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                            <p>7</p>
                                        </x-table.table-body>

                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                            <p>5</p>
                                        </x-table.table-body>

                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                            <p>CHR</p>
                                        </x-table.table-body>

                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                            <p>Cheque Returned Fee</p>
                                        </x-table.table-body>
                                        
                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                            <x-form.dropdown label="" value="">
                                                <option value="0"></option>
                                                <option value="01">Bank Commission</option>
                                                <option value="1">ATM Commission</option>
                                                <option value="2">Ledger Fee</option>
                                                <option value="3">Commission on Guarantee</option>
                                                <option value="4">Sales of Cheque Book</option>
                                                <option value="5">Authorisation Fee</option>
                                                <option value="6">Service Charge</option>
                                            </x-form.dropdown>
                                        </x-table.table-body>
                                    </tr>

                                    <tr>
                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                            <p>6</p>
                                        </x-table.table-body>

                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                            <p>1</p>
                                        </x-table.table-body>

                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                            <p>ITX</p>
                                        </x-table.table-body>

                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                            <p>Internal Transfer Fee</p>
                                        </x-table.table-body>
                                        
                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                            <x-form.dropdown label="" value="">
                                                <option value="0"></option>
                                                <option value="01">Bank Commission</option>
                                                <option value="1">ATM Commission</option>
                                                <option value="2">Ledger Fee</option>
                                                <option value="3">Commission on Guarantee</option>
                                                <option value="4">Sales of Cheque Book</option>
                                                <option value="5">Authorisation Fee</option>
                                                <option value="6">Service Charge</option>
                                            </x-form.dropdown>
                                        </x-table.table-body>
                                    </tr>

                                    <tr>
                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                            <p>7</p>
                                        </x-table.table-body>

                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                            <p>7</p>
                                        </x-table.table-body>

                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                            <p>LTX</p>
                                        </x-table.table-body>

                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                            <p>In-bank Transfer Fee</p>
                                        </x-table.table-body>
                                        
                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                            <x-form.dropdown label="" value="">
                                                <option value="0"></option>
                                                <option value="01">Bank Commission</option>
                                                <option value="1">ATM Commission</option>
                                                <option value="2">Ledger Fee</option>
                                                <option value="3">Commission on Guarantee</option>
                                                <option value="4">Sales of Cheque Book</option>
                                                <option value="5">Authorisation Fee</option>
                                                <option value="6">Service Charge</option>
                                            </x-form.dropdown>
                                        </x-table.table-body>
                                    </tr>

                                    <tr>
                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                            <p>7</p>
                                        </x-table.table-body>

                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                            <p>8</p>
                                        </x-table.table-body>

                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                            <p>MMF</p>
                                        </x-table.table-body>

                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                            <p>Monthly Maintenance Fee</p>
                                        </x-table.table-body>
                                        
                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                            <x-form.dropdown label="" value="">
                                                <option value="0"></option>
                                                <option value="01">Bank Commission</option>
                                                <option value="1">ATM Commission</option>
                                                <option value="2">Ledger Fee</option>
                                                <option value="3">Commission on Guarantee</option>
                                                <option value="4">Sales of Cheque Book</option>
                                                <option value="5">Authorisation Fee</option>
                                                <option value="6">Service Charge</option>
                                            </x-form.dropdown>
                                        </x-table.table-body>
                                    </tr>

                                </x-slot>
                            </x-table.table>

                        </div>
                    </x-slot>
                </x-form.basic-form>
            </x-hovertab.content>

            <x-hovertab.content name="4">
                <x-form.basic-form>
                    <x-slot name="content">
                        <div class="bg-white py-4 px-10 rounded-lg shadow-lg">
                            <div class="font-semibold text-lg text-white bg-indigo-600 py-2 px-4 rounded-md">
                                <p>Hibah Codes</p>
                            </div>
                            <x-table.table>
                                <x-slot name="thead">
                                    <x-table.table-header class="text-left" value="GROUP ID" sort="" />
                                    <x-table.table-header class="text-left" value="SEQUENCE NUMBER" sort="" />
                                    <x-table.table-header class="text-left" value="CODE" sort="" />
                                    <x-table.table-header class="text-left" value="CODE DESCRIPTION" sort="" />
                                    <x-table.table-header class="text-left" value="GL ACCOUNT CODE" sort="" />
                                </x-slot>
                                <x-slot name="tbody">
                                    <tr>
                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                            <p>8</p>
                                        </x-table.table-body>

                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                            <p>1</p>
                                        </x-table.table-body>

                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                            <p>HSG</p>
                                        </x-table.table-body>

                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                            <p>Hibah-Saving Gold</p>
                                        </x-table.table-body>

                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700">
                                            <x-form.dropdown label="" value="">
                                                <option value="0"></option>
                                                <option value="01">Hibah Savings</option>
                                                <option value="1">Hibah Savings 2</option>
                                                <option value="2">Dividen 1</option>
                                                <option value="3">Dividen 2</option>
                                            </x-form.dropdown>
                                        </x-table.table-body>
                                    </tr>
                                </x-slot>
                            </x-table.table>

                        </div>
                    </x-slot>
                </x-form.basic-form>
            </x-hovertab.content>


            <x-hovertab.content name="5">
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
                                                    <p>Officers</p>
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
                                <x-form.input label="Description"  value="Officers" />
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
                                    <span class="ml-2 text-sm text-gray-700">System Wide Inquiry</span>
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

            <x-hovertab.content name="6">
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
                                                    <p>Anis</p>
                                            </x-table.table-body>
                                            <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                    <p>MWJABIR</p>
                                            </x-table.table-body>
                                            <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                    <p>R-Balakong</p>
                                            </x-table.table-body>
                                        </tr>
                                        <tr>
                                            <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                    <p>Hafiz</p>
                                            </x-table.table-body>
                                            <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                    <p>KARJABIR</p>
                                            </x-table.table-body>
                                            <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                    <p>R-Bangi</p>
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
                                                    <p>R-HQ</p>
                                            </x-table.table-body>
                                        </tr>
                                        <tr>
                                            <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                    <p>Irfan</p>
                                            </x-table.table-body>
                                            <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                    <p>CHK03</p>
                                            </x-table.table-body>
                                            <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                    <p>KPC HQ </p>
                                            </x-table.table-body>
                                        </tr>
                                        <tr>
                                            <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                    <p>faisol</p>
                                            </x-table.table-body>
                                            <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                    <p>CHK04</p>
                                            </x-table.table-body>
                                            <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                    <p>HQ-account</p>
                                            </x-table.table-body>
                                        </tr>
                                        <tr>
                                            <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                    <p>Farhan</p>
                                            </x-table.table-body>
                                            <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                    <p>CHK01</p>
                                            </x-table.table-body>
                                            <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                    <p>HQ-koperasi</p>
                                            </x-table.table-body>
                                        </tr>
                                        <tr>
                                            <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                    <p>Aizzuddin</p>
                                            </x-table.table-body>
                                            <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                    <p>CHK02</p>
                                            </x-table.table-body>
                                            <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                    <p>HQ-Pembiayaan</p>
                                            </x-table.table-body>
                                        </tr>
                                        <tr>
                                            <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                    <p>Aiman</p>
                                            </x-table.table-body>
                                            <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                    <p>CSA01</p>
                                            </x-table.table-body>
                                            <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                    <p>R Belakong</p>
                                            </x-table.table-body>
                                        </tr>
                                        <tr>
                                            <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                    <p>Sharinaz</p>
                                            </x-table.table-body>
                                            <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                    <p>KAR03</p>
                                            </x-table.table-body>
                                            <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                    <p>R-Bangi</p>
                                            </x-table.table-body>
                                        </tr>
                                        <tr>
                                            <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                    <p>Adham</p>
                                            </x-table.table-body>
                                            <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                    <p>KAR04</p>
                                            </x-table.table-body>
                                            <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                    <p>KPC HQ</p>
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
                                <x-form.input label="Officer Name" value="Anis" livewire="" />
                                <x-form.dropdown label="ID Satus" default="yes" value="" >
                                    <option value="" selected>ACTIVE</option>
                                    <option value="">EXPIRED</option>
                                    <option value="">SUSPENDED</option>
                                    <option value="">OFF DUTY / ON LEAVE</option>
                                </x-form.dropdown>
                                <x-form.dropdown label="Branch" default="yes" value="" >
                                    <option value="" selected>R-Balakong</option>
                                    <option value="">R-Bangi</option>
                                    <option value="">R-HQ</option>
                                    <option value="">KPC HQ</option>
                                    <option value="">HQ Account</option>
                                    <option value="">HQ Koperasi</option>
                                </x-form.dropdown>
                                <x-form.input label="Password Status" value="Must Change Password" livewire="" readonly/>
                                <x-form.input label="Position Held" value="SYSTEM ADMINISTRATOR" livewire="" />
                                <x-form.input label="ID Expriy Date" value="2021-10-22" livewire="" />

                                <x-form.dropdown label="Group" default="yes" value="" >
                                    <option value="">Teller Level 1</option>
                                    <option value="">Teller | Supervisor Level 2</option>
                                    <option value="">Supervisor Level 5</option>
                                    <option value="">Bank Officers</option>
                                    <option value=""selected>System Adminstrator</option>
                                    <option value="">CUSTOMER SERVICE</option>
                                </x-form.dropdown>

                                <x-form.input label="ID Creation Date" value="2021-04-23 09:15:45 AM" livewire="" readonly/>
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

            <x-hovertab.content name="7">
                <div class="bg-white py-4 px-10 rounded-lg shadow-lg">
                    <div class="flex items-center">
                        <span class="mr-2 text-base text-gray-500">Group : </span>
                        <x-form.dropdown label="" default="yes" value="" >
                            <option value="" selected>Officers</option>
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
                        <div class="bg-white py-4 px-4 rounded-lg shadow-lg w-full h-64 overflow-y-auto">
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

                                    <tr>
                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                <p>Individual</p>
                                        </x-table.table-body>
                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                            <div class="flex justify-center">
                                                <input type="checkbox" class="form-checkbox" checked>
                                            </div>
                                        </x-table.table-body>
                                    </tr>

                                    <tr>
                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                <p>Company</p>
                                        </x-table.table-body>
                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                            <div class="flex justify-center">
                                                <input type="checkbox" class="form-checkbox" checked>
                                            </div>
                                        </x-table.table-body>
                                    </tr>

                                    <tr>
                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                <p>Address</p>
                                        </x-table.table-body>
                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                            <div class="flex justify-center">
                                                <input type="checkbox" class="form-checkbox" checked>
                                            </div>
                                        </x-table.table-body>
                                    </tr>

                                    <tr>
                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                <p>Relationship</p>
                                        </x-table.table-body>
                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                            <div class="flex justify-center">
                                                <input type="checkbox" class="form-checkbox" checked>
                                            </div>
                                        </x-table.table-body>
                                    </tr>

                                    <tr>
                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                <p>Shareholders</p>
                                        </x-table.table-body>
                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                            <div class="flex justify-center">
                                                <input type="checkbox" class="form-checkbox" checked>
                                            </div>
                                        </x-table.table-body>
                                    </tr>

                                    <tr>
                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                <p>Directors</p>
                                        </x-table.table-body>
                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                            <div class="flex justify-center">
                                                <input type="checkbox" class="form-checkbox" checked>
                                            </div>
                                        </x-table.table-body>
                                    </tr>

                                    <tr>
                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                <p>Exposure</p>
                                        </x-table.table-body>
                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                            <div class="flex justify-center">
                                                <input type="checkbox" class="form-checkbox" checked>
                                            </div>
                                        </x-table.table-body>
                                    </tr>

                                    <tr>
                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                <p>Legal Action</p>
                                        </x-table.table-body>
                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                            <div class="flex justify-center">
                                                <input type="checkbox" class="form-checkbox" checked>
                                            </div>
                                        </x-table.table-body>
                                    </tr>

                                    <tr>
                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                <p>Image</p>
                                        </x-table.table-body>
                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                            <div class="flex justify-center">
                                                <input type="checkbox" class="form-checkbox" checked>
                                            </div>
                                        </x-table.table-body>
                                    </tr>

                                    <tr>
                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                <p>Account Master</p>
                                        </x-table.table-body>
                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                            <div class="flex justify-center">
                                                <input type="checkbox" class="form-checkbox" checked>
                                            </div>
                                        </x-table.table-body>
                                    </tr>

                                    <tr>
                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                <p>Position</p>
                                        </x-table.table-body>
                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                            <div class="flex justify-center">
                                                <input type="checkbox" class="form-checkbox">
                                            </div>
                                        </x-table.table-body>
                                    </tr>

                                    <tr>
                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                <p>Provision</p>
                                        </x-table.table-body>
                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                            <div class="flex justify-center">
                                                <input type="checkbox" class="form-checkbox">
                                            </div>
                                        </x-table.table-body>
                                    </tr>

                                    <tr>
                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                <p>Sinking Fund</p>
                                        </x-table.table-body>
                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                            <div class="flex justify-center">
                                                <input type="checkbox" class="form-checkbox" checked>
                                            </div>
                                        </x-table.table-body>
                                    </tr>

                                    <tr>
                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                <p>PDA Checklist</p>
                                        </x-table.table-body>
                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                            <div class="flex justify-center">
                                                <input type="checkbox" class="form-checkbox" checked>
                                            </div>
                                        </x-table.table-body>
                                    </tr>

                                    <tr>
                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                <p>PD Cheque</p>
                                        </x-table.table-body>
                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                            <div class="flex justify-center">
                                                <input type="checkbox" class="form-checkbox" checked>
                                            </div>
                                        </x-table.table-body>
                                    </tr>

                                    <tr>
                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                <p>PDA Checklist Details</p>
                                        </x-table.table-body>
                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                            <div class="flex justify-center">
                                                <input type="checkbox" class="form-checkbox" checked>
                                            </div>
                                        </x-table.table-body>
                                    </tr>

                                    <tr>
                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                <p>Funds Utilisation</p>
                                        </x-table.table-body>
                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                            <div class="flex justify-center">
                                                <input type="checkbox" class="form-checkbox" checked>
                                            </div>
                                        </x-table.table-body>
                                    </tr>

                                    <tr>
                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                <p>Sinking Fund Details</p>
                                        </x-table.table-body>
                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                            <div class="flex justify-center">
                                                <input type="checkbox" class="form-checkbox" checked>
                                            </div>
                                        </x-table.table-body>
                                    </tr>

                                    <tr>
                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                <p>Collateral</p>
                                        </x-table.table-body>
                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                            <div class="flex justify-center">
                                                <input type="checkbox" class="form-checkbox" checked>
                                            </div>
                                        </x-table.table-body>
                                    </tr>

                                    <tr>
                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                <p>Deposit</p>
                                        </x-table.table-body>
                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                            <div class="flex justify-center">
                                                <input type="checkbox" class="form-checkbox" checked>
                                            </div>
                                        </x-table.table-body>
                                    </tr>

                                    <tr>
                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                <p>Accounts</p>
                                        </x-table.table-body>
                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                            <div class="flex justify-center">
                                                <input type="checkbox" class="form-checkbox">
                                            </div>
                                        </x-table.table-body>
                                    </tr>

                                    <tr>
                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                                <p>Others Action</p>
                                        </x-table.table-body>
                                        <x-table.table-body colspan="" class=" text-sm font-medium text-gray-700 uppercase">
                                            <div class="flex justify-center">
                                                <input type="checkbox" class="form-checkbox">
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
        <x-general.header bgimg=""  title="Gen. Setup" height="8rem"/>
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