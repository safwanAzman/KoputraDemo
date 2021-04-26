<div class="">
    <div class="relative z-20 px-0 mx-auto my-3 text-lg font-medium leading-6 text-cool-gray-900">
        <div class="bg-white rounded-lg shadow">
            <main class="px-4 py-6 my-8">
                <div>
                    <div class="flex flex-col mt-2 lg:flex-row">
                        <div class="order-2 w-full lg:w-1/2">
                            <h1>TEST</h1>
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

                        <div class=" mx-6 flex-shrink-0 order-1 w-full mt-4 mb-8 lg:w-1/2 lg:mb-0 lg:order-2">
                            <div class="border-2 mt-6 rounded-md p-4">
                                <div id='calendar'></div>
                            </div>
                        </div>

                    </div>
                </div>
            </main>
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