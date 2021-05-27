<div class="">
    <div class="relative z-20 px-0 mx-auto my-3 text-lg font-medium leading-6 text-cool-gray-900">
        <div class="px-6 py-6 mt-8 bg-white rounded-lg shadow">
            <h1 class="text-2xl font-bold text-gray-900 uppercase whitespace-nowrap">APARTMENT WHITE ROSE, CAMERON HIGHLAND</h1>
            <div class="grid grid-cols-12 gap-6">
                <div class="col-span-12 sm:col-span-12 md:col-span-5 lg:col-span-5 xxl:col-span-5">
                    <div class="p-4 mt-4 border-2 rounded-md">
                        <h1 class="text-xl font-semibold text-gray-900 uppercase whitespace-nowrap">Booking Information</h1>
                        <x-general.grid mobile="1" gap="5" sm="1" md="2" lg="2" xl="2" class="col-span-6 mt-6">
                            <x-form.input type="date" label="Check-in Date" value="2021-05-03" />
                            <x-form.input type="date" label="Check-out Date" value="2021-05-06" />
                            <x-form.dropdown label="Adults" value="adults" default="yes">
                                @for ($x = 1; $x <= 30; $x++)
                                    <option value="{{ $x }}" >{{ $x }} adult</option>
                                @endfor
                            </x-form.dropdown>
                            <x-form.dropdown label="Children" value="children" default="yes">
                                @for ($x = 1; $x <= 15; $x++)
                                    <option value="{{ $x }}">{{ $x }} children</option>
                                @endfor
                            </x-form.dropdown>
                        </x-general.grid>
                        <div class="flex justify-end mt-4">
                            <a onclick="save()" href="#" class="flex px-4 py-1 text-sm font-bold text-white bg-green-600  hover:bg-green-700 rounded">
                                <div class="flex items-center space-x-2">
                                    <x-heroicon-o-save class="w-4 h-4" /> 
                                    <p>Submit</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    {{-- term & condition --}}
                    <div class="p-4 mt-4 border-2 rounded-md">
                        <h1 class="font-semibold text-gray-900 uppercase text-l whitespace-nowrap">Terms & Conditions</h1>

                        <div class="text-xs text-gray-700 ">
                            <p>Last updated: April 27, 2021</p>
                            <p>Please read these terms and conditions carefully before using Our Service.</p>
                            <h1>Interpretation and Definitions</h1>
                            <h2>Interpretation</h2>
                            <p>The words of which the initial letter is capitalized have meanings defined under the following conditions. The following definitions shall have the same meaning regardless of whether they appear in singular or in plural.</p>
                            <h2>Definitions</h2>
                            <p>For the purposes of these Terms and Conditions:</p>
                            <ul>
                                <li>
                                <p><strong>Country</strong> refers to:  Malaysia</p>
                                </li>
                                <li>
                                <p><strong>Company</strong> (referred to as either &quot;the Company&quot;, &quot;We&quot;, &quot;Us&quot; or &quot;Our&quot; in this Agreement) refers to Koputra, 1, 43A &amp; 43B, 19, Jalan Sungai Besi Indah 2, Taman Sungai Besi Indah, 43300 Seri Kembangan, Selangor.</p>
                                </li>
                                <li>
                                <p><strong>Device</strong> means any device that can access the Service such as a computer, a cellphone or a digital tablet.</p>
                                </li>
                                <li>
                                <p><strong>Service</strong> refers to the Website.</p>
                                </li>
                                <li>
                                <p><strong>Terms and Conditions</strong> (also referred as &quot;Terms&quot;) mean these Terms and Conditions that form the entire agreement between You and the Company regarding the use of the Service. This Terms and Conditions agreement has been created with the help of the <a href="https://www.termsfeed.com/terms-conditions-generator/" target="_blank">Terms and Conditions Generator</a>.</p>
                                </li>
                                <li>
                                <p><strong>You</strong> means the individual accessing or using the Service, or the company, or other legal entity on behalf of which such individual is accessing or using the Service, as applicable.</p>
                                </li>
                            </ul>
                            <h1>Contact Us</h1>
                            <p>If you have any questions about these Terms and Conditions, You can contact us:</p>
                            <ul>
                                <li>By email: admin@koputra.com.my</li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-span-12 sm:col-span-12 md:col-span-7 lg:col-span-7 xxl:col-span-7">
                    <div class="p-4 mt-4 border-2 rounded-md">
                        <div id='calendar'></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- header -->
    <div class="absolute top-0 left-0 right-0 z-0">
        <x-general.header bgimg="" title="Booking" height="8rem"/>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="http://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <link href='{{ asset('fullCalendar/lib/main.css') }}' rel='stylesheet' />
    <script src='{{ asset('fullCalendar/lib/main.js') }}'></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                googleCalendarApiKey: 'AIzaSyADnip91wbBqE3zSJBGkTfL4sbuZYR-Slg',
                eventSources: [
                    {
                        events: [ // put the array in the `events` property
                            {
                                title  : 'Family Day Pn Syarifah',
                                start  : '2021-04-01',
                                end  : '2021-04-03'
                            },
                            {
                                title  : 'Team Building Bank Muamalat',
                                start  : '2021-04-05',
                                end    : '2021-04-07'
                            },
                            {
                                title  : 'Kursus Jati Diri',
                                start  : '2021-04-28',
                                end    : '2021-05-02'
                            },
                            {
                                title  : 'Booking',
                                start  : '2021-05-03',
                                end    : '2021-05-06'
                            }
                        ],
                        color: 'green',     // an option!
                        textColor: 'white' // an option!
                    },
                    {
                        googleCalendarId: 'en.malaysia#holiday@group.v.calendar.google.com',
                        color: '#faf089',
                        textColor: '#000000'
                    }
                ]
            });
            calendar.render();
        });
    </script>
