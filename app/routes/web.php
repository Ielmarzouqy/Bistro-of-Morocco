<?php

use App\Http\Controllers\FoodController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/allfoods', function(){
    return view('allFoods');
});

Auth::routes();

Route::view('/addfood','addFood');



//admin
Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function(){
    Route::resource('foods', FoodController::class);
    Route::get('dashboard', [App\Http\Controllers\FoodController::class, 'allFoods'])->name('food.dashboard');
});
Route::prefix('menu')->middleware(('auth'))->group(function(){
    Route::get('/menu', [App\Http\Controllers\FoodController::class, 'menu'])->name('menu');

});