<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Form</title>
    <!-- Tailwind CSS for styling -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 h-screen flex items-center justify-center">
    <div class="bg-white shadow-lg p-6 rounded-lg w-full max-w-md">
        <h1 class="text-2xl font-bold mb-4">Book an Appointment</h1>

        <form action="/home/book/{{ $customer_id }}" method="POST">
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

            <!-- Date Field -->
            <div class="mb-4">
                <label for="date" class="block text-sm font-medium text-gray-700">Select Date:</label>
                <input type="date" id="date" name="date" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <!-- Time Field -->
            <div class="mb-4">
                <label for="time" class="block text-sm font-medium text-gray-700">Select Time:</label>
                <input type="time" id="time" name="time" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <!-- Location Field -->
            <div class="mb-4">
                <label for="location" class="block text-sm font-medium text-gray-700">Location:</label>
                <input type="text" id="location" name="location" placeholder="Enter location" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <div class="mt-6">
                <button type="submit" class="w-full bg-indigo-500 text-white font-bold py-2 px-4 rounded-md hover:bg-indigo-600">
                    Submit Booking
                </button>
            </div>
        </form>
    </div>
</body>
</html>