</div>
@push('js')
<script>
    function save() {
            var text="<strong>Ref. No : 2021052200001</strong>. <br>1. Date book valid for 3 days. <br>2. Payment should be done within these 3 days. <br>3. None payment will cause the booking date will be released. <br>";
            var price="<strong>Orang Awam - RM 400</strong>" + "<br><strong>Anggota KOPUTRA - RM 350</strong>"
            Swal.fire({
            icon: 'success',
            title: 'Booking Success!', 
            html: text + price,
            showConfirmButton: true,
            showDenyButton: true,
            confirmButtonText: 'Pay',
            confirmButtonColor: '#77db42',
            denyButtonText: 'OK',
            denyButtonColor: '#2586cc',
            }).then((result) => {
                if (result.isConfirmed)
                {
                    Swal.fire({
                    title: 'Payment method',
                    input: 'select',
                    inputOptions: {
                        financing: 'Financing',
                        cash: 'Payment Gateway (via ipay88)',
                    },
                    inputPlaceholder: 'Select a payment method',
                    showCancelButton: true,
                    inputValidator: (value) => {
                        return new Promise((resolve) => {
                        if (value === 'financing') {
                            Swal.fire({
                                title: 'Ref. No : 2021052200001',
                                showConfirmButton: true,
                                showCancelButton: true,
                                confirmButtonColor: '#77db42',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Pay'
                            }).then((result) => {
                                    if (result.isConfirmed) {
                                        Swal.fire(
                                        'success',
                                        'Payment Successful',
                                        
                                        )
                                        Swal.fire({
                                            icon: 'success',
                                            title: 'Payment Successful',
                                            showConfirmButton: false,
                                        })
                                }
                                })
                        } else if( value === 'cash') {
                            Swal.fire({
                                // imageUrl: `{{asset('img/apartment.png')}}`,
                                // imageWidth: 850,
                                // imageHeight: 550,
                                // imageAlt: 'Custom image',
                                html: `<div>
                                <img src="{{asset('img/ipay88.png')}}" class="w-auto"/>
                                </div>`,
                                showCancelButton: true,
                                confirmButtonColor: '#77db42',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Pay'
                            }).then((result) => {
                                    if (result.isConfirmed) {
                                        Swal.fire(
                                        'success',
                                        'Payment Successful',
                                        
                                        )
                                        Swal.fire({
                                            icon: 'success',
                                            title: 'Payment Successful',
                                            showConfirmButton: false,
                                        })
                                }
                                })
                        }else{
                            resolve('You need to choose one payment method')
                        }
                        })
                    }
            })
                }
                else if(result.isDenied)
                {
                    @if(Route::current()->uri == "members" || \Request::is("members/*") )
                        location.href = '{{route('members-produk2')}}';
                    @elseif(Route::current()->uri == "nonmembers" || \Request::is("nonmembers/*") )
                        location.href = '{{route('non-member')}}';
                    @endif
                }
            })
            //setTimeout(, 2500);
    }
</script>

@endpush