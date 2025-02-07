<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudController extends Controller
{
// Show the form
public function create()
{
return view('student.create');
}

// Handle form submission and store data using Query Builder
public function store(Request $request)
{
    // Validate the incoming request data
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:student,email',
        'age' => 'required|integer|min:1',
    ]);

    // Insert the data into the student table using Query Builder
    DB::table('student')->insert([
        'name' => $request->name,
        'email' => $request->email,
        'age' => $request->age,
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    // Redirect to the student list page with a success message
    return redirect()->route('student.index')->with('success', 'Student created successfully!');
}

public function index()
{
    // Fetch all students from the database
    $students = DB::table('student')->get();

    // Pass the students data to the 'index' view
    return view('student.index', ['students' => $students]);
}

}