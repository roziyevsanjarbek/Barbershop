<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barbershop Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-100">
<div class="min-h-screen flex">
    <!-- Sidebar -->
    <aside class="bg-gray-800 text-white w-64 space-y-6 py-7 px-2 absolute inset-y-0 left-0 transform -translate-x-full md:relative md:translate-x-0 transition duration-200 ease-in-out">
        <div class="flex items-center space-x-2 px-4">
            <i class="fas fa-cut text-2xl"></i>
            <span class="text-2xl font-extrabold">Barbershop</span>
        </div>
        <nav class="mt-4">
            <a href="dashboard.html" class="flex items-center px-4 py-2 hover:bg-gray-700">
                <i class="fas fa-tachometer-alt mr-3"></i>Dashboard
            </a>
            <a href="services.html" class="flex items-center px-4 py-2 hover:bg-gray-700">
                <i class="fas fa-cut mr-3"></i>Services
            </a>
            <a href="customers.html" class="flex items-center px-4 py-2 hover:bg-gray-700">
                <i class="fas fa-users mr-3"></i>Customers
            </a>
            <a href="booking.html" class="flex items-center px-4 py-2 hover:bg-gray-700">
                <i class="fas fa-calendar-alt mr-3"></i>Bookings
            </a>
            <a href="reports.html" class="flex items-center px-4 py-2 bg-gray-700">
                <i class="fas fa-chart-bar mr-3"></i>Reports
            </a>
        </nav>
    </aside>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col overflow-hidden">
        <!-- Top Header -->
        <header class="bg-white shadow-lg">
            <div class="flex items-center justify-between p-4">
                <button class="text-gray-500 md:hidden">
                    <i class="fas fa-bars text-lg"></i>
                </button>
                <div class="flex items-center space-x-4">
                    <button class="text-gray-500 hover:text-gray-700">
                        <i class="fas fa-bell text-lg"></i>
                    </button>
                    <div class="flex items-center space-x-2">
                        <img src="https://via.placeholder.com/40" alt="Profile" class="w-10 h-10 rounded-full">
                        <span class="text-gray-700">Admin User</span>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Content Area -->
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100">
            <div class="container mx-auto px-6 py-8">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-gray-700 text-3xl font-medium">Dashboard</h3>
                    <div class="flex gap-4">
                        <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg flex items-center">
                            <i class="fas fa-plus mr-2"></i> New Appointment
                        </button>
                        <button class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg flex items-center">
                            <i class="fas fa-sync-alt mr-2"></i> Refresh Data
                        </button>
                    </div>
                </div>

                <!-- Stats Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <div class="bg-white rounded-lg shadow-lg p-6 transform hover:scale-105 transition-transform duration-200">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-blue-100 text-blue-500">
                                <i class="fas fa-calendar-check text-2xl"></i>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm text-gray-500">Today's Appointments</p>
                                <p class="text-2xl font-semibold text-gray-700">24</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow-lg p-6">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-green-100 text-green-500">
                                <i class="fas fa-dollar-sign text-2xl"></i>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm text-gray-500">Revenue Today</p>
                                <p class="text-2xl font-semibold text-gray-700">$1,200</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow-lg p-6">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-yellow-100 text-yellow-500">
                                <i class="fas fa-users text-2xl"></i>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm text-gray-500">New Customers</p>
                                <p class="text-2xl font-semibold text-gray-700">8</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow-lg p-6">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-red-100 text-red-500">
                                <i class="fas fa-chart-line text-2xl"></i>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm text-gray-500">Growth</p>
                                <p class="text-2xl font-semibold text-gray-700">+12%</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Staff Performance Section -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
                    <div class="bg-white rounded-lg shadow-lg p-6">
                        <h4 class="text-gray-700 text-lg font-medium mb-4">Staff Performance</h4>
                        <div class="space-y-4">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <img src="https://via.placeholder.com/40" alt="Staff" class="w-10 h-10 rounded-full mr-3">
                                    <div>
                                        <p class="text-sm font-medium">John Smith</p>
                                        <p class="text-xs text-gray-500">Senior Barber</p>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <p class="text-sm font-semibold">95%</p>
                                    <p class="text-xs text-green-500">Available</p>
                                </div>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <img src="https://via.placeholder.com/40" alt="Staff" class="w-10 h-10 rounded-full mr-3">
                                    <div>
                                        <p class="text-sm font-medium">Sarah Johnson</p>
                                        <p class="text-xs text-gray-500">Hair Stylist</p>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <p class="text-sm font-semibold">87%</p>
                                    <p class="text-xs text-yellow-500">Busy</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg p-6">
                        <h4 class="text-gray-700 text-lg font-medium mb-4">Inventory Status</h4>
                        <div class="space-y-4">
                            <div class="flex justify-between items-center">
                                <span class="text-sm">Hair Products</span>
                                <div class="w-32 bg-gray-200 rounded-full h-2.5">
                                    <div class="bg-blue-600 h-2.5 rounded-full" style="width: 75%"></div>
                                </div>
                                <span class="text-sm font-medium">75%</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-sm">Styling Tools</span>
                                <div class="w-32 bg-gray-200 rounded-full h-2.5">
                                    <div class="bg-red-600 h-2.5 rounded-full" style="width: 25%"></div>
                                </div>
                                <span class="text-sm font-medium">25%</span>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg p-6">
                        <h4 class="text-gray-700 text-lg font-medium mb-4">Customer Feedback</h4>
                        <div class="space-y-4">
                            <div class="p-4 bg-gray-50 rounded-lg">
                                <div class="flex items-center mb-2">
                                    <div class="flex text-yellow-400">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <span class="ml-2 text-sm text-gray-500">Today</span>
                                </div>
                                <p class="text-sm">"Great service and amazing staff! Very professional."</p>
                                <p class="text-xs text-gray-500 mt-1">- Alex M.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Charts Section -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
                    <div class="bg-white rounded-lg shadow-lg p-6">
                        <h4 class="text-gray-700 text-lg font-medium mb-4">Revenue Overview</h4>
                        <canvas id="revenueChart" width="400" height="200"></canvas>
                    </div>
                    <div class="bg-white rounded-lg shadow-lg p-6">
                        <h4 class="text-gray-700 text-lg font-medium mb-4">Appointments Overview</h4>
                        <canvas id="appointmentsChart" width="400" height="200"></canvas>
                    </div>
                </div>

                <!-- Recent Appointments Table -->
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h4 class="text-gray-700 text-lg font-medium mb-4">Recent Appointments</h4>
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead>
                            <tr>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase">Customer</th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase">Service</th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase">Date</th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase">Time</th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                            </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">John Doe</td>
                                <td class="px-6 py-4 whitespace-nowrap">Haircut</td>
                                <td class="px-6 py-4 whitespace-nowrap">2023-10-20</td>
                                <td class="px-6 py-4 whitespace-nowrap">10:00 AM</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Confirmed</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">Mike Smith</td>
                                <td class="px-6 py-4 whitespace-nowrap">Beard Trim</td>
                                <td class="px-6 py-4 whitespace-nowrap">2023-10-20</td>
                                <td class="px-6 py-4 whitespace-nowrap">11:30 AM</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800">Pending</span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

