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

Route::get('/dashboard', [App\Http\Controllers\FoodController::class, 'allFoods'])->name('food.dashboard');

Route::get('/menu', [App\Http\Controllers\FoodController::class, 'menu'])->name('menu');

Route::resource('foods', FoodController::class);