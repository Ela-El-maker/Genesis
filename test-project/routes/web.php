<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('about', function(){
//     return "<h1>About Page</h1>";
// })->name('hello');

// Route::get('contact', function(){
// return "<h1>Contact Page</h1>";
// });

// Route::get('contact/{id}', function($id){
//     return $id;
// })->name('edit-contact');

// Route::get('home', function(){
//     return "<a href='".route('edit-contact',1)."'>About</a>";
// });

/** Route Grouping */
// Route::group(['prefix'=> 'customer'], function(){
//     Route::get('/', function(){
//         return "<h1>Customer List</h1>";
//     });

//     Route::get('/create', function(){
//         return "<h1>Customer Create</h1>";
//     });

//     Route::get('/show', function(){
//         return "<h1>Customer Show</h1>";
//     });
// });

/** Route Methods */

/**
 * GET -> request a source from database
 * POST -> Create a new resource to the database
 * PUT -> Update a resource in the database
 * PATCH -> Modify a resource from a database
 * DELETE -> Delete a resource from database
 * OPTIONS
 */

// Route::post();
// Route::put();
// Route::get();
// Route::patch();
// Route::delete();

/** Fallback Route */
// Route::fallback();
// Route::fallback(function(){
//     return "Route does not exist";
// });

/*** Working with views */

/**
 * M => Model
 * V => View
 * C => Controller
 */

// Route::get('about', function(){
//     $about = "This is the about page sucker";
//     $about2 = "This is the about 2 page";
//     // return view('about', ['about'=> $about]);
//     return view('about', compact('about','about2')); // ['about' => $about]
// });

// Route::get('contact', [ContactController::class, 'index']);

// // Route::get('/home',[HomeController::class, 'index']);

// Route::get('/home',HomeController::class);

// Route::get('about', [AboutController::class, 'index'])->name('about');

// Route::resource('blog', BlogController::class); // how to pass a resource controller in a route

Route::get('/home',HomeController::class);

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::post('/login', [LoginController::class, 'handleLogin'])-> name('login.submit');
