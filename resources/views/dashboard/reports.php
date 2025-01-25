<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reports - Barbershop Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
<!-- Mobile menu button -->
<button class="fixed top-4 left-4 z-20 lg:hidden text-gray-500 hover:text-gray-700" id="showSidebar">
    <i class="fas fa-bars text-2xl"></i>
</button>

<div class="flex">
    <!-- Sidebar -->
    <aside class="fixed inset-y-0 left-0 z-30 w-64 bg-gray-800 text-white transform -translate-x-full lg:translate-x-0 transition duration-200 ease-in-out lg:static" id="mobileSidebar">
        <div class="p-4">
            <h2 class="text-2xl font-bold">Barbershop</h2>
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
    <main class="ml-64 flex-1 p-8">
        <div class="mb-8">
            <h1 class="text-3xl font-bold mb-4">Reports & Analytics</h1>

            <!-- Date Range Filter -->
            <div class="bg-white p-4 rounded-lg shadow mb-6">
                <div class="flex space-x-4">
                    <select class="p-2 border rounded">
                        <option>Last 7 Days</option>
                        <option>Last 30 Days</option>
                        <option>This Month</option>
                        <option>This Year</option>
                        <option>Custom Range</option>
                    </select>
                    <button class="bg-blue-500 text-white px-4 py-2 rounded">
                        <i class="fas fa-file-export mr-2"></i>Export Report
                    </button>
                    <button class="bg-gray-500 text-white px-4 py-2 rounded">
                        <i class="fas fa-print mr-2"></i>Print Report
                    </button>
                </div>
            </div>

            <!-- Revenue Analytics -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h2 class="text-xl font-semibold mb-4">Revenue Overview</h2>
                    <canvas id="revenueChart"></canvas>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <h2 class="text-xl font-semibold mb-4">Service Performance</h2>
                    <canvas id="serviceChart"></canvas>
                </div>
            </div>

            <!-- Customer Analytics -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h2 class="text-xl font-semibold mb-4">Customer Growth</h2>
                    <canvas id="customerGrowthChart"></canvas>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <h2 class="text-xl font-semibold mb-4">Customer Retention</h2>
                    <canvas id="retentionChart"></canvas>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <h2 class="text-xl font-semibold mb-4">Customer Satisfaction</h2>
                    <canvas id="satisfactionChart"></canvas>
                </div>
            </div>

            <!-- Staff Performance -->
            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h2 class="text-xl font-semibold mb-4">Staff Performance</h2>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                        <tr>
                            <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Staff Member</th>
                            <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Appointments</th>
                            <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Revenue</th>
                            <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Rating</th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                        <!-- Sample data rows -->
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">John Doe</td>
                            <td class="px-6 py-4 whitespace-nowrap">145</td>
                            <td class="px-6 py-4 whitespace-nowrap">$2,890</td>
                            <td class="px-6 py-4 whitespace-nowrap">4.8/5</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</div>

<script>
    // Initialize Charts
    document.addEventListener('DOMContentLoaded', function() {
        // Revenue Chart
        new Chart(document.getElementById('revenueChart'), {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [{
                    label: 'Monthly Revenue',
                    data: [3000, 3500, 4000, 3800, 4200, 4500],
                    borderColor: 'rgb(59, 130, 246)',
                    tension: 0.1
                }]
            }
        });

        // Service Performance Chart
        new Chart(document.getElementById('serviceChart'), {
            type: 'bar',
            data: {
                labels: ['Haircut', 'Beard Trim', 'Styling', 'Color', 'Shave'],
                datasets: [{
                    label: 'Service Bookings',
                    data: [150, 120, 90, 60, 80],
                    backgroundColor: 'rgb(59, 130, 246)'
                }]
            }
        });

        // Customer Growth Chart
        new Chart(document.getElementById('customerGrowthChart'), {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [{
                    label: 'New Customers',
                    data: [20, 25, 30, 35, 40, 45],
                    borderColor: 'rgb(34, 197, 94)'
                }]
            }
        });

        // Retention Chart
        new Chart(document.getElementById('retentionChart'), {
            type: 'doughnut',
            data: {
                labels: ['Retained', 'Lost', 'New'],
                datasets: [{
                    data: [70, 15, 15],
                    backgroundColor: ['#10B981', '#EF4444', '#F59E0B']
                }]
            }
        });

        // Satisfaction Chart
        new Chart(document.getElementById('satisfactionChart'), {
            type: 'bar',
            data: {
                labels: ['5★', '4★', '3★', '2★', '1★'],
                datasets: [{
                    label: 'Customer Ratings',
                    data: [45, 30, 15, 7, 3],
                    backgroundColor: '#8B5CF6'
                }]
            }
        });
    });
</script>
<script>
    // Mobile menu toggle
    const showSidebar = document.querySelector('#showSidebar');
    const mobileSidebar = document.querySelector('#mobileSidebar');

    showSidebar.addEventListener('click', () => {
        mobileSidebar.classList.toggle('-translate-x-full');
    });
</script>
</body>
</html>
