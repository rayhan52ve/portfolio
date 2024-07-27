<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AboutmeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/cr', function () {
    return view('Backend.modules.aboutme.create');
});

Route::get('/', function () {
    return view('Frontend.home');
})->name('home');

Route::get('/dashboard', function () {
    return view('Backend.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


});

require __DIR__.'/auth.php';



// Route::namespace('App\Http\Controllers')->group(function(){
//     Route::middleware('auth')->group(function () {
//     // Route::get('/dashboard', 'AdminController@dashboard')->name('admin.dashboard');
//     });
// });




Route::get('aboutme/create',[AboutmeController::class,'create'])->name('aboutme.create');
Route::post('aboutme',[AboutmeController::class,'store'])->name('aboutme.store');


