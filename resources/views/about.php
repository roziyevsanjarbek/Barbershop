<?php components('dashboard/header'); ?>
<div class="bg-gray-100">
<!-- Navigation -->
<?php components('user-dashboard/navbar'); ?>

<!-- Hero Section -->
<div class="relative h-96 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1585747860715-2ba37e788b70?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80');">
    <div class="absolute inset-0 bg-black bg-opacity-60">
        <div class="container mx-auto h-full flex items-center justify-center">
            <div class="text-center text-white">
                <h1 class="text-5xl font-bold mb-4">Our Story</h1>
                <p class="text-xl">Crafting excellence in barbering since 1995</p>
            </div>
        </div>
    </div>
</div>

<!-- Main Content -->
<div class="container mx-auto py-12 px-4">
    <!-- Company History -->
    <section class="mb-16">
        <div class="bg-white rounded-lg shadow-lg p-8">
            <h2 class="text-3xl font-bold mb-6 text-gray-800"><i class="fas fa-history text-yellow-500 mr-3"></i>Our History</h2>
            <p class="text-gray-600 leading-relaxed">
                Founded in 1995, BarberStack began as a small family-owned barbershop with a vision to revolutionize the barbering industry. Over the past decades, we've grown from a single chair to multiple locations while maintaining our commitment to quality and personal service.
            </p>
        </div>
    </section>

    <!-- Mission and Values -->
    <section class="mb-16">
        <div class="bg-white rounded-lg shadow-lg p-8">
            <h2 class="text-3xl font-bold mb-6 text-gray-800"><i class="fas fa-star text-yellow-500 mr-3"></i>Mission & Values</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center">
                    <i class="fas fa-heart text-4xl text-yellow-500 mb-4"></i>
                    <h3 class="text-xl font-bold mb-2">Excellence</h3>
                    <p class="text-gray-600">Delivering exceptional service and results in every cut</p>
                </div>
                <div class="text-center">
                    <i class="fas fa-handshake text-4xl text-yellow-500 mb-4"></i>
                    <h3 class="text-xl font-bold mb-2">Integrity</h3>
                    <p class="text-gray-600">Building trust through honest and professional service</p>
                </div>
                <div class="text-center">
                    <i class="fas fa-users text-4xl text-yellow-500 mb-4"></i>
                    <h3 class="text-xl font-bold mb-2">Community</h3>
                    <p class="text-gray-600">Creating meaningful connections with our clients</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Approach -->
    <section class="mb-16">
        <div class="bg-white rounded-lg shadow-lg p-8">
            <h2 class="text-3xl font-bold mb-6 text-gray-800"><i class="fas fa-cut text-yellow-500 mr-3"></i>Our Approach</h2>
            <p class="text-gray-600 leading-relaxed mb-6">
                At BarberStack, we combine traditional barbering techniques with modern styling innovations. Our approach is centered on personalization, ensuring each client receives a cut that enhances their unique features and fits their lifestyle.
            </p>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="flex items-start">
                    <i class="fas fa-check-circle text-yellow-500 mt-1 mr-3"></i>
                    <p class="text-gray-600">Personalized consultation for every client</p>
                </div>
                <div class="flex items-start">
                    <i class="fas fa-check-circle text-yellow-500 mt-1 mr-3"></i>
                    <p class="text-gray-600">Advanced training for all our barbers</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Awards -->
    <section class="mb-16">
        <div class="bg-white rounded-lg shadow-lg p-8">
            <h2 class="text-3xl font-bold mb-6 text-gray-800"><i class="fas fa-trophy text-yellow-500 mr-3"></i>Awards & Recognition</h2>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="flex items-center">
                    <i class="fas fa-award text-yellow-500 text-4xl mr-4"></i>
                    <div>
                        <h3 class="font-bold text-xl mb-2">Best Barbershop 2023</h3>
                        <p class="text-gray-600">City Style Awards</p>
                    </div>
                </div>
                <div class="flex items-center">
                    <i class="fas fa-medal text-yellow-500 text-4xl mr-4"></i>
                    <div>
                        <h3 class="font-bold text-xl mb-2">Excellence in Service</h3>
                        <p class="text-gray-600">Chamber of Commerce</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Community Involvement -->
    <section class="mb-16">
        <div class="bg-white rounded-lg shadow-lg p-8">
            <h2 class="text-3xl font-bold mb-6 text-gray-800"><i class="fas fa-hands-helping text-yellow-500 mr-3"></i>Community Involvement</h2>
            <p class="text-gray-600 leading-relaxed mb-6">
                We believe in giving back to our community. Through various initiatives and partnerships, we work to make a positive impact in our neighborhood.
            </p>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center">
                    <i class="fas fa-graduation-cap text-4xl text-yellow-500 mb-4"></i>
                    <h3 class="text-xl font-bold mb-2">Apprenticeship Program</h3>
                    <p class="text-gray-600">Training the next generation of barbers</p>
                </div>
                <div class="text-center">
                    <i class="fas fa-hand-holding-heart text-4xl text-yellow-500 mb-4"></i>
                    <h3 class="text-xl font-bold mb-2">Charity Events</h3>
                    <p class="text-gray-600">Regular free haircuts for those in need</p>
                </div>
                <div class="text-center">
                    <i class="fas fa-store text-4xl text-yellow-500 mb-4"></i>
                    <h3 class="text-xl font-bold mb-2">Local Business Support</h3>
                    <p class="text-gray-600">Partnering with neighborhood businesses</p>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Footer -->
<footer class="bg-gray-800 text-white py-8">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-3 gap-8">
            <div>
                <h3 class="text-xl font-bold mb-4">BarberStack</h3>
                <p class="text-gray-400">Your premier destination for professional barbering services.</p>
            </div>
            <div>
                <h3 class="text-xl font-bold mb-4">Contact</h3>
                <p class="text-gray-400">123 Barber Street<br>City, State 12345<br>Phone: (555) 123-4567</p>
            </div>
            <div>
                <h3 class="text-xl font-bold mb-4">Follow Us</h3>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-400 hover:text-yellow-500"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="text-gray-400 hover:text-yellow-500"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-gray-400 hover:text-yellow-500"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
        <div class="mt-8 text-center text-gray-400">
            <p>&copy; 2024 BarberStack. All rights reserved.</p>
        </div>
    </div>
</footer>
</div>
<?php components('dashboard/footer'); ?>