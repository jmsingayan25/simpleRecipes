<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RecipeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [HomeController::class, 'index']);
// Route::get('/recipes',[RecipeController::class, 'index']);
Route::controller(RecipeController::class)->group(function(){
    Route::prefix('recipes')->group(function () {
        Route::get('/', 'index')->name('recipes.index');
        Route::get('/create', 'create')->name('recipes.create');
        Route::post('/store', 'store')->name('recipes.store');
    });
});
