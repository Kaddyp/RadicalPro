<?php
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/courses', function () {
    return view('courses');
});
Route::get('/courses/{courseId}', function ($courseId) {
    echo "Course Id: " . $courseId;
})->whereNumber('courseId');

Route::get('/contactUs', function () {
    return view('contactUs');
});


Route::get('about',[UserController::class, 'about']);
Route::get('about/{id}',[UserController::class, 'contact']);

Route::view('register', 'register');
Route::post('register', [UserController::class, 'signUpHandler']);

Route::view('login', 'login')->name('login');
Route::post('login', [UserController::class, 'login_authenticate']);

// Route::post('logout', [UserController::class, 'logout']);

// Route::view('dashboard','dashboard')->middleware('auth');


Route::get('show',[UserController::class,'show']);
Route::get("delete/{id}",[UserController::class, 'delete']);