<div class="">
    <div class="relative z-20 px-0 mx-auto my-3 text-lg font-medium leading-6 text-cool-gray-900">
        <div class="px-6 py-6 mt-8 bg-white rounded-lg shadow">
            <h1 class="text-2xl font-bold text-gray-900 uppercase whitespace-nowrap">CUCIAN RUMAH DAN BAGUNAN</h1>
            <div class="grid grid-cols-12 gap-6">
                <div class="col-span-12 sm:col-span-12 md:col-span-5 lg:col-span-5 xxl:col-span-5">
                    <div class="p-4 mt-4 border-2 rounded-md">
                        <h1 class="text-xl font-semibold text-gray-900 uppercase whitespace-nowrap">Booking Information</h1>
                        <x-general.grid mobile="1" gap="5" sm="1" md="2" lg="2" xl="2" class="col-span-6 mt-6">
                            <x-form.input type="date" label="Date" value="2020-05-06" />
                            <x-form.input type="" label="time" value="5:30PM" />
                            <x-form.input type="" label="Phone No" value="0183546808" />
                            <x-form.input type="" label="IC No" value="850409035147" />
                        </x-general.grid>
                        <x-form2.address class="" label="Alamat" value1="Lot 900, Jalan 2G," value2="Kg. Baru Lanjut," value3="" value4="Sepang" value5="43650"
                        value6="" condition="state" />
                        <div class="flex justify-end mt-4">
                            <a onclick="save()" href="#" class="flex px-4 py-1 text-sm font-bold text-white bg-green-600  hover:bg-green-700 rounded">
                                <div class="flex items-center space-x-2">
                                    <x-heroicon-o-save class="w-4 h-4" /> 
                                    <p>Submit</p>
                                </div>
                            </a>
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
                                title  : 'Booking',
                                start  : '2021-05-06',
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
            var price="<strong>RM 200</strong>"
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
                                html: `<div>
                                <img src="{{asset('img/iPay883.png')}}" class="w-auto "/>
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
                            resolve('You need to payment method')
                        }
                        })
                    }
            })
                }
                else if(result.isDenied)
                {
                    location.href = '{{route('members-produk2')}}';
                }
            })
            //setTimeout(, 2500);
    }
</script>

@endpush