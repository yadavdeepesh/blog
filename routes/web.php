<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TestController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// create a route for the home page
// Route::get('/home', function () {
//     return view('home');
// });

// create a route for short way 
// Route::view('/home', 'home');

// passed the data to the view
// Route::get('/about', function () {
//     return view('about');
// }
// );

// // passed the data to the view route with parameter
// Route::get('/about/{name}', function ($name) {
//     echo "My name is: " . $name;
//     return view('about', ['name' => $name]);
// });

// // redirect the url
// Route::redirect('/home', '/');

// // calling controller function in route
// Route::get('/user', [UserController::class, 'getUser']);

// Route::get('/aboutuser', [UserController::class, 'aboutUser']);

// Route::get('/user/{name}', [UserController::class, 'getName']);

// Route::get('/userpage', [UserController::class, 'getUserName']);

// Route::get('/userpage/{name}', [UserController::class, 'getName']);

// Route::get('/admin/login', [UserController::class, 'adminLogin']);

// Route::get('/test', [TestController::class, 'testView']);

// // call the function of testView in the UserController and return the view test.blade.php

// Route::get('/test-view', [TestController::class, 'testView']);

// Route::get('/home-page', [TestController::class, 'homePage']);

// Route::get('/about-page/{name}', [TestController::class, 'x']);

// Route::get('/admin-login', [TestController::class, 'adminLogin']);

// Route::get('/admin-login-view/{name}', function ($name) {
//     return view('admin.login', ['name' => $name]);
// });// directly return the view without calling the controller function


// create the user form
 Route::view('/user-form', 'user-form');

  Route::view('/student-form', 'student-form');

 // create add user path 

 Route::post('add-user',[UserController::class,'addUser']);

 Route::post('add-student-user',[UserController::class,'addStudentUser']);

 // creaate for study perpose only
  Route::view('/test-route/home', 'test-route.home');
  Route::view('/test-route/about', 'test-route.about');
  Route::view('/test-route/welcome', 'test-route.welcome');
  Route::view('/test-route/user', 'test-route.home');

  Route::view('/test-route/user/{name}', 'test-route.home');


