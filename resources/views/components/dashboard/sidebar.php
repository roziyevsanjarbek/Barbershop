<aside id="sideBar" class="bg-gray-800 text-white w-64 space-y-6 py-7 px-2 absolute inset-y-0 left-0 transform -translate-x-full md:relative md:translate-x-0 transition duration-200 ease-in-out">
    <div class="flex items-center space-x-2 px-4">
        <i class="fas fa-cut text-2xl"></i>
        <span class="text-2xl font-extrabold">Barbershop</span>
    </div>
    <nav class="mt-4" id="sideBarNav">
        <!-- Sidebar items will be added here dynamically -->
    </nav>
</aside>

<script>
    let sideBarItems = [
        {
            'name': 'Dashboard',
            'uri': '/dashboard',
            'icon': 'fas fa-chart-bar mr-3'
        },
        {
            'name': 'Customers',
            'uri': '/dashboard/customer',
            'icon': 'fas fa-users mr-3'
        },
        {
            'name': 'Reports',
            'uri': '/dashboard/reports',
            'icon': 'fas fa-file-alt mr-3'
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
