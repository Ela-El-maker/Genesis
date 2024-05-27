<?php

use App\DataTables\UsersDataTable;
use App\Http\Controllers\ProfileController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Intervention\Image\ImageManagerStatic as Image;

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

Route::get('user/{id}/edit', function($id){
    return $id;

})->name('user.edit');

Route::get('/dashboard', function (UsersDataTable $dataTable) {
    // $users = User::paginate(10);
    // return view('dashboard', compact('users'));

    return $dataTable->render('dashboard');

})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('image', function(){
    $img = Image::make('Screenshot.png');
    $img -> crop(400,400);
    $img->save('Screenshot.png', 80);
    return 'hello';
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
