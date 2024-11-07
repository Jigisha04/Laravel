<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/practice',function(){
    $questions = [
        [
            'questions' => 'what is Laravel?',
            'answer' => 'Laravel is a PHP framework for web artisian.'
        ],
        [
            'questions' => 'what are Laravel Routes?',
            'answer' => 'Routes in Laravel are used to define the UrLs for your application.'
        ],
    ];
    foreach ($questions as $q) {
        echo "<strong>Question:</strong> " . $q['questions'] . "<br>";
        echo "<strong>Answer:</strong> " . $q['answer'] . "<br><br>";
    }
});

Route::get('/data',function(){
    return response()->json([
        'name' => 'John',
        'age'=>38,
        'city'=>'New York'
    ]);
});

Route::get('/grade', function () {
    $score = request('score');

    if ($score >= 90) {
        $grade = 'A';
    } elseif ($score >= 80) {
        $grade = 'B';
    } elseif ($score >= 70) {
        $grade = 'C';
    } elseif ($score >= 60) {
        $grade = 'D';
    } else {
        $grade = 'F';
    }

    return "Score: $score, Grade: $grade";
});

Route::get('/redirect', function () {
    return redirect('/data');
});

Route::get('/product/{category}/{id}/', function ($category, $id) {
    return "Product $id in category $category";
})->where(['id' => '[0-9]+', 'category' => '[A-Za-z]+']);

Route::get('/product/{id}/{email}', function ($id, $email) {
    return "Product $id with email id $email";
})->where(['id' => '[0-9]+', 'email' => '[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}']);

Route::get('/dob/{day}/{month}/{year}', function ($day, $month, $year) {
    return "Date of Birth: $day-$month-$year";
})->where([
    'day' => '(0[1-9]|[12][0-9]|3[01])',
    'month' => '(0[1-9]|1[0-2])',
    'year' => '[0-9]{2}'
]);

Route::get('user/{name?}', function ($name="INT221") {
    return $name;
});

Route::get('/appearance', function () {
    return view('appearance');
});

Route::get('/name/courses', function () {
    return view('name', ['name' => 'John', 'course' => 'Laravel']);
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/test2', function () {
    return view('test2');
});

Route::get('/factorial', function () {
    return view('factorial');
});

Route::get('/reverse', function () {
    return view('reverse');
});

Route::get('/header', function () {
    return response("hello", 200)->header('Content-Type','text/html');
});

Route::get('/cookie', function () {
    return response("hello", 200)->header('Content-Type','text/html')
    ->withcookie('name','Jigisha Sharma');
});

Route::get('/course-info', function () {
    return response()->json([
        'course_name'=>'Laravel-Basics',
        'duration'=> '6 weeks',
    ])->header('X-Instructor-Name','Jane Done')
    ->header('X-Class-Time','10:00 AM');
});

Route::get('/course-info', function () {
    return [1,2,3];
});

use App\Http\Controllers\PostController;
Route::get('/posts',[PostController::class, 'index']);
Route::get('/posts', [PostController::class, 'store']);
Route::get('/posts/{name}', [PostController::class, 'length']);

Route::post('/posts/{id}', [PostController::class, 'store'])->middleware('auth');
Route::delete('/posts/{id}', [PostController::class, 'destroy'])->middleware('auth');

Route::get('example', function(){
    return URL::asset('img/logo.png', true);
});


use App\Http\Controllers\URLController;
Route::get('/user/{id}', [UserController::class, 'show'])->name('user.show');
Route::get('/generate-url', [UrlController::class, 'generateUrl'])->name('url.generate');


use App\Http\Controllers\RequestController;
Route::get('/request', [RequestController::class, 'index']);
Route::get('/requestform',function() {
return view('requestform');
});
Route::post('/requestform/submit',[RequestController1::class,'submit']);


use App\Http\Controllers\CookieController;
Route::get('/cookie/set', [CookieController::class,'setCookie']);           
Route::get('/cookie/get', [CookieController::class,'getCookie']);
Route::get('/cookie/remove', [CookieController::class,'deleteCookie']);


use App\Http\Controllers\preferenceController;
Route::get('/set-preferences', [preferenceController::class, 'setPreferences']);
Route::get('/get-preferences', [preferenceController::class, 'getPreferences']);
Route::get('/update-preferences', [preferenceController::class, 'updatePreferences']);
Route::get('/delete-preferences', [preferenceController::class, 'deletePreferences']);

use App\Http\Controllers\FileUploadController;
Route::get('/upload', function(){
    return view('upload');
})->name('file.form');
Route::post('/upload',[FileUploadController::class, 'upload'])->name('file.upload');



// use App\Http\Controllers\StudController;

// Route::get('/student/create', [StudController::class, 'create'])->name('student.create');
// Route::post('/student', [StudController::class, 'store'])->name('student.store');
// Route::get('/student', [StudController::class, 'index']);
use App\Http\Controllers\StudController;

Route::get('/student/create', [StudController::class, 'create'])->name('student.create');
Route::post('/student', [StudController::class, 'store'])->name('student.store');
Route::get('/student', [StudController::class, 'index'])->name('student.index');

use App\Http\Controllers\EmpController;

Route::get('/employee/create', [EmpController::class, 'create'])->name('employee.create');
Route::post('/employee', [EmpController::class, 'store'])->name('employee.store');

use App\Http\Controllers\UserController;

Route::get('/username', [UserController::class, 'showForm']); 
Route::post('/store-username', [UserController::class, 'storeUsername'])->name('store.username'); 
Route::get('/display-username', [UserController::class, 'displayUsername']);
Route::post('/clear-session', [UserController::class, 'clearSession'])->name('clear.session');
