<aside id="sidebar" class="bg-indigo-700 text-white w-full md:w-64 h-full md:h-auto fixed md:relative z-20 flex flex-col p-6 space-y-4 transition-all transform md:translate-x-0 -translate-x-full md:block">
    <div class="text-center">
        <h1 class="text-2xl font-bold">Dashboard</h1>
    </div>
    <nav class="flex-1 space-y-4">
        <a href="dashboard.php" class="block px-4 py-2 rounded hover:bg-indigo-600">Home</a>
        <a href="app.php" class="block px-4 py-2 rounded hover:bg-indigo-600">App</a>
        <a href="users.php" class="block px-4 py-2 rounded hover:bg-indigo-600">Users</a>
        <a href="../api/logout.php" class="block px-4 py-2 rounded hover:bg-indigo-600">Logout</a>
    </nav>
</aside>
<!-- Overlay for Mobile Sidebar -->
<div id="sidebarOverlay" class="fixed inset-0 bg-black opacity-50 z-10 hidden md:hidden"></div>