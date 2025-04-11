<!-- resources/views/layouts/navigation.blade.php -->
<nav class="bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700 mb-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">
        <a href="{{ url('/') }}" class="text-xl font-bold text-gray-800 dark:text-white">
            My App
        </a>
        <a href="{{ route('employees.index') }}" class="text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white">
            Employees
        </a>
    </div>
</nav>
