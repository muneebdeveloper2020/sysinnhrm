<nav class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center space-x-4">
                <!-- Logo -->
                <a href="{{ url('/') }}" class="text-xl font-bold text-gray-800 dark:text-white">
                    My App
                </a>

                <!-- Navigation Links -->
                <a href="{{ route('employees.index') }}" class="text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white">
                    Employees
                </a>
            </div>
        </div>
    </div>
</nav>
