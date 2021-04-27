<div class="">
    <div class="relative z-20 px-0 mx-auto my-3 text-lg font-medium leading-6 text-cool-gray-900">
        <div class="bg-white rounded-lg shadow mt-8 px-6 py-6">
            <h1>TEST</h1>
            <div class="grid grid-cols-12 gap-6">
                <div class="col-span-12 sm:col-span-12 md:col-span-5 lg:col-span-5 xxl:col-span-5">
                    <div class="border-2 mt-4 rounded-md p-4">
                        <x-general.grid mobile="1" gap="5" sm="1" md="2" lg="2" xl="2" class="col-span-6 mt-6">
                            <div class="flex space-x-2">
                                <x-form.input type="date" label="Start Date" value="" />
                                <x-form.input type="date" label="End Date" value="" />
                            </div>

                        </x-general.grid>
                        <x-general.grid mobile="1" gap="5" sm="1" md="2" lg="2" xl="2" class="col-span-6 mt-6">
                            <x-form.input label="Test" value="" />
                            <x-form.input label="Test" value="" />
                            <x-form.input label="Test" value="" />
                            <x-form.input label="Test" value="" />
                        </x-general.grid>
                    </div>
                </div>
                <div class="col-span-12 sm:col-span-12 md:col-span-7 lg:col-span-7 xxl:col-span-7">
                    <div class="border-2 mt-4 rounded-md p-4">
                        <div id='calendar'></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- header -->
    <div class="absolute top-0 left-0 right-0 z-0">
        <x-general.header bgimg="" title="Booking" />
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
                initialView: 'dayGridMonth'
            });
            calendar.render();
        });
    </script>
</div>