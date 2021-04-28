<div>
    <div class="z-20 relative mx-auto px-0 my-3 text-lg leading-6 font-medium text-cool-gray-900">
        <x-general.grid mobile="1" gap="5" sm="1" md="2" lg="1" xl="1" class="col-span-6 items-center mt-8">
            <div class="bg-white py-10 px-10 rounded-lg shadow-lg">
                {{-- <div class="flex justify-end">
                    <a href="{{route('members')}}" class="flex px-4 py-1 text-sm font-bold text-white bg-indigo-600  hover:bg-indigo-700 rounded">
                        <div class="flex items-center space-x-2">
                            <x-heroicon-o-arrow-left class="w-4 h-4" /> 
                            <p>Kembali</p>
                        </div>
                    </a>
                </div> --}}
                <x-form.basic-form>
                    <x-slot name="content">
                        <x-general.grid mobile="1" gap="4" sm="1" md="2" lg="2" xl="2" class="col-span-6">
                            <x-form.input label="Nama"  value="MOHD AIZUDDIN BIN MOHD YUSOFF" readonly/>
                            <x-form.input label="No. Kad Pengenalan"  value="850409035147" readonly/>
                            <div>
                                <span class="block text-sm font-semibold leading-5 text-gray-700">Jantina</span>
                                <div class="mt-2">
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio" name="name" value="l" checked>
                                        <span class="ml-2 text-sm text-gray-700">Lelaki</span>
                                    </label>
                                    <label class="inline-flex items-center ml-6">
                                        <input type="radio" class="form-radio" name="name" value="">
                                        <span class="ml-2 text-sm text-gray-700">Perempuan</span>
                                    </label>
                                    
                                </div>
                            </div>
                            <x-form.input label="No. Pendaftaran Member"  value="178179" disabled/>
                            <x-form.dropdown label="Kaum" default="yes" value="" >
                                <option value="1" selected>MELAYU</option>
                                <option value="2">CINA</option>
                                <option value="3">INDIA</option>
                                <option value="4">SIAM</option>
                                <option value="5">IBAN</option>
                                <option value="6">BIDAYUH</option>
                                <option value="7">KADAZAN</option>
                                <option value="8">MELANAU</option>
                                <option value="9">INDIA MUSLIM</option>
                                <option value="10">DUSUN</option>
                                <option value="11">ORANG ASLI</option>
                                <option value="12">BUMIPUTERA SARAWAK</option>
                                <option value="13">BUMIPUTERA SABAH</option>
                                <option value="14">LAIN - LAIN</option>
                            </x-form.dropdown>
                            <x-form.dropdown label="Agama" default="yes" value="" >
                                <option value="1" selected="">ISLAM</option>
                                <option value="2">KRISTIAN</option>
                                <option value="3">BUDDHA</option>
                                <option value="4">HINDU</option>
                                <option value="5">LAIN - LAIN</option>
                            </x-form.dropdown>
                            <x-form.dropdown label="Warganegara" default="yes" value="" >
                                <option value="1" selected="">MALAYSIA</option>
                                <option value="2">INDONESIA</option>
                                <option value="3">SINGAPURA</option>
                                <option value="4">THAILAND</option>
                                <option value="5">FILIPINA</option>
                                <option value="6">BRUNAI</option>
                                <option value="7">VIETNAM</option>
                                <option value="8">KEMBOJA</option>
                                <option value="9">MYANMAR</option>
                            </x-form.dropdown>
                            <x-form.dropdown label="Taraf Perkahwinan" default="yes" value="" >
                                <option value="" selected>BUJANG</option>
                                <option value="">BERKAHWIN</option>
                            </x-form.dropdown>
                            <x-form.dropdown label="Jenis Kediaman" default="yes" value="" >
                                <option value="" selected>SENDIRI</option>
                                <option value="">KELUARGA</option>
                                <option value="">SEWA</option>
                                <option value="">KAIN-LAIN</option>
                            </x-form.dropdown>
                            <x-form.input label="Jumlah Tanggungan"  value="1" />
                            <x-form.input label="No. Telefon Bimbit"  value="0183546808" />
                            <x-form.input label="No. Telefon Rumah"  value="" />
                            <x-form.input label="No. Akaun Bank"  value="8700954277" />
                            <x-form.input label="Emel Persendirian"  value="aizuddin.yusoff@ymail.com" />
                            <x-form.input label="Emel Kerja"  value="" />
                        </x-general.grid>
                        <x-form2.address class="" label="Alamat" value1="Lot 900, Jalan 2G," value2="Kg. Baru Lanjut," value3="" value4="Sepang" value5="43650"
                            value6="" condition="state" />

                        <div class="flex justify-center mt-8">
                            <a onclick="save()" href="#" class="flex px-4 py-1 text-sm font-bold text-white bg-green-600  hover:bg-green-700 rounded">
                                <div class="flex items-center space-x-2">
                                    <x-heroicon-o-save class="w-4 h-4" /> 
                                    <p>Hantar Permohonan</p>
                                </div>
                            </a>
                        </div>
                    </x-slot>
                </x-form.basic-form>
            </div>
        </x-general.grid>
    </div>

    <!-- header -->
    <div class="absolute top-0 left-0 right-0 z-0">
        <x-general.header bgimg="" title="Daftar Member" />
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