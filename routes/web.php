<?php

use App\Http\Controllers\EmployeeController;
use App\Models\Employee;
use App\Models\Shift;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteSeapi/employee/'. Auth::user()->employee_id . '/shifts group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome', ['employee_id' => Auth::user()->employee_id]);
})->middleware(['auth'])->name('/');

Route::get('/wages', function () {
    $emp_id = Auth::user()->employee_id;

    if($emp_id != '' && !is_null($emp_id)) {
        $shifts = EmployeeController::getAcceptedShifts(Auth::user()->employee_id)->groupBy('date');
        return view('wages', ['shifts' => $shifts]);
    }
    return view('wages', ['shifts' => []]);
})->middleware(['auth'])->name('/wages');

Route::get('/shifts', function () {
    $permissions = DB::select('select
    permission
    from
    "permissions"
    join "permission_role" on permission_role.permission_id = permissions.id
    join "roles" on permission_role.role_id = roles.id
    join "employees" on roles.id = employees.role_id
    where employees.id =' . Auth::user()->employee_id);
    
    if (count($permissions) < 2) { // Rudimentary implementation
        $isManager = false;
    } else {
        $isManager = true;
    }

    if (!$isManager) {
        $shifts = Employee::join('employee_shift', 'employee_shift.employee_id', '=', 'employees.id')
        ->join('shifts', 'employee_shift.shift_id', '=', 'shifts.id')
        ->join('workplace', 'shifts.workplace_id', '=', 'workplace.id')
        ->where('employees.id', '=', Auth::user()->employee_id)
        ->get(['accepted','shifts.date','shifts.starting','shifts.ending','shifts.breaks', 'workplace.name as location']);
    } else {
        $shifts = Shift::join('workplace', 'shifts.workplace_id', '=', 'workplace.id')
        ->get(['shifts.date','shifts.starting','shifts.ending','shifts.breaks', 'workplace.name as location']);;
    }

    return view('shifts-list', ['isManager' =>  $isManager, 'shifts' =>  $shifts]);
})->middleware(['auth'])->name('/shifts');

Route::get('/shift/{id}/edit', function () {
    return view('shift-edit');
})->middleware(['auth'])->name('/shifts');

Route::get('/shifts/new', function () {
    return view('shift-create');
})->middleware(['auth'])->name('/shifts');

Route::controller(App\Http\Controllers\Auth\RegisteredUserController::class)->group(function () {
    Route::get('/profile', 'fetch')->middleware(['auth'])->name('/user');
    Route::get('/profile/update', 'update')->middleware(['auth'])->name('/user');
});

require __DIR__.'/auth.php';
