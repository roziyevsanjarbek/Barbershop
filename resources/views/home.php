<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elegant Cuts Barbershop - Professional Grooming Services</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');

            mobileMenuButton.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
            });
        });

        function checkAuth(event) {
            const isAuthenticated = false; // Replace this with actual authentication logic
            if (!isAuthenticated) {
                event.preventDefault();
                window.location.href = 'login.html';
            }
        }
    </script>
</head>
<body class="bg-gray-100">
<!-- Navigation -->
<?php components('user-dashboard/navbar'); ?>

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

        <!-- Additional sections (Services, About, Testimonials, etc.) remain unchanged -->
    </div>

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
                        <li><a href="booking.html" class="text-gray-400 hover:text-white">Book Now</a></li>
                        <li><a href="contact.html" class="text-gray-400 hover:text-white">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">Follow Us</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>

