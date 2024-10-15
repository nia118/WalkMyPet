<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Services</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#FBF9F1]">

    <div class="container mx-auto py-10">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Dog Walking Card -->
            <div class="card bg-[#92C7CF] hover:bg-[#6BAAB7] transition-colors rounded-lg shadow-lg p-6">
                <div class="flex justify-center">
                    <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mb-4">
                        <!-- Gambar Lingkaran (ikon) -->
                        <img src="/images/dog-walking-icon.png" alt="Dog Walking Icon" class="w-8 h-8">
                    </div>
                </div>
                <h3 class="text-center text-xl font-semibold text-white">Dog Walking</h3>
                <p class="text-center text-white mt-2">Take your dog for a daily walk with our professional walkers.</p>
                <div class="flex justify-center mt-4">
                    <button class="btn px-4 py-2 rounded-full text-white bg-[#0D9DB1] hover:bg-[#086F81] transition-colors">Book Now</button>
                </div>
            </div>

            <!-- Pet Daycare Card -->
            <div class="card bg-[#92C7CF] hover:bg-[#6BAAB7] transition-colors rounded-lg shadow-lg p-6">
                <div class="flex justify-center">
                    <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mb-4">
                        <!-- Gambar Lingkaran (ikon) -->
                        <img src="/images/pet-daycare-icon.png" alt="Pet Daycare Icon" class="w-8 h-8">
                    </div>
                </div>
                <h3 class="text-center text-xl font-semibold text-white">Pet Daycare</h3>
                <p class="text-center text-white mt-2">Leave your pet in safe hands at our daycare center.</p>
                <div class="flex justify-center mt-4">
                    <button class="btn px-4 py-2 rounded-full text-white bg-[#0D9DB1] hover:bg-[#086F81] transition-colors">Enroll Now</button>
                </div>
            </div>

            <!-- Pet Grooming Card -->
            <div class="card bg-[#92C7CF] hover:bg-[#6BAAB7] transition-colors rounded-lg shadow-lg p-6">
                <div class="flex justify-center">
                    <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mb-4">
                        <!-- Gambar Lingkaran (ikon) -->
                        <img src="/images/pet-grooming-icon.png" alt="Pet Grooming Icon" class="w-8 h-8">
                    </div>
                </div>
                <h3 class="text-center text-xl font-semibold text-white">Pet Grooming</h3>
                <p class="text-center text-white mt-2">Give your pet a fresh look with our grooming services.</p>
                <div class="flex justify-center mt-4">
                    <button class="btn px-4 py-2 rounded-full text-white bg-[#0D9DB1] hover:bg-[#086F81] transition-colors">Groom Now</button>
                </div>
            </div>
        </div>
    </div>

</body>
</html>