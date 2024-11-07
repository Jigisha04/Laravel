<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class URLController extends Controller
{
    public function generateUrl(Request $request)
    {
        $url = route('user.show', ['id' => 1]);
        return view('url.display', ['url' => $url]);
    }

    public function show($id)
    {
        return view('url.profile', ['id' => $id]);
    }
}
