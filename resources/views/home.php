<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elegant Cuts Barbershop - Professional Grooming Services</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        // Only keep mobile menu functionality
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');

            mobileMenuButton.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
            });
        });

        function checkAuth(event) {
            // This is a placeholder - replace with actual auth check
            const isAuthenticated = false;
            if (!isAuthenticated) {
                event.preventDefault();
                window.location.href = 'login.html';
            }
        }
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');

            mobileMenuButton.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
            });
        });
    </script>
</head>
<body class="bg-gray-100">
<!-- Navigation -->
<nav class="fixed top-0 w-full bg-gray-800 shadow-lg z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="/" class="text-2xl font-bold text-white">Elegant Cuts</a>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="/" class="text-white hover:text-indigo-300">Home</a>
                <a href="services.html" class="text-gray-300 hover:text-indigo-300">Services</a>
                <a href="/login" class="text-gray-300 hover:text-indigo-300">Login</a>
                <a href="/register" class="text-gray-300 hover:text-indigo-300">Register</a>
            </div>

            <!-- Book Now Button -->
            <div class="hidden md:flex items-center">
                text-indigo-500
                ation-300">Book Now</a>
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden">
                <button type="button" class="text-gray-300 hover:text-white" id="mobile-menu-button">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </div>

        <!-- Mobile menu -->
        <div class="md:hidden hidden" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="index.html" class="block text-white bg-gray-700 px-3 py-2 rounded-md">Home</a>
                <a href="services.html" class="block text-gray-300 hover:text-white hover:bg-gray-700 px-3 py-2 rounded-md">Services</a>
                <a href="booking.html" onclick="checkAuth(event)" class="block bg-indigo-500 text-white px-3 py-2 rounded-md font-semibold hover:bg-indigo-600">Book Now</a>
                <a href="login.html" class="block text-gray-300 hover:text-white hover:bg-gray-700 px-3 py-2 rounded-md">Login</a>
                <a href="register.html" class="block text-gray-300 hover:text-white hover:bg-gray-700 px-3 py-2 rounded-md">Register</a>
            </div>
        </div>
    </div>
</nav>


