<x-form.basic-form action="">
    <x-slot name="content">
        <div class="flex justify-end px-2 py-2">
            <a href="#" class="bg-indigo-500 hover:bg-indigo-700 text-white text-sm py-2 px-4 rounded ml-2">
                Edit
            </a>
            <a href="#" class="bg-indigo-500 hover:bg-indigo-700 text-white text-sm py-2 px-4 rounded ml-2">
                Save
            </a>
        </div>
        <x-general.grid mobile="1" gap="5" sm="1" md="1" lg="1" xl="1" class="col-span-6">
            <!-- Start: Account Master Details-->
            <div class="">
                <x-general.card class="bg-white shadow-lg p-4">

                    <h1 class="font-semibold text-indigo-500">Account Master Details</h1>

                    <x-general.grid mobile="1" gap="5" sm="1" md="1" lg="2" xl="3" class="mt-5">
                        <div class="mb-4">
                            <x-form.input type="text" label="Account No" value="{{$account['account_no']}}" livewire=""/>
                        </div>

                        <div class="mb-4">
                            {{-- <x-form.input type="text" label="Product" value="{{$account['product']}}" livewire=""/> --}}
                        </div>

                        <div class="mb-4">
                            {{-- <x-form.input type="text" label="Concept" value="{{$account['concept']}}" livewire=""/> --}}
                        </div>

                        <div class="mb-4">
                            <x-form.input type="text" label="Approved Amount" value="{{number_format($account['approved_limit'],2,'.',',')}}" livewire=""/>
                        </div>

                        <div class="mb-4">
                            <x-form.input type="text" label="Approved Date" value="{{date('d/m/Y',strtotime($account['approved_date']))}}" livewire=""/>
                        </div>

                        <div class="mb-4">
                            <x-form.input type="text" label="Creation Date" value="{{date('d/m/Y',strtotime($account['opened_date']))}}" livewire=""/>
                        </div>

                        <div class="mb-4">
                            <x-form.input type="text" label="Duration (Monthly)" value="{{$account['duration']}}" livewire=""/>
                        </div>

                        <div class="mb-4">
                            <x-form.input type="text" label="Purchase Price" value="{{number_format($account['purchase_price'],2,'.',',')}}" livewire=""/>
                        </div>

                        <div class="mb-4">
                            <x-form.input type="text" label="Selling Price" value="{{number_format($account['selling_price'],2,'.',',')}}" livewire=""/>
                        </div>

                        <div class="mb-4">
                            <x-form.dropdown label="Payment Term" value="payment_term" default="no">
                                <option value="m">Monthly</option>
                            </x-form.dropdown>
                        </div>

                        <div class="mb-4">
                            <x-form.input type="text" label="Profit Rate" value="{{$account['profit_rate']}}" livewire=""/>
                        </div>

                        <div class="mb-4">
                            <x-form.input type="text" label="Instal Amount" value="{{number_format($account['instal_amount'],2,'.',',')}}" livewire=""/>
                        </div>

                        <div class="mb-4">
                            <x-form.dropdown label="Account Status" value="account.account_status" default="no">
                                <option value="1">ACTIVE</option>
                            </x-form.dropdown>
                        </div>

                        <div class="mb-4">
                            <x-form.input type="text" label="Start Disburse Date" value="{{date('d/m/Y',strtotime($account['start_disbursed_date']))}}" livewire=""/>
                        </div>

                        <div class="mb-4">
                            <x-form.input type="text" label="Other Charges" value="{{number_format($account['monthly_bpa'],2,'.',',')}}" livewire=""/>
                        </div>

                        <div class="mb-4">
                            <x-form.input type="text" label="Account Status Change Date" value="{{isset($account['acct_stat_chg_date']) ? date('d/m/Y',strtotime($account['acct_stat_chg_date'])): ''}}" livewire=""/>
                        </div>

                        <div class="mb-4">
                            <x-form.input type="text" label="Start Instal Date" value="{{date('d/m/Y',strtotime($account['start_instal_date']))}}" livewire=""/>
                        </div>

                        <div class="mb-4">
                            <x-form.input type="text" label="Contribution Amount" value="{{number_format($account['monthly_fees'],2,'.',',')}}" livewire=""/>
                        </div>

                        <div class="mb-4">
                            <x-form.input type="text" label="Policy No" value="{{$account['insurance_policy_no']}}" livewire=""/>
                        </div>

                        <div class="mb-4">
                            <x-form.input type="text" label="Policy Date" value="{{isset($account['acct_stat_chg_date']) ? date('d/m/Y',strtotime($account['insurance_policy_date'])): ''}}" livewire=""/>
                        </div>

                        <div class="mb-4">
                            <x-form.input type="text" label="Commencement Date" value="{{isset($account['acct_stat_chg_date']) ? date('d/m/Y',strtotime($account['insurance_comm_date'])): ''}}" livewire=""/>
                        </div>

                    </x-general.grid>

                </x-general.card>
            </div>
            <!-- End: Account Master Details-->
        </x-general.grid>

        {{-- <x-general.grid mobile="1" gap="5" sm="1" md="1" lg="1" xl="1" class="col-span-6 mt-5 hidden">
            <!-- Start: Step-Up Instalment-->
            <div class="">
                <x-general.card class="bg-white shadow-lg p-4">

                    <h1 class="font-semibold text-indigo-500">Step-Up Instalment</h1>

                    <x-general.grid mobile="1" gap="2" sm="1" md="1" lg="1" xl="2" class="mt-5">
                        <div class="mb-4">
                            <label class="mt-1 md:w-2/3 block">
                                <span class="text-sm text-gray-700 font-semibold">Step-Up Instalment</span>
                                <input class="ml-3 leading-tight" type="checkbox">
                            </label>
                        </div>

                        <div class="mb-4"></div>

                        <div class="mb-4">
                            <x-form.input label="Start Month" value="" livewire="" />
                        </div>

                        <div class="mb-4">
                            <x-form.input label="End Month" value="" livewire="" />
                        </div>

                    </x-general.grid>

                </x-general.card>
            </div>
            <!-- End: Step-Up Instalment-->
        </x-general.grid> --}}


        {{-- <x-general.grid mobile="1" gap="5" sm="1" md="1" lg="1" xl="1" class="col-span-6 mt-5 hidden">
            <!-- Start: Sinking Fund-->
            <div class="">
                <x-general.card class="bg-white shadow-lg p-4">

                    <h1 class="font-semibold text-indigo-500">Sinking Fund</h1>

                    <x-general.grid mobile="1" gap="2" sm="1" md="1" lg="1" xl="2" class="mt-5">
                        <div class="mb-4">
                            <label class="mt-1 md:w-2/3 block">
                                <span class="text-sm text-gray-700 font-semibold">Include Sinking Fund</span>
                                <input class="ml-3 leading-tight" type="checkbox">
                            </label>
                        </div>
                        <div class="mb-4"></div>


                        <div class="mb-4">
                            <x-form.input label="Rate (%)" value="" livewire="" />
                        </div>

                        <div class="mb-4">
                            <x-form.input label="Instal Amount" value="" livewire="" />
                        </div>

                        <div class="mb-4">
                            <x-form.input label="Grace (Month)" value="" livewire="" />
                        </div>

                        <div class="mb-4">
                            <x-form.input label="Total Amount" value="" livewire="" />
                        </div>
                    </x-general.grid>
                </x-general.card>
            </div>
            <!-- End: Sinking Fund-->
        </x-general.grid> --}}

        {{-- <x-general.grid mobile="1" gap="5" sm="1" md="1" lg="1" xl="1" class="col-span-6 mt-5 hidden">
            <!-- Start: Account Status-->
            <div class="">
                <x-general.card class="bg-white shadow-lg p-4">

                    <h1 class="font-semibold text-indigo-500">Account Status</h1>

                    <x-general.grid mobile="1" gap="2" sm="1" md="1" lg="1" xl="2" class="mt-5">

                        <div class="mb-4">
                            <x-form.dropdown label="Co.Business Status" value="">
                                <option value=""></option>
                            </x-form.dropdown>
                        </div>

                        <div class="mb-4">
                            <x-form.dropdown label="Account Status" value="">
                                <option value=""></option>
                            </x-form.dropdown>
                        </div>

                        <div class="mb-4">
                            <x-form.dropdown label="Flag Status" value="">
                                <option value=""></option>
                            </x-form.dropdown>
                        </div>

                        <div class="mb-4">
                            <x-form.input type="text" label="Account Status Change Date" value="" livewire="" />
                        </div>

                        <div class="mb-4">
                            <x-form.input type="text" label="Date" value="" livewire="" />
                        </div>

                        <div class="mb-4">
                            <x-form.dropdown label="Remarks" value="">
                                <option value=""></option>
                            </x-form.dropdown>
                        </div>

                    </x-general.grid>
                </x-general.card>
            </div>
            <!-- End: Account Status-->
        </x-general.grid> --}}

    </x-slot>

</x-form.basic-form>
