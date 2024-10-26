<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body class="bg-gray-100 h-screen flex items-center justify-center">
    <div class="bg-white shadow-lg p-6 rounded-lg w-full max-w-md">
        <h1 class="text-2xl font-bold mb-4">Book an Appointment</h1>

        <!-- Booking form -->
        <form action="{{ route('book.showBookingForm', ['service' => $service->id]) }}" method="POST">
            @csrf

            <!-- Pet Selection Dropdown -->
            <div class="mb-4">
                <label for="pet" class="block text-sm font-medium text-gray-700">Select Pet:</label>
                <select id="pet" name="pet_id" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option value="">Select a pet</option>
                    @foreach($pets as $pet)
                        <option value="{{ $pet->id }}">{{ $pet->name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Schedule Selection Dropdown -->
            <div class="mb-4">
                <label for="schedule" class="block text-sm font-medium text-gray-700">Select Schedule:</label>
                <select id="schedule" name="schedule_id" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option value="">Select a schedule</option>
                    @foreach($schedules as $schedule)
                        <option value="{{ $schedule->id }}">{{ \Carbon\Carbon::parse($schedule->date)->format('d-m-Y') }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Staff Availability Table -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Available Staff:</label>
                <div id="available-staff-container" class="hidden">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Experience</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Available Times</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200" id="staff-table-body">
                            <!-- Available staff will be populated here -->
                        </tbody>
                    </table>
                </div>
                <p id="no-available-schedule" class="text-red-500 mt-2 hidden">No available schedule</p>
            </div>

            <div class="mt-6">
                <button type="submit" class="w-full bg-indigo-500 text-white font-bold py-2 px-4 rounded-md hover:bg-indigo-600">
                    Submit Booking
                </button>
            </div>
        </form>
    </div>

    <script>
   $(document).ready(function() {
    $('#schedule').change(function() {
        var scheduleId = $(this).val();
        var serviceId = {{ $service->id }}; // Ambil ID layanan dari variabel PHP di Blade view
        
        if (scheduleId) {
            $.ajax({
                url: "{{ route('staff.available') }}", // Pastikan rute AJAX benar
                method: 'GET',
                data: { schedule_id: scheduleId, service_id: serviceId },
                success: function(response) {
                    var tbody = $('#staff-table-body');
                    tbody.empty();
                    
                    if (response.length > 0) {
                        $('#available-staff-container').removeClass('hidden');
                        $('#no-available-schedule').addClass('hidden');

                        response.forEach(function(staff) {
                            // Pastikan available_times ada dan merupakan array
                            var availableTimes = Array.isArray(staff.available_times) && staff.available_times.length > 0
                                ? staff.available_times.map(function(time) {
                                    return time.start_time + ' - ' + time.end_time; // Format waktu
                                }).join(', ') 
                                : 'No available times';

                            var row = `<tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">${staff.name}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">${staff.experience}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">${availableTimes}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <button class="text-indigo-600 hover:text-indigo-900">Select</button>
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
});


    </script>

</body>
</html>
