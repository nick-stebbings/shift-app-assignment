<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public static function getAcceptedShifts($id) {
            return Employee::join('employee_shift', 'employee_shift.employee_id', '=', 'employees.id')
                ->join('shifts', 'employee_shift.shift_id', '=', 'shifts.id')
                ->join('workplace', 'shifts.workplace_id', '=', 'workplace.id')
                ->where('employees.id', '=', $id)
                ->where('employee_shift.accepted', '=', 1)
                ->get(['employees.wage', 'shifts.starting','shifts.ending','shifts.breaks','shifts.date','shifts.paid_minutes']);
    }
}
