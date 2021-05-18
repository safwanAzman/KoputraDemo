@extends('layouts.app')

@section('content')

<div class="w-screen h-screen bg-gray-800  flex items-center justify-center ">

    <div class="w-full  mx-auto py-6 sm:px-6 lg:px-8">
        <div class="font-bold text-2xl text-white uppercase text-center mb-4">
            <h1>KOPERASI PELABURAN KAKITANGAN BANK MUAMALAT MALAYSIA BERHAD</h1>
        </div>
        <div class="flex justify-center  flex-col md:flex-row w-full lg:space-x-2 space-y-2 lg:space-y-0 mb-2 lg:mb-4">
            <a href="{{route('members-produk')}}" class="p-2 text-center cursor-pointer">
                <div
                    class="py-16 w-64 rounded-lg overflow-hidden shadow-lg bg-pink-600 transform  hover:scale-105 transition duration-300 ">
                    <div class="space-y-10">
                        <div class="px-6 py-4">
                            <div class="space-y-5">
                                <div class="font-bold text-2xl mb-2 text-white">MEMBERS</div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>

            <a href="{{route('non-member')}}" class="p-2 text-center cursor-pointer">
                <div
                    class="py-16 w-64 rounded-lg overflow-hidden shadow-lg bg-pink-600 transform  hover:scale-105 transition duration-300 ">
                    <div class="space-y-10">
                        <div class="px-6 py-4">
                            <div class="space-y-5">
                                <div class="font-bold text-2xl mb-2 text-white">NON-MEMBERS</div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>

            {{-- <a href="{{route('permohonan')}}" class="p-2 text-center cursor-pointer">
                <div
                    class="py-16 w-64 rounded-lg overflow-hidden shadow-lg bg-indigo-600 transform  hover:scale-105 transition duration-300 ">
                    <div class="space-y-10">
                        <div class="px-6 py-4">
                            <div class="space-y-5">
                                <div class="font-bold text-2xl mb-2 text-white">ADMIN KOPUTRA</div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>

            <a href="{{route('alk')}}" class="p-2 text-center cursor-pointer">
                <div
                    class="py-16 w-64 rounded-lg overflow-hidden shadow-lg bg-yellow-400 transform  hover:scale-105 transition duration-300 ">
                    <div class="space-y-10">
                        <div class="px-6 py-4">
                            <div class="space-y-5">
                                <div class="font-bold text-2xl mb-2 text-white">ALK</div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>

            <a href="{{route('siskop.index')}}" class="p-2 text-center cursor-pointer">
                <div
                    class="py-16 w-64 rounded-lg overflow-hidden shadow-lg bg-teal-600 transform  hover:scale-105 transition duration-300 ">
                    <div class="space-y-10">
                        <div class="px-6 py-4">
                            <div class="space-y-5">
                                <div class="font-bold text-2xl mb-2 text-white">SISKOP</div>
                            </div>
                        </div>
                    </div>
                </div>
            </a> --}}

           

        </div>
    </div>

</div>
@endsection
