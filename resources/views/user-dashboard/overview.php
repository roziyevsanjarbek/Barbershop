<?php components('user-dashboard/header'); ?>
<div class="bg-gray-100 fade-in">
<div class="flex h-screen">
    <!-- Sidebar -->
    <?php components('user-dashboard/sidebar'); ?>


    <!-- Mobile menu button -->
    <button class="fixed top-4 left-4 md:hidden z-50 bg-gray-800 text-white p-2 rounded-lg" onclick="toggleSidebar()">
        <i class="fas fa-bars"></i>
    </button>

    <!-- Main Content -->
    <main class="flex-1 md:ml-64 p-4 md:p-8 overflow-y-auto min-h-screen">
        <div class="loading-spinner hidden">
            <div class="animate-spin rounded-full h-12 w-12 border-b-2 border-yellow-500"></div>
        </div>
        <!-- Welcome Section -->
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-2xl font-bold text-gray-800">Welcome, <span id="userName">John</span></h1>
            <a href="booking.html" class="bg-yellow-500 hover:bg-yellow-600 text-white px-6 py-2 rounded-lg inline-flex items-center">
                <i class="fas fa-calendar-plus mr-2"></i> Quick Book
            </a>
        </div>

        <!-- Overview Section -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6">Overview</h2>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <!-- Upcoming Appointments -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-calendar-alt text-yellow-500 text-xl mr-2"></i>
                        <h2 class="text-xl font-semibold text-gray-800">Upcoming Appointments</h2>
                    </div>
                    <div class="space-y-4">
                        <div class="border-l-4 border-yellow-500 pl-4">
                            <p class="font-semibold">Haircut & Beard Trim</p>
                            <p class="text-sm text-gray-600">Tomorrow at 2:00 PM</p>
                            <div class="flex mt-2">
                                <button class="text-blue-600 hover:text-blue-800 mr-4">
                                    <i class="fas fa-edit mr-1"></i> Reschedule
                                </button>
                                <button class="text-red-600 hover:text-red-800">
                                    <i class="fas fa-times mr-1"></i> Cancel
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Profile Information -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-user text-yellow-500 text-xl mr-2"></i>
                        <h2 class="text-xl font-semibold text-gray-800">Profile Information</h2>
                    </div>
                    <div class="space-y-3">
                        <div>
                            <label class="text-gray-600">Name</label>
                            <p class="font-semibold">John Doe</p>
                        </div>
                        <div>
                            <label class="text-gray-600">Email</label>
                            <p class="font-semibold">john.doe@example.com</p>
                        </div>
                        <div>
                            <label class="text-gray-600">Phone</label>
                            <p class="font-semibold">+1 (555) 123-4567</p>
                        </div>
                        <button class="text-yellow-500 hover:text-yellow-600">
                            <i class="fas fa-pencil-alt mr-1"></i> Edit Profile
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>

<script>
    function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        sidebar.classList.toggle('translate-x-0');
        sidebar.classList.toggle('-translate-x-full');
    }
</script>
</div>
<?php components('user-dashboard/footer'); ?>

