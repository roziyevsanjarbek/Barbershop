<aside class="fixed inset-y-0 left-0 bg-gray-800 w-64 transform transition-transform duration-300 ease-in-out md:translate-x-0" id="sidebar">
    <div class="flex items-center justify-between p-4 border-b border-gray-700">
        <span class="text-xl text-white font-bold">BarberShop</span>
        <button class="md:hidden text-white" onclick="toggleSidebar()">
            <i class="fas fa-times"></i>
        </button>
    </div>
    <nav class="mt-6" id="sideBarNav">

    </nav>
</aside>

<script>
    let sideBarItems = [
        {
            'name': 'Overview',
            'uri': '/dashboard/overview',
            'icon': 'fas fa-home w-5 mr-3'
        },
        {
            'name': 'Appointments',
            'uri': '/dashboard/appointments',
            'icon': 'fas fa-calendar-alt w-5 mr-3'
        },
        {
            'name': 'Rewards',
            'uri': '/dashboard/rewards',
            'icon': 'fas fa-star w-5 mr-3'
        },
        {
            'name': 'Booking',
            'uri': '/dashboard/booking',
            'icon': 'fas fa-cut w-5 mr-3'
        }
    ];

    let sideBarNav = document.getElementById('sideBarNav');

    sideBarItems.forEach((item) => {
        let isActive = window.location.pathname === item.uri ? 'bg-gray-100 text-gray-800' : 'hover:bg-gray-700 hover:text-white';
        let linkElement = document.createElement('a');
        linkElement.href = item.uri;
        linkElement.className = `block p-3 mb-2 ${isActive} rounded-lg flex items-center`;
        linkElement.innerHTML = `<i class="${item.icon}"></i> <span class="ml-2">${item.name}</span>`;
        sideBarNav.appendChild(linkElement);
    });
</script>
