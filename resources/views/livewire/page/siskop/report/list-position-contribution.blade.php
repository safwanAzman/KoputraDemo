<div>
    <div class="z-20 relative mx-auto px-0 my-3 text-lg leading-6 font-medium text-cool-gray-900">
        <x-general.grid mobile="1" gap="5" sm="1" md="2" lg="1" xl="1" class="col-span-6  mt-8">
            <div class="">
                <div class="bg-white shadow-lg rounded-md  px-5 py-3">
                    <div class="flex justify-between mb-4">
                        <div class="flex flex-col sm:flex-row mb-4">
                            <div class="flex items-center">
                                <x-form.input name="search" label="Start Date" value="" livewire=""  readonly />
                            </div>
                            <div class="flex items-center ml-0 sm:ml-4">
                                <x-form.input name="search" label="End Date" value="" livewire="" readonly/>
                            </div>
                        </div>
                        <div class="mt-4">
                            <x-general.button.icon href="#" target="" label="Excel" color="yellow" livewire="">
                                <x-heroicon-o-document-text class="-ml-0.5 mr-2 h-4 w-4" />
                            </x-general.button.icon>

                            <x-general.button.icon href="#" target="_blank" label="PDF" color="yellow" livewire="">
                                <x-heroicon-o-document-report class="-ml-0.5 mr-2 h-4 w-4" />
                            </x-general.button.icon>
                        </div>
                    </div>
                    <x-general.table>
                        <x-slot name="thead">
                            <x-general.table-header class="text-center" value="Membership. No" sort="yes" />
                            <x-general.table-header class="text-left" value="Name" sort="yes" />
                            <x-general.table-header class="text-center" value="Type" sort="yes" />
                            <x-general.table-header class="text-center" value="Status" sort="yes" />
                            <x-general.table-header class="text-center" value="Last Sales Date" sort="yes" />
                            <x-general.table-header class="text-right" value="Last Sales Amount " sort="yes" />
                            <x-general.table-header class="text-center" value="Last Credited Date" sort="yes" />
                            <x-general.table-header class="text-right" value="Last Credited Amount" sort="yes" />
                            <x-general.table-header class="text-right" value="Total" sort="yes" />
                        </x-slot>

                        <x-slot name="tbody">

                            <tr>
                                <x-general.table-body colspan="" class="text-center font-medium text-gray-900">
                                    <p class="text-xs">1888</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-left font-medium text-gray-900">
                                    <p class="text-xs uppercase">A Majid Bin Amdan</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-center font-medium text-gray-900">
                                    <p class="text-xs">Regular Member</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-center font-medium text-gray-900">
                                    <p class="text-xs">Stop</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-center font-medium text-gray-900">
                                    <p class="text-xs">30/04/2018</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-right font-medium text-gray-900">
                                    <p class="text-xs">1208.82</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-center font-medium text-gray-900">
                                    <p class="text-xs"></p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-right font-medium text-gray-900">
                                    <p class="text-xs">0.00</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-right font-medium text-gray-900">
                                    <p class="text-xs">1208.82</p>
                                </x-general.table-body>
                            </tr>

                            <tr>
                                <x-general.table-body colspan="" class="text-center font-medium text-gray-900">
                                    <p class="text-xs">4876</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-left font-medium text-gray-900">
                                    <p class="text-xs uppercase">Aan Nisa Binti Mohd Aziz</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-center font-medium text-gray-900">
                                    <p class="text-xs">Regular Member</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-center font-medium text-gray-900">
                                    <p class="text-xs">Active</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-center font-medium text-gray-900">
                                    <p class="text-xs">25/05/2020</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-right font-medium text-gray-900">
                                    <p class="text-xs">50.00</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-center font-medium text-gray-900">
                                    <p class="text-xs"></p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-right font-medium text-gray-900">
                                    <p class="text-xs">0.00</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-right font-medium text-gray-900">
                                    <p class="text-xs">1821.70</p>
                                </x-general.table-body>
                            </tr>

                            <tr>
                                <x-general.table-body colspan="" class="text-center font-medium text-gray-900">
                                    <p class="text-xs">2956</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-left font-medium text-gray-900">
                                    <p class="text-xs uppercase">Ab Mansor Jinin</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-center font-medium text-gray-900">
                                    <p class="text-xs">Regular Member</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-center font-medium text-gray-900">
                                    <p class="text-xs">Active</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-center font-medium text-gray-900">
                                    <p class="text-xs">25/05/2020</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-right font-medium text-gray-900">
                                    <p class="text-xs">70.00</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-center font-medium text-gray-900">
                                    <p class="text-xs"></p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-right font-medium text-gray-900">
                                    <p class="text-xs">0.00</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-right font-medium text-gray-900">
                                    <p class="text-xs">12538.82</p>
                                </x-general.table-body>
                            </tr>

                            <tr>
                                <x-general.table-body colspan="" class="text-center font-medium text-gray-900">
                                    <p class="text-xs">0603</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-left font-medium text-gray-900">
                                    <p class="text-xs uppercase">Ab Rahman Bin Md. Akib</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-center font-medium text-gray-900">
                                    <p class="text-xs">Lifetime Member</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-center font-medium text-gray-900">
                                    <p class="text-xs">Stop</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-center font-medium text-gray-900">
                                    <p class="text-xs">30/12/2019</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-right font-medium text-gray-900">
                                    <p class="text-xs">347.28</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-center font-medium text-gray-900">
                                    <p class="text-xs">09/07/2020</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-right font-medium text-gray-900">
                                    <p class="text-xs">4198.88</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-right font-medium text-gray-900">
                                    <p class="text-xs">0.00</p>
                                </x-general.table-body>
                            </tr>

                            <tr>
                                <x-general.table-body colspan="" class="text-center font-medium text-gray-900">
                                    <p class="text-xs">0949</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-left font-medium text-gray-900">
                                    <p class="text-xs uppercase">Ab. Aziz Bin Loman</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-center font-medium text-gray-900">
                                    <p class="text-xs">Regular Member</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-center font-medium text-gray-900">
                                    <p class="text-xs">Stop</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-center font-medium text-gray-900">
                                    <p class="text-xs">25/12/2018</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-right font-medium text-gray-900">
                                    <p class="text-xs">50.00</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-center font-medium text-gray-900">
                                    <p class="text-xs">18/12/2018</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-right font-medium text-gray-900">
                                    <p class="text-xs">11147.71</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-right font-medium text-gray-900">
                                    <p class="text-xs">0.00</p>
                                </x-general.table-body>
                            </tr>

                            <tr>
                                <x-general.table-body colspan="" class="text-center font-medium text-gray-900">
                                    <p class="text-xs">2292</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-left font-medium text-gray-900">
                                    <p class="text-xs uppercase">Ab. Razak Bin Ab. Raman</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-center font-medium text-gray-900">
                                    <p class="text-xs">Regular Member</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-center font-medium text-gray-900">
                                    <p class="text-xs">Stop</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-center font-medium text-gray-900">
                                    <p class="text-xs">30/04/2018</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-right font-medium text-gray-900">
                                    <p class="text-xs">0.00</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-center font-medium text-gray-900">
                                    <p class="text-xs"></p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-right font-medium text-gray-900">
                                    <p class="text-xs">0.00</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-right font-medium text-gray-900">
                                    <p class="text-xs">0.00</p>
                                </x-general.table-body>
                            </tr>

                            <tr>
                                <x-general.table-body colspan="" class="text-center font-medium text-gray-900">
                                    <p class="text-xs">2551</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-left font-medium text-gray-900">
                                    <p class="text-xs uppercase">Ab. Sofi Bin Mustapa</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-center font-medium text-gray-900">
                                    <p class="text-xs">Regular Member</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-center font-medium text-gray-900">
                                    <p class="text-xs">Active</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-center font-medium text-gray-900">
                                    <p class="text-xs">25/07/2020</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-right font-medium text-gray-900">
                                    <p class="text-xs">50.00</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-center font-medium text-gray-900">
                                    <p class="text-xs"></p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-right font-medium text-gray-900">
                                    <p class="text-xs">0.00</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-right font-medium text-gray-900">
                                    <p class="text-xs">11834.47</p>
                                </x-general.table-body>
                            </tr>

                            <tr>
                                <x-general.table-body colspan="" class="text-center font-medium text-gray-900">
                                    <p class="text-xs">1964</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-left font-medium text-gray-900">
                                    <p class="text-xs uppercase">Ab. Wahid @ Azman Ab. Wahab(K)</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-center font-medium text-gray-900">
                                    <p class="text-xs">Regular Member</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-center font-medium text-gray-900">
                                    <p class="text-xs">Stop</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-center font-medium text-gray-900">
                                    <p class="text-xs">30/04/2018</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-right font-medium text-gray-900">
                                    <p class="text-xs">0.00</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-center font-medium text-gray-900">
                                    <p class="text-xs"></p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-right font-medium text-gray-900">
                                    <p class="text-xs">0.00</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-right font-medium text-gray-900">
                                    <p class="text-xs">0.00</p>
                                </x-general.table-body>
                            </tr>

                            <tr>
                                <x-general.table-body colspan="" class="text-center font-medium text-gray-900">
                                    <p class="text-xs">2021</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-left font-medium text-gray-900">
                                    <p class="text-xs uppercase">Ab. Wahid Sulaiman</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-center font-medium text-gray-900">
                                    <p class="text-xs">Regular Member</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-center font-medium text-gray-900">
                                    <p class="text-xs">Stop</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-center font-medium text-gray-900">
                                    <p class="text-xs">30/04/2018</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-right font-medium text-gray-900">
                                    <p class="text-xs">0.00</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-center font-medium text-gray-900">
                                    <p class="text-xs"></p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-right font-medium text-gray-900">
                                    <p class="text-xs">0.00</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-right font-medium text-gray-900">
                                    <p class="text-xs">0.00</p>
                                </x-general.table-body>
                            </tr>

                            <tr>
                                <x-general.table-body colspan="" class="text-center font-medium text-gray-900">
                                    <p class="text-xs">2168</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-left font-medium text-gray-900">
                                    <p class="text-xs uppercase">Abang Sahriman Bin Abang Abu Bakar</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-center font-medium text-gray-900">
                                    <p class="text-xs">Regular Member</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-center font-medium text-gray-900">
                                    <p class="text-xs">Active</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-center font-medium text-gray-900">
                                    <p class="text-xs">25/07/2020</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-right font-medium text-gray-900">
                                    <p class="text-xs">110.00</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-center font-medium text-gray-900">
                                    <p class="text-xs"></p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-right font-medium text-gray-900">
                                    <p class="text-xs">0.00</p>
                                </x-general.table-body>

                                <x-general.table-body colspan="" class="text-right font-medium text-gray-900">
                                    <p class="text-xs">19185.59</p>
                                </x-general.table-body>
                            </tr>

                        </x-slot>
                    </x-general.table>
                    <br>

                </div>
            </div>
        </x-general.grid>
    </div>

    <!-- header -->
    <div class="absolute top-0 left-0 right-0 z-0">
        <x-general.header bgimg="" title="LIST OF CURRENT POSITION SALES TRANSACTIONS" />
    </div>

</div>
