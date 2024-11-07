<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class empController extends Controller
{
    public function create()
    {
        return view('employee.create');
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'empID' => 'required|integer|unique:employee,empID',
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:employee,email',
            'salary' => 'required|integer|min:1',
        ]);

        // Insert the data into the employee table using Query Builder
        DB::table('employee')->insert([
            'empID' => $request->empID,
            'name' => $request->name,
            'email' => $request->email,
            'salary' => $request->salary,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->back()->with('success', 'Employee created successfully!');
    }
}
