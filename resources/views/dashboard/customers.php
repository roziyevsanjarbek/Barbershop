<?php components('dashboard/header'); ?>
<div class="bg-gray-100">
<!-- Mobile menu button -->
<button class="fixed top-4 left-4 z-20 lg:hidden text-gray-500 hover:text-gray-700" id="showSidebar">
    <i class="fas fa-bars text-2xl"></i>
</button>

<div class="min-h-screen flex">
    <!-- Sidebar -->
    <?php components('dashboard/sidebar'); ?>


    <!-- Main Content -->
    <div class="flex-1">
        <!-- Top Navigation -->
        <header class="bg-white shadow">
            <div class="px-4 py-6">
                <h1 class="text-2xl font-semibold text-gray-900">Customer Management</h1>
            </div>
        </header>

        <!-- Main Content Area -->
        <main class="p-6">
            <!-- Search and Filter Section -->
            <div class="bg-white rounded-lg shadow p-6 mb-6">
                <div class="flex flex-col md:flex-row gap-4">
                    <div class="flex-1">
                        <input type="text" placeholder="Search customers..."
                               class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div class="flex gap-4">
                        <select class="px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option>All Status</option>
                            <option>Active</option>
                            <option>Inactive</option>
                        </select>
                        <select class="px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option>Loyalty Level</option>
                            <option>Gold</option>
                            <option>Silver</option>
                            <option>Bronze</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Customer List Table -->
            <div class="bg-white rounded-lg shadow overflow-x-auto mb-6">
                <table class="min-w-full">
                    <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Customer</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Loyalty Points</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Last Visit</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="h-10 w-10 rounded-full bg-gray-300"></div>
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">John Doe</div>
                                    <div class="text-sm text-gray-500">john@example.com</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        Active
                                    </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">1,250 pts</div>
                            <div class="text-xs text-gray-500">Gold Member</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            2023-12-01
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <button class="text-indigo-600 hover:text-indigo-900 mr-3">Edit</button>
                            <button class="text-red-600 hover:text-red-900">Delete</button>
                        </td>
                    </tr>
                    <!-- More customer rows... -->
                    </tbody>
                </table>
                <!-- Pagination -->
                <div class="bg-white px-4 py-3 border-t border-gray-200 sm:px-6">
                    <div class="flex items-center justify-between">
                        <div class="flex-1 flex justify-between sm:hidden">
                            <button class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                                Previous
                            </button>
                            <button class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                                Next
                            </button>
                        </div>
                        <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                            <div>
                                <p class="text-sm text-gray-700">
                                    Showing <span class="font-medium">1</span> to <span class="font-medium">10</span> of <span class="font-medium">97</span> results
                                </p>
                            </div>
                            <div>
                                <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px">
                                    <button class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">Previous</button>
                                    <button class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">1</button>
                                    <button class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">2</button>
                                    <button class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">3</button>
                                    <button class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">Next</button>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Customer Profile Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">
                <!-- Profile Card -->
                <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex items-center">
                        <div class="h-16 w-16 rounded-full bg-gray-300"></div>
                        <div class="ml-4">
                            <h3 class="text-lg font-medium text-gray-900">John Doe</h3>
                            <div class="text-sm text-gray-500">Gold Member</div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <div class="text-sm text-gray-500">Total Visits</div>
                                <div class="text-lg font-medium">24</div>
                            </div>
                            <div>
                                <div class="text-sm text-gray-500">Loyalty Points</div>
                                <div class="text-lg font-medium">1,250</div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <div class="text-sm text-gray-500 mb-2">Favorite Services</div>
                        <div class="flex gap-2">
                            <span class="px-2 py-1 text-xs bg-blue-100 text-blue-800 rounded-full">Haircut</span>
                            <span class="px-2 py-1 text-xs bg-blue-100 text-blue-800 rounded-full">Beard Trim</span>
                        </div>
                    </div>
                </div>
                <!-- More profile cards... -->
            </div>

            <!-- Appointment History -->
            <div class="bg-white rounded-lg shadow p-6">
                <h2 class="text-lg font-medium mb-4">Recent Appointments</h2>
                <div class="space-y-4">
                    <div class="flex items-center justify-between p-4 border rounded-lg">
                        <div>
                            <div class="text-sm font-medium">Haircut & Beard Trim</div>
                            <div class="text-sm text-gray-500">December 1, 2023 - 2:00 PM</div>
                        </div>
                        <div>
                            <span class="px-2 py-1 text-xs bg-green-100 text-green-800 rounded-full">Completed</span>
                        </div>
                    </div>
                    <!-- More appointment history items... -->
                </div>
            </div>
        </main>
    </div>
</div>
<script>
    // Mobile menu toggle
    const showSidebar = document.querySelector('#showSidebar');
    const mobileSidebar = document.querySelector('#mobileSidebar');

    showSidebar.addEventListener('click', () => {
        mobileSidebar.classList.toggle('-translate-x-full');
    });
</script>
</div>
<?php components('dashboard/footer'); ?>
