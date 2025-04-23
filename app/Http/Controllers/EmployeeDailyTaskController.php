<?php

namespace App\Http\Controllers;

use App\Models\EmployeeDailyTask;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeDailyTaskController extends Controller
{
    // Display all employee daily tasks
    public function index()
    {
        $tasks = EmployeeDailyTask::with('employee')->latest()->get();
        return view('employee_daily_tasks.index', compact('tasks'));
    }

    // Show the form to create a new task
    public function create()
    {
        $employees = Employee::all();
        return view('employee_daily_tasks.create', compact('employees'));
    }

    // Store a newly created task in the database
    public function store(Request $request)
    {
        $request->validate([
            'employee_id' => 'required|exists:employees,id',
            'task_date' => 'required|date',
            'task_description' => 'required|string',
            'status' => 'required|in:pending,in_progress,completed',
        ]);

        EmployeeDailyTask::create($request->all());
        return redirect()->route('employee-daily-tasks.index')->with('success', 'Task created successfully.');
    }

    // Show the form to edit an existing task
    public function edit(EmployeeDailyTask $task)
    {
        $employees = Employee::all();
        return view('employee_daily_tasks.edit', compact('task', 'employees'));
    }
    // Update an existing task in the database
    public function update(Request $request, EmployeeDailyTask $task)
{
    // Validation
    $validated = $request->validate([
        'employee_id' => 'required|exists:employees,id',
        'task_date' => 'required|date',
        'task_description' => 'required|string|max:255',
        'status' => 'required|in:pending,in_progress,completed',
    ]);

    // Update the task
    $task->update($validated);

    // Redirect back to the tasks list with a success message
    return redirect()->route('employee-daily-tasks.index')->with('success', 'Task updated successfully!');
}
}
