<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Appointment - Barbershop</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
</head>
<body class="bg-gray-100">
<!-- Navigation -->
<nav class="bg-gray-900 text-white p-4">
    <div class="container mx-auto flex justify-between items-center">
        <!-- Logo -->
        <a href="index.html" class="text-2xl font-bold">BarberShop</a>

        <!-- Desktop Menu -->
        <div class="hidden md:flex items-center space-x-6">
            <a href="index.html" class="hover:text-gray-300">Home</a>
            <a href="services.html" class="hover:text-gray-300">Services</a>
            <div class="flex items-center space-x-4">
                <button onclick="openModal('loginModal')" class="hover:text-gray-300">Login</button>
                <button onclick="openModal('registerModal')" class="hover:text-gray-300">Register</button>
                <a href="booking.html" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Book Now</a>
            </div>
        </div>

        <!-- Mobile Menu Button -->
        <button id="mobile-menu-button" class="md:hidden">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden mt-2">
        <a href="index.html" class="block py-2 px-4 text-sm hover:bg-gray-700">Home</a>
        <a href="services.html" class="block py-2 px-4 text-sm hover:bg-gray-700">Services</a>
        <button onclick="openModal('loginModal')" class="block w-full text-left py-2 px-4 text-sm hover:bg-gray-700">Login</button>
        <button onclick="openModal('registerModal')" class="block w-full text-left py-2 px-4 text-sm hover:bg-gray-700">Register</button>
        <a href="booking.html" class="block py-2 px-4 text-sm bg-gray-700">Book Now</a>
    </div>
</nav>

<!-- Login Modal -->
<div id="loginModal" class="fixed inset-0 bg-gray-500 bg-opacity-75 hidden">
    <div class="fixed inset-0 flex items-center justify-center">
        <div class="bg-white rounded-lg p-8 max-w-md w-full">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-2xl font-bold text-gray-900">Login</h2>
                <button onclick="closeModal('loginModal')" class="text-gray-500 hover:text-gray-700">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <form class="space-y-4">
                <div>
                    <label class="block text-gray-700">Email</label>
                    <input type="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500">
                </div>
                <div>
                    <label class="block text-gray-700">Password</label>
                    <input type="password" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500">
                </div>
                <button type="submit" class="w-full bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700">Login</button>
            </form>
        </div>
    </div>
</div>

<!-- Register Modal -->
<div id="registerModal" class="fixed inset-0 bg-gray-500 bg-opacity-75 hidden">
    <div class="fixed inset-0 flex items-center justify-center">
        <div class="bg-white rounded-lg p-8 max-w-md w-full">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-2xl font-bold text-gray-900">Register</h2>
                <button onclick="closeModal('registerModal')" class="text-gray-500 hover:text-gray-700">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <form class="space-y-4">
                <div>
                    <label class="block text-gray-700">Name</label>
                    <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500">
                </div>
                <div>
                    <label class="block text-gray-700">Email</label>
                    <input type="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500">
                </div>
                <div>
                    <label class="block text-gray-700">Password</label>
                    <input type="password" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500">
                </div>
                <button type="submit" class="w-full bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700">Register</button>
            </form>
        </div>
    </div>
</div>

<!-- Modal and Menu JavaScript -->
<script>
    // Mobile menu toggle
    document.addEventListener('DOMContentLoaded', function() {
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Modal functionality
        window.openModal = (modalId) => {
            document.getElementById(modalId).classList.remove('hidden');
        }

        window.closeModal = (modalId) => {
            document.getElementById(modalId).classList.add('hidden');
        }

        // Close modals when clicking outside
        window.addEventListener('click', (e) => {
            const modals = document.querySelectorAll('.modal');
            modals.forEach(modal => {
                if (e.target === modal) {
                    modal.classList.add('hidden');
                }
            });
        });
    });
