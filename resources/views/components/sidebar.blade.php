<button  id="sidebarToggle" class="fixed top-4 left-4 z-50 p-2 bg-white rounded-lg shadow-lg hover:bg-gray-50 transition-colors lg:hidden" aria-label="Toggle menu">
    <svg id="menuIcon" class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
    </svg>
    <svg id="closeIcon" class="w-6 h-6 text-gray-700 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
    </svg>
</button>
<!-- Overlay -->
<div id="sidebarOverlay" class="fixed inset-0 bg-black bg-opacity-50 z-30 hidden lg:hidden"></div>

<!-- Sidebar -->
<aside id="sidebar" class="h-screen fixed lg:static top-0 left-0 w-72 bg-white border-r border-gray-200 p-6 flex flex-col z-40 transform -translate-x-full transition-transform duration-300 ease-in-out lg:translate-x-0">
    <x-sidebar-header/>
    <!-- NORMAL NAVIGATION OF ADMIN  -->
    @if(auth()->check() && auth()->user()->role === 'admin')
    <nav class="flex-1 space-y-1 overflow-y-auto">
        <!-- Dashboard -->

        <a href="{{ route('admin.dashboard') }}" class="flex items-center py-3 px-4 gap-3 text-gray-700 hover:bg-gray-200 rounded-md transition-colors {{ request()->routeIs('admin.dashboard') ? 'border-l-yellow-500 border-2 bg-gray-200' : '' }}">
            <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18.6 7.15936C16.79 7.15936 16.05 5.87936 16.95 4.30936C17.47 3.39936 17.16 2.23936 16.25 1.71936L14.52 0.729359C13.73 0.259359 12.71 0.539359 12.24 1.32936L12.13 1.51936C11.23 3.08936 9.75 3.08936 8.84 1.51936L8.73 1.32936C8.28 0.539359 7.26 0.259359 6.47 0.729359L4.74 1.71936C3.83 2.23936 3.52 3.40936 4.04 4.31936C4.95 5.87936 4.21 7.15936 2.4 7.15936C1.36 7.15936 0.5 8.00936 0.5 9.05936V10.8194C0.5 11.8594 1.35 12.7194 2.4 12.7194C4.21 12.7194 4.95 13.9994 4.04 15.5694C3.52 16.4794 3.83 17.6394 4.74 18.1594L6.47 19.1494C7.26 19.6194 8.28 19.3394 8.75 18.5494L8.86 18.3594C9.76 16.7894 11.24 16.7894 12.15 18.3594L12.26 18.5494C12.73 19.3394 13.75 19.6194 14.54 19.1494L16.27 18.1594C17.18 17.6394 17.49 16.4694 16.97 15.5694C16.06 13.9994 16.8 12.7194 18.61 12.7194C19.65 12.7194 20.51 11.8694 20.51 10.8194V9.05936C20.5 8.01936 19.65 7.15936 18.6 7.15936ZM10.5 13.1894C8.71 13.1894 7.25 11.7294 7.25 9.93936C7.25 8.14936 8.71 6.68936 10.5 6.68936C12.29 6.68936 13.75 8.14936 13.75 9.93936C13.75 11.7294 12.29 13.1894 10.5 13.1894Z" stroke="black"/>
            </svg>
            <span class="font-medium">DASHBOARD</span>
        </a>
        <a href="{{ route('admin.appointment') }}" class="flex items-center py-3 px-4 gap-3 text-gray-700 hover:bg-gray-200 rounded-md transition-colors {{ request()->routeIs('admin.appointment') ? 'border-l-yellow-500 border-2 bg-gray-200' : '' }}">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16.75 3.56V2C16.75 1.59 16.41 1.25 16 1.25C15.59 1.25 15.25 1.59 15.25 2V3.5H8.74999V2C8.74999 1.59 8.40999 1.25 7.99999 1.25C7.58999 1.25 7.24999 1.59 7.24999 2V3.56C4.54999 3.81 3.23999 5.42 3.03999 7.81C3.01999 8.1 3.25999 8.34 3.53999 8.34H20.46C20.75 8.34 20.99 8.09 20.96 7.81C20.76 5.42 19.45 3.81 16.75 3.56Z" stroke="black"/>
                <path d="M19 15C16.79 15 15 16.79 15 19C15 19.75 15.21 20.46 15.58 21.06C16.27 22.22 17.54 23 19 23C20.46 23 21.73 22.22 22.42 21.06C22.79 20.46 23 19.75 23 19C23 16.79 21.21 15 19 15ZM21.07 18.57L18.94 20.54C18.8 20.67 18.61 20.74 18.43 20.74C18.24 20.74 18.05 20.67 17.9 20.52L16.91 19.53C16.62 19.24 16.62 18.76 16.91 18.47C17.2 18.18 17.68 18.18 17.97 18.47L18.45 18.95L20.05 17.47C20.35 17.19 20.83 17.21 21.11 17.51C21.39 17.81 21.37 18.28 21.07 18.57Z" stroke="black"/>
                <path d="M20 9.84H4C3.45 9.84 3 10.29 3 10.84V17C3 20 4.5 22 8 22H12.93C13.62 22 14.1 21.33 13.88 20.68C13.68 20.1 13.51 19.46 13.51 19C13.51 15.97 15.98 13.5 19.01 13.5C19.3 13.5 19.59 13.52 19.87 13.57C20.47 13.66 21.01 13.19 21.01 12.59V10.85C21 10.29 20.55 9.84 20 9.84ZM9.21 18.21C9.02 18.39 8.76 18.5 8.5 18.5C8.24 18.5 7.98 18.39 7.79 18.21C7.61 18.02 7.5 17.76 7.5 17.5C7.5 17.24 7.61 16.98 7.79 16.79C7.89 16.7 7.99 16.63 8.12 16.58C8.49 16.42 8.93 16.51 9.21 16.79C9.39 16.98 9.5 17.24 9.5 17.5C9.5 17.76 9.39 18.02 9.21 18.21ZM9.21 14.71C9.16 14.75 9.11 14.79 9.06 14.83C9 14.87 8.94 14.9 8.88 14.92C8.82 14.95 8.76 14.97 8.7 14.98C8.63 14.99 8.56 15 8.5 15C8.24 15 7.98 14.89 7.79 14.71C7.61 14.52 7.5 14.26 7.5 14C7.5 13.74 7.61 13.48 7.79 13.29C8.02 13.06 8.37 12.95 8.7 13.02C8.76 13.03 8.82 13.05 8.88 13.08C8.94 13.1 9 13.13 9.06 13.17C9.11 13.21 9.16 13.25 9.21 13.29C9.39 13.48 9.5 13.74 9.5 14C9.5 14.26 9.39 14.52 9.21 14.71ZM12.71 14.71C12.52 14.89 12.26 15 12 15C11.74 15 11.48 14.89 11.29 14.71C11.11 14.52 11 14.26 11 14C11 13.74 11.11 13.48 11.29 13.29C11.67 12.92 12.34 12.92 12.71 13.29C12.89 13.48 13 13.74 13 14C13 14.26 12.89 14.52 12.71 14.71Z" stroke="black"/>
            </svg>
            <span class="font-medium">APPOINTMENT</span>
        </a>
        <a href="{{ route('admin.pending-parties') }}" class="flex items-center py-3 px-4 gap-3 text-gray-700 hover:bg-gray-200 rounded-md transition-colors {{ request()->routeIs('admin.pending-parties') ? 'border-l-yellow-500 border-2 bg-gray-200' : '' }}">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14.85 3.94999V7.74999H13.35V3.94999C13.35 3.67999 13.11 3.54999 12.95 3.54999C12.9 3.54999 12.85 3.55999 12.8 3.57999L4.87 6.56999C4.34 6.76999 4 7.26999 4 7.83999V8.50999C3.09 9.18999 2.5 10.28 2.5 11.51V7.83999C2.5 6.64999 3.23 5.58999 4.34 5.16999L12.28 2.16999C12.5 2.08999 12.73 2.04999 12.95 2.04999C13.95 2.04999 14.85 2.85999 14.85 3.94999Z" stroke="black"/>
                <path d="M21.5001 14.5V15.5C21.5001 15.77 21.2901 15.99 21.0101 16H19.5501C19.0201 16 18.5401 15.61 18.5001 15.09C18.4701 14.78 18.5901 14.49 18.7901 14.29C18.9701 14.1 19.2201 14 19.4901 14H21.0001C21.2901 14.01 21.5001 14.23 21.5001 14.5Z" fill="#131313"/>
                <path d="M19.48 12.95H20.5C21.05 12.95 21.5 12.5 21.5 11.95V11.51C21.5 9.44 19.81 7.75 17.74 7.75H6.26C5.41 7.75 4.63 8.03 4 8.51C3.09 9.19 2.5 10.28 2.5 11.51V18.24C2.5 20.31 4.19 22 6.26 22H17.74C19.81 22 21.5 20.31 21.5 18.24V18.05C21.5 17.5 21.05 17.05 20.5 17.05H19.63C18.67 17.05 17.75 16.46 17.5 15.53C17.29 14.77 17.54 14.04 18.04 13.55C18.41 13.17 18.92 12.95 19.48 12.95ZM14 12.75H7C6.59 12.75 6.25 12.41 6.25 12C6.25 11.59 6.59 11.25 7 11.25H14C14.41 11.25 14.75 11.59 14.75 12C14.75 12.41 14.41 12.75 14 12.75Z" stroke="black"/>
            </svg>
            <span class="font-medium">PAYMENT</span>
        </a>
        <a href="{{ route('admin.reservation-history') }}" class="flex items-center py-3 px-4 gap-3 text-gray-700 hover:bg-gray-200 rounded-md transition-colors {{ request()->routeIs('admin.reservation-history') ? 'border-l-yellow-500 border-2 bg-gray-200' : '' }}">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14.85 3.94999V7.74999H13.35V3.94999C13.35 3.67999 13.11 3.54999 12.95 3.54999C12.9 3.54999 12.85 3.55999 12.8 3.57999L4.87 6.56999C4.34 6.76999 4 7.26999 4 7.83999V8.50999C3.09 9.18999 2.5 10.28 2.5 11.51V7.83999C2.5 6.64999 3.23 5.58999 4.34 5.16999L12.28 2.16999C12.5 2.08999 12.73 2.04999 12.95 2.04999C13.95 2.04999 14.85 2.85999 14.85 3.94999Z" stroke="black"/>
                <path d="M21.5001 14.5V15.5C21.5001 15.77 21.2901 15.99 21.0101 16H19.5501C19.0201 16 18.5401 15.61 18.5001 15.09C18.4701 14.78 18.5901 14.49 18.7901 14.29C18.9701 14.1 19.2201 14 19.4901 14H21.0001C21.2901 14.01 21.5001 14.23 21.5001 14.5Z" fill="#131313"/>
                <path d="M19.48 12.95H20.5C21.05 12.95 21.5 12.5 21.5 11.95V11.51C21.5 9.44 19.81 7.75 17.74 7.75H6.26C5.41 7.75 4.63 8.03 4 8.51C3.09 9.19 2.5 10.28 2.5 11.51V18.24C2.5 20.31 4.19 22 6.26 22H17.74C19.81 22 21.5 20.31 21.5 18.24V18.05C21.5 17.5 21.05 17.05 20.5 17.05H19.63C18.67 17.05 17.75 16.46 17.5 15.53C17.29 14.77 17.54 14.04 18.04 13.55C18.41 13.17 18.92 12.95 19.48 12.95ZM14 12.75H7C6.59 12.75 6.25 12.41 6.25 12C6.25 11.59 6.59 11.25 7 11.25H14C14.41 11.25 14.75 11.59 14.75 12C14.75 12.41 14.41 12.75 14 12.75Z" stroke="black"/>
            </svg>
            <span class="font-medium">HISTORY</span>
        </a>
        <a href="" class="flex items-center py-3 px-4 gap-3 text-gray-700 hover:bg-gray-200 rounded-md transition-colors {{ request()->routeIs('dashboard') ? 'border-l-yellow-500 border-2 bg-gray-200' : '' }}">
            <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18.6 7.15936C16.79 7.15936 16.05 5.87936 16.95 4.30936C17.47 3.39936 17.16 2.23936 16.25 1.71936L14.52 0.729359C13.73 0.259359 12.71 0.539359 12.24 1.32936L12.13 1.51936C11.23 3.08936 9.75 3.08936 8.84 1.51936L8.73 1.32936C8.28 0.539359 7.26 0.259359 6.47 0.729359L4.74 1.71936C3.83 2.23936 3.52 3.40936 4.04 4.31936C4.95 5.87936 4.21 7.15936 2.4 7.15936C1.36 7.15936 0.5 8.00936 0.5 9.05936V10.8194C0.5 11.8594 1.35 12.7194 2.4 12.7194C4.21 12.7194 4.95 13.9994 4.04 15.5694C3.52 16.4794 3.83 17.6394 4.74 18.1594L6.47 19.1494C7.26 19.6194 8.28 19.3394 8.75 18.5494L8.86 18.3594C9.76 16.7894 11.24 16.7894 12.15 18.3594L12.26 18.5494C12.73 19.3394 13.75 19.6194 14.54 19.1494L16.27 18.1594C17.18 17.6394 17.49 16.4694 16.97 15.5694C16.06 13.9994 16.8 12.7194 18.61 12.7194C19.65 12.7194 20.51 11.8694 20.51 10.8194V9.05936C20.5 8.01936 19.65 7.15936 18.6 7.15936ZM10.5 13.1894C8.71 13.1894 7.25 11.7294 7.25 9.93936C7.25 8.14936 8.71 6.68936 10.5 6.68936C12.29 6.68936 13.75 8.14936 13.75 9.93936C13.75 11.7294 12.29 13.1894 10.5 13.1894Z" stroke="black"/>
            </svg>
            <span class="font-medium">SETTINGS</span>
        </a>
    </nav>
    @endif
    <!-- GUEST -->
    @if(auth()->check() && auth()->user()->role === 'guest')
    <nav class="flex-1 space-y-1 overflow-y-auto">
        <a href="{{ route('guest.dashboard') }} " class="flex items-center py-3 px-4 gap-3 text-gray-700 hover:bg-gray-200 rounded-md transition-colors {{ request()->routeIs('guest.dashboard') ? 'border-l-yellow-500 border-2 bg-gray-200' : '' }}">
            <span class="font-medium">RESERVE</span>
        </a>
        <a href="{{ route('guest.my-history') }} " class="flex items-center py-3 px-4 gap-3 text-gray-700 hover:bg-gray-200 rounded-md transition-colors {{ request()->routeIs('guest.my-history') ? 'border-l-yellow-500 border-2 bg-gray-200' : '' }}">
            <span class="font-medium">MY RESERVATIONS</span>
        </a>
    </nav>
    @endif
</aside>
    
<script>
    const sidebar = document.getElementById('sidebar');
    const sidebarToggle = document.getElementById('sidebarToggle');
    const sidebarOverlay = document.getElementById('sidebarOverlay');
    const menuIcon = document.getElementById('menuIcon');
    const closeIcon = document.getElementById('closeIcon');
    
    function toggleSidebar() {
        sidebar.classList.toggle('-translate-x-full');
        sidebarOverlay.classList.toggle('hidden');
        menuIcon.classList.toggle('hidden');
        closeIcon.classList.toggle('hidden');
    }
    function closeSidebar() {
        sidebar.classList.add('-translate-x-full');
        sidebarOverlay.classList.add('hidden');
        menuIcon.classList.remove('hidden');
        closeIcon.classList.add('hidden');
    }
    sidebarToggle.addEventListener('click', toggleSidebar);
    sidebarOverlay.addEventListener('click', closeSidebar);

    const sidebarLinks = sidebar.querySelectorAll('a, button');
    sidebarLinks.forEach(link => {
        link.addEventListener('click', () => {
            if (window.innerWidth < 1024) { // Only on mobile
                closeSidebar();
            }
        });
    });
</script>