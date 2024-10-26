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

        <!-- Booking form -->
        <form action="" method="POST">
            @csrf
            @method('post')

            <!-- Pet Selection Dropdown -->
            <div class="mb-6">
                <label for="pet" class="block text-lg font-medium text-gray-700">Select Pet:</label>
                <select id="pet" name="pet_id" required class="mt-2 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 text-base">
                    <option value="" disabled selected>Select a pet</option>
                    @foreach($pets as $pet)
                        <option value="{{ $pet->id }}">{{ $pet->name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Address Input -->
            <div class="mb-6">
                <label for="address" class="block text-lg font-medium text-gray-700">Address:</label>
                <input type="text" id="address" name="address" required placeholder="Enter your address" class="mt-2 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 text-base">
            </div>

            <!-- Schedule Selection Dropdown -->
            <div class="mb-6">
                <label for="schedule" class="block text-lg font-medium text-gray-700">Select Schedule:</label>
                <select id="schedule" name="schedule_date" required class="mt-2 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 text-base">
                    <option value="" disabled selected>Select a schedule</option>
                    @foreach($schedules as $schedule)
                        <option value="{{ $schedule->date }}">{{ \Carbon\Carbon::parse($schedule->date)->format('d-m-Y') }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Staff Availability Table -->
            <div class="mb-6">
                <label class="block text-lg font-medium text-gray-700">Available Staff:</label>
                <div id="available-staff-container" class="hidden mt-2">
                    <table class="min-w-full border border-gray-200 rounded-lg">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="px-4 py-3 text-left text-xs font-semibold text-gray-600 uppercase">Name</th>
                                <th class="px-4 py-3 text-left text-xs font-semibold text-gray-600 uppercase">Experience</th>
                                <th class="px-4 py-3 text-left text-xs font-semibold text-gray-600 uppercase">Available Times</th>
                                <th class="px-4 py-3 text-left text-xs font-semibold text-gray-600 uppercase">Action</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200" id="staff-table-body"></tbody>
                    </table>
                </div>
                <p id="no-available-schedule" class="text-red-500 mt-2 hidden">No available schedule</p>
            </div>

            <!-- Selected Schedules Display -->
            <div id="selected-schedules" class="mb-6 hidden">
                <label class="block text-lg font-medium text-gray-700">Selected Schedules:</label>
                <div class="mt-2 p-4 bg-gray-100 rounded-md" id="selected-schedules-container"></div>
            </div>

            <!-- Submit Button -->
            <div class="mt-8">
                <button type="submit" class="w-full bg-indigo-600 text-white font-bold py-3 px-4 rounded-md hover:bg-indigo-700 transition ease-in-out duration-200">
                    Submit Booking
                </button>
            </div>
        </form>
    </div>

    <script>
    $(document).ready(function() {
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
                                var availableTimes = staff.schedules.length > 0 
                                    ? staff.schedules.map(function(schedule) {
                                        return schedule.start_time + ' - ' + schedule.end_time;
                                    }).join(', ') 
                                    : 'No available times';

                                var row = `<tr>
                                    <td class="px-4 py-2 text-sm text-gray-700">${staff.name}</td>
                                    <td class="px-4 py-2 text-sm text-gray-700">${staff.experience}</td>
                                    <td class="px-4 py-2 text-sm text-gray-700">${availableTimes}</td>
                                    <td class="px-4 py-2 text-sm text-gray-700">
                                        <button type="button" class="select-schedule text-indigo-600 hover:text-indigo-900" data-staff-name="${staff.name}" data-schedule-time="${availableTimes}">
                                            Select
                                        </button>
                                    </td>
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

        // Handle selecting a schedule
        $(document).on('click', '.select-schedule', function() {
            var staffName = $(this).data('staff-name');
            var scheduleTime = $(this).data('schedule-time');
            
            var selectedScheduleId = 'selected-' + Math.random().toString(36).substring(2, 15); // unique ID for each selected schedule
            var selectedScheduleHtml = `<div class="mb-2 p-2 border border-gray-300 rounded" id="${selectedScheduleId}">
                <p><strong>Staff:</strong> ${staffName}</p>
                <p><strong>Time:</strong> ${scheduleTime}</p>
                <button type="button" class="remove-schedule text-red-500 hover:text-red-700 mt-2" data-schedule-id="${selectedScheduleId}">
                    Remove
                </button>
            </div>`;

            $('#selected-schedules-container').append(selectedScheduleHtml);
            $('#selected-schedules').removeClass('hidden');
        });

        // Handle removing a selected schedule
        $(document).on('click', '.remove-schedule', function() {
            var scheduleId = $(this).data('schedule-id');
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