</script>
<!-- Main Content -->
<div class="container mx-auto px-4 py-8">

    <!-- Progress Bar -->
    <div class="mb-8">
        <div class="flex justify-between">
            <div class="w-1/5 text-center">
                <div class="bg-blue-500 rounded-full h-8 w-8 mx-auto flex items-center justify-center text-white">1</div>
                <div class="mt-2 text-sm">Services</div>
            </div>
            <div class="w-1/5 text-center">
                <div class="bg-gray-300 rounded-full h-8 w-8 mx-auto flex items-center justify-center">2</div>
                <div class="mt-2 text-sm">Date & Time</div>
            </div>
            <div class="w-1/5 text-center">
                <div class="bg-gray-300 rounded-full h-8 w-8 mx-auto flex items-center justify-center">3</div>
                <div class="mt-2 text-sm">Barber</div>
            </div>
            <div class="w-1/5 text-center">
                <div class="bg-gray-300 rounded-full h-8 w-8 mx-auto flex items-center justify-center">4</div>
                <div class="mt-2 text-sm">Details</div>
            </div>
            <div class="w-1/5 text-center">
                <div class="bg-gray-300 rounded-full h-8 w-8 mx-auto flex items-center justify-center">5</div>
                <div class="mt-2 text-sm">Confirm</div>
            </div>
        </div>
        <div class="relative mt-4">
            <div class="absolute w-full h-1 bg-gray-200"></div>
            <div class="absolute w-1/4 h-1 bg-blue-500"></div>
        </div>
    </div>

    <!-- Step 1: Service Selection -->
    <div class="step-1">
        <h2 class="text-2xl font-bold mb-6">Select Your Service</h2>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Haircut Service Card -->
            <div class="bg-white rounded-lg shadow-md p-6 cursor-pointer hover:shadow-lg transition">
                <h3 class="text-xl font-semibold">Classic Haircut</h3>
                <p class="text-gray-600 mt-2">Professional haircut with styling</p>
                <div class="flex justify-between items-center mt-4">
                    <span class="text-blue-600 font-bold">$30</span>
                    <span class="text-gray-500">30 mins</span>
                </div>
            </div>
            <!-- Beard Trim Service Card -->
            <div class="bg-white rounded-lg shadow-md p-6 cursor-pointer hover:shadow-lg transition">
                <h3 class="text-xl font-semibold">Beard Trim</h3>
                <p class="text-gray-600 mt-2">Shape and style your beard</p>
                <div class="flex justify-between items-center mt-4">
                    <span class="text-blue-600 font-bold">$20</span>
                    <span class="text-gray-500">20 mins</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Step 2: Date and Time Selection (Initially Hidden) -->
    <div class="step-2 hidden">
        <h2 class="text-2xl font-bold mb-6">Choose Date & Time</h2>
        <div class="bg-white rounded-lg shadow-md p-6">
            <input type="text" id="date-picker" class="w-full p-2 border rounded mb-4" placeholder="Select Date">
            <div class="grid grid-cols-4 gap-4 mt-4">
                <button class="p-2 text-center border rounded hover:bg-blue-50">9:00 AM</button>
                <button class="p-2 text-center border rounded hover:bg-blue-50">10:00 AM</button>
                <button class="p-2 text-center border rounded hover:bg-blue-50">11:00 AM</button>
                <button class="p-2 text-center border rounded hover:bg-blue-50">12:00 PM</button>
            </div>
        </div>
    </div>

    <!-- Step 3: Barber Selection (Initially Hidden) -->
    <div class="step-3 hidden">
        <h2 class="text-2xl font-bold mb-6">Choose Your Barber</h2>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white rounded-lg shadow-md p-6">
                <img src="https://via.placeholder.com/150" alt="Barber" class="w-32 h-32 rounded-full mx-auto">
                <h3 class="text-xl font-semibold text-center mt-4">John Doe</h3>
                <p class="text-gray-600 text-center mt-2">Master Barber</p>
                <button class="w-full mt-4 bg-blue-500 text-white py-2 rounded hover:bg-blue-600">Select</button>
            </div>
        </div>
    </div>

    <!-- Step 4: Customer Information (Initially Hidden) -->
    <div class="step-4 hidden">
        <h2 class="text-2xl font-bold mb-6">Your Information</h2>
        <div class="bg-white rounded-lg shadow-md p-6">
            <form>
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-gray-700 mb-2">First Name</label>
                        <input type="text" class="w-full p-2 border rounded">
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-2">Last Name</label>
                        <input type="text" class="w-full p-2 border rounded">
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-2">Email</label>
                        <input type="email" class="w-full p-2 border rounded">
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-2">Phone</label>
                        <input type="tel" class="w-full p-2 border rounded">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Step 5: Booking Summary (Initially Hidden) -->
    <div class="step-5 hidden">
        <h2 class="text-2xl font-bold mb-6">Booking Summary</h2>
        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="border-b pb-4">
                <h3 class="font-semibold">Selected Service</h3>
                <p class="text-gray-600">Classic Haircut - $30</p>
            </div>
            <div class="border-b py-4">
                <h3 class="font-semibold">Date & Time</h3>
                <p class="text-gray-600">September 30, 2023 - 10:00 AM</p>
            </div>
            <div class="border-b py-4">
                <h3 class="font-semibold">Barber</h3>
                <p class="text-gray-600">John Doe</p>
            </div>
            <div class="pt-4">
                <h3 class="font-semibold">Total</h3>
                <p class="text-2xl font-bold text-blue-600">$30</p>
            </div>
        </div>
    </div>

    <!-- Navigation Buttons -->
    <div class="mt-8 flex justify-between">
        <button class="bg-gray-300 text-gray-700 px-6 py-2 rounded hover:bg-gray-400" id="prev-btn">Previous</button>
        <button class="bg-blue-500 text-white px-6 py-2 rounded hover:bg-blue-600" id="next-btn">Next</button>
    </div>
