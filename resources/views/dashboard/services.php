<?php components('dashboard/header'); ?>
<div class="bg-gray-100">
<!-- Navigation -->
<?php components('user-dashboard/navbar'); ?>
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
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    mobileMenuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });

    // Modal functions
    function openModal(modalId) {
        document.getElementById(modalId).classList.remove('hidden');
    }

    function closeModal(modalId) {
        document.getElementById(modalId).classList.add('hidden');
    }

    // Close modal when clicking outside
    window.addEventListener('click', (e) => {
        const modals = document.querySelectorAll('.fixed.inset-0.bg-gray-500');
        modals.forEach(modal => {
            if (e.target === modal) {
                modal.classList.add('hidden');
            }
        });
    });
</script>

<!-- Header Section -->
<header class="container mx-auto py-12 text-center">
    <h1 class="text-4xl font-bold mb-4">Our Professional Services</h1>
    <p class="text-gray-600 max-w-2xl mx-auto">Experience the finest in men's grooming with our comprehensive range of services. Our skilled barbers are here to help you look and feel your best.</p>
</header>

<!-- Services Container -->
<div class="container mx-auto px-4 py-8">
    <!-- Haircuts Section -->
    <section class="mb-16">
        <h2 class="text-3xl font-bold mb-8 text-gray-800">Haircuts</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                <img src="https://images.unsplash.com/photo-1593702295094-aea22597af65" alt="Classic Haircut" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Classic Haircut</h3>
                    <p class="text-gray-600 mb-4">Traditional haircut with expert precision and attention to detail.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-2xl font-bold text-gray-800">$25</span>
                        <button class="bg-gray-900 text-white px-6 py-2 rounded hover:bg-gray-700 transition-colors">Book Now</button>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                <img src="https://images.unsplash.com/photo-1599351431202-1e0f0137899a" alt="Fade Haircut" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Fade Haircut</h3>
                    <p class="text-gray-600 mb-4">Perfect blend from skin to any length on top.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-2xl font-bold text-gray-800">$30</span>
                        <button class="bg-gray-900 text-white px-6 py-2 rounded hover:bg-gray-700 transition-colors">Book Now</button>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                <img src="https://images.unsplash.com/photo-1622286342621-4bd786c2447c" alt="Kids Haircut" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Kids Haircut</h3>
                    <p class="text-gray-600 mb-4">Gentle and patient service for our younger clients.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-2xl font-bold text-gray-800">$20</span>
                        <button class="bg-gray-900 text-white px-6 py-2 rounded hover:bg-gray-700 transition-colors">Book Now</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Beard Services Section -->
    <section class="mb-16">
        <h2 class="text-3xl font-bold mb-8 text-gray-800">Beard Services</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                <img src="https://images.unsplash.com/photo-1621607512022-6aecc4fed814" alt="Beard Trim" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Beard Trim</h3>
                    <p class="text-gray-600 mb-4">Shape and maintain your beard for a clean, professional look.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-2xl font-bold text-gray-800">$15</span>
                        <button class="bg-gray-900 text-white px-6 py-2 rounded hover:bg-gray-700 transition-colors">Book Now</button>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                <img src="https://images.unsplash.com/photo-1621607512419-59a4da85ba9f" alt="Luxury Beard Treatment" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Luxury Beard Treatment</h3>
                    <p class="text-gray-600 mb-4">Deep conditioning and styling for the perfect beard.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-2xl font-bold text-gray-800">$25</span>
                        <button class="bg-gray-900 text-white px-6 py-2 rounded hover:bg-gray-700 transition-colors">Book Now</button>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                <img src="https://images.unsplash.com/photo-1621607512552-5aa8e999dcbb" alt="Clean Shave" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Clean Shave</h3>
                    <p class="text-gray-600 mb-4">Traditional straight razor shave with hot towel service.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-2xl font-bold text-gray-800">$20</span>
                        <button class="bg-gray-900 text-white px-6 py-2 rounded hover:bg-gray-700 transition-colors">Book Now</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Special Treatments Section -->
    <section class="mb-16">
        <h2 class="text-3xl font-bold mb-8 text-gray-800">Special Treatments</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                <img src="https://images.unsplash.com/photo-1585747860715-2ba37e788b70" alt="Hair Color" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Hair Color</h3>
                    <p class="text-gray-600 mb-4">Professional coloring to cover gray or try a new look.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-2xl font-bold text-gray-800">$45</span>
                        <button class="bg-gray-900 text-white px-6 py-2 rounded hover:bg-gray-700 transition-colors">Book Now</button>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                <img src="https://images.unsplash.com/photo-1582095133179-bfd08e2fc6b3" alt="Scalp Treatment" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Scalp Treatment</h3>
                    <p class="text-gray-600 mb-4">Revitalizing treatment for healthy scalp and hair growth.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-2xl font-bold text-gray-800">$35</span>
                        <button class="bg-gray-900 text-white px-6 py-2 rounded hover:bg-gray-700 transition-colors">Book Now</button>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                <img src="https://images.unsplash.com/photo-1634302086738-b8705a50d16c" alt="Face Massage" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Face Massage</h3>
                    <p class="text-gray-600 mb-4">Relaxing facial massage with premium skincare products.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-2xl font-bold text-gray-800">$30</span>
                        <button class="bg-gray-900 text-white px-6 py-2 rounded hover:bg-gray-700 transition-colors">Book Now</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Footer -->
<footer class="bg-gray-900 text-white py-8">
    <div class="container mx-auto px-4 text-center">
        <p class="mb-4">© 2024 Modern Barbershop. All rights reserved.</p>
        <div class="flex justify-center space-x-4">
            <a href="#" class="hover:text-gray-300">Privacy Policy</a>
            <a href="#" class="hover:text-gray-300">Terms of Service</a>
            <a href="#" class="hover:text-gray-300">Contact Us</a>
        </div>
    </div>
</footer>
</div>
<?php components('dashboard/footer'); ?>

