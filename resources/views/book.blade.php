<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="bg-white shadow-lg p-8 rounded-lg w-full max-w-lg">
        <h1 class="text-3xl font-bold text-center mb-6 text-gray-800">Book an Appointment</h1>

        <form action="" method="POST">
            @csrf
            @method('post')

            <div class="mb-6">
                <label for="pet" class="block text-lg font-medium text-gray-700">Select Pet:</label>
                <select id="pet" name="pet_id" required class="mt-2 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 text-base">
                    <option value="" disabled selected>Select a pet</option>
                    @foreach($pets as $pet)
                        <option value="{{ $pet->id }}">{{ $pet->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-6">
                <label for="address" class="block text-lg font-medium text-gray-700">Address:</label>
                <input type="text" id="address" name="address" required placeholder="Enter your address" class="mt-2 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 text-base">
            </div>

            <!-- Additional Pet Feeding Checkbox with smaller font -->
            <div class="mb-6 text-xs">
                <label for="additional_feeding" class="flex items-center text-lg font-medium text-gray-700">
                    <input type="checkbox" id="additional_feeding" name="additional_feeding" class="mr-2" />
                    Add Additional Pet Feeding
                </label>
            </div>

            <div class="mb-6">
                <label for="schedule" class="block text-lg font-medium text-gray-700">Select Schedule:</label>
                <select id="schedule" name="schedule_date" required class="mt-2 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 text-base">
                    <option value="" disabled selected>Select a schedule</option>
                    @foreach($schedules as $schedule)
                        <option value="{{ $schedule->date }}">{{ \Carbon\Carbon::parse($schedule->date)->format('d-m-Y') }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-6">
                <label class="block text-lg font-medium text-gray-700">Available Staff:</label>
                <div id="available-staff-container" class="hidden mt-2">
                    <table class="min-w-full border border-gray-200 rounded-lg">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="px-4 py-3 text-left text-xs font-semibold text-gray-600 uppercase">Name</th>
                                <th class="px-4 py-3 text-left text-xs font-semibold text-gray-600 uppercase">Experience</th>
                                <th class="px-4 py-3 text-left text-xs font-semibold text-gray-600 uppercase">Available Time</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200" id="staff-table-body"></tbody>
                    </table>
                </div>
                <p id="no-available-schedule" class="text-red-500 mt-2 hidden">No available schedule</p>
            </div>

            <div id="selected-schedules" class="mb-6 hidden">
                <label class="block text-lg font-medium text-gray-700">Selected Schedules:</label>
                <div class="mt-2 p-4 bg-gray-100 rounded-md" id="selected-schedules-container"></div>
            </div>

            <div class="mt-8">
                <button type="submit" class="w-full bg-indigo-600 text-white font-bold py-3 px-4 rounded-md hover:bg-indigo-700 transition ease-in-out duration-200">
                    Submit Booking
                </button>
            </div>
        </form>
    </div>

    <script>
        $(document).ready(function() {
            var selectedSchedules = {};

            $('#schedule').change(function() {
                var scheduleDate = $(this).val();
                var serviceId = {{ $service->id }};
                
                if (scheduleDate) {
                    $.ajax({
                        url: "{{ route('staff.available') }}",
                        method: 'GET',
                        data: { schedule_date: scheduleDate, service_id: serviceId },
                        success: function(response) {
                            var tbody = $('#staff-table-body');
                            tbody.empty();
                            
                            if (response.length > 0) {
                                $('#available-staff-container').removeClass('hidden');
                                $('#no-available-schedule').addClass('hidden');

                                response.forEach(function(staff) {
                                    var timeButtons = '';
                                    staff.schedules.forEach(function(schedule) {
                                        timeButtons += `<button type="button" class="select-schedule text-indigo-600 hover:text-indigo-900 mr-2 mb-1 px-2 py-1 border border-indigo-600 rounded" 
                                                            data-staff-name="${staff.name}" 
                                                            data-schedule-time="${schedule.start_time} - ${schedule.end_time}" 
                                                            data-staff-schedule-id="${schedule.id}">
                                                            ${schedule.start_time} - ${schedule.end_time}
                                                        </button>`;
                                    });

                                    var row = `<tr>
                                        <td class="px-4 py-2 text-sm text-gray-700">${staff.name}</td>
                                        <td class="px-4 py-2 text-sm text-gray-700">${staff.experience}</td>
                                        <td class="px-4 py-2 text-sm text-gray-700">${timeButtons}</td>
                                    </tr>`;
                                    tbody.append(row);
                                });
                            } else {
                                $('#available-staff-container').addClass('hidden');
                                $('#no-available-schedule').removeClass('hidden');
                            }
                        },
                        error: function() {
                            $('#no-available-schedule').removeClass('hidden');
                        }
                    });
                } else {
                    $('#available-staff-container').addClass('hidden');
                }
            });

            // Handle selecting a schedule time
            $(document).on('click', '.select-schedule', function() {
                var staffName = $(this).data('staff-name');
                var scheduleTime = $(this).data('schedule-time');
                var staffScheduleId = $(this).data('staff-schedule-id'); // Get the staff_schedule_id

                // Check if this schedule time is already selected by any staff
                var isTimeSelected = Object.values(selectedSchedules).some(times => times.includes(scheduleTime));
                if (isTimeSelected) {
                    alert('This time slot has already been selected.');
                    return;
                }

                // Add the schedule time to the selected schedules for this staff
                if (!selectedSchedules[staffName]) {
                    selectedSchedules[staffName] = [];
                }
                selectedSchedules[staffName].push(scheduleTime);

                var selectedScheduleId = 'selected-' + Math.random().toString(36).substring(2, 15); // unique ID for each selected schedule
                var selectedScheduleHtml = `<div class="mb-2 p-2 border border-gray-300 rounded" id="${selectedScheduleId}">
                    <p><strong>Staff:</strong> ${staffName}</p>
                    <p><strong>Time:</strong> ${scheduleTime}</p>
                    <button type="button" class="remove-schedule text-red-500 hover:text-red-700 mt-2" data-staff-name="${staffName}" data-schedule-time="${scheduleTime}" data-schedule-id="${selectedScheduleId}" data-staff-schedule-id="${staffScheduleId}">
                        Remove
                    </button>
                </div>`;

                $('#selected-schedules-container').append(selectedScheduleHtml);
                $('#selected-schedules').removeClass('hidden');
            });

            // Handle removing a selected schedule
            $(document).on('click', '.remove-schedule', function() {
                var scheduleId = $(this).data('schedule-id');
                var staffName = $(this).data('staff-name');
                var scheduleTime = $(this).data('schedule-time');
                var staffScheduleId = $(this).data('staff-schedule-id');

                // Remove the schedule time from the selected schedules for this staff
                if (selectedSchedules[staffName]) {
                    selectedSchedules[staffName] = selectedSchedules[staffName].filter(time => time !== scheduleTime);
                    if (selectedSchedules[staffName].length === 0) {
                        delete selectedSchedules[staffName];
                    }
                }

                $('#' + scheduleId).remove();

                // Hide selected schedules container if empty
                if ($('#selected-schedules-container').children().length === 0) {
                    $('#selected-schedules').addClass('hidden');
                }
            });
        });
    </script>
</body>
</html>