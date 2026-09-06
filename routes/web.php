<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Middleware\AgeCheck;
use App\Http\Middleware\CountryCheck;
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
//  Route::view('/user-form', 'user-form');

//   Route::view('/student-form', 'student-form');

 // create add user path 

//  Route::post('add-user',[UserController::class,'addUser']);

//  Route::post('add-student-user',[UserController::class,'addStudentUser']);

 // creaate for study perpose only
  Route::view('/test-route/home', 'test-route.home')->name('home');
  Route::view('/test-route/about', 'test-route.about');
  Route::view('/test-route/welcome', 'test-route.welcome');
  Route::view('/test-route/user', 'test-route.home');

  Route::view('/test-route/user/{name}', 'test-route.home');

// create a route for short url name
  Route::view('/test-route/shorturlname', 'test-route.shorturlname')->name('shorturlname');

  Route::get('show',[HomeController::class,'show']);
    // Route::get('user',[HomeController::class,'username']);

  Route::get('user/{name}', [HomeController::class, 'username'])->name('user');

    

//   create a route for the user page
  Route::view('/home/profile/user', 'home')->name('hm');

  // create a route for study prefix
//   Route::view('student/home', 'student.home');
//   Route::get('student/show', [StudentController::class, 'show']);
//   Route::get('student/add', [StudentController::class, 'add']);

//   create a pregix route for the student page single prefix route for the student page
  // Route::prefix('student')->group(function () {
  //   Route::view('home', 'student.home');
  //   Route::get('show', [StudentController::class, 'show']);
  //   Route::get('add', [StudentController::class, 'add']);
  // });

  //   create a pregix route for the student page double prefix route for the student page
  //   Route::prefix('student/india')->group(function () {
  //   Route::view('home', 'student.home');
  //   Route::get('show', [StudentController::class, 'show']);
  //   Route::get('add', [StudentController::class, 'add']);
  // });

  // route for controller with group prefix

  Route::controller(StudentController::class)->prefix('student')->group(function () {
    Route::view('home', 'student.home');
    Route::get('show', 'show');
    Route::get('add', 'add');
    Route::get('delete', 'delete');
    Route::get('show/{name}','showName');
  });

  // Route::get('student/show/{name}', [StudentController::class, 'showName']);

  // crete a route for the middleware
  Route::get('/middleware', function () {
      return view('middleware');
  })->middleware('agecheck');


// create a route for the middleware with group way one middleware
  // Route::middleware(['agecheck', 'countrycheck'])->group(function () {
  //     Route::get('/middleware', function () {
  //         return view('middleware');
  //     });
  // });

  // create a route for the middleware with group way two middleware
  Route::middleware(['usercheck'])->group(function () {
      Route::get('/middleware', function () {
          return view('middleware');
      });

      Route::get('/dashboard', function () {
          return "Dashboard Page";
      });
  });

