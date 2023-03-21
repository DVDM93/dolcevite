<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CocktailController;
use App\Http\Controllers\Admin\DessertController;
use App\Http\Controllers\Admin\MainDishController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\NewEntryController;
use App\Http\Controllers\Admin\RedPizzaController;
use App\Http\Controllers\Admin\RimoliController;
use App\Http\Controllers\Admin\SecondDishController;
use App\Http\Controllers\Admin\SpecialPizzaController;
use App\Http\Controllers\Admin\StarterController;
use App\Http\Controllers\Admin\StarterController as FrontendStarterController;
use App\Http\Controllers\Admin\VinoController;
use App\Http\Controllers\Admin\WhitePizzaController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\ProfileController;
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

// Route::get('/menu', function () {
//     return view('menu');
// });

Route::get('/' , [GeneralController::class, 'index'])->name('welcome');
Route::get('/prova' , [GeneralController::class, 'index2'])->name('prova');

//? Viste dettaglio
Route::get('/starters/{starter}' , [GeneralController::class, 'starterShow'])->name('starters.show');
Route::get('/starters/{rimoli}' , [GeneralController::class, 'rimoliShow'])->name('rimolis.show');
Route::get('/mainDishes/{mainDish}' , [GeneralController::class, 'mainDishShow'])->name('main_dishes.show');
Route::get('/secondDishes/{secondDish}' , [GeneralController::class, 'secondDishShow'])->name('second_dishes.show');
Route::get('/redPizzas/{redPizza}' , [GeneralController::class, 'redPizzaShow'])->name('red_pizzas.show');





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth' ,'admin'] )->name('admin.')->prefix('admin')->group(function () {
    Route::get('/' ,[ AdminController::class , 'index'])-> name('index');
     Route::resource('/starters' , StarterController::class);
     Route::resource('/rimolis' , RimoliController::class);
     Route::resource('/main_dishes' , MainDishController::class);
     Route::resource('/second_dishes' , SecondDishController::class);
     Route::resource('/red_pizzas' , RedPizzaController::class);
     Route::resource('/white_pizzas' , WhitePizzaController::class);
     Route::resource('/special_pizzas' , SpecialPizzaController::class);
     Route::resource('/new_entries' , NewEntryController::class);
     Route::resource('/desserts' , DessertController::class);
     Route::resource('/cocktails' , CocktailController::class);
     Route::resource('/vinos' , VinoController::class);
});

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
