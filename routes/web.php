<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Frontend\CategoryContoller as FrontendCategoryController;
use App\Http\Controllers\Frontend\MenuContoller as FrontendMenuController;
use App\Http\Controllers\Frontend\RimoliController;
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

Route::get('/categories' , [FrontendCategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/{category}' , [FrontendCategoryController::class, 'show'])->name('categories.show');
Route::get('/menus' , [FrontendMenuController::class, 'index'])->name('menus.index');
Route::get('/menus' , [FrontendMenuController::class, 'antipasti'])->name('menus.index');

// Route::get('/menus' , [RimoliController::class, 'rimoli'])->name('menus.index');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth' ,'admin'] )->name('admin.')->prefix('admin')->group(function () {
    Route::get('/' ,[ AdminController::class , 'index'])-> name('index');
     Route::resource('/categories' , CategoryController::class);
     Route::resource('/menus' , MenuController::class);
});

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
