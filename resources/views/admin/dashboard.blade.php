<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

<div class="flex h-screen">

    <!-- Sidebar -->
    <aside class="w-64 bg-white shadow-md hidden md:block">
        <div class="p-6 text-xl font-bold text-blue-600">Admin Panel</div>
        <nav class="mt-6">
            <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-100 text-gray-700">Dashboard</a>
            <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-100 text-gray-700">Employees</a>
            <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-100 text-gray-700">Employees Tasks</a>
            <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-100 text-gray-700">Leaves</a>
            <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-100 text-gray-700">Attendance</a>
            <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-100 text-gray-700">Reports</a>
        </nav>
        <!-- Logout Form -->
        <form method="POST" action="{{ route('admin.logout') }}" class="px-4 mt-8">
            @csrf
            <button type="submit" class="w-full text-left py-2.5 px-4 rounded bg-red-500 text-white hover:bg-red-600 transition duration-200">
                Logout
            </button>
        </form>
    </aside>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col">
        <!-- Header -->
        <header class="bg-white shadow p-4 flex justify-between items-center">
            <h1 class="text-xl font-semibold text-gray-800">Welcome, Super Admin!</h1>
            <div class="flex items-center space-x-4">
                <span class="text-gray-600">Admin</span>
                <img class="h-8 w-8 rounded-full object-cover" src="https://i.pravatar.cc/40" alt="Admin Avatar">
            </div>
        </header>

        <!-- Content Area -->
        <main class="p-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h2 class="text-lg font-semibold text-gray-700">Total Users</h2>
                    <p class="mt-2 text-3xl font-bold text-blue-600">1,245</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <h2 class="text-lg font-semibold text-gray-700">Revenue</h2>
                    <p class="mt-2 text-3xl font-bold text-green-500">$12,340</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <h2 class="text-lg font-semibold text-gray-700">Active Subs</h2>
                    <p class="mt-2 text-3xl font-bold text-purple-600">530</p>
                </div>
            </div>
        </main>
    </div>
</div>

</body>
</html>
