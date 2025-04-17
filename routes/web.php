<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeDailyTaskController;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('employees', \App\Http\Controllers\EmployeeController::class);

Route::resource('employee-daily-tasks', EmployeeDailyTaskController::class);
// routes/web.php

use App\Http\Controllers\Auth\EmployeeAuthController;

Route::get('employee/login', [EmployeeAuthController::class, 'showLoginForm'])->name('employee.login');
Route::post('employee/login', [EmployeeAuthController::class, 'login'])->name('employee.login.submit');
Route::post('employee/logout', [EmployeeAuthController::class, 'logout'])->name('employee.logout');

// Example protected route
Route::middleware(['auth:employee'])->group(function () {
    Route::get('/employee/dashboard', function () {
        return view('employee.dashboard'); // create this blade file
    })->name('employee.dashboard');
});