<script>
    // Update active menu item
    document.addEventListener('DOMContentLoaded', function() {
        const path = window.location.pathname;
        const menuItems = document.querySelectorAll('nav a');
        menuItems.forEach(item => {
            if (item.getAttribute('href') === path) {
                item.classList.add('bg-gray-700');
            }
        });
    });

    // Mobile menu toggle
    const menuButton = document.querySelector('button.text-gray-500');
    const sidebar = document.querySelector('aside');
    menuButton.addEventListener('click', () => {
        sidebar.classList.toggle('-translate-x-full');
    });
    // Revenue Chart
    const revenueCtx = document.getElementById('revenueChart').getContext('2d');
    new Chart(revenueCtx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
            datasets: [{
                label: 'Revenue',
                data: [3000, 3500, 4000, 3800, 4200, 4500],
                borderColor: 'rgb(59, 130, 246)',
                tension: 0.1
            }]
        },
        options: {
            responsive: true
        }
    });

    // Appointments Chart
    const appointmentsCtx = document.getElementById('appointmentsChart').getContext('2d');
    new Chart(appointmentsCtx, {
        type: 'bar',
        data: {
            labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
            datasets: [{
                label: 'Appointments',
                data: [12, 19, 15, 17, 20, 25],
                backgroundColor: 'rgba(59, 130, 246, 0.5)'
            }]
        },
        options: {
            responsive: true
        }
    });
</script>
</body>
</html>
