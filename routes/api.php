<?php

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Shift;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ShiftController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return 
// });

Route::controller(RegisteredUserController::class)->group(function () {
    Route::put('/user/{id}', 'update');

    Route::post('/user/{id}/link', function (Request $request, $id) { 
        return RegisteredUserController::assignEmployee($id, $request->dob,$request->employee_identifier);
    });
});

Route::controller(EmployeeController::class)->group(function () {
    Route::get('/employee/{id}', function (Request $request, $id) {
        return Employee::find($id);
    });

    Route::get('/employee/{id}/shifts', function (Request $request, $id) {
        return Employee::join('employee_shift', 'employee_shift.employee_id', '=', 'employees.id')
            ->join('shifts', 'employee_shift.shift_id', '=', 'shifts.id')
            ->join('workplace', 'shifts.workplace_id', '=', 'workplace.id')
            ->where('employees.id', '=', $id)
            ->get(['accepted','shifts.date','shifts.starting','shifts.ending','shifts.breaks', 'workplace.name as location']);
    });

    Route::get('/employees', function (Request $request) {
        return Employee::all();
    });
});

Route::controller(ShiftController::class)->group(function () {
    Route::get('/shift/{id}', function (Request $request, $id) {
        return Shift::find($id);
    });

    Route::get('/shifts', function (Request $request) {
        return Shift::all();
    });
});