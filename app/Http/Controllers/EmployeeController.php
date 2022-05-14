<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Carbon\Carbon;

class EmployeeController extends Controller
{
    public function show(){
        return json_encode(Employee::get());
    }

    public function store(Request $request)
    {
        $request->validate([
            "first_name" =>"required",
            "last_name" => "required",
            "email" => "required",
            "phone_number" => "required",
            "hire_date" => "required",
            "salary" => "required",
        ]);
        Employee::insert([
            "first_name" => $request->first_name,
            "last_name" => $request->last_name,
            "email" => $request->email,
            "phone_number" => $request->phone_number,
            "hire_date" => $request->hire_date,
            "salary" => $request->salary,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            "first_name" =>"required",
            "last_name" => "required",
            "email" => "required",
            "phone_number" => "required",
            "hire_date" => "required",
            "salary" => "required",
        ]);
        Employee::where("id", $id)->update([
            "first_name" => $request->first_name,
            "last_name" => $request->last_name,
            "email" => $request->email,
            "phone_number" => $request->phone_number,
            "hire_date" => $request->hire_date,
            "salary" => $request->salary,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
    }

    public function destroy($id)
    {
        Employee::where('id', $id)->delete();
    }
}
