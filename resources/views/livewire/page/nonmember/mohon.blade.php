<div>
    <div class="z-20 relative mx-auto px-0 my-3 text-lg leading-6 font-medium text-cool-gray-900">
        <x-general.grid mobile="1" gap="5" sm="1" md="2" lg="1" xl="1" class="col-span-6 items-center mt-8">
            <div class="bg-white  py-4  px-10 rounded-lg shadow-lg" x-data="{ active: 0 }">
                <div class="bg-white shadow-lg rounded-lg py-2 px-2">
                    <div class="flex space-x-2">
                        <x-tab.nav-tab name="0" livewire="">
                            <div class="flex font-medium text-sm">
                                <x-heroicon-o-clipboard-list class="w-6 h-6 mr-2"/>Maklumat Keahlian
                            </div>
                        </x-tab.nav-tab>
                        <x-tab.nav-tab name="1" livewire="">
                            <div class="flex font-medium text-sm">
                                <x-heroicon-o-clipboard-list class="w-6 h-6 mr-2"/>Maklumat Pekerjaan
                            </div>
                        </x-tab.nav-tab>
                    </div>
                </div>
                <x-tab.nav-content name="0">
                    <div class="py-10">
                        <x-form.basic-form>
                            <x-slot name="content">
                                <x-general.grid mobile="1" gap="4" sm="1" md="2" lg="2" xl="2" class="col-span-6">
                                    <x-form.input label="Nama"  value="RASMIZAM BIN MOHAMAD" readonly/>
                                    <x-form.input label="No. Kad Pengenalan"  value="960211103167" readonly/>
                                    <div>
                                        <span class="block text-sm font-semibold leading-5 text-gray-700">Jantina</span>
                                        <div class="mt-2">
                                            <label class="inline-flex items-center">
                                                <input type="radio" class="form-radio" name="name" value="l">
                                                <span class="ml-2 text-sm text-gray-700">Lelaki</span>
                                            </label>
                                            <label class="inline-flex items-center ml-6">
                                                <input type="radio" class="form-radio" name="name" value="">
                                                <span class="ml-2 text-sm text-gray-700">Perempuan</span>
                                            </label>
                                            
                                        </div>
                                    </div>
                                    <x-form.dropdown label="Status Pemohon" default="yes" value="" >
                                        <option value="1">Kakitangan BMMB / CIMB.</option>
                                        <option value="2">Kakitangan tetap Koperasi yang telah disahkan jawatannya</option>
                                        <option value="3">Bekas kakitangan BBMB dan BMMB.</option>
                                        <option value="4">Suami atau isteri Anggota.</option>
                                        <option value="5">Anak-anak Anggota.</option>
                                    </x-form.dropdown>
                                    <x-form.dropdown label="Kaum" default="yes" value="" >
                                        <option value="1" >MELAYU</option>
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
                                        <option value="1">ISLAM</option>
                                        <option value="2">KRISTIAN</option>
                                        <option value="3">BUDDHA</option>
                                        <option value="4">HINDU</option>
                                        <option value="5">LAIN - LAIN</option>
                                    </x-form.dropdown>
                                    <x-form.dropdown label="Warganegara" default="yes" value="" >
                                        <option value="1">MALAYSIA</option>
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
                                        <option value="">BUJANG</option>
                                        <option value="">BERKAHWIN</option>
                                    </x-form.dropdown>
                                    <x-form.dropdown label="Jenis Kediaman" default="yes" value="" >
                                        <option value="" >SENDIRI</option>
                                        <option value="">KELUARGA</option>
                                        <option value="">SEWA</option>
                                        <option value="">KAIN-LAIN</option>
                                    </x-form.dropdown>
                                    <x-form.input label="Jumlah Tanggungan"  value="" />
                                    <x-form.input label="No. Telefon Bimbit"  value="0183546808" />
                                    <x-form.input label="No. Telefon Rumah"  value="" />
                                    <x-form.input label="No. Akaun Bank"  value="" />
                                    <x-form.input label="Emel Persendirian"  value="rasmizam@ymail.com" />
                                    <x-form.input label="Emel Kerja"  value="" />
                                </x-general.grid>
                                <x-general.grid mobile="1" gap="4" sm="1" md="2" lg="2" xl="2" class="col-span-6">
                                    <x-form.input type="file" label="Salinan IC"  value="" />
                                    <x-form.input type="file" label="Surat lantikan tetap/Surat pengesahan jawatan"  value="" />
                                </x-general.grid>
                                <x-form.address class="" label="Alamat" value1="" value2="" value3="" value4="" value5=""
                                    value6="" condition="state" />

                                <div class="flex justify-center mt-8">
                                    <a onclick="save()" href="#" class="flex px-4 py-1 text-sm font-bold text-white bg-green-600  hover:bg-green-700 rounded">
                                        <div class="flex items-center space-x-2">
                                            <x-heroicon-o-save class="w-4 h-4" /> 
                                            <p>Hantar Pemohonan</p>
                                        </div>
                                    </a>
                                </div>
                            </x-slot>
                        </x-form.basic-form>
                    </div>
                </x-tab.nav-content>

                <x-tab.nav-content name="1">
                    <div class="py-10">
                        <x-form.basic-form>
                            <x-slot name="content">
                                <x-general.grid mobile="1" gap="4" sm="1" md="2" lg="2" xl="2" class="col-span-6">
                                    <x-form.input label="No. Gaji / No. Pekerja"  value="" />
                                    <x-form.input label="Gaji Pokok (RM)"  value=""/>
                                    <x-form.input label="Jumlah Elaun Tetap (RM)"  value=""/>
                                    <x-form.input label="Nama Kementerian/Suruhanjaya/Syarikat"  value=""/>
                                    <x-form.input label="Jumlah Potongan Bulanan (Seperti penyata gaji)"  value=""/>
                                    <x-form.input label="Nama Jabatan/Bahagian/Unit *"  value=""/>
                                </x-general.grid>
                                <x-form2.address class="" label="Alamat Majikan" value1="" value2="" value3="" value4="Bangi" value5=""
                                    value6="" condition="state" />

                                <div class="flex justify-center mt-8">
                                    <a onclick="save()" href="#" class="flex px-4 py-1 text-sm font-bold text-white bg-green-600  hover:bg-green-700 rounded">
                                        <div class="flex items-center space-x-2">
                                            <x-heroicon-o-save class="w-4 h-4" /> 
                                            <p>Hantar Pemohonan</p>
                                        </div>
                                    </a>
                                </div>
                            </x-slot>
                        </x-form.basic-form>
                    </div>
                </x-tab.nav-content>
            </div>
        </x-general.grid>
    </div>

    <!-- header -->
    <div class="absolute top-0 left-0 right-0 z-0">
        <x-general.header bgimg="" title="Daftar Permohonan" height="8rem"/>
    </div>
</div>

@push('js')
<script>
    function save() {
        Swal.fire(
        'Permohonan Berjaya Dihantar',
        'No Rujukan: 2021052200123',
        'success'
        )
    }
</script>
@endpush