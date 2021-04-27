<x-general.modal modalActive="Open" title="Status Permohonan" modalSize="3xl">
    <x-general.grid mobile="1" gap="5" sm="1" md="1" lg="1" xl="1" class="col-span-6 ">
        <div class=" p-4" x-data="app()" x-cloak>

            <div class="w-full">
                <div x-show.transition="step != 'complete'">

                    <!-- Start Top Navigation -->
                    <div class="px-4 py-4 border-b-2">
                        <div class="flex justify-start">
                            <div class="mb-1 text-lg font-bold leading-tight tracking-wide text-white bg-indigo-600 p-4 rounded-md uppercase"
                                x-text="`Step: ${step} of 2`"></div>
                        </div>
                    </div>
                    <!-- End Top Navigation -->

                    <!-- Start Step Content -->
                    <div class="px-4 py-4  overflow-y-auto" style="height: 28rem;">
                        <div x-show.transition.in="step === 1">
                            <x-form.basic-form>
                                <x-slot name="content">
                                    <div
                                        class="font-semibold text-lg text-indigo-600 border-b-4 border-indigo-600 py-2 ">
                                        <p>PEMBIAYAAN</p>
                                    </div>
                                    <x-general.grid mobile="1" gap="5" sm="1" md="1" lg="2" xl="2" class="col-span-6 mt-6">
                                        <x-form.input label="Jumlah Pembiayaan Dipohon: * (RM)" value="100,000.00" />
                                    </x-general.grid>
                                    <div
                                        class="font-semibold text-lg text-indigo-600 border-b-4 border-indigo-600 py-2 mt-6">
                                        <p>MAKLUMAT PERIBADI</p>
                                    </div>
                                    <x-general.grid mobile="1" gap="5" sm="1" md="1" lg="2" xl="2"
                                        class="col-span-6 mt-6">
                                        <x-form.input label="Nama Penuh :" value="MOHD AIZUDDIN BIN MOHD YUSOFF" />
                                        <x-form.input label="No.K/P Baru :" value="85409035147" />
                                        <x-form.dropdown label="Awam / Polis / Tentera :" default="no" value="">
                                            <option value="" selected>AWAM</option>
                                            <option value="">POLIS</option>
                                            <option value="">TENTERA</option>
                                        </x-form.dropdown>
                                        <x-form.input label="No.K/P Lama :"  value="" />
                                        <x-form.input label="Tarikh Lahir :"  value="" />
                                        <x-form.input label="Umur :"  value="" />

                                        <div>
                                            <span class="block text-sm font-semibold leading-5 text-gray-700">Jantina
                                                :</span>
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
                                        <x-form.dropdown label="Bumiputera:" default="no" value="">
                                            <option value="" selected>Ya</option>
                                            <option value="">Tidak</option>
                                        </x-form.dropdown>
                                        <x-form.dropdown label="Keturunan :" default="no" value="">
                                            <option value="" selected>MELAYU</option>
                                            <option value="">CINA</option>
                                            <option value="">INDIA</option>
                                            <option value="">LAIN-LAIN</option>
                                        </x-form.dropdown>
                                        <x-form.dropdown label="Agama :" default="no" value="">
                                            <option value="1" selected="">ISLAM</option>
                                            <option value="2">KRISTIAN</option>
                                            <option value="3">BUDDHA</option>
                                            <option value="4">HINDU</option>
                                            <option value="5">LAIN - LAIN</option>
                                        </x-form.dropdown>
                                        <x-form.dropdown label="Warganegara :" default="no" value="">
                                            <option value="1" selected="">MALAYSIA</option>
                                            <option value="2">INDONESIA</option>
                                            <option value="3">SINGAPURA</option>
                                            <option value="4">THAILAND</option>
                                            <option value="5">FILIPINA</option>
                                            <option value="6">BRUNAI</option>
                                            <option value="7">VIETNAM</option>
                                            <option value="8">KEMBOJA</option>
                                            <option value="9">MYANMAR</option>
                                            </select>
                                        </x-form.dropdown>
                                        <x-form.dropdown label="Jenis Kediaman :" default="no" value="">
                                            <option value="1" selected="">SENDIRI</option>
                                            <option value="2">SEWA</option>
                                            <option value="3">KELUARGA</option>
                                            <option value="4">MAJIKAN</option>
                                            <option value="5">LAIN-LAIN</option>
                                        </x-form.dropdown>
                                    </x-general.grid>
                                    <x-general.grid mobile="1" gap="5" sm="1" md="1" lg="1" xl="1"
                                        class="col-span-6 mt-3">
                                        <x-form2.address class="" label="Alamat" value1="" value2="" value3="" value4=""
                                            value5="" value6="" condition="state" />
                                    </x-general.grid>
                                    <x-general.grid mobile="1" gap="5" sm="1" md="2" lg="2" xl="2" class="col-span-6 mt-3">
                                        <x-form.input label="No.Tel Bimbit :"  value="" />
                                        <div>
                                            <span class="block text-sm font-semibold leading-5 text-gray-700">Taraf
                                                Perkahwinan :</span>
                                            <div class="mt-2">
                                                <label class="inline-flex items-center">
                                                    <input type="radio" class="form-radio" name="name" value="l">
                                                    <span class="ml-2 text-sm text-gray-700">Sudah</span>
                                                </label>
                                                <label class="inline-flex items-center ml-6">
                                                    <input type="radio" class="form-radio" name="name" value="" checked>
                                                    <span class="ml-2 text-sm text-gray-700">Belum</span>
                                                </label>
                                            </div>
                                        </div>
                                        <x-form.dropdown label="Bilangan Tanggungan (Jika Ada) :" default="no" value="">
                                            <option value="" selected>Sila Pilih</option>
                                            <option value="0">0</option>
                                            <option value="1" selected>1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                        </x-form.dropdown>
                                        <x-form.input label="Alamat e-Mel :" value="" />
                                    </x-general.grid>
                                    <div
                                        class="font-semibold text-lg text-indigo-600 border-b-4 border-indigo-600 py-2 mt-6">
                                        <p>MAKLUMAT PASANGAN SUAMI/ISTERI</p>
                                    </div>
                                    <x-general.grid mobile="1" gap="5" sm="1" md="2" lg="2" xl="2" class="col-span-6 mt-3">
                                        <x-form.input label="Nama Pasangan :"  value="" />
                                        <x-form.input label="No.K/P Baru Pasangan :"  value="" />
                                        <x-form.input label="No.K/P Lama Pasangan :"  value="" />
                                        <x-form.input label="No.Tel Bimbit Pasangan :"  value="" />
                                    </x-general.grid>
                                    <div
                                        class="font-semibold text-lg text-indigo-600 border-b-4 border-indigo-600 py-2 mt-6">
                                        <p>MAKLUMAT IBU BAPA</p>
                                    </div>
                                    <x-general.grid mobile="1" gap="5" sm="1" md="2" lg="2" xl="2" class="col-span-6 mt-3">
                                        <x-form.input label="Nama Ibu/Bapa :"  value="" />
                                        <x-form.input label="No K/P Ibu/Bapa :"  value="" />
                                        <x-form.input label="No K/P Lama Ibu/Bapa :"  value="" />
                                        <x-form.input label="No.Tel Bimbit Ibu/Bapa :"  value="" />
                                    </x-general.grid>
                                    <div
                                        class="font-semibold text-lg text-indigo-600 border-b-4 border-indigo-600 py-2 mt-6">
                                        <p>MAKLUMAT PEKERJAAN</p>
                                    </div>
                                    <x-general.grid mobile="1" gap="5" sm="1" md="1" lg="1" xl="1" class="col-span-6 mt-3">
                                        <x-form.input label="Nama Jabatan/Bahagian/Unit :"  value="" />
                                        <x-form2.address class="" label="Alamat Pejabat/Majikan :"  value1="" value2="" value3="" value4="" value5=""
                                            value6="" condition="state" />
                                    </x-general.grid>
                                    <x-general.grid mobile="1" gap="5" sm="1" md="2" lg="2" xl="2" class="col-span-6 mt-3">
                                        <x-form.input label="No.Tel Pejabat :"  value="" />
                                        <x-form.input label="No.Fax Pejabat :"  value="" />
                                        <x-form.input label="Jawatan :"  value="" />
                                        <x-form.input label="Gaji Pokok :"  value="" />
                                        <x-form.dropdown label="Jenis Kediaman :" default="no" value="" >
                                            <option value="tetap" selected>Tetap</option>
                                            <option value="kontrak">Kontrak</option>
                                            <option value="sementara">Sementara</option>
                                            <option value="percubaan">Percubaan</option>
                                        </x-form.dropdown>
                                        <x-form.input type="date" label="Tarikh Mula Bekerja: "  value="" />
                                        <x-form.input type="date" label="Tarikh Sah Jawatan :"  value="" />
                                        <x-form.input label="No. Gaji / No. Pekerja :"  value="" />
                                    </x-general.grid>
                                </x-slot>
                            </x-form.basic-form>
                        </div>

                        <div x-show.transition.in="step === 2">
                            <div class="p-4">
                                <div
                                    class="font-semibold text-lg text-indigo-600 border-b-4 border-indigo-600 py-2">
                                    <p>NAMA BORANG</p>
                                </div>
                                <x-general.grid mobile="1" gap="5" sm="1" md="1" lg="2" xl="2" class="col-span-6 mt-6">
                                    <x-form.input type="file" label="PERMOHONAN ANGGOTA BARU & PEMBIAYAAN EKSPRESS" value="" />
                                    <x-form.input type="file" label="KEBENARAN PENZAHIRAN MAKLUMAT KREDIT INDIVIDU " value="" />
                                </x-general.grid>
                                <div
                                    class="font-semibold text-lg text-indigo-600 border-b-4 border-indigo-600 py-2 mb-4">
                                    <p>DOKUMEN SOKONGAN</p>
                                </div>
                                <x-general.grid mobile="1" gap="5" sm="1" md="3" lg="3" xl="3" class="col-span-6 mt-6">
                                    <x-form.input type="file" label="SALINAN KAD PENGENALAN (DEPAN DAN BELAKANG)" value="" />
                                    <x-form.input type="file" label="SIJIL BERANAK (UNTUK POLIS SAHAJA)" value="" />
                                    <x-form.input type="file" label="SALINAN PENYATA GAJI TERKINI (BESERTA COP PENGESAHAN MAJIKAN)" value="" />
                                    <x-form.input type="file" label="SALINAN PENYATA GAJI 1 BULAN SEBELUMNYA (BESERTA COP PENGESAHAN MAJIKAN)" value="" />
                                    <x-form.input type="file" label="SALINAN PENYATA GAJI 2 BULAN SEBELUMNYA (BESERTA COP PENGESAHAN MAJIKAN)" value="" />
                                    <x-form.input type="file" label="SALINAN BUKU/PENYATA BANK " value="" />
                                </x-general.grid>
                            </div>
                        </div>
                    </div>
                    <!-- Step Content -->
                </div>

                <!-- Start Button -->
                <div class="flex justify-center mt-4">
                    <div class="flex space-x-2">

                        <button x-show="step > 1" @click="step--"
                            class="px-4 py-4 text-center text-white bg-indigo-600 rounded-full shadow-sm focus:outline-none hover:bg-indigo-700">
                            <x-heroicon-o-arrow-left class="w-5 h-5" />
                        </button>

                        <button x-show="step < 2" @click="step++"
                            class=" px-4 py-4 text-center text-white bg-indigo-600 rounded-full shadow-sm focus:outline-none hover:bg-indigo-700">
                            <x-heroicon-o-arrow-right class="w-5 h-5" />
                        </button>

                        <button x-show="step === 2" onclick="save()"
                            class=" px-5 py-2 text-center text-white bg-indigo-600  rounded-lg shadow-sm focus:outline-none hover:bg-indigo-700">
                            Hantar Permohonan
                        </button>
                    </div>
                </div>
                <!-- End Button -->
            </div>
        </div>

    </x-general.grid>
</x-general.modal>

@push('js')
<script>
    function app() {
        return {
            step: 1,
            togglePassword: false,
        }
    }

    function save() {
        Swal.fire({
                title: 'Luluskan permohonan pembiayaan ini?',
                showCancelButton: true,
                confirmButtonText: `Ya`,
                cancelButtonText: 'Batal',
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    Swal.fire('Permohonan dikemukakan dengan jayanya!', '', 'success')
                    // window.location = "dashboard2.html";
                    setTimeout("location.href = '{{route('members-produk2')}}';", 2500);
                }
            })
    }
</script>
@endpush