</div>

<script>
    // Booking step navigation
    document.addEventListener('DOMContentLoaded', function() {
        const steps = ['step-1', 'step-2', 'step-3', 'step-4', 'step-5'];
        let currentStep = 0;

        const prevBtn = document.getElementById('prev-btn');
        const nextBtn = document.getElementById('next-btn');

        // Update progress bar and visibility
        function updateSteps() {
            steps.forEach((step, index) => {
                const element = document.querySelector(`.${step}`);
                if (index === currentStep) {
                    element.classList.remove('hidden');
                } else {
                    element.classList.add('hidden');
                }
            });

            // Update progress bar
            const progress = (currentStep + 1) * 25;
            document.querySelector('.bg-blue-500').style.width = `${progress}%`;

            // Update buttons
            prevBtn.style.visibility = currentStep === 0 ? 'hidden' : 'visible';
            nextBtn.textContent = currentStep === steps.length - 1 ? 'Confirm Booking' : 'Next';
        }

        // Button event listeners
        prevBtn.addEventListener('click', () => {
            if (currentStep > 0) {
                currentStep--;
                updateSteps();
            }
        });

        nextBtn.addEventListener('click', () => {
            if (currentStep < steps.length - 1) {
                currentStep++;
                updateSteps();
            } else {
                // Handle booking confirmation
                alert('Booking confirmed!');
            }
        });

        // Service selection
        const serviceCards = document.querySelectorAll('.step-1 .cursor-pointer');
        serviceCards.forEach(card => {
            card.addEventListener('click', function() {
                serviceCards.forEach(c => c.classList.remove('border-blue-500', 'border-2'));
                this.classList.add('border-blue-500', 'border-2');
            });
        });

        // Initialize date picker
        flatpickr("#date-picker", {
            minDate: "today",
            disable: [
                function(date) {
                    return (date.getDay() === 0); // Disable Sundays
                }
            ],
            dateFormat: "Y-m-d"
        });

        // Initialize time slot selection
        const timeSlots = document.querySelectorAll('.step-2 button');
        timeSlots.forEach(slot => {
            slot.addEventListener('click', function() {
                timeSlots.forEach(s => s.classList.remove('bg-blue-500', 'text-white'));
                this.classList.add('bg-blue-500', 'text-white');
            });
        });

        // Initialize barber selection
        const barberButtons = document.querySelectorAll('.step-3 button');
        barberButtons.forEach(button => {
            button.addEventListener('click', function() {
                barberButtons.forEach(b => b.classList.remove('bg-blue-600'));
                this.classList.add('bg-blue-600');
            });
        });

        // Start with first step
        updateSteps();
    });
</script>
</body>
</html>

