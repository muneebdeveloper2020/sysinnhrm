<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeDailyTask extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'task_date',
        'task_description',
        'status',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
