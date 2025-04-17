<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Employee extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'phone',
        'position',
        'department_id',
        'salary',
        'hired_at',
    ];

    protected $hidden = ['password'];
    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function dailyTasks()
    {
        return $this->hasMany(EmployeeDailyTask::class);
    }
}
