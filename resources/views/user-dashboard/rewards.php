<?php components('user-dashboard/header'); ?>
<div class="bg-gray-100">
<div class="flex h-screen">
    <!-- Sidebar -->
    <?php components('user-dashboard/sidebar'); ?>


    <!-- Main Content -->
    <main class="flex-1 ml-64 p-8">
        <section id="rewards" class="mb-12">
            <h2 class="text-2xl font-bold mb-6">Rewards</h2>
            <!-- Loyalty Points -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="flex items-center mb-4">
                    <i class="fas fa-star text-yellow-500 text-xl mr-2"></i>
                    <h2 class="text-xl font-semibold text-gray-800">Loyalty Points</h2>
                </div>
                <div class="space-y-4">
                    <div>
                        <p class="font-semibold">Current Points: 450</p>
                        <div class="w-full bg-gray-200 rounded-full h-2.5 my-2">
                            <div class="bg-yellow-500 h-2.5 rounded-full" style="width: 45%"></div>
                        </div>
                        <p class="text-sm text-gray-600">450/1000 points to next reward</p>
                    </div>
                    <div class="border-t pt-4">
                        <h3 class="font-semibold mb-2">Available Rewards:</h3>
                        <ul class="space-y-2">
                            <li class="flex items-center">
                                <i class="fas fa-gift text-yellow-500 mr-2"></i>
                                <span>Free Beard Trim (500 points)</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-gift text-yellow-500 mr-2"></i>
                                <span>Premium Hair Treatment (750 points)</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>

<script>
    function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        sidebar.classList.toggle('-translate-x-full');
    }
</script>
</div>
<?php components('user-dashboard/footer'); ?>

