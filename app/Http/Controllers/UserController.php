<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function showForm()
    {
        return view('username-form');
    }

    public function storeUsername(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255',
        ]);

        $request->session()->put('username', $request->input('username'));

        return redirect('/display-username'); 
    }

    public function displayUsername(Request $request)
    {
        $username = $request->session()->get('username', 'Guest');

        return view('display-username', compact('username'));
    }

    public function clearSession(Request $request)
    {
        $request->session()->forget('username');

        return redirect('/username'); 
    }
}