<!-- Add padding for fixed navbar -->
<div class="pt-16">

    <!-- Main Content -->
    <div class="w-full">
        <!-- Hero Section -->
        <div class="relative h-screen">
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1585747860715-2ba37e788b70?ixlib=rb-1.2.1&auto=format&fit=crop')] bg-cover bg-center"></div>
            <div class="relative z-10 h-full flex items-center justify-center text-center px-4">
                <div class="max-w-4xl">
                    <h1 class="text-5xl md:text-6xl font-bold text-white mb-6">Experience Premium Grooming</h1>
                    <p class="text-xl text-gray-200 mb-8">Where style meets tradition in the heart of the city</p>
                    <a href="booking.html" class="inline-block bg-yellow-500 text-gray-900 px-8 py-4 rounded-lg text-lg font-semibold hover:bg-yellow-400 transition duration-300">Book Your Appointment</a>
                </div>
            </div>
        </div>

        <!-- Services Preview -->
        <section class="py-20 px-6 bg-white">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-4xl font-bold text-center mb-12">Our Services</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="rounded-lg overflow-hidden shadow-lg">
                        <img src="https://images.unsplash.com/photo-1621605815971-fbc98d665033" alt="Haircut" class="w-full h-64 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-semibold mb-2">Classic Haircut</h3>
                            <p class="text-gray-600 mb-4">Precision cutting tailored to your style</p>
                            <a href="services.html" class="text-yellow-500 hover:text-yellow-600">Learn More →</a>
                        </div>
                    </div>
                    <div class="rounded-lg overflow-hidden shadow-lg">
                        <img src="https://images.unsplash.com/photo-1582771498000-8ad44e6c84db" alt="Beard Trim" class="w-full h-64 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-semibold mb-2">Beard Grooming</h3>
                            <p class="text-gray-600 mb-4">Expert beard shaping and maintenance</p>
                            <a href="services.html" class="text-yellow-500 hover:text-yellow-600">Learn More →</a>
                        </div>
                    </div>
                    <div class="rounded-lg overflow-hidden shadow-lg">
                        <img src="https://images.unsplash.com/photo-1503951914875-452162b0f3f1" alt="Hot Towel" class="w-full h-64 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-semibold mb-2">Hot Towel Shave</h3>
                            <p class="text-gray-600 mb-4">Traditional straight razor experience</p>
                            <a href="services.html" class="text-yellow-500 hover:text-yellow-600">Learn More →</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Us -->
        <section class="py-20 px-6 bg-gray-50">
            <div class="max-w-6xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                    <div>
                        <h2 class="text-4xl font-bold mb-6">About Elegant Cuts</h2>
                        <p class="text-gray-600 mb-4">With over 15 years of experience, our master barbers combine traditional techniques with modern styles to give you the perfect look.</p>
                        <p class="text-gray-600 mb-6">We pride ourselves on creating a welcoming atmosphere where you can relax and enjoy premium grooming services.</p>
                        <ul class="space-y-3">
                            <li class="flex items-center"><i class="fas fa-check text-yellow-500 mr-2"></i> Expert Barbers</li>
                            <li class="flex items-center"><i class="fas fa-check text-yellow-500 mr-2"></i> Premium Products</li>
                            <li class="flex items-center"><i class="fas fa-check text-yellow-500 mr-2"></i> Relaxing Environment</li>
                        </ul>
                    </div>
                    <div class="rounded-lg overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1532710093739-9470acff878f" alt="Barbershop Interior" class="w-full h-[400px] object-cover">
                    </div>
                </div>
            </div>
        </section>

        <!-- Team Section -->
        <section class="py-20 px-6 bg-white">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-4xl font-bold text-center mb-12">Meet Our Team</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="text-center">
                        <img src="https://images.unsplash.com/photo-1537368910025-700350fe46c7" alt="Barber 1" class="w-48 h-48 rounded-full mx-auto mb-4 object-cover">
                        <h3 class="text-xl font-semibold">James Wilson</h3>
                        <p class="text-gray-600">Master Barber</p>
                    </div>
                    <div class="text-center">
                        <img src="https://images.unsplash.com/photo-1534308143481-c55f00be8bd7" alt="Barber 2" class="w-48 h-48 rounded-full mx-auto mb-4 object-cover">
                        <h3 class="text-xl font-semibold">Michael Brown</h3>
                        <p class="text-gray-600">Style Specialist</p>
                    </div>
                    <div class="text-center">
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a" alt="Barber 3" class="w-48 h-48 rounded-full mx-auto mb-4 object-cover">
                        <h3 class="text-xl font-semibold">David Martinez</h3>
                        <p class="text-gray-600">Color Expert</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials -->
        <section class="py-20 px-6 bg-gray-50">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-4xl font-bold text-center mb-12">What Our Clients Say</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <div class="text-yellow-500 mb-4">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="text-gray-600 mb-4">"Best haircut I've ever had! The attention to detail and service is outstanding."</p>
                        <p class="font-semibold">- John D.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <div class="text-yellow-500 mb-4">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="text-gray-600 mb-4">"Great atmosphere and professional service. I wouldn't go anywhere else."</p>
                        <p class="font-semibold">- Mike R.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <div class="text-yellow-500 mb-4">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="text-gray-600 mb-4">"The hot towel shave was amazing. These guys really know their craft!"</p>
                        <p class="font-semibold">- Robert S.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section class="py-20 px-6 bg-white">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-4xl font-bold text-center mb-12">Visit Us</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                    <div>
                        <h3 class="text-2xl font-semibold mb-4">Contact Information</h3>
                        <div class="space-y-4">
                            <p class="flex items-center"><i class="fas fa-map-marker-alt w-6 text-yellow-500"></i> 123 Main Street, City, State 12345</p>
                            <p class="flex items-center"><i class="fas fa-phone w-6 text-yellow-500"></i> (555) 123-4567</p>
                            <p class="flex items-center"><i class="fas fa-envelope w-6 text-yellow-500"></i> info@elegantcuts.com</p>
                        </div>
                        <div class="mt-8">
                            <h4 class="text-xl font-semibold mb-4">Hours of Operation</h4>
                            <div class="space-y-2">
                                <p>Monday - Friday: 9:00 AM - 8:00 PM</p>
                                <p>Saturday: 9:00 AM - 6:00 PM</p>
                                <p>Sunday: 10:00 AM - 4:00 PM</p>
                            </div>
                        </div>
                    </div>
                    <div class="h-[400px] rounded-lg overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1522337660859-02fbefca4702" alt="Store Front" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-gray-800 text-white py-12">
            <div class="max-w-6xl mx-auto px-6">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div>
                        <h3 class="text-xl font-bold mb-4">Elegant Cuts</h3>
                        <p class="text-gray-400">Premium barbershop services for the modern gentleman.</p>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold mb-4">Quick Links</h3>
                        <ul class="space-y-2">
                            <li><a href="services.html" class="text-gray-400 hover:text-white">Services</a></li>
                            <li><a href="booking.html" class="text-gray-

