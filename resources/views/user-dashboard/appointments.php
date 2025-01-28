<?php components('user-dashboard/header'); ?>
<div class="bg-gray-100">
<div class="flex h-screen">
    <!-- Sidebar -->
    <?php components('user-dashboard/sidebar'); ?>

    <!-- Mobile menu button -->
    <button class="fixed top-4 left-4 md:hidden z-50 bg-gray-800 text-white p-2 rounded-lg" onclick="toggleSidebar()">
        <i class="fas fa-bars"></i>
    </button>

    <!-- Main Content -->
    <main class="flex-1 md:ml-64 p-4 md:p-8 overflow-y-auto min-h-screen">
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6">Appointments</h2>
            <!-- Appointment History -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="flex items-center mb-4">
                    <i class="fas fa-history text-yellow-500 text-xl mr-2"></i>
                    <h2 class="text-xl font-semibold text-gray-800">Appointment History</h2>
                </div>
                <div class="overflow-x-auto">
                    <table class="min-w-full">
                        <thead>
                        <tr class="bg-gray-50">
                            <th class="py-2 px-4 text-left">Date</th>
                            <th class="py-2 px-4 text-left">Service</th>
                            <th class="py-2 px-4 text-left">Barber</th>
                            <th class="py-2 px-4 text-left">Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="border-t">
                            <td class="py-2 px-4">Oct 15, 2023</td>
                            <td class="py-2 px-4">Haircut</td>
                            <td class="py-2 px-4">Mike Johnson</td>
                            <td class="py-2 px-4"><span class="text-green-600">Completed</span></td>
                        </tr>
                        <tr class="border-t">
                            <td class="py-2 px-4">Sep 30, 2023</td>
                            <td class="py-2 px-4">Beard Trim</td>
                            <td class="py-2 px-4">David Smith</td>
                            <td class="py-2 px-4"><span class="text-green-600">Completed</span></td>
                        </tr>
                        </tbody>
                    </table>
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


