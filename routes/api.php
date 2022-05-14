<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Employees apis
Route::get("/show",[EmployeeController::class, "show"]);
Route::post("/store",[EmployeeController::class, "store"]);
Route::post("/update/{id}",[EmployeeController::class, "update"]);
Route::post("/destroy/{id}",[EmployeeController::class, "destroy"]);
