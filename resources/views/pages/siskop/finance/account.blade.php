@extends('layouts.base')

@section('content')

<div class="mx-auto px-0 my-3 text-lg leading-6 font-medium text-cool-gray-900 sm:px-6 lg:px-8">
    <div class="relative">
        <x-general.page-title class="mb-0" title="Financing Information"/>
        <a href="{{route('user.cif.individual.show', $account->customer->uuid)}}" class="flex items-center mb-4 absolute right-0 top-0 my-3 mx-2">
            <div class="printHide rounded-full  flex items-center py-2 px-2  text-bold justify-center bg-white">
                <x-heroicon-o-arrow-left class="h-4 w-4 text-{{auth()->user()->primary_color}}-700"/>
            </div>
        </a>
    </div>
    <div class="bg-white sm:rounded-lg shadow px-5 py-3">
        <div class="grid grid-cols-12 gap-6" x-data="{ active: 0 }">
            <div class="flex flex-col-reverse col-span-12 lg:col-span-12 xxl:col-span-12 lg:block">
                <x-general.card class="bg-white shadow-lg p-4">
                    <div class="border-b border-gray-200 text-base font-semibold mb-4">
                        <div class="flex-col lg:flex-row flex justify-between text-sm font-semibold my-2">
                            <div>
                                <p class="py-2 text-base">Category</p>
                            </div>
                            <div class="flex space-x-3 bg-pink-600 text-white py-2 px-4 rounded-lg">
                                <p>Name: <span>{{$account->customer->name}}</span></p>
                                <p>Account: <span>{{$account->account_no}}</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="flex overflow-x-auto">
                        <x-hovertab.title name="0"><x-heroicon-o-clipboard-list class="w-6 h-6 mr-2"/>
                            <span class="text-sm tooltip-text bg-{{auth()->user()->primary_color}}-500 border rounded border-{{auth()->user()->primary_color}}-500 text-white -mt-14">Account Master</span>
                        </x-hovertab.title>
                        <x-hovertab.title name="1"><x-heroicon-o-device-mobile class="w-6 h-6 mr-2"/>
                            <span class="text-sm tooltip-text bg-{{auth()->user()->primary_color}}-500 border rounded border-{{auth()->user()->primary_color}}-500 text-white -mt-14">Account Position</span>
                        </x-hovertab.title>
                        {{-- <x-hovertab.title name="2"><x-heroicon-o-presentation-chart-line class="w-6 h-6 mr-2"/>
                            <span class="text-sm tooltip-text bg-{{auth()->user()->primary_color}}-500 border rounded border-{{auth()->user()->primary_color}}-500 text-white -mt-14">Collateral</span>
                        </x-hovertab.title>
                        <x-hovertab.title name="3"><x-heroicon-o-pencil-alt class="w-6 h-6 mr-2"/>
                            <span class="text-sm tooltip-text bg-{{auth()->user()->primary_color}}-500 border rounded border-{{auth()->user()->primary_color}}-500 text-white -mt-14">FRS 139</span>
                        </x-hovertab.title>
                        <x-hovertab.title name="4"><x-heroicon-o-currency-dollar class="w-6 h-6 mr-2"/>
                            <span class="text-sm tooltip-text bg-{{auth()->user()->primary_color}}-500 border rounded border-{{auth()->user()->primary_color}}-500 text-white -mt-14">Disbursement</span>
                        </x-hovertab.title> --}}
                        <x-hovertab.title name="5"><x-heroicon-o-play class="w-6 h-6 mr-2"/>
                            <span class="text-sm tooltip-text bg-{{auth()->user()->primary_color}}-500 border rounded border-{{auth()->user()->primary_color}}-500 text-white -mt-14">Repayment Schedule</span>
                        </x-hovertab.title>
                        <x-hovertab.title name="6"><x-heroicon-o-play class="w-6 h-6 mr-2"/>
                            <span class="text-sm tooltip-text bg-{{auth()->user()->primary_color}}-500 border rounded border-{{auth()->user()->primary_color}}-500 text-white -mt-14">Statements</span>
                        </x-hovertab.title>
                        {{-- <x-hovertab.title name="7"><x-heroicon-o-bookmark class="w-6 h-6 mr-2"/>
                            <span class="text-sm tooltip-text bg-{{auth()->user()->primary_color}}-500 border rounded border-{{auth()->user()->primary_color}}-500 text-white -mt-14">Sinking Fund</span>
                        </x-hovertab.title>
                        <x-hovertab.title name="8"><x-heroicon-o-folder-open class="w-6 h-6 mr-2"/>
                            <span class="text-sm tooltip-text bg-{{auth()->user()->primary_color}}-500 border rounded border-{{auth()->user()->primary_color}}-500 text-white -mt-14">PDA Checklist</span>
                        </x-hovertab.title>
                        <x-hovertab.title name="9"><x-heroicon-o-collection class="w-6 h-6 mr-2"/>
                            <span class="text-sm tooltip-text bg-{{auth()->user()->primary_color}}-500 border rounded border-{{auth()->user()->primary_color}}-500 text-white -mt-14">PD Cheque</span>
                        </x-hovertab.title>
                        <x-hovertab.title name="10"><x-heroicon-o-shield-exclamation class="w-6 h-6 mr-2"/>
                            <span class="text-sm tooltip-text bg-{{auth()->user()->primary_color}}-500 border rounded border-{{auth()->user()->primary_color}}-500 text-white -mt-14">Owing</span>
                        </x-hovertab.title>
                        <x-hovertab.title name="11"><x-heroicon-o-flag class="w-6 h-6 mr-2"/>
                            <span class="text-sm tooltip-text bg-{{auth()->user()->primary_color}}-500 border rounded border-{{auth()->user()->primary_color}}-500 text-white -mt-14">Other Action</span>
                        </x-hovertab.title> --}}
                    </div>
                </x-general.card>
            </div>
            <div class="col-span-12 lg:col-span-12 xxl:col-span-12">
                <x-hovertab.content name="0">@livewire('finance.master', ['uuid' => $uuid])</x-hovertab.content>
                <x-hovertab.content name="1">@livewire('finance.position', ['uuid' => $uuid])</x-hovertab.content>
                {{-- <x-hovertab.content name="2"><livewire:finance.collateral-master/></x-hovertab.content>
                <x-hovertab.content name="3"><livewire:finance.frs139/></x-hovertab.content>
                <x-hovertab.content name="4"><livewire:finance.disbursement/></x-hovertab.content> --}}
                <x-hovertab.content name="5">@livewire('finance.repayment-schedule', ['uuid' => $uuid])</x-hovertab.content>
                <x-hovertab.content name="6">@livewire('finance.statements',['uuid' => $uuid])</x-hovertab.content>
                {{-- <x-hovertab.content name="7"><livewire:finance.sinking-fund/></x-hovertab.content>
                <x-hovertab.content name="8"><livewire:finance.pda-checklist/></x-hovertab.content>
                <x-hovertab.content name="9"><livewire:finance.pd-cheque/></x-hovertab.content>
                <x-hovertab.content name="10"><livewire:finance.owing/></x-hovertab.content>
                <x-hovertab.content name="11"><livewire:finance.other-action/></x-hovertab.content> --}}
            </div>
        </div>
    </div>
</div>

@endsection
