<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function index(Request $request) {
        // Get the current request path
        $path = $request->path();
        echo 'path: '.$path;
        echo '<br>';

        // Check if the request path matches a pattern ('foo/*')
        $pattern = $request->is('foo/*');
        echo 'is: '.$pattern;
        echo '<br>';

        // Check if the request method is POST
        $methodname = $request->isMethod('POST');
        echo 'isMethod: '.$methodname;
        echo '<br>';

        // Get the request method (GET, POST, etc.)
        $methodtype = $request->method();
        echo 'method: '.$methodtype;
        echo '<br>';

        // Get the request URL without query parameters
        $url = $request->url();
        echo 'url: '.$url;
        echo '<br>';

        // Get the full request URL including query parameters
        $url1 = $request->fullUrl();
        echo 'fullurl: '.$url1;
        echo '<br>';

        // Check if the current route matches a pattern ('user.*')
        $routeis = $request->routeIs('user.*');
        echo 'routeIs: '.$routeis;
        echo '<br>';

        // Query parameters: Get 'name' with a default value if not present
        $name = $request->query('name', 'Michael');
        echo 'Viewer Name: '.$name;
        echo '<br>';

        // Query parameters: Get 'class' with a default value if not present
        $class = $request->query('class', 'X');
        echo 'Viewer Class: '.$class;
    }
}

// <?php
// namespace App\Http\Controllers;
// use Illuminate\Http\Request;
// class RequestController1 extends Controller
// {
// public function submit(Request $request) {
// //Retrieve the name input field
// $name = $request->input('name');
// echo 'Name: '.$name;
// echo '<br>';
// //Retrieve the username input field
// $username = $request->username;
// echo 'Username: '.$username;
// echo '<br>';
// //Retrieve the password input field
// $password = $request->password;
// echo 'Password: '.$password;
// echo '<br>';
// echo $request->has('email');
// echo "<br>";
// if ($request->has('name'))
// {
// echo 'name is Found with has method';
// }
// else
// {
// echo 'Not Found';
// }
// echo '<br>';
// if ($request->has(['username', 'password']))
// {
// echo 'found';
// }
// else
// {
// echo 'Not Found';
// }
// echo '<br>';
// if ($request->hasAny(['mobile', 'email']))
// {
// echo 'found';
// }
// else
// {
// echo 'Not Found';
// }
// echo '<br>';
// if ($request->filled('name'))
// {
// echo 'name is filled';
// }
// else
// {
// echo 'name is not filled';
// }
// echo '<br>';
// if ($request->missing('email'))
// {
// echo 'email is missing';
// }
// else
// {
// echo 'not missing';
// }
// echo '<br>';
// $request->whenFilled('name', function ($input) {
// echo "name is whenfilled:".$input;
// });
// echo '<br>';
// $request->whenHas('name', function ($input) {
// echo "name is found with whenHas method:".$input;
// });
// }
// }