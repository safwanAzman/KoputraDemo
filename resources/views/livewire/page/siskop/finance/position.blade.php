
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
        <!-- Start: Credit Position Details-->
        <x-general.grid mobile="1" gap="5" sm="1" md="1" lg="1" xl="1" class="col-span-6">
            <x-general.card class="bg-white shadow-lg p-4">
                <div class="flex justify-between">
                <h1 class="font-semibold text-indigo-500">Account Position Details</h1>
                </div>
                <x-general.grid mobile="1" gap="5" sm="1" md="1" lg="2" xl="3" class="mt-5">
                    <div class="mb-4">
                        <x-form.input label="Disbursed Amount" value="{{number_format($account_position['disbursed_amount'],2,'.',',')}}" livewire=""/>
                    </div>

                    <div class="mb-4">
                        <x-form.input label="Undrawn Amount" value="{{number_format($account_position['undrawn_amount'],2,'.',',')}}" livewire=""/>
                    </div>

                    <div class="mb-4">
                        <x-form.input label="Report Date" value="{{isset($account_position['report_date']) ? date('d/m/Y',strtotime($account_position['report_date'])) : ''}}" livewire=""/>
                    </div>

                    <div class="mb-4">
                        <x-form.input label="Balance Outstanding" value="{{number_format($account_position['bal_outstanding'],2,'.',',')}}" livewire=""/>
                    </div>

                    <div class="mb-4">
                        <x-form.input label="Principal Outstanding" value="{{number_format($account_position['prin_outstanding'],2,'.',',')}}" livewire=""/>
                    </div>

                    <div class="mb-4">
                        <x-form.input label="Profit Outstanding" value="{{number_format($account_position['uei_outstanding'],2,'.',',')}}" livewire=""/>
                    </div>

                    <div class="mb-4">
                        <x-form.input label="Payment Earned" value="{{number_format($account_position['payment_amount'],2,'.',',')}}" livewire=""/>
                    </div>

                    <div class="mb-4">
                        <x-form.input label="Principal Earned" value="{{number_format($account_position['princp_collected'],2,'.',',')}}" livewire=""/>
                    </div>

                    <div class="mb-4">
                        <x-form.input label="Profit Earned" value="{{number_format($account_position['tot_profit_earned'],2,'.',',')}}" livewire=""/>
                    </div>

                    <div class="mb-4">
                        <x-form.input label="Instalment No." value="{{$account_position['instalment_no']}}" livewire=""/>
                    </div>

                    <div class="mb-4">
                        <x-form.input label="Month Arrears" value="{{$account_position['month_arrears']}}" livewire=""/>
                    </div>

                    <div class="mb-4">
                        <x-form.input label="Instal Arrears" value="{{number_format($account_position['instal_arrears'],2,'.',',')}}" livewire=""/>
                    </div>

                    <div class="mb-4">
                        <x-form.input label="Sinking Fund" value="{{number_format($account_position['sinking_fund'],2,'.',',')}}" livewire=""/>
                    </div>

                    <div class="mb-4">
                        <x-form.input label="Advance Payment" value="{{number_format($account_position['advance_payment'],2,'.',',')}}" livewire=""/>
                    </div>

                    <div class="mb-4">
                        <x-form.input label="Instal Due Date" value="{{isset($account_position['instal_due_date']) ? date('d/m/Y',strtotime($account_position['instal_due_date'])) : ''}}" livewire=""/>
                    </div>

                    <div class="mb-4">
                        <x-form.input label="Last Payment Date" value="{{isset($account_position['last_payment_date']) ? date('d/m/Y',strtotime($account_position['last_payment_date'])) : ''}}" livewire=""/>
                    </div>

                    <div class="mb-4">
                        <x-form.input label="Last Instal Date" value="{{isset($account_position['last_instal_date']) ? date('d/m/Y',strtotime($account_position['last_instal_date'])) : ''}}" livewire=""/>
                    </div>

                    <div class="mb-4">
                        <x-form.input label="Last Instal Due Date" value="{{isset($account_position['last_instal_due_date']) ? date('d/m/Y',strtotime($account_position['last_instal_due_date'])) : ''}}" livewire=""/>
                    </div>
                </x-general.grid>
            </x-general.card>
            <!-- End: Credit Position Details-->
        </x-general.grid>
    </x-slot>
</x-form.basic-form>

<div class="flex-shrink-0 relative overflow-hidden bg-indigo-500 rounded-lg  shadow-lg hidden">
    <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none" style="transform: scale(1.5); opacity: 0.1;">
        <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white"/>
        <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white"/>
    </svg>
    <div class="relative p-4">
        <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3" style="background: radial-gradient(black, transparent 0%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;"></div>
        <div class="flex justify-between text-white">
            <span class="block font-semibold text-base">last Modified on : 12/11/2020  &nbsp;&nbsp; By: dbo</span>
            <label class="">
                <span class="text-base text-white">
                    Verified Status
                </span>
                <input class="ml-2 leading-tight" type="checkbox">
            </label>
        </div>
    </div>
</div>






